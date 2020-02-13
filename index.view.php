<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <title>My Forms</title>
  <style>
    .card {
      width: 500px;
      padding: 10px;
      margin: 0 auto;
    }

    .btn {
      width: 200px;
      margin: 0 20px;
    }

    .form-check {
      margin: 0 20px;
    }

    .form-check-label {
      margin: 0 10px 0 0;
    }

    input[type="checkbox"] {
      margin: 0;
      padding: 0;
    }

    .btn-group {
      width: 460px;
    }

    .itemCheckbox {
      margin: 10px 0;
    }
  </style>
</head>

<body>
  <div class="card shadow-lg p-3 mb-5 bg-white rounded">
    <form method="post" name=>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="name">Имя</label>
          <input type="text" class="form-control" 
                             id="name" 
                             name="name"
                             value="<?= $name ?>" 
                             placeholder="Наталья"> 
          <?= $s ?>
        </div>


        <div class="form-group col-md-6">
          <label for="inputEmail4">Email</label>
          <input type="email" name="email" 
                              class="form-control" 
                              value="<?= $email ?>" 
                              id="inputEmail4" 
                              placeholder="1@mail.ru">  
          <?= $s2 ?>
        </div>
      </div>

      <div class="form-group">
        <label for="inputNumber">Телефон</label>
        <input type="tel" class="form-control" 
                          id="inputNumber" 
                          placeholder="(8) 912-345-67-89" 
                          name="phone"
                          value="<?= $teleph ?>">     
        <?= $s3 ?>
      </div>


      <div class="itemCheckbox">     
       <p>Языки</p>
      <div class="form-check form-check-inline">
          <?php foreach($languages as $lang): ?>
          <input type="checkbox" class="form-check-input" 
                                 name="language[]" 
                                 id="<?= $lang ?>" 
                                 value="<?= $lang ?>" 
                                 <?= in_array($lang, $language)?"checked":"" ?>>       
          <label for="<?= $lang ?>" class="form-check-label"> <?= $lang ?> </label>
          <?php endforeach; ?>
      </div>
        </div>

        <div class="itemSelect">  
          <p>Языки программирования</p>
          <select class="form-control" name="item_list">
            <?php foreach($list as $item): ?>
            <option value="<?= $item ?>" <?=($item == $item_list)?"selected":"" ?>><?= $item ?></option>
            <?php endforeach; ?>
          </select>
        </div>
       <br>

    <div class="btn-group" role="group" aria-label="First group">
    <button type="submit" name="save" id="save" class="btn btn-success">Save</button>
    <a href="txt-info.php" class='btn btn-primary' id = "txtinf" name="txtinf">TXT</a>
    <a href="json-info.php" class='btn btn-primary' id = "jsoninf" name="txtinf">JSON</a>
    <a href="csv-info.php" class='btn btn-primary' id = "csvinf" name="txtinf">CSV</a>


  
    </div>
    </form>
  </div>

<script src="js/jquery-3.4.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script> 
</body>
</html>