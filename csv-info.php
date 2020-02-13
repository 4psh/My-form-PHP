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

    <div class="card border-success text-success" style="max-width: 45rem; margin: 5px auto; padding: 10px;">
    <div class="card-header font-weight-bold text-center">Из файла .csv</div>
    <div class="card-text">
    <!--  <?php

    $row = 1;
    if (($handle = fopen("files/res.csv", "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $num = count($data);
            $row++;
            for ($c=0; $c < $num; $c++) {
                echo "<table><td>".$data[$c]."</td></table>" . "<br />\n";
            }
        }
        fclose($handle);
    }
    
    ?> -->
    <?php 
    
    $data = File("files/res.csv");
    echo "<center><table border=1 style='border-color:green;'><tr>";
    $dat_arr = explode(";", $data[0]);
    
    for ($p=0;$p<count($dat_arr);$p++) {
    echo "<td><center><b><i>$dat_arr[$p]";
    }
    echo "</tr>";

    for ($i=1;$i<count($data);$i++) {
    $data_array = explode(";", $data[$i]);
    echo "<tr>";

    for ($f=0;$f<count($data_array);$f++) { 
    echo "<td><center><b><i>$data_array[$f]";
    }
    echo "</tr>";}
    echo "</table></center>";

    ?>
    </div>
    </div>
    
    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script> 
    </body>
    </html>