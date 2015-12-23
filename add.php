<?php
include_once 'includes/config.php';

$database = new Config();
$db = $database->getConnection();

include_once 'includes/data.inc.php';
$product = new Data($db);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data CRUD PDO</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <p><br/></p>
    <div class="container">
      <p>
	<a class="btn btn-primary" href="index.php" role="button">Back View Data</a>
      </p><br/>
<?php
if($_POST){

	$product->nm = $_POST['nm'];
	$product->gd = $_POST['gd'];
	$product->tl = $_POST['tl'];
	$product->ar = $_POST['ar'];
	
	if($product->create()){
?>
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Success!</strong> Anda Berhasil, <a href="index.php">View Data</a>.
</div>
<?php
	}else{
?>
<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Fail!</strong> Anda Gagal, Coba Lagi.
</div>
<?php
	}
}
?>
<form method="post">
  <div class="form-group">
    <label for="nm">Name</label>
    <input type="text" class="form-control" id="nm" name="nm">
  </div>
  <div class="form-group">
    <label for="gd">Gender</label>
    <input type="text" class="form-control" id="gd" name="gd">
  </div>
  <div class="form-group">
    <label for="tl">Phone</label>
    <input type="text" class="form-control" id="tl" name="tl">
  </div>
  <div class="form-group">
    <label for="ar">Alamat</label>
    <textarea class="form-control" rows="3" id="ar" name="ar"></textarea>
  </div>
  <button type="submit" class="btn btn-success">Submit</button>
</form>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>