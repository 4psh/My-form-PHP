<?php
require_once "data.php";

$language = $_POST["language"]??[];
$name = $_POST["name"]??"";
$item_list = $_POST["item_list"]??"";
$email = $_POST["email"]??"";
$teleph = $_POST["phone"]??"";
$s = "";
$s2 = "";
$s3 = "";

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['language']) && isset($_POST['item_list']))
{
    
$patternName = "/^[а-я]{2,15}$/siu";
if (preg_match($patternName, $name)) 
{
    //echo "Ваше имя: $name<br>";
}
else
{
    $s = "<span style='color: red;'>Имя указано неверно.</span><br>";
}

if (filter_var($email, FILTER_VALIDATE_EMAIL)) 
{
    //echo "Ваш email: $email<br>";
}
else
{
    $s2 =  "<span style='color: red;'>Email указан неверно.</span><br>";
}

$pattern = "/^\(8\) \d{3}-\d{3}-\d{2}-\d{2}$/s";
if (preg_match($pattern, $teleph)) 
{
//echo "Ваш номер телефона: $teleph<br>";
}
else
{
$s3 = "<span style='color: red;'>Вы указали неверный номер телефона.</span><br>";
}

//echo "Языки: ".implode(", ", $language)."<br> Язык программирования: $item_list";

}



require_once "index.view.php";