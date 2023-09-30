<?= $this->extend("layout/template"); ?>

<?= $this->section('content'); ?>
<div class="card card-primary px-3">
    <div class="card-header">
        <h3 class="card-title">Quick Example</h3>
    </div>
    <form action="<?= base_url('form9'); ?>" method="POST">
        <div class="card-body">
            <hr>
            <h2 class="text-center">PENGKAJIAN AWAL PASIEN DEWASA / LANSIA</h2>
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
                        <label>NIK</label>
                        <input type="text" name="nik" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" name="tgllahir" id="tgllahir" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Cara masuk</label>
                        <select name="cara_masuk" class="form-control">
                            <option value="jalan">jalan</option>
                            <option value="kursi roda">kursi roda</option>
                            <option value="brankart">brankart</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Asal masuk</label>
                        <select name="asal_masuk" class="form-control">
                            <option value="IGD">IGD</option>
                            <option value="Poliklinik">Poliklinik</option>
                        </select>
                    </div>
                </div>
            </div>
            <label for="">A. RIWAYAT ALERGI</label>
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Riwayat Alergi</label>
                        <select name="alergi" class="form-control" id="alergiSelect">
                            <option value="tidak">tidak</option>
                            <option value="ya">ya</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Sebutkan Alergi</label>
                        <input type="text" class="form-control" name="alergi_ya" id="alergiInput" disabled>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Bila Ya,Tindakan penanganan</label>
                        <select name="tindakan" class="form-control" id="tindakan" disabled>
                            <option value="hindari penyebab">hindari penyebab</option>
                            <option value="periksa">periksa</option>
                            <option value="lainlain">Lain-lain</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Sebutkan Tindakan Lain</label>
                        <input type="text" class="form-control" name="tindakan_lain" id="tindakan_lain" disabled>
                    </div>
                </div>
            </div>

            <label for="">B. Tanda Vital</label>
            <div class="row">
                <div class="col-sm-2">
                    <div class="form-group">
                        <label>Tekanan Darah (mmHg)</label>
                        <input type="text" name="td" class="form-control" placeholder="Contoh 120/80">
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label>Denyut Jantung (/menit)</label>
                        <input type="number" name="dj" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label>Pernafasan (/menit)</label>
                        <input type="number" name="pernafasan" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label>Suhu (°C)</label>
                        <input type="number" name="suhu" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label>Saturasi Oksigen (%)</label>
                        <input type="number" name="so" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
            </div>

            <label for="">C. Neurosensorik</label>
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Kesadaran</label>
                        <select name="kesadaran" class="form-control" id="kesadaran">
                            <option value="compos mentis">compos mentis</option>
                            <option value="somnolen">somnolen</option>
                            <option value="delirium">delirium</option>
                            <option value="sopor">sopor</option>
                            <option value="koma">koma</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>GCS (E)</label>
                        <input type="text" class="form-control" name="gcse">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>GCS (M)</label>
                        <input type="text" class="form-control" name="gcsm">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>GCS (V)</label>
                        <input type="text" class="form-control" name="gcsv">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Pendengaran</label>
                        <select name="pendengaran" class="form-control" id="pendengaran">
                            <option value="Normal">Normal</option>
                            <option value="Kurang pendengaran (Ka/Ki)">Kurang pendengaran (Ka/Ki)</option>
                            <option value="Gangguan pendengaran">Gangguan pendengaran</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Sebutkan Lainnya</label>
                        <input type="text" class="form-control" name="pendengaran_lain" id="pendengaran_lain" disabled>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Penglihatan</label>
                        <select name="penglihatan" class="form-control" id="penglihatan">
                            <option value="Normal">Normal</option>
                            <option value="Kacamata">Kacamata</option>
                            <option value="Lensa Kontak">Lensa Kontak</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Sebutkan Lainnya</label>
                        <input type="text" class="form-control" name="penglihatan_lain" id="penglihatan_lain" disabled>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Bicara</label>
                        <select name="bicara" class="form-control" id="bicara">
                            <option value="Normal">Normal</option>
                            <option value="Pelo">Pelo</option>
                            <option value="Aphasia">Aphasia</option>
                            <option value="Kelainan bicara">Kelainan bicara</option>
                            <option value="Tidak komunikatif">Tidak komunikatif</option>
                        </select>
                    </div>
                </div>
            </div>

            <label for="">D. Respirasi</label>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Pernapasan</label>
                        <select name="pernapasan" class="form-control" id="pernapasan">
                            <option value="Reguler">Reguler</option>
                            <option value="Irreguler">Irreguler</option>
                            <option value="Dyspnea">Dyspnea</option>
                            <option value="Orthopnea">Orthopnea</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Adakah Kelainan</label>
                        <select name="pernapasan_kelainan" class="form-control" id="pernapasan_kelainan">
                            <option value="Tak ada Kelainan">Tak ada Kelainan</option>
                            <option value="Whezing">Whezing</option>
                            <option value="Ronkhi">Ronkhi</option>
                            <option value="stridor">stridor</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Adakah Batuk</label>
                        <select name="batuk" class="form-control" id="batuk">
                            <option value="Tidak">Tidak</option>
                            <option value="Ya">Ya, jelaskan</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Jelaskan</label>
                        <input type="text" class="form-control" name="batuk_ya" id="batuk_ya" disabled>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Adakah Sputum</label>
                        <select name="sputum" class="form-control" id="sputum">
                            <option value="Tidak">Tidak</option>
                            <option value="Ya">Ya, jelaskan</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Jelaskan</label>
                        <input type="text" class="form-control" name="sputum_ya" id="sputum_ya" disabled>
                    </div>
                </div>
            </div>

            <label for="">E. Sirkulasi</label>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Nadi</label>
                        <select name="nadi" class="form-control" id="nadi">
                            <option value="Reguler">Reguler</option>
                            <option value="Irreguler">Irreguler</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Adakah</label>
                        <select name="nadi_adakah" class="form-control" id="nadi_adakah">
                            <option value="Tidak ada">Tidak ada</option>
                            <option value="Nyeri dada">Nyeri dada</option>
                            <option value="Edema">Edema</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Jelaskan</label>
                        <input type="text" class="form-control" name="nadi_jelaskan" id="nadi_jelaskan">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Ekstremitas</label>
                        <select name="ekstremitas" class="form-control" id="ekstremitas">
                            <option value="Hangat">Hangat</option>
                            <option value="Dingin">Dingin</option>
                            <option value="Sianosis">Sianosis</option>
                            <option value="Capillary refill (> 3 detik/ < 3 detik)">Capillary refill (> 3 detik/ < 3 detik)</option>
                        </select>
                    </div>
                </div>
            </div>

            <label for="">F. Integritas Kulit</label>
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Luka / lesi </label>
                        <select name="lukalesi" class="form-control" id="lukalesi">
                            <option value="tidak ada">tidak ada</option>
                            <option value="ada">ada</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Bila ada, jenis luka</label>
                        <select name="jenis_luka" class="form-control" id="jenis_luka">
                            <option value="tidak ada">tidak ada</option>
                            <option value="steril">steril</option>
                            <option value="bersih">bersih</option>
                            <option value="kotor">kotor</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Lokasi luka</label>
                        <select name="lokasi_luka" class="form-control" id="lokasi_luka">
                            <option value="tidak ada">tidak ada</option>
                            <option value="ekstremitas atas">ekstremitas atas</option>
                            <option value="ekstremitas bawah">ekstremitas bawah</option>
                            <option value="seluruh tubuh">seluruh tubuh</option>
                            <option value="lainlain">Lain-lain</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Lokasi luka lain</label>
                        <input type="text" class="form-control" name="lokasi_luka_lain" id="lokasi_luka_lain" disabled>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Luka karena</label>
                        <select name="luka_karena" class="form-control" id="luka_karena">
                            <option value="tidak ada">tidak ada</option>
                            <option value="operasi">operasi</option>
                            <option value="WSD">WSD</option>
                            <option value="sulkus (diabetikum/dekubitus)">sulkus (diabetikum/dekubitus)</option>
                            <option value="lainlain">Lain-lain</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Luka Karena lain</label>
                        <input type="text" class="form-control" name="luka_karena_lain" id="luka_karena_lain" disabled>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Tanda - tanda radang</label>
                        <select name="radang" class="form-control" id="radang">
                            <option value="tidak ada">tidak ada</option>
                            <option value="kemerahan">kemerahan</option>
                            <option value="panas">panas</option>
                            <option value="bengkak">bengkak</option>
                            <option value="nyeri">nyeri</option>
                            <option value="fungsioleisa (berubah fungsi)">fungsioleisa (berubah fungsi)</option>
                        </select>
                    </div>
                </div>
            </div>
            <label for="">G. POLA FUNGSIONAL</label> <br>
            <label for="">1. Pola Persepsi dan Pemeliharaan Kesehatan</label>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Kebiasaan periksa bila sakit</label>
                        <select name="kebiasaan_periksa" class="form-control" id="kebiasaan_periksa">
                            <option value="beli obat warung">beli obat warung</option>
                            <option value="periksa ke fasilitas kesehatan">periksa ke fasilitas kesehatan</option>
                            <option value="tidak/jarang diobati karena sembuh sendiri">tidak/jarang diobati karena sembuh sendiri</option>
                        </select>
                    </div>
                </div>
            </div>
            <label for="">2. Pola Nutrisi & Metabolik</label>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Riwayat nutrisi</label>
                        <select name="riwayat_nutrisi" class="form-control" id="riwayat_nutrisi">
                            <option value="anoreksia">anoreksia</option>
                            <option value="mual">mual</option>
                            <option value="muntah">muntah</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Porsi makan</label>
                        <select name="porsi_makan" class="form-control" id="porsi_makan">
                            <option value="cukup">cukup</option>
                            <option value="kurang">kurang</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Diet</label>
                        <select name="diet" class="form-control" id="diet">
                            <option value="Nasi">Nasi</option>
                            <option value="bubur kasar">bubur kasar</option>
                            <option value="bubur saring">bubur saring</option>
                            <option value="sonde">sonde</option>
                            <option value="puasa">puasa</option>
                            <option value="ASI">ASI</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Frekuensi (X perhari)</label>
                        <input type="number" name="frekuensi" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Terpasang NGT</label>
                        <select name="ngt" class="form-control" id="ngtSelect">
                            <option value="Tidak">Tidak</option>
                            <option value="Ya">Ya</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Terpasang hari ke</label>
                        <input type="number" name="terpasang_ngt" class="form-control" id="terpasangInput" disabled>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Tujuan Pemasangan NGT</label>
                        <select name="tujuan_ngt" class="form-control" id="tujuan_ngtSelect" disabled>
                            <option value="Pemenuhan nutrisi">Pemenuhan nutrisi</option>
                            <option value="Cuci lambung">Cuci lambung</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Jumlah Minum (ml/hari)</label>
                        <input type="number" name="jumlah_minum_ngt" class="form-control" id="jumlah_minumInput" disabled>
                    </div>
                </div>
            </div>
            <label for="">3. Pola Eliminasi</label>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>BAB (kali/hari)</label>
                        <input type="number" name="bab" class="form-control">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Konsistensi</label>
                        <select id="konsistensi" name="konsistensi" class="form-control">
                            <option value="Cair">Cair</option>
                            <option value="lunak">lunak</option>
                            <option value="keras">keras</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Warna</label>
                        <select id="warna" name="warna" class="form-control">
                            <option value="merah">merah</option>
                            <option value="hitam">hitam</option>
                            <option value="normal">normal</option>
                        </select>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Keluhan</label>
                        <select id="keluhan" name="keluhan" class="form-control">
                            <option value="Kembung">Kembung</option>
                            <option value="sebah">sebah</option>
                            <option value="Konstipasi">Konstipasi</option>
                            <option value="Diare">Diare</option>
                            <option value="lainlain">Lainnya</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Keluhan Lain</label>
                        <input type="text" name="keluhan_lain" id="keluhan_lain" class="form-control" disabled>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>BAK (kali/hari)</label>
                        <input type="number" name="bak" class="form-control">
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Jenis BAK</label>
                        <select id="jenis_bak" name="jenis_bak" class="form-control">
                            <option value="incontinentia">incontinentia</option>
                            <option value="retensi urine">retensi urine</option>
                            <option value="disuria">disuria</option>
                            <option value="anuria">anuria</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Jumlah BAK (ml/hari)</label>
                        <input type="number" name="jumlah_bak" class="form-control">
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Warna Urine</label>
                        <select id="warna_urine" name="warna_urine" class="form-control">
                            <option value="jernih">jernih</option>
                            <option value="merah">merah</option>
                            <option value="kekuningan">kekuningan</option>
                        </select>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Terpasang Kateter</label>
                        <select id="terpasang_kateter" name="terpasang_kateter" class="form-control">
                            <option value="tidak">tidak</option>
                            <option value="ya">ya</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Terpasang hari ke</label>
                        <input type="number" name="hari_kateter" class="form-control" id="hariKateterInput" disabled>
                    </div>
                </div>

            </div>
            <label for="">4. Pola Istirahat Tidur</label>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Gangguan tidur</label>
                        <select id="gangguan_tidur" name="gangguan_tidur" class="form-control">
                            <option value="tidak">tidak</option>
                            <option value="ya">ya</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Jelaskan</label>
                        <input type="text" name="ganguan_tidur_jelaskan" id="ganguan_tidur_jelaskan" class="form-control" disabled>
                    </div>
                </div>
            </div>
            <label for="">5. Pola Toleransi Koping Stres</label>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Koping terhadap sakitnya</label>
                        <select id="koping" name="koping" class="form-control">
                            <option value="takut / khawatir">takut / khawatir</option>
                            <option value="menerima">menerima</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Penyelesaian bila ada masalah</label>
                        <select id="penyelesaian_masalah" name="penyelesaian_masalah" class="form-control">
                            <option value="sendiri">sendiri</option>
                            <option value="minta bantuan orang terdekat">minta bantuan orang terdekat</option>
                        </select>
                    </div>
                </div>

            </div>
            <label for="">6. Pola Nilai dan Kepercayaan</label>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Kebiasaan Menjalankan Ibadah</label>
                        <select id="ibadah" name="ibadah" class="form-control">
                            <option value="teratur">teratur</option>
                            <option value="tidak teratur">tidak teratur</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Kebutuhan pelayanan rohani</label>
                        <select id="pelayanan" name="pelayanan" class="form-control">
                            <option value="Tidak">Tidak</option>
                            <option value="Ya">Ya</option>
                        </select>
                    </div>
                </div>
            </div>

            <label for="">7. Pola Persepsi Kognitif</label>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Pengetahuan tentang penyakitnya saat ini</label>
                        <select id="pengetahuan_penyakit" name="pengetahuan_penyakit" class="form-control">
                            <option value="tidak tahu">tidak tahu</option>
                            <option value="sedikit tahu">sedikit tahu</option>
                            <option value="mengerti dan memahami">mengerti dan memahami</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Perawatan/tindakan yang dilakukan</label>
                        <select id="perawatan" name="perawatan" class="form-control">
                            <option value="mengerti">mengerti</option>
                            <option value="tidak mengerti">tidak mengerti</option>
                        </select>
                    </div>
                </div>
            </div>

            <label for="">8. Pola Konsep Diri</label>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Gambaran diri</label>
                        <select id="gambaran_diri" name="gambaran_diri" class="form-control">
                            <option value="optimis dengan kondisi tubuhnya">optimis dengan kondisi tubuhnya</option>
                            <option value="merasa cacat/kurang">merasa cacat/kurang</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Ideal diri</label>
                        <select id="ideal_diri" name="ideal_diri" class="form-control">
                            <option value="menerima diri">menerima diri</option>
                            <option value="menolak keadaan penyakitnya">menolak keadaan penyakitnya</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Harga diri</label>
                        <select id="harga_diri" name="harga_diri" class="form-control">
                            <option value="percaya diri positif">percaya diri positif</option>
                            <option value="rendah diri">rendah diri</option>
                            <option value="malu">malu</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Peran</label>
                        <select id="peran" name="peran" class="form-control">
                            <option value="peran minimal">peran minimal</option>
                            <option value="digantikan orang lain">digantikan orang lain</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Identitas diri</label>
                        <select id="identitas_diri" name="identitas_diri" class="form-control">
                            <option value="persepsi diri baik">persepsi diri baik</option>
                            <option value="persepsi diri kurang baik">persepsi diri kurang baik</option>
                        </select>
                    </div>
                </div>
            </div>


            <label for="">9. Pola Aktifitas dan Latihan</label>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Membutuhkan Alat bantu</label>
                        <select id="alat_bantu" name="alat_bantu" class="form-control">
                            <option value="Tidak">Tidak</option>
                            <option value="Ya">Ya</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Sesak Nafas saat aktifitas</label>
                        <select id="sesak_nafas" name="sesak_nafas" class="form-control">
                            <option value="Tidak">Tidak</option>
                            <option value="Ya">Ya</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Kekuatan Otot</label>
                        <input type="text" class="form-control" name="kekuatan_otot">
                    </div>
                </div>
            </div>

            <label for="">10. Pola Hubungan dan Peran</label>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Hubungan dengan orang lain selama dirawat</label>
                        <select id="hubungan_orang" name="hubungan_orang" class="form-control">
                            <option value="terganggu">terganggu</option>
                            <option value="tidak terganggu">tidak terganggu</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Peran di dalam keluarga sebagai</label>
                        <select id="peran_dikeluarga" name="peran_dikeluarga" class="form-control">
                            <option value="Ayah">Ayah</option>
                            <option value="Ibu">Ibu</option>
                            <option value="Anak">Anak</option>
                            <option value="lainlain">Lain-lain</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Peran Lain</label>
                        <input type="text" name="peran_lain" class="form-control" id="peranLainInput" disabled>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Perannya selama sakit</label>
                        <select id="peran_selama_sakit" name="peran_selama_sakit" class="form-control">
                            <option value="tidak dapat dilakukan">Tidak dapat dilakukan</option>
                            <option value="minimal">Minimal</option>
                            <option value="digantikan orang lain">Digantikan orang lain</option>
                        </select>
                    </div>
                </div>
            </div>

            <label for="">11.Pola Seksual dan Reproduksi</label>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Jumlah Anak (Orang)</label>
                        <input type="number" name="jumlah_anak" class="form-control" id="jumlah_anak">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Menikah Umur (Tahun)</label>
                        <input type="number" name="menikah_umur" class="form-control" id="menikah_umur">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Anak Pertama Lahir Umur (Tahun)</label>
                        <input type="number" name="anak_pertama" class="form-control" id="anak_pertama">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Pernah menderita penyakit kelamin</label>
                        <select id="penyakit_kelamin" name="penyakit_kelamin" class="form-control">
                            <option value="tidak">tidak</option>
                            <option value="ya">ya</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Jenis Keluhan</label>
                        <input type="text" name="jenis_keluhan" class="form-control" id="jenis_keluhan" disabled>
                    </div>
                </div>
            </div>

            <label for="">H. ASSESMEN KHUSUS LANSIA (USIA > 60 TAHUN)</label> <br>
            <label for="">Kondisi Fisik</label>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Kondisi Umum</label>
                        <select id="kondisi_umum" name="kondisi_umum" class="form-control">
                            <option value="Baik" skor="4">Baik (4)</option>
                            <option value="Lumayan" skor="3">Lumayan (3)</option>
                            <option value="Buruk" skor="2">Buruk (2)</option>
                            <option value="Sangat Buruk" skor="1">Sangat Buruk (1)</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Nilai</label>
                        <input type="text" name="nilai1" id="nilai1" class="form-control" value="4" readonly>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Kesadaran</label>
                        <select id="kesadaran_skor" name="kesadaran_skor" class="form-control">
                            <option value="Komposmentis" skor="4">Komposmentis (4)</option>
                            <option value="Apatis" skor="3">Apatis (3)</option>
                            <option value="Soporis" skor="2">Soporis (2)</option>
                            <option value="Koma" skor="1">Koma (1)</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Nilai</label>
                        <input type="text" name="nilai2" id="nilai2" class="form-control" value="4" readonly>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Aktifitas</label>
                        <select id="aktifitas" name="aktifitas" class="form-control">
                            <option value="Dapat berpindah" skor="4">Dapat berpindah (4)</option>
                            <option value="Dapat bantuan" skor="3">Dapat bantuan (3)</option>
                            <option value="Dikursi" skor="2">Dikursi (2)</option>
                            <option value="Ditempat tidur" skor="1">Ditempat tidur (1)</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Nilai</label>
                        <input type="text" name="nilai3" id="nilai3" class="form-control" value="4" readonly>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Mobilitas</label>
                        <select id="mobilitas" name="mobilitas" class="form-control">
                            <option value="Bergerak bebas" skor="4">Bergerak bebas (4)</option>
                            <option value="Sedikit terbatas" skor="3">Sedikit terbatas (3)</option>
                            <option value="Sangat terbatas" skor="2">Sangat terbatas (2)</option>
                            <option value="Tak bisa bergerak" skor="1">Tak bisa bergerak (1)</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Nilai</label>
                        <input type="text" name="nilai4" id="nilai4" class="form-control" value="4" readonly>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Inkontinensia urin</label>
                        <select id="inkontinensia_urin" name="inkontinensia_urin" class="form-control">
                            <option value="Tidak ngompol" skor="4">Tidak ngompol (4)</option>
                            <option value="Kadang-kadang" skor="3">Kadang-kadang (3)</option>
                            <option value="Sering" skor="2">Sering (2)</option>
                            <option value="Sering (alvi+urine)" skor="1">Sering (alvi+urine) (1)</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Nilai</label>
                        <input type="text" name="nilai5" id="nilai5" class="form-control" value="4" readonly>
                    </div>
                </div>
            </div>






            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Decubitus</label>
                        <select id="decubitus" name="decubitus" class="form-control">
                            <option value="tidak">tidak</option>
                            <option value="ada">ada</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Derajat</label>
                        <select id="derajat" name="derajat" class="form-control">
                            <option value="Tidak ada">Tidak ada</option>
                            <option value="I">I</option>
                            <option value="II">II</option>
                            <option value="III">III</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Pernah jatuh</label>
                        <select id="pernah_jatuh" name="pernah_jatuh" class="form-control">
                            <option value="tidak">tidak</option>
                            <option value="ya">ya</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Bulan</label>
                        <input type="number" name="bulan_jatuh" id="bulan_jatuh" class="form-control" disabled>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Tahun</label>
                        <input type="number" name="tahun_jatuh" id="tahun_jatuh" class="form-control" disabled>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Kontraktur/nyeri gerak</label>
                        <select id="kontraktur" name="kontraktur" class="form-control">
                            <option value="tidak">tidak</option>
                            <option value="ya">ya</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Letak Nyeri</label>
                        <input type="text" name="letak_nyeri" class="form-control" disabled>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Menggunakan alat bantu</label>
                        <select id="alat_bantu_h" name="alat_bantu_h" class="form-control">
                            <option value="tidak">tidak</option>
                            <option value="ya">ya</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Jenis Alat Bantu</label>
                        <select id="jenis_alat_bantu_h" name="jenis_alat_bantu_h" class="form-control" disabled>
                            <option value="tongkat">tongkat</option>
                            <option value="walker">walker</option>
                            <option value="kursi roda">kursi roda</option>
                            <option value="komodo">komodo</option>
                            <option value="lainnya">Lain-lain</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Memori</label>
                        <select id="memori" name="memori" class="form-control">
                            <option value="baik">baik</option>
                            <option value="sering lupa">sering lupa</option>
                            <option value="tidak ingat">tidak ingat</option>
                        </select>
                    </div>
                </div>
            </div>

            <label for="">I. NUTRISI</label> <br>
            <label for="">UNTUK PASIEN DEWASA / LANSIA</label>
            <div class="row">
                <div class="col-sm-8">
                    <div class="form-group">
                        <label>1. Apakah pasien mengalami penurunan BB yang tidak diinginkan dalam 6 bulan terakhir ?</label>
                        <select id="soal1" name="soal1" class="form-control">
                            <option value="Tidak ada penurunan BB" skor="0">Tidak ada penurunan BB</option>
                            <option value="Tidak Yakin/tidak tahu/terasa baju longgar" skor="2">Tidak Yakin/tidak tahu/terasa baju longgar</option>
                            <option value="ya">Ya</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Jika Ya, berapa penurunan BB tersebut ?</label>
                        <select id="soal2" name="soal2" class="form-control" disabled>
                            <option value="1 - 5 kg" skor="1">1 - 5 kg</option>
                            <option value="6 - 10 kg" skor="2">6 - 10 kg</option>
                            <option value="11 - 15 kg" skor="3">11 - 15 kg</option>
                            <option value="> 15 kg" skor="4">> 15 kg</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <div class="form-group">
                        <label>2. Apakah asupan makan berkurang karena tidak nafsu makan ?</label>
                        <select id="soal3" name="soal3" class="form-control">
                            <option value="Tidak" skor="0">Tidak</option>
                            <option value="Ya" skor="1">Ya</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Total Skor</label>
                        <input type="text" name="total_skor" class="form-control" readonly>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Pasien dengan diagnosis khusus</label>
                        <select id="diagnosis_khusus" name="diagnosis_khusus" class="form-control">
                            <option value="Tidak">Tidak</option>
                            <option value="Ya">Ya</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Sebutkan</label>
                        <input type="text" name="diagnosis_khusus_sebutkan" id="diagnosis_khusus_sebutkan" class="form-control" disabled>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Kesimpulan : Beresiko Manultrisi</label>
                        <select id="kesimpulan" name="kesimpulan" class="form-control">
                            <option value="Tidak">Tidak</option>
                            <option value="Ya">Ya</option>
                        </select>
                    </div>
                </div>
            </div>

            <label for="">UNTUK OBSTETRI / KEHAMILAN / NIFAS</label>
            <div class="row">
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>1. Apakah asupan makan berkurang karena tidak nafsu makan ?</label>
                        <select id="soal4" name="soal4" class="form-control">
                            <option value="Tidak">Tidak</option>
                            <option value="Ya">Ya</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>2. Ada gangguan metabolisme ?</label>
                        <select id="soal5" name="soal5" class="form-control">
                            <option value="Tidak">Tidak</option>
                            <option value="Ya">Ya</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Sebutkan</label>
                        <input type="text" name="soal5_sebutkan" id="soal5_sebutkan" class="form-control" disabled>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>3. Ada pertambahan BB yang kurang atau lebih selama kehamilan ?</label>
                        <select id="soal6" name="soal6" class="form-control">
                            <option value="Tidak">Tidak</option>
                            <option value="Ya">Ya</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>2. Nilai HB 11 g/dl atau HCT 30% ?</label>
                        <select id="soal7" name="soal7" class="form-control">
                            <option value="Tidak">Tidak</option>
                            <option value="Ya">Ya</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Kesimpulan : Beresiko Manultrisi</label>
                        <select id="kesimpulan2" name="kesimpulan2" class="form-control">
                            <option value="Tidak">Tidak</option>
                            <option value="Ya">Ya</option>
                        </select>
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
    (function() {
        // Mendapatkan elemen-elemen yang diperlukan
        const inkontinensiaUrinSelect = document.getElementById('inkontinensia_urin');
        const nilaiInput = document.getElementById('nilai5'); // Declare using let

        // Menambahkan event listener untuk elemen select "Inkontinensia urin"
        inkontinensiaUrinSelect.addEventListener('change', updateNilai);

        // Fungsi untuk mengupdate nilai sesuai dengan opsi yang dipilih
        function updateNilai() {
            const selectedOption = inkontinensiaUrinSelect.options[inkontinensiaUrinSelect.selectedIndex];
            const skor = parseInt(selectedOption.getAttribute('skor')) || 0;

            // Memasukkan skor ke dalam input "Nilai"
            nilaiInput.value = skor;
        }

        // Memanggil fungsi updateNilai saat halaman dimuat untuk mengatur nilai awal
        updateNilai();
    })();
</script>


<script>
    (function() {
        // Mendapatkan elemen-elemen yang diperlukan
        const mobilitasSelect = document.getElementById('mobilitas');
        let nilaiInput = document.getElementById('nilai4'); // Declare using let

        // Menambahkan event listener untuk elemen select "Mobilitas"
        mobilitasSelect.addEventListener('change', updateNilai);

        // Fungsi untuk mengupdate nilai sesuai dengan opsi yang dipilih
        function updateNilai() {
            const selectedOption = mobilitasSelect.options[mobilitasSelect.selectedIndex];
            const skor = parseInt(selectedOption.getAttribute('skor')) || 0;

            // Memasukkan skor ke dalam input "Nilai"
            nilaiInput.value = skor;
        }

        // Memanggil fungsi updateNilai saat halaman dimuat untuk mengatur nilai awal
        updateNilai();
    })();
</script>



<script>
    (function() {
        // Mendapatkan elemen-elemen yang diperlukan
        const aktifitasSelect = document.getElementById('aktifitas');
        let nilaiInput = document.getElementById('nilai3'); // Declare using let

        // Menambahkan event listener untuk elemen select "Aktifitas"
        aktifitasSelect.addEventListener('change', updateNilai);

        // Fungsi untuk mengupdate nilai sesuai dengan opsi yang dipilih
        function updateNilai() {
            const selectedOption = aktifitasSelect.options[aktifitasSelect.selectedIndex];
            const skor = parseInt(selectedOption.getAttribute('skor')) || 0;

            // Memasukkan skor ke dalam input "Nilai"
            nilaiInput.value = skor;
        }

        // Memanggil fungsi updateNilai saat halaman dimuat untuk mengatur nilai awal
        updateNilai();
    })();
</script>



<script>
    (function() {
        // Mendapatkan elemen-elemen yang diperlukan
        const kesadaranSelect = document.getElementById('kesadaran_skor');
        const nilaiInput = document.getElementById('nilai2');

        // Menambahkan event listener untuk elemen select "Kesadaran"
        kesadaranSelect.addEventListener('change', updateNilai);

        // Fungsi untuk mengupdate nilai sesuai dengan opsi yang dipilih
        function updateNilai() {
            const selectedOption = kesadaranSelect.options[kesadaranSelect.selectedIndex];
            const skor = parseInt(selectedOption.getAttribute('skor')) || 0;

            // Memasukkan skor ke dalam input "Nilai"
            nilaiInput.value = skor;
        }

        // Memanggil fungsi updateNilai saat halaman dimuat untuk mengatur nilai awal
        updateNilai();
    })();
</script>


<script>
    // Mendapatkan elemen-elemen yang diperlukan
    const kondisiUmumSelect = document.getElementById('kondisi_umum');
    const nilaiInput = document.getElementById('nilai1');

    // Menambahkan event listener untuk elemen select "Kondisi Umum"
    kondisiUmumSelect.addEventListener('change', hitungNilai);

    // Fungsi untuk menghitung nilai berdasarkan opsi yang dipilih
    function hitungNilai() {
        const selectedOption = kondisiUmumSelect.options[kondisiUmumSelect.selectedIndex];
        const skor = parseInt(selectedOption.getAttribute('skor')) || 0;

        // Memasukkan skor ke dalam input "Nilai"
        nilaiInput.value = skor;
    }
</script>


<script>
    (function() {
        // Mendapatkan elemen-elemen yang diperlukan
        const soal1Select = document.getElementById('soal1');
        const soal2Select = document.getElementById('soal2');
        const soal3Select = document.getElementById('soal3');
        const totalSkorInput = document.querySelector('input[name="total_skor"]');

        // Menambahkan event listener untuk setiap elemen select
        soal1Select.addEventListener('change', hitungTotalSkor);
        soal2Select.addEventListener('change', hitungTotalSkor);
        soal3Select.addEventListener('change', hitungTotalSkor);

        // Fungsi untuk menghitung total skor
        function hitungTotalSkor() {
            const skor1 = parseInt(soal1Select.options[soal1Select.selectedIndex].getAttribute('skor')) || 0;
            let skor2 = parseInt(soal2Select.options[soal2Select.selectedIndex].getAttribute('skor')) || 0;
            const skor3 = parseInt(soal3Select.options[soal3Select.selectedIndex].getAttribute('skor')) || 0;

            if (soal1Select.options[soal1Select.selectedIndex].value != 'ya') {
                skor2 = 0;
            }
            const totalSkor = skor1 + skor2 + skor3;

            // Memasukkan total skor ke dalam input
            totalSkorInput.value = totalSkor;
        }
    })();
</script>



<script>
    // Dapatkan elemen-elemen yang diperlukan
    const alergiSelect = document.getElementById('alergiSelect');
    const alergiInput = document.getElementById('alergiInput');
    const tindakanSelect = document.getElementById('tindakan');
    const tindakanLainlain = document.getElementById('tindakan_lain');

    // Tambahkan event listener untuk perubahan pada elemen select alergi
    alergiSelect.addEventListener('change', function() {
        if (alergiSelect.value === 'ya') {
            alergiInput.removeAttribute('disabled');
            tindakanSelect.removeAttribute('disabled');
        } else {
            alergiInput.setAttribute('disabled', 'disabled');
            tindakanSelect.setAttribute('disabled', 'disabled');
            tindakanLainlain.setAttribute('disabled', 'disabled');
            alergiInput.value = '';
            // tindakanSelect.value = '';
            tindakanLainlain.value = '';
        }
    });

    // Tambahkan event listener untuk perubahan pada elemen select tindakan
    tindakanSelect.addEventListener('change', function() {
        if (tindakanSelect.value === 'lainlain') {
            tindakanLainlain.removeAttribute('disabled');
        } else {
            tindakanLainlain.setAttribute('disabled', 'disabled');
            tindakanLainlain.value = '';
        }
    });


    // Fungsi untuk mengaktifkan/menonaktifkan input "Sebutkan Lainnya" berdasarkan pilihan
    function toggleInput(selectElementId, inputElementId) {
        const selectElement = document.getElementById(`${selectElementId}`);
        const inputElement = document.getElementById(`${inputElementId}`);
        selectElement.addEventListener('change', function() {
            if (selectElement.value === 'Lainnya' || selectElement.value === 'lainlain') {
                inputElement.removeAttribute('disabled');
            } else {
                inputElement.setAttribute('disabled', 'disabled');
                inputElement.value = '';
            }
        });

    }

    // Tambahkan event listener untuk perubahan pada elemen select pendengaran
    toggleInput('pendengaran', 'pendengaran_lain');
    toggleInput('penglihatan', 'penglihatan_lain');
    toggleInput('lokasi_luka', 'lokasi_luka_lain');
    toggleInput('luka_karena', 'luka_karena_lain');
    toggleInput('keluhan', 'keluhan_lain');



    // Dapatkan elemen select dan input
    const batukSelect = document.getElementById('batuk');
    const batukYaInput = document.getElementById('batuk_ya');

    // Tambahkan event listener untuk perubahan pada elemen select
    batukSelect.addEventListener('change', function() {
        if (batukSelect.value === 'Ya') {
            batukYaInput.removeAttribute('disabled');
        } else {
            batukYaInput.setAttribute('disabled', 'disabled');
            batukYaInput.value = ''; // Mengosongkan nilai input ketika memilih "Tidak"
        }
    });

    // Dapatkan elemen select dan input
    const sputumSelect = document.getElementById('sputum');
    const sputumYaInput = document.getElementById('sputum_ya');

    // Tambahkan event listener untuk perubahan pada elemen select
    sputumSelect.addEventListener('change', function() {
        if (sputumSelect.value === 'Ya') {
            sputumYaInput.removeAttribute('disabled');
        } else {
            sputumYaInput.setAttribute('disabled', 'disabled');
            sputumYaInput.value = ''; // Mengosongkan nilai input ketika memilih "Tidak"
        }
    });

    // NGT
    const ngtSelect = document.getElementById('ngtSelect');
    const terpasangInput = document.getElementById('terpasangInput');
    const tujuanSelect = document.getElementById('tujuan_ngtSelect');
    const jumlahMinumInput = document.getElementById('jumlah_minumInput');

    ngtSelect.addEventListener('change', function() {
        if (ngtSelect.value === 'Ya') {
            terpasangInput.removeAttribute('disabled');
            tujuanSelect.removeAttribute('disabled');
            jumlahMinumInput.removeAttribute('disabled');
        } else {
            terpasangInput.setAttribute('disabled', 'disabled');
            terpasangInput.value = '';
            tujuanSelect.setAttribute('disabled', 'disabled');
            jumlahMinumInput.setAttribute('disabled', 'disabled');
            jumlahMinumInput.value = '';
        }
    });
    // End NGT

    // Kateter
    const terpasangKateterSelect = document.getElementById('terpasang_kateter');
    const hariKateterInput = document.getElementById('hariKateterInput');

    terpasangKateterSelect.addEventListener('change', function() {
        if (terpasangKateterSelect.value === 'ya') {
            hariKateterInput.removeAttribute('disabled');
        } else {
            hariKateterInput.setAttribute('disabled', 'disabled');
            hariKateterInput.value = '';
        }
    });
    // End Kateter

    // Menangkap elemen select dan input teks
    const selectElem = document.getElementById('gangguan_tidur');
    const inputElem = document.getElementById('ganguan_tidur_jelaskan');

    // Menambahkan event listener untuk mengawasi perubahan pada elemen select
    selectElem.addEventListener('change', function() {
        // Mengecek apakah opsi 'ya' yang dipilih
        if (selectElem.value === 'ya') {
            // Menghilangkan atribut 'disabled' dari input teks
            inputElem.removeAttribute('disabled');
        } else {
            // Menambahkan atribut 'disabled' ke input teks
            inputElem.setAttribute('disabled', 'disabled');
            // Menghapus isi input teks
            inputElem.value = '';
        }
    });
</script>
<script>
    // Menangkap elemen select "2. Ada gangguan metabolisme?" dan input teks "Sebutkan"
    const soal5Select = document.getElementById('soal5');
    const soal5SebutkanInput = document.getElementById('soal5_sebutkan');

    // Menambahkan event listener untuk mengawasi perubahan pada elemen select "2. Ada gangguan metabolisme?"
    soal5Select.addEventListener('change', function() {
        // Mengecek apakah opsi 'Ya' yang dipilih
        if (soal5Select.value === 'Ya') {
            // Menghilangkan atribut 'disabled' dari input teks "Sebutkan"
            soal5SebutkanInput.removeAttribute('disabled');
        } else {
            // Menambahkan atribut 'disabled' ke input teks "Sebutkan"
            soal5SebutkanInput.setAttribute('disabled', 'disabled');
            // Menghapus isi input teks "Sebutkan"
            soal5SebutkanInput.value = '';
        }
    });
    const diagnosisKhususSelect = document.getElementById('diagnosis_khusus');
    const diagnosisKhususSebutkanInput = document.getElementById('diagnosis_khusus_sebutkan');

    // Menambahkan event listener untuk mengawasi perubahan pada elemen select "Pasien dengan diagnosis khusus"
    diagnosisKhususSelect.addEventListener('change', function() {
        // Mengecek apakah opsi 'Ya' yang dipilih
        if (diagnosisKhususSelect.value === 'Ya') {
            // Menghilangkan atribut 'disabled' dari input teks "Sebutkan"
            diagnosisKhususSebutkanInput.removeAttribute('disabled');
        } else {
            // Menambahkan atribut 'disabled' ke input teks "Sebutkan"
            diagnosisKhususSebutkanInput.setAttribute('disabled', 'disabled');
            // Menghapus isi input teks "Sebutkan"
            diagnosisKhususSebutkanInput.value = '';
        }
    });
    // Peran Keluarga
    const peranDikeluargaSelect = document.getElementById('peran_dikeluarga');
    const peranLainInput = document.getElementById('peranLainInput');

    peranDikeluargaSelect.addEventListener('change', function() {
        if (peranDikeluargaSelect.value === 'lainlain') {
            peranLainInput.removeAttribute('disabled');
        } else {
            peranLainInput.setAttribute('disabled', 'disabled');
            peranLainInput.value = '';
        }
    });
    // End Peran Keluarga
    // Penyakit Kelamin
    const penyakitKelaminSelect = document.getElementById('penyakit_kelamin');
    const jenisKeluhanInput = document.getElementById('jenis_keluhan');

    penyakitKelaminSelect.addEventListener('change', function() {
        if (penyakitKelaminSelect.value === 'ya') {
            jenisKeluhanInput.removeAttribute('disabled');
        } else {
            jenisKeluhanInput.setAttribute('disabled', 'disabled');
            jenisKeluhanInput.value = ''; // Mengatur nilai input menjadi kosong jika tidak
        }
    });
    // End Penyakit Kelamin

    const selectElemn = document.getElementById('pernah_jatuh');
    const bulanInputElem = document.getElementById('bulan_jatuh');
    const tahunInputElem = document.getElementById('tahun_jatuh');

    // Menambahkan event listener untuk mengawasi perubahan pada elemen select
    selectElemn.addEventListener('change', function() {
        // Mengecek apakah opsi 'ya' yang dipilih
        if (selectElemn.value === 'ya') {
            // Menghilangkan atribut 'disabled' dari input teks "Bulan" dan "Tahun"
            bulanInputElem.removeAttribute('disabled');
            tahunInputElem.removeAttribute('disabled');
        } else {
            // Menambahkan atribut 'disabled' ke input teks "Bulan" dan "Tahun"
            bulanInputElem.setAttribute('disabled', 'disabled');
            tahunInputElem.setAttribute('disabled', 'disabled');
            // Menghapus isi input teks "Bulan" dan "Tahun"
            bulanInputElem.value = '';
            tahunInputElem.value = '';
        }
    });

    const selectElemnn = document.getElementById('kontraktur');
    const letakNyeriInputElem = document.querySelector('input[name="letak_nyeri"]');

    // Menambahkan event listener untuk mengawasi perubahan pada elemen select
    selectElemnn.addEventListener('change', function() {
        // Mengecek apakah opsi 'ya' yang dipilih
        if (selectElemnn.value === 'ya') {
            // Menghilangkan atribut 'disabled' dari input teks "Letak Nyeri"
            letakNyeriInputElem.removeAttribute('disabled');
        } else {
            // Menambahkan atribut 'disabled' ke input teks "Letak Nyeri"
            letakNyeriInputElem.setAttribute('disabled', 'disabled');
            // Menghapus isi input teks "Letak Nyeri"
            letakNyeriInputElem.value = '';
        }
    });

    const alatBantuSelect = document.getElementById('alat_bantu_h');
    const jenisAlatBantuSelect = document.getElementById('jenis_alat_bantu_h');

    // Menambahkan event listener untuk mengawasi perubahan pada elemen "Menggunakan alat bantu"
    alatBantuSelect.addEventListener('change', function() {
        // Mengecek apakah opsi 'ya' yang dipilih
        if (alatBantuSelect.value === 'ya') {
            // Menghilangkan atribut 'disabled' dari elemen "Jenis Alat Bantu"
            jenisAlatBantuSelect.removeAttribute('disabled');
        } else {
            // Menambahkan atribut 'disabled' ke elemen "Jenis Alat Bantu"
            jenisAlatBantuSelect.setAttribute('disabled', 'disabled');
            // Menghapus nilai yang dipilih pada elemen "Jenis Alat Bantu"
            // jenisAlatBantuSelect.selectedIndex = -1;
        }
    });
    const soal1Select = document.getElementById('soal1');
    const soal2Select = document.getElementById('soal2');

    // Menambahkan event listener untuk mengawasi perubahan pada elemen "Apakah pasien mengalami penurunan BB yang tidak diinginkan dalam 6 bulan terakhir ?"
    soal1Select.addEventListener('change', function() {
        // Mengecek apakah opsi 'ya' yang dipilih
        if (soal1Select.value === 'ya') {
            // Menghilangkan atribut 'disabled' dari elemen "Jika Ya, berapa penurunan BB tersebut ?"
            soal2Select.removeAttribute('disabled');
        } else {
            // Menambahkan atribut 'disabled' ke elemen "Jika Ya, berapa penurunan BB tersebut ?"
            soal2Select.setAttribute('disabled', 'disabled');
            // Menghapus nilai yang dipilih pada elemen "Jika Ya, berapa penurunan BB tersebut ?"
            // soal2Select.selectedIndex = -1;
        }
    });
</script>
<?= $this->endSection(); ?>