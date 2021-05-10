<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--styles-->
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
<!--Contenidor:w1000px-->
<div class="container">
    <!--capçalera-->
    <div class="header">
      <?php 
      ob_start();
      include 'header.php';
      $output = ob_get_clean();
      echo $output;
      ?>
    </div>
    <!--menu-->
    <div class="section-content">
        <ul>
            <li><a class="active" href="#home">Home</a></li>
            <li><a href="#news">News</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#about">Album</a></li>
            <li><a href="#about">About</a></li>
          </ul>
    </div>
    <!--seccio-->
    <div class="section-content row">
      <div class="column md third" style="background-color:#858688;">Column</div>
      <div class="column md third" style="background-color:#4B4B4D;">Column</div>
      <div class="column md third" style="background-color:#858688;">Column</div>
    </div>
    <!--seccio XL-->
    <div class="section-content row">
        <div class="column lg twenty" style="background-color:#858688;">Column</div>
        <div class="column lg middle" style="background-color:#4B4B4D;">Column</div>
        <div class="column lg twenty" style="background-color:#858688;">Column</div>
      </div>
    <!--footer-->  
    <div class="section-content row footer">
    <?php 
      ob_start();
      include 'footer.php';
      $output = ob_get_clean();
      echo $output;
      ?>
    </div>
</div>
    </body>
</html>