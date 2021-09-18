<div class="container mt-3">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <h5 class="card-header">Form Tambah Data Lowongan</h5>
                <div class="card-body">
                    <!-- <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                    <?php endif; ?> -->
                    <form action="" method="POST">
                        <div class="form-group  mb-3">
                            <label for="nama" class="form-label">Deskripsi Pekerjaan</label>
                            <input type="text" name="deskripsi_pekerjaan" class="form-control" id="deskripsi_pekerjaan">
                            <div class="form-text text-danger"><?= form_error('deskripsi_pekerjaan') ?></div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="kemitraan" class="form-labe">Kemitraan</label>
                            <select name="mitra_id" id="mitra_id" class="form-select">
                                <option value="">--Kemitraan--</option>
                                <?php foreach ($mitra->result() as $row) : ?>
                                    <option value="<?= $row->id ?>"><?= $row->nama ?></option>
                                <?php endforeach; ?>
                            </select>
                            <div class="form-text text-danger"><?= form_error('mitra_id') ?></div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="tanggal_akhir" class="form-label">Dateline Pendaftaran</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                <input type="text" name="tanggal_akhir" class="form-control datepicker" id="tanggal_akhir">
                            </div>
                            <div class="form-text text-danger"><?= form_error('tanggal_akhir') ?></div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="lowongan_email" class="form-label">Email</label>
                            <input type="text" name="lowongan_email" class="form-control" id="lowongan_email">
                            <div class="form-text text-danger"><?= form_error('lowongan_email') ?></div>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true,
            todayHighlight: true,
        });
    });
</script>