<?php
  include("functions.php");

  if(isset($_GET["id"])){
    $list = getTable("list", $_GET["id"]);
    if(!$list){
      header("location: ../index.php");
    }
  }else{
    header("location: ../index.php");
  }
  
?>
<!DOCTYPE html>
<html lang="en">
  <header>
  <?php   
    include("header.php"); 
  ?>
  </header>

  <div class="container">
    <form action="details.php?id=<?= $list["id"]?>" method="post">
      <label for="Confirm">Wil je de lijst <b><?= $list["title2"]?></b> met alle bijhorende notities <b style="color:#FF8200">permanent</b> verwijderen?</label>
      <br>
      <button class="buttons" type="submit" name="DeleteList" value="true">Ja</button>
      <a href="../index.php" class="buttons" style="background-color:#FF8200">Nee</a>
    </form>
  </div>

  <footer>
    <?php   
      include("footer.php"); 
    ?>
  </footer>