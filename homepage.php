<!doctype html>
<!-- This page is the top page which shows all recipes in the database-->
<?php include 'config.php';?>

<html>
	<head>
		<title>Ayumi Shimada's Website</title>
		<link rel="stylesheet" type="text/css" href="public/Common.css?<?=time()?>">
		<link rel="stylesheet" type="text/css" href="public/Index.css?<?=time()?>">
		<script src="public/Vendor/jquery.js"></script>
	</head>

	<body>
		<?php include 'header.php';?>


		<div class="flex_colum">
			<h2><a>My Content</a></h2>
			<?php
				//Get all data from Recipes table
				$sql = "SELECT * FROM Recipes";
				$result = $conn -> query($sql) or die($conn->error);;
				while ($row = $result->fetch_assoc()) {
					$recipe_id = $row["id"];
					$title = $row["title"];
			        $description = $row["description"];
			        $image_url = $row["image_url"];?>
			        <!-- Show title, description and image data of each recipe in Recipe table--> 
				    <div>
				    	<a href="/Recipe.php?id=<?= $recipe_id ?>">
				    		<img src="<?= $image_url ?>" class="food_photo">
				    	</a>
						<a class="hyperlink" href="/Recipe.php?id=<?= $recipe_id ?>"><?= $title; ?></a><br>
						<?= $description ?>
					</div><br>
				<?php }
			?>
		</div>
		
		<footer>
          <a href="public/Policy.html">Privacy Policy</a></p>
        </footer>
	</body>
</html>
