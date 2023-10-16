<?php

require_once ('../vendor/autoload.php');

$form = new \App\Form();
$form->addElement(new \App\TextInput('text','FirstName'));
$form->addElement(new \App\TextInput('lastname','LastName'));
$form->addElement(new \App\Email_Input('email','E-Mail'));
$form->addElement(new \App\PasswordInput('password','Password'));
$form->addElement(new \App\Button('Submit'));


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Widget</title>
    <style>
       .section {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

       input {
           width: 100%;
           padding: 6px 10px;
           margin: 8px 0;
           display: inline-block;
           border: 1px solid #ccc;
           border-radius: 4px;
           box-sizing: border-box;
       }


        .form {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
            width: 400px;
            margin: 0 auto;
        }
    </style>
</head>
<body>

<?php
 echo $form->render();
?>

</body>
</html>
