<!doctype html>
<!-- This page is to register a recipe to the database-->

<?php include 'config.php';?>
<html>

    <head>
        <title>Ayumi Shimada's Website</title>
        <link rel="stylesheet" type="text/css" href="Common.css?<?=time()?>">
        <link rel="stylesheet" type="text/css" href="PostRecipes.css?<?=time()?>">
        <script src="Index.js"></script>
        <script src="/Vendor/jquery.js"></script>
        <script src="PostRecipe.js"></script>
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

        <!-- div to put in a list when adding Ingredients.-->
        <div id="field_template" style="display:none;">
            <div class="ingredient_field">
                Ingredient Name: <input type="text" name="ingredient_name[]">
                Quantity: <input type="text" name="quantity[]"><br>
            </div>
            <div class="step_field">
                <textarea class="textarea" name="content[]"></textarea><br>
            </div>
        </div>


        <!-- User input form for each data-->
        <div class="flex_colum">
            <form class="forms" action="RecipeFormHandler.php" method="post">
                <h1><label for="fname">Put the Title of Your Recipe:</label></h1><br>
                <input class="form" type="text" name="title">
                <h1><label for="fname">Put Description:</label></h1><br>
                <textarea id="description_form" type="text" name="description" ></textarea> 
                <h1><label for="fname">Put a Photo's Link:</label></h1><br>
                <input class="form" type="text" name="image_url" ><br>
                <h1><label for="fname">Put Ingredients:</label></h1><br>
                <div class="ingredient_fields"></div>
                <p><a class="add_ingredient" href="javascript:void(0)" style="cursor:pointer;">Add Ingredient</a><br></p>
                <h1><label for="fname">Put Steps:</label></h1><br>
                <div class="step_fields"></div>
                <a class="add_step" href="javascript:void(0)" style="cursor:pointer;" >Add Step</a><br>
                <input class= "forms" type="submit" value="Submit">
            </form>
        </div>
    </body>

</html>
