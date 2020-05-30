<?php

$yellow = "\e[1;33m";
$white = "\e[1;37m";
$green = "\e[0;32m"; 
$red = "\e[0;31m"; 
$imp = "\e[0;31m!\e[1;37m"; 
$plus = "\e[1;33m+\e[1;37m";



system("clear");
$banner1 = "
$yellow
ထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထ
ထ ( TERMUX LOGIN SCRIPT PHP VERSION BY MUHAMMAD IMAM )ထ
ထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထ
";

$banner2 = "
       $plus $red Coded By : Muhammad Imam
       $plus $green Contact  : fansc2900@gmail.com
       $plus  Github : https://github.com/Prize0neZero/
";

echo $banner1;
echo $banner2;


if ( file_exists("data.php")){
    system("sleep 3");
    echo "$red Redirect To Login Page";
    echo loadgif()."\n";
    login();
} else {
    system("sleep 3");
    echo "$red Redirect To Register Page";
    echo loadgif() . "\n";
    register();
}



function setup(){

system("exit");
}



function login(){

require 'data.php';

$yellow = "\e[1;33m";
$white = "\e[1;37m";
$green = "\e[0;32m";
$red = "\e[0;31m";
$imp = "\e[0;31m!\e[1;37m";
$plus = "\e[1;33m+\e[1;37m";
$darkgray = "\e[1;30m";
$lightblue = "\e[1;34m";
$lightgreen = "\e[1;32m";
$lightcyan = "\e[1;36m";
$lightred = "\e[1;31m";
$lightpurple = "\e[1;35m";

system("clear");


$kucing = "
$lightpurple
 _____ ___ ___ __  __ _   ___  __  _    ___   ___ ___ _  _
 |_   _| __| _ \  \/  | | | \ \/ / | |  / _ \ / __|_ _| \| |
   | | | _||   / |\/| | |_| |>  <  | |_| (_) | (_ || || .` |
   |_| |___|_|_\_|  |_|\___//_/\_\ |____\___/ \___|___|_|\_|
";



$banner = "
$lightred   ထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထ
$lightgreen   ထ ( TERMUX LOGIN SCRIPT PHP VERSION BY MUHAMMAD IMAM )ထ
$lightred   ထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထ

";

echo $kucing;
echo $banner;


echo "$imp Anda Sudah Register , Login Terlebih Dahulu\n";
system("sleep 2");
echo "$imp Jangan Sampai Lupa User Password\n";
system("sleep 2");
echo "$imp Huruf Besar Dan Kecil Perhatikan\n";
system("sleep 2");
echo "$imp File data.php jangan dihapus\n";
system("sleep 2");
echo "\n";
   echo "$yellow  ★ USERNAME  = ";
   $username = trim(fgets(STDIN));
   echo "  ★ PASSWORD  = ";
   $password = trim(fgets(STDIN));

if ( $username !== username ||  $password !== password ){
     echo "$lightred Login Tidak Valid Username / Password Salah";
     system("sleep 2");
     login();
} else {
      echo "$lightgreen Login Succesfully\n";
      system("sleep 2");
     
}

}

function loadgif(){
$load = ".";
$i = 1;
$load++;
while ( $i <= 3 ){
echo $load;
system("sleep 2");
$i++;
}
}



function register(){
 system("clear");
$yellow = "\e[1;33m";
$white = "\e[1;37m";
$green = "\e[0;32m";
$red = "\e[0;31m";
$imp = "\e[0;31m!\e[1;37m";
$plus = "\e[1;33m+\e[1;37m";
$lightcyan = "\e[1;36m";

$kucing = "
$green 
 _____ ___ ___ __  __ _   ___  __  _    ___   ___ ___ _  _ 
 |_   _| __| _ \  \/  | | | \ \/ / | |  / _ \ / __|_ _| \| |
   | | | _||   / |\/| | |_| |>  <  | |_| (_) | (_ || || .` |
   |_| |___|_|_\_|  |_|\___//_/\_\ |____\___/ \___|___|_|\_|
";



$banner1 = "
$lightcyan
ထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထ
ထ ( TERMUX REGISTER SCRIPT PHP VERSION BY MUHAMMAD IMAM )ထ
ထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထထ
";
echo $kucing;
echo $banner1;
echo "$imp Anda Belum Register, Register Terlebih Dahulu\n";
system("sleep 2");
echo "$imp Jangan Sampai Lupa User Password\n";
system("sleep 2");
echo "$imp Huruf Besar Dan Kecil Perhatikan\n";
system("sleep 2");
echo "\n";
   echo "$yellow  ★ USERNAME  = ";      
   $username = trim(fgets(STDIN));
   echo "  ★ PASSWORD  = ";
   $password = trim(fgets(STDIN));
   
   $open = fopen("data.php","a+");
   fwrite($open,"<?php \n define('username','$username'); \n define('password','$password'); \n ?>");

    if ( file_exists("data.php")){
       echo "$red Register Berhasil\n";
        system("sleep 2");
        system("clear");
        login();
}   else {
        echo "Register Gagal";
        register();
}


}

?>
