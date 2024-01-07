    <?= $this->extend('layout/head-foot.php') ?>
    <?= $this->section('content') ?>
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <i class="fa-solid fa-person-cane fa-flip fa-xl"></i>
                </div>
                <div class="sidebar-brand-text mx-3">LANSIAKU</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href=<?= base_url("/perawat"); ?>>
                    <i class="fa-solid fa-person-cane fa-lg"></i>
                    <span>Lansia</span>
                </a>
            </li>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle" src=<?= base_url("assets/img/undraw_profile.svg"); ?>>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Content Row -->
                    <h1>Lansia</h1>
                    <?php
                    if (session()->getFlashdata('message')) {
                    ?>

                        <?= session()->getFlashdata('message') ?>

                    <?php
                    }
                    ?>
                    <br>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h6 class="m-0 font-weight-bold text-primary" style="font-size: 125%;">Data Lansia</h6>
                            <button type="button" class="btn btn-primary mt-1 mb-2" data-toggle="modal" data-target="#tambah_lansia">Tambah Lansia</button>

                            <!-- Modal Tambah Lansia -->
                            <div class="modal fade" id="tambah_lansia" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form method="POST" action=<?= base_url("perawat"); ?>>
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Lansia</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="#id">ID</label>
                                                        <input type="text" id="id" class="form-control" placeholder="ID otomatis akan dibuatkan" disabled autocomplete="off" required>
                                                    </div>
                                                    <div class="col">
                                                        <label for="#nama">Nama</label>
                                                        <input type="text" id="nama" class="form-control" placeholder="Nama" name="nama" autocomplete="off" required>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="#bb">Berat Badan</label>
                                                        <input type="text" id="bb" class="form-control" placeholder="Berat Badan" name="bb" autocomplete="off" required>
                                                    </div>
                                                    <div class="col">
                                                        <label for="#tb">Tinggi Badan</label>
                                                        <input type="text" id="tb" class="form-control" placeholder="Tinggi Badan" name="tb" autocomplete="off" required>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="#usia">Usia</label>
                                                        <input type="text" id="usia" class="form-control" placeholder="Usia" name="usia" autocomplete="off" required>
                                                    </div>
                                                    <div class="col">
                                                        <label for="#jk">Jenis Kelamin</label>
                                                        <!-- <input type="text" id="jk" class="form-control" placeholder="Jenis Kelamin" value=""> -->
                                                        <br>
                                                        <div class="row ml-2 mt-2">
                                                            <div class="col">
                                                                <input class="form-check-input" type="radio" name="jk" id="gridRadios1" value="L" autocomplete="off" required>
                                                                <label class="form-check-label" for="gridRadios1">L</label>
                                                            </div>
                                                            <div class="col">
                                                                <input class="form-check-input" type="radio" name="jk" id="gridRadios2" value="P" autocomplete="off" required>
                                                                <label class="form-check-label" for="gridRadios2">P</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- End Modal Tambah Lansia -->

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Id</th>
                                            <th>Nama</th>
                                            <th>Berat Badan</th>
                                            <th>Tinggi Badan</th>
                                            <th>Usia</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (empty($lansia)) {
                                        ?>
                                            <tr>
                                                <td colspan="8">Tidak ada data</td>
                                            </tr>
                                        <?php
                                        } else {
                                        ?>
                                            <?php
                                            $no = 1;
                                            foreach ($lansia as $a) {
                                                // dd($a);
                                            ?>
                                                <tr>
                                                    <td><?= $no; ?></td>
                                                    <td><?= $a['id']; ?></td>
                                                    <td><?= $a['nama']; ?></td>
                                                    <td><?= $a['bb'] ?></td>
                                                    <td><?= $a['tb'] ?></td>
                                                    <td><?= $a['usia']; ?></td>
                                                    <td><?= $a['jk']; ?></td>
                                                    <td>
                                                        <button type="button" class="btn btn-warning btn-circle btn-sm" data-toggle="modal" data-target="#edit_lansia<?= $a['id'] ?>">
                                                            <i class="fa-solid fa-pencil"></i>
                                                        </button>

                                                        <!-- Modal Edit lansia -->
                                                        <div class="modal fade" id="edit_lansia<?= $a['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <form method="POST" action=<?= base_url("perawat/" . $a['id'] . ""); ?>>
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Edit Data Lansia</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">

                                                                            <div class="row">
                                                                                <div class="col">
                                                                                    <label for="#id">ID</label>
                                                                                    <input type="text" name="id" id="id" class="form-control" placeholder="ID" value="<?= $a['id']; ?>" disabled>
                                                                                </div>
                                                                                <div class="col">
                                                                                    <label for="#nama">Nama</label>
                                                                                    <input autocomplete="off" type="text" id="nama" name="nama" class="form-control" placeholder="Nama" value="<?= $a['nama']; ?>">
                                                                                </div>
                                                                            </div>
                                                                            <br>
                                                                            <div class="row">
                                                                                <div class="col">
                                                                                    <label for="#bb">Berat Badan</label>
                                                                                    <input autocomplete="off" type="text" id="bb" name="bb" class="form-control" placeholder="Berat Badan" value="<?= $a['bb']; ?>">
                                                                                </div>
                                                                                <div class="col">
                                                                                    <label for="#tb">Tinggi Badan</label>
                                                                                    <input autocomplete="off" type="text" id="tb" name="tb" class="form-control" placeholder="Tinggi Badan" value="<?= $a['tb']; ?>">
                                                                                </div>
                                                                            </div>
                                                                            <br>
                                                                            <div class="row">
                                                                                <div class="col">
                                                                                    <label for="#usia">Usia</label>
                                                                                    <input autocomplete="off" type="text" id="usia" name="usia" class="form-control" placeholder="Usia" value="<?= $a['usia']; ?>">
                                                                                </div>
                                                                                <div class="col">
                                                                                    <label for="#jk">Jenis Kelamin</label>
                                                                                    <!-- <input type="text" id="jk" class="form-control" placeholder="Jenis Kelamin" value=""> -->
                                                                                    <br>
                                                                                    <div class="row ml-2 mt-2">
                                                                                        <?php
                                                                                        if ($a['jk'] == "L") {
                                                                                        ?>
                                                                                            <div class="col">
                                                                                                <input class="form-check-input" type="radio" name="jk" id="gridRadios1" value="L" checked>
                                                                                                <label class="form-check-label" for="gridRadios1">L</label>
                                                                                            </div>
                                                                                            <div class="col">
                                                                                                <input class="form-check-input" type="radio" name="jk" id="gridRadios2" value="P">
                                                                                                <label class="form-check-label" for="gridRadios2">P</label>
                                                                                            </div>
                                                                                        <?php
                                                                                        } else {
                                                                                        ?>
                                                                                            <div class="col">
                                                                                                <input class="form-check-input" type="radio" name="jk" id="gridRadios1" value="L">
                                                                                                <label class="form-check-label" for="gridRadios1">L</label>
                                                                                            </div>
                                                                                            <div class="col">
                                                                                                <input class="form-check-input" type="radio" name="jk" id="gridRadios2" value="P" checked>
                                                                                                <label class="form-check-label" for="gridRadios2">P</label>
                                                                                            </div>
                                                                                        <?php
                                                                                        }
                                                                                        ?>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <!-- End Modal Edit lansia -->

                                                        <a href=<?= base_url("perawat/detail-lansia/" . $a['id'] . ""); ?> class="btn btn-info btn-circle btn-sm">
                                                            <i class="fas fa-info-circle"></i>
                                                        </a>

                                                        <button type="button" class="btn btn-danger btn-circle btn-sm" data-toggle="modal" data-target="#hapus_lansia<?= $a['id']; ?>">
                                                            <i class="fas fa-trash"></i>
                                                        </button>

                                                        <!-- Modal Hapus lansia -->
                                                        <div class="modal fade" id="hapus_lansia<?= $a['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <form method="POST" action=<?= base_url("perawat/delete/" . $a['id'] . ""); ?>>
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Hapus Data Lansia</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">

                                                                            <div class="row">
                                                                                <div class="col">
                                                                                    <label for="#id">ID</label>
                                                                                    <input type="text" name="id" id="id" class="form-control" placeholder="ID" value="<?= $a['id']; ?>" disabled>
                                                                                </div>
                                                                                <div class="col">
                                                                                    <label for="#nama">Nama</label>
                                                                                    <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama" value="<?= $a['nama']; ?>" disabled>
                                                                                </div>
                                                                            </div>
                                                                            <br>
                                                                            <div class="row">
                                                                                <div class="col">
                                                                                    <label for="#bb">Berat Badan</label>
                                                                                    <input type="text" id="bb" name="bb" class="form-control" placeholder="Berat Badan" value="<?= $a['bb']; ?>" disabled>
                                                                                </div>
                                                                                <div class="col">
                                                                                    <label for="#tb">Tinggi Badan</label>
                                                                                    <input type="text" id="tb" name="tb" class="form-control" placeholder="Tinggi Badan" value="<?= $a['tb']; ?>" disabled>
                                                                                </div>
                                                                            </div>
                                                                            <br>
                                                                            <div class="row">
                                                                                <div class="col">
                                                                                    <label for="#usia">Usia</label>
                                                                                    <input type="text" id="usia" name="usia" class="form-control" placeholder="Usia" value="<?= $a['usia']; ?>" disabled>
                                                                                </div>
                                                                                <div class="col">
                                                                                    <label for="#jk">Jenis Kelamin</label>
                                                                                    <!-- <input type="text" id="jk" class="form-control" placeholder="Jenis Kelamin" value=""> -->
                                                                                    <br>
                                                                                    <div class="row ml-2 mt-2">
                                                                                        <?php
                                                                                        if ($a['jk'] == "L") {
                                                                                        ?>
                                                                                            <div class="col">
                                                                                                <input class="form-check-input" type="radio" name="jk" id="gridRadios1" value="L" checked disabled>
                                                                                                <label class="form-check-label" for="gridRadios1">L</label>
                                                                                            </div>
                                                                                            <div class="col">
                                                                                                <input class="form-check-input" type="radio" name="jk" id="gridRadios2" value="P" disabled>
                                                                                                <label class="form-check-label" for="gridRadios2">P</label>
                                                                                            </div>
                                                                                        <?php
                                                                                        } else {
                                                                                        ?>
                                                                                            <div class="col">
                                                                                                <input class="form-check-input" type="radio" name="jk" id="gridRadios1" value="L" disabled>
                                                                                                <label class="form-check-label" for="gridRadios1">L</label>
                                                                                            </div>
                                                                                            <div class="col">
                                                                                                <input class="form-check-input" type="radio" name="jk" id="gridRadios2" value="P" checked disabled>
                                                                                                <label class="form-check-label" for="gridRadios2">P</label>
                                                                                            </div>
                                                                                        <?php
                                                                                        }
                                                                                        ?>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                            <button type="submit" class="btn btn-primary">Hapus Data</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <!-- End Modal Hapus lansia -->

                                                    </td>
                                                </tr>
                                            <?php
                                                $no++;
                                            }
                                            ?>
                                        <?php
                                        } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Bagas Afza Joko Ariyanto 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <?= $this->endSection() ?>