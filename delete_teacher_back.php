<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if any items were selected
    if (isset($_POST['items'])) {
      $selectedItems = $_POST['items'];

      // Perform deletion for each selected item
      foreach ($selectedItems as $item) {
        // Delete the item or perform any other desired action
        // You can replace this line with your own deletion logic

       
        $conn= new mysqli("","root","", "school");
        
        $qry = "DELETE FROM teacher WHERE id='{$item}'   ";
        
        $conn->query($qry);
        
        if ($conn->connect_error) {
            die("DELETING FAILED: " . $conn->connect_error);
        }
        else {
            echo "Deleting: " . $item . "<br>";
        }
        
        
        }
        } 
        
        else {
      echo "No items selected for deletion.";
      
    }
    $conn->close();
  }





?>