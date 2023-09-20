<?= $this->extend("layout/template"); ?>

<?= $this->section('content'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Fixed Header Table</h3>

                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-head-fixed text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>file</th>
                                    <th>hal</th>
                                    <th>form</th>
                                </tr>
                            </thead>
                            <?php foreach ($list as $row) { ?>
                                <tr>
                                    <td><?= $row->id ?></td>
                                    <td>
                                        <a href="<?= base_url('assets/file/' . $row->nama) ?>" target="_blank" rel="noopener noreferrer"><?= $row->nama ?></a>
                                    </td>
                                    <td><?= $row->hal ?></td>
                                    <td><a href="<?= base_url('list-form') . $row->id ?>" class="btn btn-sm btn-primary">Detail</a></td>
                                </tr>
                            <?php } ?>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<?= $this->endSection(); ?>