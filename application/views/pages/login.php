
<!-- Login Content -->
<div class="container-fluid mb-5">
    <div class="row justify-content-center">
        <div class="col-xl-4 col-lg-12 col-md-9">
            <div class="card shadow-sm my-5">
                <div class="card-body p-2">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="login-form">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">LOGIN</h1>
                                </div>
                                <?= $this->session->flashdata('message'); ?>
                                <form class="pt-3" action="<?= base_url('admin/login') ?>" method="post">
                                    <div class="form-group">
                                        <input type="text" name="nama" class="form-control form-control-lg" placeholder="Masukan Nama Lengkap">
                                    </div>
                                    <div class="form-group">
                                        <select name="departemen" id="" class="form-control form-control-lg" placeholder="Pilih Departemen">
                                            <option value="">Pilih Departemen</option>
                                            <option value="IT">IT</option>
                                            <option value="Finance">Finance</option>
                                            <option value="Logistic">Logistic</option>
                                            <option value="Purchasing">Purchasing</option>
                                            <option value="HR">HR</option>
                                        </select>
                                    </div>
                                    <div class="mt-5">
                                        <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">LOGIN</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login Content -->