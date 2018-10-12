<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
.conteneur{
    position: relative;
left:20px;
top:-20em;
font-size:30px;
}
.conten{
    position: relative;
    background-color: rgba(207, 33, 33, 0.274) !important;
    width:100%;
    height:700px;
   


   
    
}
</style>
</head>
<body>
<?php
?>
<div class="conten">
<?php include('menu.php'); ?>
</div>  
<div class="conteneur">
<?php include "explorateur.php"; ?>
<form action="<?php $_SERVER['PHP_SELF']?>" method="post">
<input type="text" name="saisi" id="saisi">
<input type="submit" value="Add">
</form>
<form action="<?php $_SERVER['PHP_SELF']?>" method="post">
<input type="text" name="saisisup" id="saisisup">
<input type="submit" value="Delete">
</form>

<form action="Dossier.php" method="post">
<input type="text" name="saisifich" id="saisifich">
<input type="submit" name="execut" value="Creation fichier">
</form>
</div>


</body>
</html>