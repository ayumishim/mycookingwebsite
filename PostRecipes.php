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
                <input class="form" type="text" name="image_url"><br>
                <h1><label for="fname">Put Ingredients:</label></h1><br>
                <div class="ingredient_fields"></div>
                <p><a class="add_ingredient" href="javascript:void(0)" style="cursor:pointer;">Add Ingredient</a><br></p>
                <h1><label for="fname">Put Steps:</label></h1><br>
                <div class="step_fields"></div>
                <a class="add_step" href="javascript:void(0)" style="cursor:pointer;" >Add Step</a><br><br>
                <div id="overflow_area"></div> <!-- area for privacy policy -->
                <input type="checkbox" class="agree_check" name="agree_check" value="Agree" required>
                <label for="agree_check" class="agree_check">Agree to the Terms of Service and Privacy Policy.</label><br>
                <input class= "forms" type="submit" value="Submit">
            </form>
        </div>

        <!-- added privacy policy with javascript at the end of this script since the sentence is too long.-->
        <script type="text/javascript">
            var pol = "This is the Privacy Policy  of Ayumi Shimada's Website, a corporation registered at 1-1-1 Prince 201 Shimokitazawa Tokyo Japan and we are the data controller in respect of the Personal Information (as defined below) that we collect from you. It covers information Cookpad collects from users and visitors of our official website. By accessing our Site, you confirm that you have read and understood the entirety of this Privacy Policy. You have various rights in respect of our use of your Personal Information as set out in the [Your Rights] section below. Two of the fundamental rights to be aware of are that you may: ask us to stop using your Personal Information for direct-marketing by email or push notification. If you exercise this right, we will stop using your Personal Information in this regard; and ask us to consider any valid objections you have to our use of your Personal Information where we process your Personal Information on the basis of our, or a third party's, legitimate interests."
            document.getElementById("overflow_area").innerHTML = pol; 
        </script>

        <footer>
          <a href="Policy.html">Privacy Policy</a></p>
        </footer>

    </body>

</html>
