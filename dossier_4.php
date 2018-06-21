<?php 
$cnx=new PDO("mysql:host=localhost;dbname=cuba_db_deesntm", "root","");
$stm=$cnx->prepare("select * from lieu");
$stm->execute();
$lieux=$stm=fetchall();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/css.css">

</head>
<body>

<?php foreach ($lieux as $lieu): ?>
	<div class="each_desc">
		
		<div class="nom">
			<?php echo $lieu['nomlieu']; ?>
		</div>
		<div>
			<p>
				<?php echo $lieu['description']; ?>
							</p>
			<img class="checkboxes" src="photos/<?php echo $lieu['nomlieu']; ?>.jpg" alt=""></div>

		
		</div>
<?php endforeach ?>
</body>
</html>
