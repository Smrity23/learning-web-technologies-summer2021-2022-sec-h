<?php



$userId = $_REQUEST['userID'];
$password = $_REQUEST['password'];



if($userId == null || $password == null){
echo "null ID/password...";
}else{

$file = fopen('user.txt', 'r');

while (!feof($file)) {
$data = fgets($file);
$user = explode("|", $data);
if($userId == trim($user[0]) && $password == trim($user[1])) {
setcookie('status', 'true', time()+3600, '/');
if(trim($user[3])=='user'){
header('location: userHome.php?userId='.$userId);
}else{
header('location: adminHome.php?userId='.$userId);
}

}
}



echo "invalid username/password";
}



?>