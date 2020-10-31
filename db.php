<?php
    require 'libs/rb.php';

    R::setup( 'mysql:host=localhost;dbname=srv166976_1', 'srv166976_1', 'iople123'); //for both mysql or mariaDB
    session_start();

function curl( $url ){
$ch = curl_init( $url );
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, false );
curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
$response = curl_exec( $ch );
curl_close( $ch );
return $response;
} 

//Уведомление в тг
//Телеграм id чата/Админа @getmyid_bot
$chat_id = '943813510';
function send($chat_id, $mess){

    $token = '1175341615:AAE2e6JWK-j6n6JlWZbyu9maZDzLuxPyduA';
    $url = "https://api.telegram.org/bot".$token."/sendMessage?chat_id=".$chat_id."&text=".urlencode($mess)."&parse_mode=html";
    file_get_contents($url);
}





//Закрываем сессию
function quit(){
    unset($_SESSION['user']);
    header('Location: vk.php');
};

?>