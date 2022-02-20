<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akmal Maulana</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/akmal.jpg" type="image/x-icon">
</head>
<body>
    <?php
        if(isset($_GET['page'])){
            $page = $_GET['page'];
            if($page == "home"){
                $home = "active";
            }else if($page == "about"){
                $about = "active";
            }else if($page == "contact"){
                $contact = "active";
            }else{
                $home = "active";
            }
        }else{
            $home = "active";
        }
    ?>
    <header>
        <ul>
            <li class="<?= $home ?>"><a href="index.php?page=home">Home</a></li>
            <li class="<?= $about ?>"><a href="index.php?page=about">About Me</a></li>
            <li class="<?= $contact ?>"><a href="index.php?page=contact">Contact</a></li>
        </ul>
    </header>
    <?php

    if(isset($_GET['page'])){
        $page = $_GET['page'];
        switch ($page) {
            case 'home':
                include 'pages/home.php';
                break;
            case 'about':
                include 'pages/about.php';
                break;
            case 'contact':
                include 'pages/contact.php';
                break;
            default:
                include 'pages/home.php';
                break;
        }
    }else{
        include 'pages/home.php';
    }
    ?>
</body>
</html>