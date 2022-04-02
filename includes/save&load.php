<?php
 
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        if(isset($_POST['save'])){
            $date = $_POST['date'];
            $text = $_POST['text'];

            $marequete = $pdo->prepare("INSERT INTO content (date,text) VALUES(:date,:text)");  
            $marequete->execute([
                ":date" => $date,
                ":text" => $text,
            ]);
   
        } else{
            $date = $_POST['date_load'];
            $marequete = $pdo->prepare("SELECT * from content where date= :date");  
            $marequete->execute([
                ":date" => $date
            ]);
            $forme = $marequete->fetch();
            if(count($forme) > 0) {
                echo $forme['text'];
            }
            
        }
    }
?>