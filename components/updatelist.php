<?php
  include("functions.php");
  
  $list = getTable("list", $_GET["id"]);
?>
<!DOCTYPE html>
<html lang="en">
  <header>
  <?php   
    include("header.php"); 
  ?>
  </header>
  <div class="container">
    <div class="bg">
      <div class="edit">
        <h4>Wijzig de Lijst:</h4>
        <br>
        <form method="post" action="../index.php">  
          <input type="hidden" name="id" value="<?php echo $_GET["id"];?>">
          
          <p><b>Titel: </b><input type="text" name="title2" required value="<?php echo $list["title2"]?>"></p>
          <br>

          <button class="buttons" name="updatelist" value="confirm">Confirm</button>
          <a href="../index.php" class="link">Sluiten</a>
        </form>
      </div>
    </div>
  </div>
  <footer>
    <?php   
      include("footer.php"); 
    ?>
  </footer>