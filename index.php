<?php
  include("components/functions.php");
  $lists = getAllList();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ToDo List</title>
        <link rel="stylesheet" href="style.css">
    </head>
        <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand"><i class="fa-solid fa-note-sticky" style="padding-right: 4px;"></i>Notities</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                    <a class="nav-link" href="components/createlist.php">Lijst maken<span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
            </nav>
        </header>
            <?php
                foreach($lists as $list){
                $notes = getDataFilter("todolist", ["listId" => ["operator" => "=", "value"=> $list["id"]]]);
            ?>
        <div class="row">
            <div class="column">
            <table>
                </tr>
                <th><?=$list["title2"]?>
                    <div class="headerIcon" style="float: right;">
                    <a href="../updatelist.php?id=<?=$list["id"]?>"><i class="fa-solid fa-pencil" style="color:#38df6a"></i></a>
                    <a href="../createnote.php?listId=<?=$list["id"]?>"><i class="fa-solid fa-plus" style="color:#38df6a"></i></a>
                    <a href="../deletelist.php?id=<?=$list["id"]?>"><i class="fa-solid fa-trash-can" style="color:#FF8200"></i></a>
                    </div>
                </th>
                </tr>

                <tr>
                <?php
                if($list["id"] !== $filteredList[0]["listId"]){
                    foreach($notes as $note){
                    if($note["listId"] == $list["id"]){
                ?>
                        <td><a class="link" href="../details.php?id=<?=$note["id"]?>"><?=$note["title"]?></a></td>
                <?php
                    }
                    }
                }elseif($filteredList !== NULL && $list["id"] == $filteredList[0]["listId"]){
                ?>

                <?php
                    foreach($filteredList as $filter){
                ?>
                    <td><a class="link" href="../details.php?id=<?=$filter["id"]?>"><?=$filter["title"]?></a></td>
                <?php
                    }
                }
                ?>
                </tr>
                <br>

                <th> 
                <form method="post" action="index.php">
                    <input type="hidden" name="listId" value="<?=$list["id"]?>">

                    <select id="filter" name="filter">
                    <option selected><--Filter lijst--></option>
                    <option value="sorteerDuur">Duur</option>
                    <option value="Bezig">Status: bezig</option>
                    <option value="Afgerond">Status: afgerond</option>
                    <option value="Niet begonnen">Status: niet begonnen</option>
                    <option value="filterN">Niet filteren</option>
                    </select>
                    <button name="submit" value="filterconfirmed" class="buttons">Filter</button>
                </form>
                </th>
            <?php
                }
            ?>
            </div>
        </div>
    </body>
    <footer>
        <?php   
            include("components/footer.php"); 
        ?>
    </footer>
</html>