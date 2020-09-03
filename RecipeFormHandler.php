<?php 
	include 'config.php';

	$title = $_POST["title"];
	$description = $_POST["description"];
	$image_url = $_POST["image_url"];
  $sql = "INSERT INTO Recipes (title, description, image_url) VALUES ('{$title}', '{$description}', '{$image_url}')";

	if ($conn->query($sql) === TRUE) {
	  $last_id = $conn->insert_id;
	  error_log("new recipe id: {$last_id}");
    $recipe_id = $last_id;
    $ingredient_names = $_POST["ingredient_name"];
    $quantities = $_POST["quantity"];
    foreach ($ingredient_names as $i=>$ingredient_name) {
      $quantity = $quantities[$i];
      $sql = "INSERT INTO Ingredients (recipe_id, name, quantity, i_order) VALUES ('{$recipe_id}', '{$ingredient_name}', '{$quantity}', '{$i}')";
      if ($conn->query($sql) === TRUE) {
        error_log("successfully executed query");
      } else {
        error_log("Error inserting recipe: " . $conn->error);
      }
    }

    $contents = $_POST["content"];
    foreach ($contents as $j=>$content) {
      $sql = "INSERT INTO Steps (recipe_id, content, i_order) VALUES ('{$recipe_id}', '{$content}', '{$j}')";
      if ($conn->query($sql) === TRUE) {
        error_log("successfully executed query");
      } else {
        error_log("Error inserting recipe: " . $conn->error);
      }
    }
    header("Location: http://localhost:8080/Recipe.php?id={$last_id}");
	} else {
	  echo "Error inserting recipe: " . $conn->error;
	}



?>

