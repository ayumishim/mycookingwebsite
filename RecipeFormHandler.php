<!--This php file used to handle PostRecipe.php-->

<?php 
	include 'config.php';
  
  //insert data into Recipes table
	$title = $_POST["title"];
	$description = $_POST["description"];
	$image_url = $_POST["image_url"];
  $sql = "INSERT INTO Recipes (title, description, image_url) VALUES ('{$title}', '{$description}', '{$image_url}')";
  
  //insert data into Ingredients table
	if ($conn->query($sql) === TRUE) {
	  $last_id = $conn->insert_id;
	  error_log("new recipe id: {$last_id}");
    $recipe_id = $last_id;
    $ingredient_names = $_POST["ingredient_name"];
    $quantities = $_POST["quantity"];
    //put ingredient and it's quantity into the same table row
    foreach ($ingredient_names as $i=>$ingredient_name) {
      $quantity = $quantities[$i];
      $sql = "INSERT INTO Ingredients (recipe_id, name, quantity, i_order) VALUES ('{$recipe_id}', '{$ingredient_name}', '{$quantity}', '{$i}')";
      if ($conn->query($sql) === TRUE) {
        error_log("successfully executed query");
      } else {
        error_log("Error inserting recipe: " . $conn->error);
      }
    }

    //insert data into Steps table
    $contents = $_POST["content"];
    foreach ($contents as $j=>$content) {
      $sql = "INSERT INTO Steps (recipe_id, content, i_order) VALUES ('{$recipe_id}', '{$content}', '{$j}')";
      if ($conn->query($sql) === TRUE) {
        error_log("successfully executed query");
      } else {
        error_log("Error inserting recipe: " . $conn->error);
      }
    }
    header("Location: /Recipe.php?id={$last_id}");
	} else {
	  echo "Error inserting recipe: " . $conn->error;
	}



?>

