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
                if (isset($_SESSION['admin']) && $_SESSION['admin'] != -1) {
                    echo "<div class = 'row'>";
                    echo "<a href = './my_blogs.php' type=\"button\" class=\"btn m-3 btn-primary\">All Blogs</a>";
                    echo "<a href ='../controller/logout_controller.php'
                            type=\"button\" class=\"btn m-3 btn-danger pt-2\">
                            <i class=\"fa-solid fa-user\" style=\"color: #f5f5f5;\"></i>Log Out</a>";
                    echo "</div>";
                } else {
                    echo "<a href = './login.php' type=\"button\" class=\"btn btn-primary m-2\">Admin LogIn</a>";
                }
                ?>
            </div>
        </div>
    </div>
</nav>