<?php
$page = isset($_GET['page']) ? $_GET['page'] : 1;

$records_per_page = 5;

$from_record_num = ($records_per_page * $page) - $records_per_page;

include_once 'includes/config.php';
include_once 'includes/data.inc.php';

$database = new Config();
$db = $database->getConnection();

$product = new Data($db);

$stmt = $product->readAll($page, $from_record_num, $records_per_page);
$num = $stmt->rowCount();

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
	<a class="btn btn-primary" href="add.php" role="button">Add Data</a>
      </p>
<?php
if($num>0){
?>
	<table class="table table-bordered table-hover table-striped">
	<caption>Ini adalah data biodata anda</caption>
	<thead>
	 <tr>
          <th>#</th>
          <th>Name</th>
          <th>Gender</th>
          <th>Phone</th>
          <th>Address</th>
          <th>Action</th>
        </tr>
	</thead>
	<tbody>
<?php
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
extract($row);
?>
<tr>
	<?php echo "<td>{$id_pdo}</td>" ?>
	<?php echo "<td>{$nm_pdo}</td>" ?>
	<?php echo "<td>{$gd_pdo}</td>" ?>
	<?php echo "<td>{$tl_pdo}</td>" ?>
	<?php echo "<td>{$ar_pdo}</td>" ?>
	<?php echo "<td width='100px'>
	    <a class='btn btn-warning btn-sm' href='update.php?id={$id_pdo}' role='button'><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span></a>
	    <a class='btn btn-danger btn-sm' href='delete.php?id={$id_pdo}' role='button'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></a>
          </td>" ?>
</tr>
<?php
}
?>
	</tbody>
      </table>
<?php
$page_dom = "index.php";
include_once 'includes/pagination.inc.php';
}
else{
?>
<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Warning!</strong> Data Masih Kosong Tolong Diisi.
</div>
<?php
}
?>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>