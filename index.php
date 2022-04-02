<?php 
require('includes/connexion.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>To do list</title>
</head>

<body>
    <form method="post">

    <div class="upper-bar">
        <input type="text" placeholder="Save | Ex : 12/12/00" name="date">
        <input type="submit" value="Sauvegarder" name="save">
        <input type="button" value="Explications" id="alert"> 
        <input type="submit" value="Reprendre To-do List"> 
        <input type="text" placeholder=" Load | Ex : 12/12/00 " name="date_load">
    </div>

    <div class="answers">
        <label id="title">Choses à faire</label>
        <textarea id="answer" name="text"> 
            <?php require('includes/save&load.php');?>
        </textarea>
    </div>
    
    </form>
    <script src="app.js" ></script>
</body>
</html>