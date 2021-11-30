<?php
if (!file_exists('database/users.csv')) {
    file_put_contents('database/users.csv', '');
}
 
$file = fopen('database/users.csv', 'r');

$str = file_get_contents('database/users.csv');
$users = explode("\n", $str);
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<div class="container card-panel">
       <?php

        for($i = 0; $i < count($users) - 1; $i++) {
            echo str_replace(', ', " | ", $users[$i]) . "<br>";
            echo "<hr>";
        }
       ?> 
       <a class="btn" href="adduser.php">return back</a>
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
           max-width: 600px;
       }
</style>