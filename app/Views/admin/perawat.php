    <?= $this->extend('layout/head-foot.php') ?>
    <?= $this->section('content') ?>
    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php
        $role = "admin";
        if ($role == "perawat") {
        ?>
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
                    <a class="nav-link" href=<?= base_url("admin/lansia"); ?>>
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
        <?php
        } else if ($role == "lansia") {
        ?>
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
                    <a class="nav-link" href=<?= base_url("admin/lansia"); ?>>
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
        <?php
        } else {
        ?>
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

                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link active" href=<?= base_url("admin"); ?>>
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider mb-0">

                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link" href=<?= base_url("admin/perawat"); ?>>
                        <i class="fa-solid fa-user-nurse fa-lg"></i>
                        <span>Perawat</span>
                    </a>
                </li>

                <!-- Nav Item - Utilities Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link" href=<?= base_url("admin/lansia"); ?>>
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
        <?php
        }
        ?>

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
                    <h1>Perawat</h1>
                    <?php
                    if (session()->getFlashdata('message')) {
                    ?>

                        <?= session()->getFlashdata('message') ?>

                    <?php
                    } else {
                        echo "<br>";
                    }
                    ?>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h6 class="m-0 font-weight-bold text-primary" style="font-size: 125%;">Data Perawat</h6>
                            <button type="button" data-toggle="modal" class="btn btn-primary mt-1 mb-2" data-target="#tambah_perawat">Tambah Perawat</button>

                            <!-- Modal Tambah Perawat -->
                            <div class="modal fade" id="tambah_perawat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form method="POST" action=<?= base_url("admin/perawat/add"); ?>>
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Tambah Perawat</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="#id">No Induk</label>
                                                        <input type="text" name="id" id="id" class="form-control" placeholder="No Induk otomatis akan dibuatkan sistem" disabled>
                                                    </div>
                                                    <div class="col">
                                                        <label for="#nama">Nama</label>
                                                        <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama" autocomplete="off" autofocus>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="#role">Role</label>
                                                        <input type="text" id="role" name="role" class="form-control" placeholder="Role" autocomplete="off">
                                                    </div>
                                                    <div class="col">
                                                        <label for="#password">Password</label>
                                                        <input type="text" id="password" name="password" class="form-control" placeholder="Password" autocomplete="off">
                                                    </div>
                                                </div>
                                                <br>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- End Modal Tambah Perawat -->
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>No Induk</th>
                                            <th>Nama</th>
                                            <th>Role</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if (!empty($perawat)) {
                                            $no = 1;
                                            foreach ($perawat as $a) {
                                        ?>
                                                <tr>
                                                    <td><?= $no; ?></td>
                                                    <td><?= $a['id']; ?></td>
                                                    <td><?= $a['nama']; ?></td>
                                                    <td><?= $a['role']; ?></td>
                                                    <td>
                                                        <button type="button" class="btn btn-warning btn-circle btn-sm" data-target="#edit_perawat<?= $a['id'] ?>" data-toggle="modal">
                                                            <i class="fa-solid fa-pencil"></i>
                                                        </button>

                                                        <!-- Edit Perawat -->
                                                        <div class="modal fade" id="edit_perawat<?= $a['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <form method="POST" action=<?= base_url("admin/perawat/edit/" . $a['id'] . ""); ?>>
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Edit Perawat</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="row">
                                                                                <div class="col">
                                                                                    <label for="#id">No Induk</label>
                                                                                    <input type="text" name="id" id="id" class="form-control" placeholder="No Induk otomatis akan dibuatkan sistem" disabled value=<?= $a['id']; ?>>
                                                                                </div>
                                                                                <div class="col">
                                                                                    <label for="#nama">Nama</label>
                                                                                    <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama" autocomplete="off" autofocus value="<?= $a['nama']; ?>">
                                                                                </div>
                                                                            </div>
                                                                            <br>
                                                                            <div class="row">
                                                                                <div class="col">
                                                                                    <label for="#role">Role</label>
                                                                                    <input type="text" id="role" name="role" class="form-control" placeholder="Role" autocomplete="off" value="<?= $a['role']; ?>">
                                                                                </div>
                                                                                <div class="col">
                                                                                    <label for="#password">Password</label>
                                                                                    <input type="text" id="password" name="password" class="form-control" placeholder="Password" autocomplete="off" value=<?= $a['password']; ?>>
                                                                                </div>
                                                                            </div>
                                                                            <br>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Edit Perawat -->
                                                        <!-- <a href="#" class="btn btn-info btn-circle btn-sm">
                                                    <i class="fas fa-info-circle"></i>
                                                </a> -->
                                                        <button type="button" class="btn btn-danger btn-circle btn-sm" data-target="#hapus_perawat<?= $a['id'] ?>" data-toggle="modal">
                                                            <i class="fas fa-trash"></i>
                                                        </button>

                                                        <!-- Hapus Perawat -->
                                                        <div class="modal fade" id="hapus_perawat<?= $a['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <form method="POST" action=<?= base_url("admin/perawat/delete/" . $a['id'] . ""); ?>>
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Hapus Perawat</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="row">
                                                                                <div class="col">
                                                                                    <label for="#id">No Induk</label>
                                                                                    <input type="text" name="id" id="id" class="form-control" placeholder="No Induk otomatis akan dibuatkan sistem" disabled value=<?= $a['id']; ?>>
                                                                                </div>
                                                                                <div class="col">
                                                                                    <label for="#nama">Nama</label>
                                                                                    <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama" autocomplete="off" autofocus disabled value=<?= $a['nama']; ?>>
                                                                                </div>
                                                                            </div>
                                                                            <br>
                                                                            <div class="row">
                                                                                <div class="col">
                                                                                    <label for="#role">Role</label>
                                                                                    <input type="text" id="role" name="role" class="form-control" placeholder="Role" autocomplete="off" disabled value=<?= $a['role']; ?>>
                                                                                </div>
                                                                                <div class="col">
                                                                                    <label for="#password">Password</label>
                                                                                    <input type="text" id="password" name="password" class="form-control" placeholder="Password" autocomplete="off" disabled value=<?= $a['password']; ?>>
                                                                                </div>
                                                                            </div>
                                                                            <br>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                            <button type="submit" class="btn btn-primary">Hapus Perawat</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Hapus Perawat -->
                                                    </td>
                                                </tr>


                                        <?php
                                                $no++;
                                            }
                                        } else {
                                        }
                                        ?>
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