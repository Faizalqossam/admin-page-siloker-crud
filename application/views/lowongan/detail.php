<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <h5 class="card-header">Detail Data Lowongan</h5>
                <div class="card-body">
                    <h5 class="card-title"><?= $lowongan['deskripsi_pekerjaan'];?></h5>
                    <p class="card-text">Dateline pendaftaran <?= $lowongan['tanggal_akhir'];?></p>
                    <p class="card-text">Kemitraan <?= $lowongan['nama'];?></p>
                    <p class="card-text"><?= $lowongan['lowongan_email'];?></p>
                    <a href="#" class="btn btn-primary">Daftar</a>
                </div>
            </div>
        </div>
    </div>
</div>