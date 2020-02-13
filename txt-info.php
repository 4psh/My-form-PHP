    <!DOCTYPE html>
    <html lang="ru">
    
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <title>TXT</title>
      <style>
      </style>
    </head>
    <body>

    <div class="card border-primary text-primary" style="max-width: 25rem; margin: 5px auto; padding: 10px;">
    <div class="card-header font-weight-bold text-center">Из файла .txt</div>
    <?php
    $filename = "files/res.txt";
    $f = fopen($filename, "r") or die("Ошибка!");
    while (!feof($f))
    {
    $rest = fgets($f);
    echo "$rest <br>";
    }
    fclose($f);
    ?>
    </div>
    </div>
    
    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script> 
    </body>
    </html>