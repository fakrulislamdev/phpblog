<?php 
require('db.php')

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Template</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="template.php">Logo</a>

    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <?php 
        
        $data=$db->query('SELECT * FROM `category`');
                    while($r=$data->fetch_assoc()){

         ?>
        <li ><a href="template.php?category=<?php echo $r['id']; ?>"><?php echo strtoupper($r['name']); ?> </a></li>
      <?php } ?>
      </ul>
      
    </div>
  </div>
</nav>
<div class="container text-justify">
<?php
if(isset($_GET['id'])){   
  $data=$db->query('select * from news where id='.$_GET['id']);
  $rows=$data->fetch_assoc();
 ?>
<h2><?php echo $rows['heading']; ?> </h2>
<img src="img/<?php echo $rows['photo']; ?>">
<p><?php echo $rows['details']; ?></p>
<?php }
else{
  echo "No details";
}
?>
</div> 


<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html> 