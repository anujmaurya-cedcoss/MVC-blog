<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
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
    <title>Sign Up</title>
</head>

<body>
    <section class="h-100 h-custom" style="background-color: #8fc4b7;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-8 col-xl-6">
                    <div class="card rounded-3">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img3.webp"
                            class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
                            alt="Sample photo">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Registration Info</h3>

                            <form class="px-md-2" action = "../controller/signup_controller.php" method="POST">

                                <div class="form-outline mb-4">
                                    <input name = "name" type="text" id="form3Example1q" class="form-control signup-name" />
                                    <label  class="form-label" for="form3Example1q">Name</label>
                                </div>
                                <div class="form-outline mb-4">
                                    <input name = "email" type="text" id="form3Example1q" class="form-control signup-email" />
                                    <label class="form-label" for="form3Example1q">Email</label>
                                </div>
                                <div class="form-outline">
                                    <input name = "pass" type="text" id="form3Example1w" class="form-control signup-pass" />
                                    <label class="form-label" for="form3Example1w">Password</label>
                                </div>

                                <div class="form-outline">
                                    <input name = "repass" type="text" id="form3Example1w" class="form-control signup-repass" />
                                    <label class="form-label" for="form3Example1w">Confirm Password</label>
                                </div>
                                <div class = "row d-flex justify-content-center align-content-center">
                                    <button type="submit" class="btn btn-success">Sign Up</button>
                                </div>

                                <a href="./login.php" class = "text-center">Login instead</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    include('./footer.php');
    ?>
</body>

</html>