<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <div class="row mb-3">
        <!-- Tabel Peminjaman -->
        <div class="col-xl-12 col-lg-7">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Data Karyawan</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive mt-1">
                        <table class="table table-flush" id="tabel_peminjaman">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Alamat</th>
                                    <th class="text-center">NIK</th>
                                    <th class="text-center">TTL</th>
                                    <th class="text-center">Pendidikan</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Departemen</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($data as $d) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $d['nama']; ?></td>
                                        <td><?= $d['alamat']; ?></td>
                                        <td><?= $d['nik']; ?></td>
                                        <td><?= $d['ttl']; ?></td>
                                        <td><?= $d['pendidikan']; ?></td>
                                        <td><?= $d['status']; ?></td>
                                        <td><?= $d['departemen']; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--Row-->

    <div class="row">
        <div class="col-lg-12 text-center">
            <p>Kunjungi <a href="https://akuibirdnest.com/id/about-akui-bird-nest/" class="btn btn-primary btn-sm" target="_blank"><i class="fas fa-home"></i>&nbsp;PT Akui Bird</a></p>
        </div>
    </div>

</div>
<!---Container Fluid-->