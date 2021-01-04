<?php 

$host ='localhost';
$username='root';
$password='';
$dbName='news';

$db=new mysqli($host,$username,$password,$dbName);

$db->select_db($dbName);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style>
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

                    <li><a href="template.php?id=<?php echo ($r['id']);?>"><?php echo strtoupper($r['name']);?></a></li>

                    <?php }?>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container text-center">    
            <div class="row">
                <div class="col-sm-3 well">
                <?php 
                    
                    $data=$db->query('SELECT * FROM `profile`');
                    while($r=$data->fetch_assoc()){
                ?>
                    <div class="well">
                        <img src="img/<?php echo $r['photo']; ?>" class="img-circle" height="90" width="90" alt="Avatar">
                        <p></p>
                        <p><a href="#"><?php echo $r['name']; ?></a></p>
                    </div>

                <?php }?>

                </div>
                <div class="col-sm-7">
                    <?php 
         
                    $data=$db->query('SELECT * FROM `news`');
                    while($r=$data->fetch_assoc()){

                    ?>
                            <div class="row">
                                    <div class="col-sm-3">
                                        <div class="content well">
                                            <img src="img/<?php echo $r['photo']; ?>" class="" height="150" width="100" alt="Image">
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="content well">
                                            <a href="details.php?id=<?php echo $r['id']; ?>"><h4><?php echo $r['heading']; ?></h4></a>
                                            <p style="text-align:justify;"><?php echo substr($r['details'],0,250); ?></p>
                                        </div>
                                    </div>
                                </div>
                        <?php }
                        ?>
                    
                </div>
                </div>
                <div class="col-sm-2 well">
                    
                </div>
            </div>
        </div>

        <footer class="container-fluid text-center">
            <p>Footer Text</p>
        </footer>

    </body>
</html>

