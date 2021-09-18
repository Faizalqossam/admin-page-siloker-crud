<div class="container mt-3">
    <div class="col-md-6">
        <?php if ($this->session->flashdata('flash')) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">Data lowongan
                <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
        <div class="row">
            <h1>Daftar Lowongan</h1>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-7">
            <a href="<?= base_url() ?>lowongan/tambah" class="btn btn-primary">
                <i class="fa fa-plus"></i> Tambah Data Lowongan</a>
        </div>
    </div>
    <div class="col-md-12">
        <div class="row">
            <table class="table table-dark mt-3">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Deskripsi Pekerjaan</th>
                        <th>Kemitraan</th>
                        <th>Dateline Pendaftaran</th>
                        <th>Kontak</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($lowongan as $row) : ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $row->deskripsi_pekerjaan ?></td>
                            <td><?= $row->nama ?></td>
                            <td><?= $row->tanggal_akhir ?></td>
                            <td><?= $row->lowongan_email ?></td>
                            <td>
                                <a href="<?= base_url() ?>lowongan/detail/<?= $row->lowongan_id ?>" class="btn btn-success"><i class="fa fa-eye"></i> </a>
                                <a href="<?= base_url() ?>lowongan/edit/<?= $row->lowongan_id ?>" class="btn btn-warning"><i class="fa fa-edit"></i> </a>
                                <a href="<?= base_url() ?>lowongan/hapus/<?= $row->lowongan_id ?>" class="btn btn-danger" onclick="return confirm('yakin?');"><i class="fa fa-trash"></i> </a>
                            </td>
                        </tr>
                    <?php $no++;
                    endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>