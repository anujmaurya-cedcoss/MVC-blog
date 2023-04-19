<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <title>Admin</title>
</head>

<body>
    <?php
    include_once('../controller/home_controller.php');
    include_once('./admin_header.php');
    foreach ($_SESSION['blogs'] as $key => $blogObject) {
        echo "<div class=\"col-10 m-5 \">
        <i class=\"fa-solid fa-money-check-pen\" style=\"color: #f00000; height:20px; width:20px;\"></i>
        <div class=\"col-md-12 how-img\" >
        <img src=\"$blogObject->image\" class=\"img-fluid \"alt=\"\" style='height:500px;display:block;margin-left:auto;margin-right:auto'/>
        </div>
        <button class = 'btn'><a href = '../controller/admin_main_controller.php?id=".$blogObject->id."/delete'>delete</a></button>

        <div class=\"col-md-12 text-center mt-5\">
        <h1 style='text-align:center;'>$blogObject->title</h1>
        <p class=\"subheading\">$blogObject->description</p>
        </div>
        </div><hr>";
    }
    include('./footer.php');
    ?>
</body>

</html>