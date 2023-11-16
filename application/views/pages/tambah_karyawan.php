 <!-- Container Fluid-->
 <div class="container-fluid" id="container-wrapper">
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
         <h1 class="h3 mb-0 text-gray-800">Tambah Data Karyawan</h1>
         <ol class="breadcrumb">
             <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboardHR'); ?>">Dashboard</a></li>
             <li class="breadcrumb-item active" aria-current="page">Tambah Data Karyawan</li>
         </ol>
     </div>

     <div class="row">
         <!-- Form Kendaraan -->
         <div class="col-lg-6">
             <div class="card mb-4">
                 <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                     <h6 class="m-0 font-weight-bold text-primary">Form Tambah Data</h6>
                 </div>
                 <div class="card-body">
                     <form class="forms-sample" method="post" action="<?= base_url('admin/prosesTambahKaryawan'); ?>">
                         <div class="form-group">
                             <label for="nama">Nama</label>
                             <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama">
                         </div>
                         <div class="form-group">
                            <label for="nama">Alamat</label>
                             <textarea name="alamat" id="alamat" cols="30" rows="10" placeholder="Alamat" class="form-control"></textarea>
                         </div>
                         <div class="form-group">
                             <label for="nik">NIK</label>
                             <input type="number" name="nik" class="form-control" id="nik" placeholder="NIK">
                         </div>
                         <div class="form-group">
                             <label for="nik">TTL</label>
                             <input type="date" name="ttl" class="form-control" id="ttl" placeholder="ttl">
                         </div>
                         <div class="form-group">
                             <label for="pendidikan">Pendidikan</label>
                             <input type="text" name="pendidikan" class="form-control" id="pendidikan" placeholder="Pendidikan">
                         </div>
                         <div class="form-group">
                             <label for="status">Status</label>
                             <input type="text" name="status" class="form-control" id="status" placeholder="Status">
                         </div>
                         <div class="form-group">
                            <select name="departemen" id="departemen" placeholder="Pilih Departemen" class="form-control">
                                <option value="">Pilih Departemen</option>
                                <option value="IT">IT</option>
                                <option value="Finance">Finance</option>
                                <option value="Logistic">Logistic</option>
                                <option value="Purchasing">Purchasing</option>
                                <option value="HR">HR</option>
                            </select>
                         </div>
                         <div class="form-group">
                             <label for="nik">Level Grade</label>
                             <input type="number" name="level_grade" class="form-control" id="level_grade" placeholder="Level grade">
                         </div>
                         <button type="submit" class="btn btn-primary btn-xs font-weight-medium auth-form-btn">Simpan</button>
                         <button type="reset" class="btn btn-danger btn-xs font-weight-medium auth-form-btn">Reset</button>
                     </form>
                 </div>
             </div>
         </div>
     </div>      
     <!-- Documentation Link -->
     <div class="row">
        <div class="col-lg-12 text-center">
            <p>Kunjungi <a href="https://jombangkab.go.id/opd/kominfo" class="btn btn-primary btn-sm" target="_blank"><i class="fas fa-home"></i>&nbsp;Diskominfo Jombang</a></p>
        </div>
    </div>

 </div>
 <!---Container Fluid-->