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
    <title>Blog</title>
</head>

<body>

    <header>
        <?php
        require_once('../controller/home_controller.php');
        include_once('./header.php');
        ?>

    </header>
    <main class="my-5">
        <div class="container">
            <!--Section: Content-->
            <section class="text-center">
                <h4 class="mb-5"><strong>Latest Blogs</strong></h4>
                <div class="row">
                    <?php
                    foreach ($_SESSION['blogs'] as $key => $blogObject) {
                        echo "<div class=\"col-lg-4 col-md-12 mb-4\">
                        <div class=\"card\">
                            <div class=\"bg-image hover-overlay ripple\" data-mdb-ripple-color=\"light\">
                                <img src=\"$blogObject->image\" class=\"img-fluid\" style='height:250px' />
                                <a href=\"#!\">
                                    <div class=\"mask\" style=\"background-color: rgba(251, 251, 251, 0.15);\"></div>
                                </a>
                            </div>
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">$blogObject->title</h5>
                                <a href='./single_blog_page.php?id=$blogObject->id' class=\"btn btn-primary\" id = $blogObject->id>Read</a>";
                                if(isset($_SESSION['user']) && $_SESSION['user'] != -1) {
                                    echo "<a href = '../controller/like_controller.php'class=\"btn\"><i class=\"fa-solid fa-heart\" style=\"color: #d22d2d;\"></i></i></a>";
                                }
                            echo "</div>
                        </div>
                    </div>";
                    }
                    ?>
                </div>
            </section>
            <!--Section: Content-->

        </div>
    </main>

    <!--Footer-->
    <footer class="bg-light text-lg-start">
        <?php
        include_once('./footer.php');
        ?>
    </footer>

</body>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />

</html>