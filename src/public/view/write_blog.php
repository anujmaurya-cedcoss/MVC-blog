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
    <title>Write Blog</title>
</head>

<body>
    <?php
    include_once('./header.php');
    ?>
    <h1 class='text-center'>Write New blog</h1>
    <form class="m-5" action="../controller/write_blog_controller.php" method="POST">
        <div class="form-group">
            <label for="exampleFormControlInput1">Title</label>
            <input type='text' class="form-control" id="exampleFormControlInput1" placeholder="Enter title"
                name='title'>
        </div>
        <div class="form-group">
            <label for='image_link'>Insert image link</label>
            <input type="text" name='image_link' id='image_link'>
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Write Blog</label>
            <textarea name = 'description' class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>

        </div>
        <button type="submit" class="btn col-2 btn-primary btn-lg btn-block">Submit</button>
    </form>
    <?php
    include_once('./footer.php');
    ?>
</body>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />

</html>