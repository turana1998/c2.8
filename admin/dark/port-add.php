<!-- Header -->

<!-- Aside -->
<?php  require_once "header.php";require_once "aside.php";
require_once "../settings/code/port-add.php" ?>


<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

    <!-- Navbar -->
    <?php  require_once "nav.php"?>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-lg-12 position-relative z-index-2">

                <div class="card mb-4 ">

                    <div class="card-body">
                        <form action="#" method="POST"   role="form" class="text-start" enctype="multipart/form-data">
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label">Title</label>
                                <input type="text" class="form-control" name="title">
                            </div>
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label">Description</label>
                                <input type="text" class="form-control" name="description">
                            </div>
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label">Link</label>
                                <input type="url" class="form-control" name="link">
                            </div>
                            <div class="input-group input-group-outline my-3">
                                <input type="file" class="form-control" name="image">
                            </div>
                            <button type="submit" name="port_add" class="btn bg-gradient-primary my-4 mb-2">Əlavə Et</button>


                        </form>
                    </div>
                </div>

            </div>
        </div>

        <!-- Footer -->
        <?php  require_once "footer.php"?>
 