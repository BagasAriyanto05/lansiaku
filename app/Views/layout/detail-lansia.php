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

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href=<?= base_url("admin"); ?>>
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider mb-0">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href=<?= base_url("admin/perawat"); ?>>
                    <i class="fa-solid fa-user-nurse fa-lg"></i>
                    <span>Perawat</span>
                </a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link collapsed" href=<?= base_url("admin/lansia"); ?>>
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
                    <!-- Konten -->
                    <div class="card" style="width: 100%;">
                        <div class="card-body">
                            <div class="content d-flex justify-content-between">
                                <div class="img-profil" style="margin-right: 30px;">
                                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" style="width: 250px;" alt="">
                                </div>
                                <div class="deskripsi-profil flex-grow-1">
                                    <form>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="nama">Nama</label>
                                                <input type="text" class="form-control" id="nama" name="nama" value="Bagas Afza Joko Ariyanto">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="ttl">Tempat, Tanggal Lahir</label>
                                                <input type="text" class="form-control" id="ttl" name="ttl" value="Demak, 05 Juni 2001">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="jenis-kelamin">Jenis Kelamin</label>
                                                <input type="text" class="form-control" id="jenis-kelamin" name="jk" value="Laki - Laki">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="alamat">Alamat</label>
                                                <input type="text" class="form-control" id="alamat" name="alamat" value="Ds. Batu RT 03 RW 01 Kecamatan Karangtengah Kabupaten Demak">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="no-telp-wali">No Telp Wali</label>
                                                <input type="text" class="form-control" id="no-telp-wali" name="no-telp-wali" value="089098098098">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="agama">Agama</label>
                                                <input type="text" class="form-control" id="agama" name="agama" value="Islam">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md">
                                                <label for="riwayat-penyakit">Riwayat Penyakit</label>
                                                <textarea type="text" class="form-control" id="riwayat-penyakit" name="riwayat-penyakit" value="Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis molestias perspiciatis iusto maxime nemo quisquam nam enim doloremque ipsum soluta!">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis molestias perspiciatis iusto maxime nemo quisquam nam enim doloremque ipsum soluta!</textarea>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary float-right">Perbarui Data</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Konten -->
                    <br>
                    <!-- Table -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary" style="font-size: 125%;">Kegiatan</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Kegiatan</th>
                                            <th>Mulai</th>
                                            <th>Selesai</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>20 Desember 2023</td>
                                            <td>Jalan - Jalan</td>
                                            <td>09:00</td>
                                            <td>10:00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- End Table -->
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