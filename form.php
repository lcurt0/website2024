<?php
    if(isset($_POST['SubmitButton'])){ //check if form was submitted
        
        $receiver = 'lautarocurto@gmail.com';
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $description = $_POST['description'];
        $launch = $_POST['launch__date'];
        $budget = $_POST['budget'];
        $hear = $_POST['hear'];
        $header = "WEB INQUIRY";
        $content = "\n Email: " . $email . "\n About our project: " . $description . "\n Our ideal launch date is: " . $launch . "\n Our budget is: " . $budget . "\n We heard about you through " . $hear;
        
        mail($receiver, $name, $content, $header);
        header("Location: https://lautarocurto.com/contact.php");
        echo("<h2 class='formMsg'>Message sent!</h2>");
    } 
?>
