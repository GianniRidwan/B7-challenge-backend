<?php
  include("database.php");

  //Alles ophalen
  function getAllNotes(){
    $conn = openDatabase();

    $query = $conn->prepare("SELECT * FROM todolist");
    $query->execute();

    return $query->fetchAll();
  }


function addList($data){
    $conn = openDatabase();
    
    if(!empty($data) && isset($data)){
      if(isset($data["title2"]) && !empty($data["title2"])){  
        $query = $conn->prepare("INSERT INTO list (title2) VALUES (:title2)");
        $query->bindParam(":title2", $data["title2"]);
        $query->execute();

        return $data;
      }
    }else{
      echo("error empty post note bij function controle.");
    }
  }