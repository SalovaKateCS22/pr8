<?php

    require 'uploads.php';

    function isError() {
        if(empty($_POST["name"]) || empty($_POST["email"]) || empty(@$_POST["gender"])) {
            echo '<p style="color: #91170c;">Invalid Data</p>';
            return true;
        }
        return false;
    }

    function addData() {

        if (!file_exists('database/users.csv')) {
            file_put_contents('database/users.csv', '');
        }
            
        $name = $_POST["name"];
        $email = $_POST["email"];
        $gender = @$_POST["gender"];
        
        $defaultImg = 'public/images/download.jpg';
        if(is_uploaded_file($_FILES['files']['tmp_name'][0])) {
            $fp = fopen('database/users.csv', 'a');
            fwrite($fp, "$name, $email, $gender, $defaultImg\n");
            fclose($fp);
        } else {
            $fp = fopen('database/users.csv', 'a');
            fwrite($fp, "$name, $email, $gender, $filePath\n");
            fclose($fp);
        }

    }

   filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<div class="container card-panel">
   <?php

    require 'uploads.php';

    if(!isError()) {
        echo "User Added: " . $_POST["name"] . "<br>";
        echo "Email: " . $_POST["email"]. "<br>";
        echo "Gender: " . @$_POST["gender"] . "<br>";
        echo "Image path: " . $filePath;
    }
    addData();
   ?> 
   <hr>
   <a class="btn" href="adduser.php">return back</a>
   <a class="btn" href="table.php">view list</a>
</div>

<style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            width: 100%;
        }

       .container {
           max-width: 500px;
       }
   </style>
