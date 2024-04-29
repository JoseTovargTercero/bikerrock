<?php
ob_start();
include('conexion.php');
$cedula = clear($_POST['cedula']);
$fn = clear($_POST['fecha']);
$cedula = mysqli_real_escape_string($conexion,  $cedula);
$fn = mysqli_real_escape_string($conexion,  $fn);


if (isset($_SERVER)) {
	$user_agent = $_SERVER['HTTP_USER_AGENT'];
} else {
	global $HTTP_SERVER_VARS;
	if (isset($HTTP_SERVER_VARS)) {
		$user_agent = $HTTP_SERVER_VARS['HTTP_USER_AGENT'];
	} else {
		global $HTTP_USER_AGENT;
		$user_agent = $HTTP_USER_AGENT;
	}
}
//
//
function getOS()
{
	global $user_agent;
	$os_array =  array(
		'/windows nt 10/i'      =>  'Windows 10',
		'/windows nt 6.3/i'     =>  'Windows 8.1',
		'/windows nt 6.2/i'     =>  'Windows 8',
		'/windows nt 6.1/i'     =>  'Windows 7',
		'/windows nt 6.0/i'     =>  'Windows Vista',
		'/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
		'/windows nt 5.1/i'     =>  'Windows XP',
		'/windows xp/i'         =>  'Windows XP',
		'/windows nt 5.0/i'     =>  'Windows 2000',
		'/windows me/i'         =>  'Windows ME',
		'/win98/i'              =>  'Windows 98',
		'/win95/i'              =>  'Windows 95',
		'/win16/i'              =>  'Windows 3.11',
		'/macintosh|mac os x/i' =>  'Mac OS X',
		'/mac_powerpc/i'        =>  'Mac OS 9',
		'/linux/i'              =>  'Linux',
		'/ubuntu/i'             =>  'Ubuntu',
		'/iphone/i'             =>  'iPhone',
		'/ipod/i'               =>  'iPod',
		'/ipad/i'               =>  'iPad',
		'/android/i'            =>  'Android',
		'/blackberry/i'         =>  'BlackBerry',
		'/webos/i'              =>  'Mobile'
	);
	//
	$os_platform = "Unknown OS Platform";
	foreach ($os_array as $regex => $value) {
		if (preg_match($regex, $user_agent)) {
			$os_platform = $value;
		}
	}
	return $os_platform;
}


function getIp()
{
	if (isset($_SERVER['HTTP_CF_CONNECTING_IP'])) { // Soporte de Cloudflare
		$ip = $_SERVER['HTTP_CF_CONNECTING_IP'];
	} elseif (isset($_SERVER['DIRECCIÓN REMOTA']) === true) {
		$ip = $_SERVER['DIRECCIÓN REMOTA'];
		if (preg_match('/^(?:127|10)\.0\.0\.[12]?\d{1,2}$/', $ip)) {
			if (isset($_SERVER['HTTP_X_REAL_IP'])) {
				$ip = $_SERVER['HTTP_X_REAL_IP'];
			} elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
				$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
			}
		}
	} else {
		$ip = '127.0.0.1';
	}
	if (in_array($ip, ['::1', '0.0.0.0', 'localhost'], true)) {
		$ip = '127.0.0.1';
	}
	$filter = filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4);
	if ($filter === false) {
		$ip = '127.0.0.1';
	}

	return $ip;
}
$user_os        =   getOS();
$device_details =   $user_os . ' - ' . getIp();


/* LOGIN */

$fn = date('d-m-Y', strtotime($fn));

$stmt = mysqli_prepare($conexion, "SELECT * FROM `users` WHERE cedula = ? AND fn = ?");
$stmt->bind_param("ss", $cedula, $fn);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {

	while ($row = $result->fetch_assoc()) {

		$_SESSION['u_nivel'] = $row['nivel'];
		$_SESSION['nombre'] = $row['nombre'];
		$id = $row['id'];

		if ($row['dispositivo'] == '') {


			$stmt2 = $conexion->prepare("UPDATE `users` SET `dispositivo`=? WHERE id=?");
			$stmt2->bind_param("ss", $device_details, $id);
			$stmt2->execute();
			$stmt2->close();
			$_SESSION['dispositivo'] = $device_details;
			$estado = 'true';
		} else {
			if ($device_details != $row['dispositivo']) {
				$estado = 'dispositivo';
				session_destroy();
			} else {
				$estado = 'true';
				$_SESSION['dispositivo'] = $row['dispositivo'];
			}
		}
	}
} else {
	$estado = 'false';
	session_destroy();

	// por pss/usr incorrecto
}
$stmt->close();




echo $estado;

ob_end_flush();
