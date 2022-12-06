<!-- Header -->

<!-- Aside -->
<?php  require_once "header.php";require_once "aside.php";
require_once "../settings/code/port-kat-add.php" ?>


<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

    <!-- Navbar -->
    <?php  require_once "nav.php"?>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-lg-12 position-relative z-index-2">

                <div class="card mb-4 ">

                    <div class="card-body">
                        <form action="#" method="POST"   role="form" class="text-start">
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label">Title</label>
                                <input type="text" class="form-control" name="title">
                            </div>
                            <button type="submit" name="port_kat_add" class="btn bg-gradient-primary my-4 mb-2">Əlavə Et</button>


                        </form>
                    </div>
                </div>

            </div>
        </div>

        <!-- Footer -->
        <?php  require_once "footer.php"?>
 