<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register - SB Admin</title>
        <link href="<?php echo base_url()."assets/css/styles.css" ?>" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-light">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <h2 align="center">Anda harus terdaftar sebagai Member</h2><br><br>
                    Jika sudah terdaftar member, silakan login
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Daftar Member</h3></div>
                                    <div class="card-body">
                                    <form action="<?php echo base_url()."index.php/hal_admin/aksi_daftar_member/";?>" method="POST">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="username" type="text" placeholder="Enter Username" />
                                                <label>Username</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="nama" type="text" placeholder="Enter nama" />
                                                <label>Nama</label>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" name="kode" id="inputKode" type="password" placeholder="Create a password" />
                                                        <label for="inputKode">Password</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputKodeConfirm" type="password" placeholder="Confirm password" />
                                                        <label for="inputKodeConfirm">Confirm Password</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><input type="submit" class="btn bg-black text-white btn-block"><br> <input type="reset" class="btn bg-black text-white btn-block" ></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="<?php echo base_url()."index.php/hal_admin/form_login_member";?>">Login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_url()."assets/js/scripts.js" ?>"></script>
    </body>
</html>
