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

if(isset($_POST['save']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['language']) && isset($_POST['item_list']) && isset($_POST['name']))
{
    //в TXT
    $filename = "files/res.txt";
    $fw = fopen($filename, "at") or die("Ошибка!");
    fputs($fw, "Имя:".$name."\n"."Email:".$email."\n"."Телефон:".$teleph."\n"."Языки:".implode(", ", $language)."\n"."Языки программирования:".$item_list."\n"."\n");
    fclose($fw);

    //в JSON
    $ar = ["Имя" => $name,
           "Email" => $email,
           "Телефон" => $teleph,
           "Языки" => $language,
           "Язык программирования" => $item_list
    ];
    $res = json_encode($ar, JSON_UNESCAPED_UNICODE);
    file_put_contents("files/res.json", $res);

    //в CSV
    $ar2 = array (
        array('Имя', 'Email', 'Телефон', 'Языки', "Язык программирования"),
        array($name, $email, $teleph, implode(", ", $language), $item_list)
    );
    $fp = fopen('files/res.csv', 'w');
    fputs( $fp, "\xEF\xBB\xBF" ); //UTF-8
    foreach ($ar2 as $fields) {
        fputcsv($fp, $fields, ';');
    }
    fclose($fp);


}

require_once "index.view.php";