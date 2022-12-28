<!-- Header -->

<!-- Aside -->
<?php  require_once "header.php";require_once "aside.php";
require_once "../settings/code/port-kat-add.php";
require_once "../settings/code/port-kat-delete.php" ?>


<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

    <!-- Navbar -->
    <?php  require_once "nav.php"?>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-lg-12 position-relative z-index-2">

                <div class="card mb-4 ">

                    <div class="card-body">
                        <div class="col-12">
                            <div class="card my-4">
                                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                        <h6 class="text-white text-capitalize ps-3">Portfolio Catdddegory List</h6>
                                    </div>
                                </div>
                                <div id="message_kat" class="mt-4 mb-4"></div>
                                <div class="card-body px-0 pb-2">
                                    <div class="table-responsive p-0">
                                        <div id="StatusMessage"></div>
                                        <table class="table align-items-center mb-0">
                                            <thead>
                                            <tr>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Title</th>
                                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                    Status</th>
                                                <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Operations</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php for($i=0;$i<count($kat_list);$i++){ ?>
                                            <tr class="PortfolioKateqoriya">

                                                <td><?= $kat_list[$i]["title"]?></td>
                                                <td class="align-middle text-sm">

                                                        <div class="form-check form-switch d-flex align-items-center mb-3 is-filled">
                                                        <input onchange='KateqoriyaStatus(<?= $kat_list[$i]["id"]?>)' <?= $kat_list[$i]["status"]==1 ? 'checked=checked' : ""?> class="form-check-input" type="checkbox" id="rememberMe">
                                                        <label class="form-check-label mb-0 ms-2" for="rememberMe"></label>
                                                        </div>

                                                </td>
                                                <td class="align-middle ">
                                                    <button onclick="Redakte(<?= $kat_list[$i]["id"]?>,<?=$i?>)" data-bs-toggle="modal" data-bs-target="#exampleModal"  class="btn btn-success " type="button" data-original-title="" title="">
                                                        <i class="material-icons">edit</i>
                                                        <div class="ripple-container"></div>
                                                    </button>
                                                    <button onclick="PortKatDelete(<?= $kat_list[$i]["id"]?>)" type="button" class="btn btn-danger" data-original-title="" title="">
                                                        <i class="material-icons">close</i>
                                                        <div class="ripple-container"></div>
                                                    </button>
                                                </td>

                                            </tr>
                                            <?php }?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title font-weight-normal" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="#" method="POST"  role="form" class="text-start">
                            <div class="input-group input-group-outline my-3">
                                <label for="id" class="form-label">Id</label>
                                <input  id="id__" type="text" class="form-control" name="id"
                                       value="">
                            </div>
                            <div class="input-group input-group-outline my-3">
                                <label for="title" class="form-label">Title</label>
                                <input id="title__" type="text" class="form-control" name="title"
                                       value="">
                            </div>
                            <div class="modal-footer">
                                <button type="submit" name="port-kat-edit" class="btn bg-gradient-primary">Redakte Et</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!-- Footer -->
        <?php  require_once "footer.php"?>
 