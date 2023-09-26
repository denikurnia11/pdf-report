<?= $this->extend("layout/template"); ?>

<?= $this->section('content'); ?>
<div class="card">
    <div class="card-header">
        <a class="btn btn-sm btn-primary" href="<?= base_url('form7') ?>"> <i class="fas fa-plus"></i> Buat Form</a>
        <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>No. RM</th>
                    <th>Form</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($form7data as $key => $row) { ?>
                    <tr>
                        <td><?= $key + 1; ?></td>
                        <td><?= $row['nama']; ?></td>
                        <td><?= $row['norm']; ?></td>
                        <td><a target="_blank" href="<?= base_url('download-form7/') . $row['id'] ?>" class="btn btn-sm btn-primary">Download PDF</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</div>



<?= $this->endSection(); ?>