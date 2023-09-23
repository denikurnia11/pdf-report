<?= $this->extend("layout/template"); ?>

<?= $this->section('content'); ?>
<div class="card card-primary px-3">
    <div class="card-header">
        <h3 class="card-title">Quick Example</h3>
    </div>
    <form action="<?= base_url('form4'); ?>" method="POST">
        <div class="card-body">
            <hr>
            <h2 class="text-center">SURVEILENS INFEKSI RS</h2>
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>No. RM</label>
                        <input type="text" name="norm" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" name="tgllahir" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>NIK</label>
                        <input type="text" name="nik" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
            </div>
            <h5>A. Diagnosa Masuk</h5>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Diagnosa Masuk</label>
                        <input type="text" name="diagnosa_masuk" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
            </div>
            <h5>B. Pindah Ke Ruangan</h5>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Pindah Ke Ruangan</label>
                        <input type="text" name="pindah_keruangan1" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Tanggal</label>
                        <input type="date" name="tanggal_pindah1" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <!-- <label>Pindah Ke Ruangan 2</label> -->
                        <input type="text" name="pindah_keruangan2" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <!-- <label>Tanggal</label> -->
                        <input type="date" name="tanggal_pindah2" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
            </div>
            <h5>C. Faktor Resiko Selamat Dirawat</h5>
            <div class="row">
                <div class="col">
                    <label>1. Jenis Tindakan/ Alat Kesehatan</label>
                    <div class="table-responsive p-0">
                        <table class="table table-bordered" style="font-size: 12px;">
                            <thead>
                                <tr>
                                    <td class="font-weight-bold text-center" rowspan="2">No</td>
                                    <td class="font-weight-bold text-center " rowspan="2">Jenis Tindakan/ Alkes</td>
                                    <td class="font-weight-bold text-center" rowspan="2">Lokasi</td>
                                    <td class="font-weight-bold text-center" colspan="2">Tanggal Pemasangan</td>
                                    <td class="font-weight-bold text-center" rowspan="2">Total Hari</td>
                                    <td class="font-weight-bold text-center" rowspan="2">Tanggal Infeksi</td>
                                    <td class="font-weight-bold text-center" rowspan="2">Tanggal Infeksi</td>
                                </tr>
                                <tr>
                                    <td class=" font-weight-bold text-center">Mulai</td>
                                    <td class="font-weight-bold text-center">s/d</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td class="">Intravena kateter</td>
                                    <input type="hidden" value="Intravena kateter" name="jenis_tindakan[]">
                                    <td class="text-center"><input type="text" name="lokasi[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_mulai[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_selesai[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="number" name="total_hari[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_infeksi[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_infeksi2[]" style="font-size: 10px;" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td class="text-center "></td>
                                    <td class="">Vena Sentralz</td>
                                    <input type="hidden" value="Vena Sentralz" name="jenis_tindakan[]">
                                    <td class="text-center"><input type="text" name="lokasi[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_mulai[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_selesai[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="number" name="total_hari[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_infeksi[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_infeksi2[]" style="font-size: 10px;" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td class="text-center "><span style="opacity: 0;">.</span></td>
                                    <td class="text-center"><input type="text" style="font-size: 10px;" class="form-control" name="jenis_tindakan[]"></td>
                                    <td class="text-center"><input type="text" name="lokasi[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_mulai[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_selesai[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="number" name="total_hari[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_infeksi[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_infeksi2[]" style="font-size: 10px;" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td class="text-center "></td>
                                    <td class="">Vena Perifer</td>
                                    <input type="hidden" value="Vena Perifer" name="jenis_tindakan[]">
                                    <td class="text-center"><input type="text" name="lokasi[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_mulai[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_selesai[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="number" name="total_hari[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_infeksi[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_infeksi2[]" style="font-size: 10px;" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td class="text-center "><span style="opacity: 0;">.</span></td>
                                    <td class="text-center"><input type="text" style="font-size: 10px;" class="form-control" name="jenis_tindakan[]"></td>
                                    <td class="text-center"><input type="text" name="lokasi[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_mulai[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_selesai[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="number" name="total_hari[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_infeksi[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_infeksi2[]" style="font-size: 10px;" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td class="text-center "></td>
                                    <td class="">Arteri</td>
                                    <input type="hidden" value="Arteri" name="jenis_tindakan[]">
                                    <td class="text-center"><input type="text" name="lokasi[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_mulai[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_selesai[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="number" name="total_hari[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_infeksi[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_infeksi2[]" style="font-size: 10px;" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td class="text-center "><span style="opacity: 0;">.</span></td>
                                    <td class="text-center"><input type="text" style="font-size: 10px;" class="form-control" name="jenis_tindakan[]"></td>
                                    <td class="text-center"><input type="text" name="lokasi[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_mulai[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_selesai[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="number" name="total_hari[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_infeksi[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_infeksi2[]" style="font-size: 10px;" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td class="text-center "></td>
                                    <td class="">Umbilikal</td>
                                    <input type="hidden" value="Umbilikal" name="jenis_tindakan[]">
                                    <td class="text-center"><input type="text" name="lokasi[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_mulai[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_selesai[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="number" name="total_hari[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_infeksi[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_infeksi2[]" style="font-size: 10px;" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td class="text-center "><span style="opacity: 0;">.</span></td>
                                    <td class="text-center"><input type="text" style="font-size: 10px;" class="form-control" name="jenis_tindakan[]"></td>
                                    <td class="text-center"><input type="text" name="lokasi[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_mulai[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_selesai[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="number" name="total_hari[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_infeksi[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_infeksi2[]" style="font-size: 10px;" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td class="text-center ">2</td>
                                    <td class="">Urin Kateter</td>
                                    <input type="hidden" value="Urin Kateter" name="jenis_tindakan[]">
                                    <td class="text-center"><input type="text" name="lokasi[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_mulai[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_selesai[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="number" name="total_hari[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_infeksi[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_infeksi2[]" style="font-size: 10px;" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td class="text-center "><span style="opacity: 0;">.</span></td>
                                    <td class="text-center"><input type="text" style="font-size: 10px;" class="form-control" name="jenis_tindakan[]"></td>
                                    <td class="text-center"><input type="text" name="lokasi[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_mulai[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_selesai[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="number" name="total_hari[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_infeksi[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_infeksi2[]" style="font-size: 10px;" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td class="text-center "></td>
                                    <td class="">Suprapublik Katerer</td>
                                    <input type="hidden" value="Suprapublik Katerer" name="jenis_tindakan[]">
                                    <td class="text-center"><input type="text" name="lokasi[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_mulai[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_selesai[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="number" name="total_hari[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_infeksi[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_infeksi2[]" style="font-size: 10px;" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td class="text-center "><span style="opacity: 0;">.</span></td>
                                    <td class="text-center"><input type="text" style="font-size: 10px;" class="form-control" name="jenis_tindakan[]"></td>
                                    <td class="text-center"><input type="text" name="lokasi[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_mulai[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_selesai[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="number" name="total_hari[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_infeksi[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_infeksi2[]" style="font-size: 10px;" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td class="text-center ">3</td>
                                    <td class="">Ventilasi Mekanik</td>
                                    <input type="hidden" value="Ventilasi Mekanik" name="jenis_tindakan[]">
                                    <td class="text-center"><input type="text" name="lokasi[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_mulai[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_selesai[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="number" name="total_hari[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_infeksi[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_infeksi2[]" style="font-size: 10px;" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td class="text-center "></td>
                                    <td class="">Tuba Endotrakheal</td>
                                    <input type="hidden" value="Tuba Endotrakheal" name="jenis_tindakan[]">
                                    <td class="text-center"><input type="text" name="lokasi[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_mulai[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_selesai[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="number" name="total_hari[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_infeksi[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_infeksi2[]" style="font-size: 10px;" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td class="text-center "><span style="opacity: 0;">.</span></td>
                                    <td class="text-center"><input type="text" style="font-size: 10px;" class="form-control" name="jenis_tindakan[]"></td>
                                    <td class="text-center"><input type="text" name="lokasi[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_mulai[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_selesai[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="number" name="total_hari[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_infeksi[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_infeksi2[]" style="font-size: 10px;" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td class="text-center "></td>
                                    <td class="">Trakeostomi</td>
                                    <input type="hidden" value="Trakeostomi" name="jenis_tindakan[]">
                                    <td class="text-center"><input type="text" name="lokasi[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_mulai[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_selesai[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="number" name="total_hari[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_infeksi[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_infeksi2[]" style="font-size: 10px;" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td class="text-center ">4</td>
                                    <td class="">Lain-lain</td>
                                    <input type="hidden" value="Lain-lain" name="jenis_tindakan[]">
                                    <td class="text-center"><input type="text" name="lokasi[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_mulai[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_selesai[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="number" name="total_hari[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_infeksi[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_infeksi2[]" style="font-size: 10px;" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td class="text-center "></td>
                                    <td class="">Drain</td>
                                    <input type="hidden" value="Drain" name="jenis_tindakan[]">
                                    <td class="text-center"><input type="text" name="lokasi[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_mulai[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_selesai[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="number" name="total_hari[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_infeksi[]" style="font-size: 10px;" class="form-control"></td>
                                    <td class="text-center "><input type="date" name="tgl_infeksi2[]" style="font-size: 10px;" class="form-control"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <label>2. Faktor Penyakit</label>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>HBS.AG </label>
                        <select name="hbs" class="form-control">
                            <option value="Positif">Positif</option>
                            <option value="Negatif">Negatif</option>
                            <option value="Tidak Diperiksa">Tidak Diperiksa</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Anti HCV</label>
                        <select name="hcv" class="form-control">
                            <option value="Positif">Positif</option>
                            <option value="Negatif">Negatif</option>
                            <option value="Tidak Diperiksa">Tidak Diperiksa</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>HIV</label>
                        <select name="hiv" class="form-control">
                            <option value="Positif">Positif</option>
                            <option value="Negatif">Negatif</option>
                            <option value="Tidak Diperiksa">Tidak Diperiksa</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Faktor Lain</label>
                        <input type="text" name="faktor_lain" class="form-control">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Faktor Lain</label>
                        <select name="faktor_lain_pilih" class="form-control">
                            <option value="Tidak Ada Faktor Lain">Tidak Ada Faktor Lain</option>
                            <option value="Positif">Positif</option>
                            <option value="Negatif">Negatif</option>
                            <option value="Tidak Diperiksa">Tidak Diperiksa</option>
                        </select>
                    </div>
                </div>
            </div>
            <label>3. Hasil Laboratorium</label>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Lekosit</label>
                        <input type="text" name="lekosit" class="form-control">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>LED</label>
                        <input type="text" name="led" class="form-control">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>GDS</label>
                        <input type="text" name="gds" class="form-control">
                    </div>
                </div>
            </div>
            <label>4. Hasil Radiologi</label>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Hasil Radiologi</label>
                        <textarea name="hasil_radiologi" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                </div>
            </div>

            <h5>D. Tindakan / Operasi</h5>
            <div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Diagnosa</label>
                            <textarea name="diagnosa" class="form-control" cols="30" rows="5"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Tanggal Operasi</label>
                            <input type="date" name="tgl_operasi" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Lama Operasi (Jam)</label>
                            <input type="number" name="jam_operasi" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Lama Operasi (Menit)</label>
                            <input type="number" name="menit_operasi" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <!-- <label>Tanggal Operasi</label> -->
                            <input type="date" name="tgl_operasi2" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <!-- <label>Lama Operasi (Jam)</label> -->
                            <input type="number" name="jam_operasi2" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <!-- <label>Lama Operasi (Menit)</label> -->
                            <input type="number" name="menit_operasi2" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Jenis Operasi</label>
                            <select name="jenis_operasi" id="jenis_operasi" class="form-control">
                                <option value="Bersih">Bersih</option>
                                <option value="Bersih Tercemar">Bersih Tercemar</option>
                                <option value="Tercemar">Tercemar</option>
                                <option value="Kotor">Kotor</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Tindakan Operasi</label>
                            <select name="tindakan_operasi" id="tindakan_operasi" class="form-control">
                                <option value="Cito">Cito</option>
                                <option value="Elektif">Elektif</option>
                                <option value="lainlain">Lain-lain</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Tindakan Operasi Lain</label>
                            <input type="text" name="tindakan_operasi_lain" id="tindakan_operasi_lain" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>ASA Score</label>
                            <select name="asa" id="asa" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <h5>E. Komplikasi / Infeksi RS</h5>
            <!-- <label for="">1. ILO</label> -->
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>1. ILO</label>
                        <select name="ilo" id="ilo" class="form-control">
                            <option value="Tidak Ada">Tidak Ada</option>
                            <option value="Ada">Ada</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Hari Ke</label>
                        <input type="text" name="hari_ilo" class="form-control">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Hasil Kultur</label>
                        <input type="text" name="hasil_ilo" class="form-control">
                    </div>
                </div>
            </div>
            <!-- <label for="">2. ISK</label> -->
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>2. ISK</label>
                        <select name="isk" id="isk" class="form-control">
                            <option value="Tidak Ada">Tidak Ada</option>
                            <option value="Ada">Ada</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Hari Ke</label>
                        <input type="text" name="hari_isk" class="form-control">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Hasil Kultur</label>
                        <input type="text" name="hasil_isk" class="form-control">
                    </div>
                </div>
            </div>
            <!-- <label for="">3. Pnemonia</label> -->
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>3. Pnemonia</label>
                        <select name="pnemonia" id="pnemonia" class="form-control">
                            <option value="Tidak Ada">Tidak Ada</option>
                            <option value="Ada">Ada</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Hari Ke</label>
                        <input type="text" name="hari_pnemonia" class="form-control">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Hasil Kultur</label>
                        <input type="text" name="hasil_pnemonia" class="form-control">
                    </div>
                </div>
            </div>
            <!-- <label for="">4. IADP</label> -->
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>4. IADP</label>
                        <select name="iadp" id="iadp" class="form-control">
                            <option value="Tidak Ada">Tidak Ada</option>
                            <option value="Ada">Ada</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Hari Ke</label>
                        <input type="text" name="hari_iadp" class="form-control">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Hasil Kultur</label>
                        <input type="text" name="hasil_iadp" class="form-control">
                    </div>
                </div>
            </div>
            <!-- <label for="">5. Plebitis</label> -->
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>5. Plebitis</label>
                        <select name="plebitis" id="plebitis" class="form-control">
                            <option value="Tidak Ada">Tidak Ada</option>
                            <option value="Ada">Ada</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Hari Ke</label>
                        <input type="text" name="hari_plebitis" class="form-control">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Hasil Kultur</label>
                        <input type="text" name="hasil_plebitis" class="form-control">
                    </div>
                </div>
            </div>
            <!-- <label for="">6. Decubitus</label> -->
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>6. Decubitus</label>
                        <select name="decubitus" id="decubitus" class="form-control">
                            <option value="Tidak Ada">Tidak Ada</option>
                            <option value="Ada">Ada</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Hari Ke</label>
                        <input type="text" name="hari_decubitus" class="form-control">
                    </div>
                </div>
            </div>

            <h5>F. Pemakaian Antimikroba</h5>
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Pemakaian Antimikroba</label>
                        <input type="text" name="pemakaian" class="form-control">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Dosis</label>
                        <input type="text" name="dosis" class="form-control">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Tanggal Mulai</label>
                        <input type="date" name="tgl_mulai_am" class="form-control">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Tanggal Selesai</label>
                        <input type="date" name="tgl_selesai_am" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <!-- <label>Pemakaian Antimikroba 2</label> -->
                        <input type="text" name="pemakaian2" class="form-control">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <!-- <label>Dosis 2</label> -->
                        <input type="text" name="dosis2" class="form-control">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <!-- <label>Tanggal Mulai 2</label> -->
                        <input type="date" name="tgl_mulai_am2" class="form-control">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <!-- <label>Tanggal Selesai 2</label> -->
                        <input type="date" name="tgl_selesai_am2" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <!-- <label>Pemakaian Antimikroba 3</label> -->
                        <input type="text" name="pemakaian3" class="form-control">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <!-- <label>Dosis 3</label> -->
                        <input type="text" name="dosis3" class="form-control">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <!-- <label>Tanggal Mulai 3</label> -->
                        <input type="date" name="tgl_mulai_am3" class="form-control">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <!-- <label>Tanggal Selesai 3</label> -->
                        <input type="date" name="tgl_selesai_am3" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <!-- <label>Pemakaian Antimikroba 4</label> -->
                        <input type="text" name="pemakaian4" class="form-control">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <!-- <label>Dosis 4</label> -->
                        <input type="text" name="dosis4" class="form-control">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <!-- <label>Tanggal Mulai 4</label> -->
                        <input type="date" name="tgl_mulai_am4" class="form-control">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <!-- <label>Tanggal Selesai 4</label> -->
                        <input type="date" name="tgl_selesai_am4" class="form-control">
                    </div>
                </div>
            </div>


            <h5>G. Pasien Keluar</h5>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Tanggal Pasien Keluar RS / Meninggal</label>
                        <input type="date" name="tgl_keluar" class="form-control">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Pindah ke RS</label>
                        <input type="text" name="pindah" class="form-control">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Diagnosa Akhir</label>
                        <input type="text" name="diagnosa_akhir" class="form-control">
                    </div>
                </div>
            </div>

            <h5>Tanda Tangan</h5>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Nama Lengkap Perawat Penanggung Jawab (Pengisi Formulir)</label>
                        <input type="text" name="pj" class="form-control">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Nama Lengkap IPCLN</label>
                        <input type="text" name="ipcln" class="form-control">
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

<script>
    // Dapatkan elemen select dan input
    const selectTindakanOperasi = document.getElementById("tindakan_operasi");
    const inputTindakanOperasiLain = document.getElementById("tindakan_operasi_lain");

    // Tambahkan event listener pada elemen select
    selectTindakanOperasi.addEventListener("change", function() {
        // Periksa apakah opsi "Lain-lain" dipilih
        if (selectTindakanOperasi.value === "lainlain") {
            // Hapus atribut disabled dari elemen input
            inputTindakanOperasiLain.removeAttribute("disabled");
        } else {
            // Tambahkan atribut disabled pada elemen input
            inputTindakanOperasiLain.setAttribute("disabled", "disabled");
            inputTindakanOperasiLain.value = '';
        }
    });
</script>
<?= $this->endSection(); ?>