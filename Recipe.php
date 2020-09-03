<!doctype html>
<?php include 'config.php';?>
<html>
    <head>
    	<title>Ayumi Shimada's Website</title>
    	<link rel="stylesheet" type="text/css" href="Common.css">
        <link rel="stylesheet" type="text/css" href="Recipe.css">
    	<script src="Index.js"></script>
    	<script src="/Vendor/jquery.js"></script>
    </head>

    <body>

        <header>
        	<h1>
        		<a href="Index.php">Ayumi Shimada's Website</a>
        	</h1>
        	<nav class="pc-nav">
        		<ul id="top">
                    <li><a href="PostRecipes.php">Post Recipe</a></li>
                    <li><a href="contact.html">CONTACT</a></li>
                </ul>
            </nav>
        </header>

        <?php
            $sql = "SELECT * FROM Recipes WHERE id = " . $_GET['id'];
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $title = $row["title"];
                $description = $row["description"];
                $image_url = $row["image_url"];
            } else {
              echo "0 results";
            }
        ?>



    	<div class="flex_colum">
        	<h2> <?= $title; ?> </h2><br>
            <div class="flex_row">
    			<p><img src="<?= $image_url ?>" id="main_photo"></p>
    			<div>
                    <p> <?= $description ?> </p>
    				<h1>Ingredients</h1><br>
    				<table>
                        <?php
                            $sql = "SELECT * FROM Ingredients WHERE recipe_id = {$_GET['id']} ORDER BY i_order ASC";
                            $result = $conn->query($sql);
                            while($row = $result->fetch_assoc()){
                                echo "<tr>";
                                $name = $row["name"];
                                $quantity = $row["quantity"];
                                echo "<td class='ingredient'>{$name}</td><td>{$quantity}</td>"; 
                                echo "</tr>";
                            }
                        ?>
    		         </table>
            	</div>
    	   </div>
    	   <div class="steps">
            <h1>How To Make <?= $title ?> </h1><br>
                <?php
                    $sql = "SELECT * FROM Steps WHERE recipe_id = {$_GET['id']} ORDER BY i_order ASC";
                    $result = $conn->query($sql);
                    $count = 0;
                    while($row = $result->fetch_assoc()){
                        $count++;
                        echo "<p class='one_step'>";
                        echo "STEP {$count}<br>";
                        $content = $row["content"];
                        echo "{$content}"; 
                        echo "</p>";
                    }
                ?>
    		</div>
    	</div>
    </body>
</html>