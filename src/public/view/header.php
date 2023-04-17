<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- Container wrapper -->
    <div class="container-fluid">
        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
            data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Navbar brand -->
            <a class="navbar-brand mt-2 mt-lg-0" href="#">
                <img src="https://mdbcdn.b-cdn.net/img/logo/mdb-transaprent-noshadows.webp" height="15" alt="MDB Logo"
                    loading="lazy" />
            </a>
            <!-- Left links -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="./home.php"><b>Home</b></a>
                </li>
            </ul>
        </div>
        <!-- Right elements -->
        <div class="d-flex align-items-center">
            <!-- Notifications -->
            <div class="dropdown">
                <?php
                // login button
                if ($_COOKIE['user'] != -1) {
                    echo $_COOKIE['user'];
                    echo "<div class = 'row'>";
                    echo "<div class=\"dropdown\">
                            <a class=\"dropdown-toggle d-flex align-items-center hidden-arrow\"
                            href=\"#\" id=\"navbarDropdownMenuAvatar\"
                                role=\"button\" data-mdb-toggle=\"dropdown\" aria-expanded=\"false\">
                                <img src=\"https://mdbcdn.b-cdn.net/img/new/avatars/2.webp\"
                                class=\"rounded-circle m-2\" height=\"30\"
                                    alt=\"Black and White Portrait of a Man\" loading=\"lazy\" />
                            </a>
                            </div>";
                            echo "<a href ='../controller/logout_controller.php'
                            type=\"button\" class=\"btn btn-dark pt-2\">Log Out</a>";
                            echo "<a href = './write_blog.php'>
                            <i class=\"fa-solid fa-pencil m-3\" style=\"color: #285395;\"></i></a>";
                    echo "</div>";
                } else {
                    echo "<button href = './login.php' type=\"button\" class=\"btn btn-primary m-2\">Log In</button>";
                    echo "<button href = './signup.php' type=\"button\" class=\"btn btn-success m-2\">Sign In</button>";
                }
                ?>
            </div>
        </div>
        <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
</nav>
<!-- Navbar -->