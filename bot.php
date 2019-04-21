<?php
/**
*
* @Name : TelegramBotSample/bot.php
* @Version : 1.0
* @Programmer : Max, Stephin
* @Date : 2017-02-17
* @Released under : https://github.com/BaseMax/TelegramBotSample/blob/master/LICENSE
* @Repository : https://github.com/BaseMax/TelegramBotSample
*
**/
$message = json_decode(file_get_contents('php://input'), true);
$param=array();
$param['text']=$message['message']['text'];
$param['chat_id']=$message['message']['chat']['id'];
$curl = curl_init('https://api.telegram.org/bot<token>/sendMessage');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_HEADER, 1);
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($param));
$response = curl_exec($curl);
$code = curl_getinfo($curl);
curl_close($curl);
?>
