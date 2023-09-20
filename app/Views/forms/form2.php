<?= $this->extend("layout/template"); ?>

<?= $this->section('content'); ?>
<div class="card card-primary px-3">
    <div class="card-header">
        <h3 class="card-title">Quick Example</h3>
    </div>
    <form action="<?= base_url('form2'); ?>" method="POST">
        <div class="card-body">
            <hr>
            <h2>Perawat</h2>
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
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Bahasa sehari - hari</label>
                        <select id="bahasa" name="bahasa" onchange="showHideNameInput()" class="form-control">
                            <option value="Indonesia Aktif">Indonesia Aktif</option>
                            <option value="Indonesia Pasif">Indonesia Pasif</option>
                            <option value="Inggris Aktif">Inggris Aktif</option>
                            <option value="Inggris Pasif">Inggris Pasif</option>
                            <option value="daerah">Daerah</option>
                            <option value="lainlain">Lain-lain</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group" style="display: none;" id="bahasa-lain">
                        <label>Bahasa Daerah atau Bahasa Lainnya (Contoh Belanda aktif atau Banjar pasif)</label>
                        <input type="text" name="bahasalain" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Perlu penerjemah</label>
                        <select id="penerjemah" name="penerjemah" onchange="showHideNameInputPenerjemah()" class="form-control">
                            <option value="Tidak">Tidak</option>
                            <option value="Ya">Ya</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group" style="display: none;" id="penerjemah-bahasa">
                        <label>Bahasa (Contoh Belanda atau Jepang)</label>
                        <input type="text" name="penerjemah-bahasa" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Keterbatasan fisik dan kognitif</label>
                        <select id="keterbatasan" name="keterbatasan" class="form-control">
                            <option value="Tidak">Tidak</option>
                            <option value="Ya">Ya</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <label>Cara belajar yang disukai</label>
                    <select id="cara-belajar" name="cara-belajar" class="form-control">
                        <option value="Menulis">Menulis</option>
                        <option value="Audio-Visual/Gambar">Audio-Visual/Gambar</option>
                        <option value="Diskusi">Diskusi</option>
                        <option value="Demonstrasi">Demonstrasi</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Tingkat pendidikan</label>
                        <select id="tingkat-pendidikan" name="tingkat-pendidikan" class="form-control">
                            <option value="TK">TK</option>
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA">SMA</option>
                            <option value="Akademi">Akademi</option>
                            <option value="Sarjana">Sarjana</option>
                            <option value="Lain-lain">Lain-lain</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Kemampuan membaca</label>
                        <select id="kemampuan-membaca" name="kemampuan-membaca" class="form-control">
                            <option value="Tidak">Tidak</option>
                            <option value="Ya">Ya</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Hambatan emosi dan motifasi</label>
                        <select id="hambatan" name="hambatan" class="form-control">
                            <option value="Tidak">Tidak</option>
                            <option value="Ya">Ya</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Kesediaan menerima pendidikan</label>
                        <select id="kesediaan" name="kesediaan" class="form-control">
                            <option value="Tidak">Tidak</option>
                            <option value="Ya">Ya</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Kebutuhan pendidikan</label>
                        <select id="kebutuhan-pendidikan" name="kebutuhan-pendidikan" onchange="showHideNameInputKebutuhanPendidikan()" class="form-control">
                            <option value="Medis">Medis</option>
                            <option value="Keperawatan">Keperawatan</option>
                            <option value="Farmasi">Farmasi</option>
                            <option value="Diet dan Nutrisi">Diet dan Nutrisi</option>
                            <option value="Rehabilitasi Medik">Rehabilitasi Medik</option>
                            <option value="Manajemen nyeri">Manajemen nyeri</option>
                            <option value="lainlain">Lain-lain</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group" style="display: none;" id="kebutuhan-pendidikan-lain">
                        <label>Kebutuhan pendidikan lain</label>
                        <input type="text" name="kebutuhan-pendidikan-lain" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
            </div>
            <!-- BAB B -->
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Pemberi pendidikan</label>
                        <select id="pemberi-pendidikan" name="pemberi-pendidikan" onchange="showHideNameInputPemberiPendidikan()" class="form-control">
                            <option value="Dokter">Dokter</option>
                            <option value="Perawat">Perawat</option>
                            <option value="Farmasi">Farmasi</option>
                            <option value="Ahli Gizi">Ahli Gizi</option>
                            <option value="Fisioterapis">Fisioterapis</option>
                            <option value="lainlain">Lain-lain</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group" style="display: none;" id="pemberi-pendidikan-lain">
                        <label>Pemberi pendidikan lain</label>
                        <input type="text" name="pemberi-pendidikan-lain" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Waktu Pemberian</label>
                        <input type="datetime-local" class="form-control" name="waktu_pemberian">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Sasaran (Pasien/Keluarga/P&K)</label>
                        <select id="sasaran" name="sasaran" class="form-control">
                            <option value="Pasien">Pasien</option>
                            <option value="Keluarga">Keluarga</option>
                            <option value="Pasien & Keluarga">Pasien & Keluarga</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Cara Edukasi (D/C/Demo/S/O/PL)**</label>
                        <select id="cara-edukasi" name="cara-edukasi" class="form-control">
                            <option value="Diskusi">Diskusi</option>
                            <option value="Observasi">Observasi</option>
                            <option value="Ceramah">Ceramah</option>
                            <option value="Demonstrasi">Demonstrasi</option>
                            <option value="Simulasi">Simulasi</option>
                            <option value="Praktek Langsung">Praktek Langsung</option>
                        </select>
                    </div>
                </div>
            </div>


            <hr>
            <h2>Pemberi Asuhan</h2>
            <hr>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama_pa" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>No. RM</label>
                        <input type="text" name="norm_pa" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" name="tgllahir_pa" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>NIK</label>
                        <input type="text" name="nik_pa" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
            </div>

            <h3>Medis</h3>
            <div class="row">
                <div class="col-sm-2">
                    <div class="form-group text-center">
                        <label>Point A</label>
                        <input type="checkbox" name="m_a" class="form-control" placeholder="Enter ...">
                        <span style="font-size: 12px;font-weight: normal;">Penyakit, Penyebab, tanda dan gejala</span>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group text-center">
                        <label>Point B</label>
                        <input type="checkbox" name="m_b" class="form-control" placeholder="Enter ...">
                        <span style="font-size: 12px;font-weight: normal;">Hasil Pemeriksaan</span>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group text-center">
                        <label>Point C</label>
                        <input type="checkbox" name="m_c" class="form-control" placeholder="Enter ...">
                        <span style="font-size: 12px;font-weight: normal;">Tindakan Medis, Pengobatan dan resikonya</span>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group text-center">
                        <label>Point D</label>
                        <input type="checkbox" name="m_d" class="form-control" placeholder="Enter ...">
                        <span style="font-size: 12px;font-weight: normal;">Perkiraan biaya</span>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group text-center">
                        <label>Point E</label>
                        <input type="checkbox" name="m_e" class="form-control" placeholder="Enter ...">
                        <span style="font-size: 12px;font-weight: normal;">Komplikasi yang mungkin terjadi</span>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group text-center">
                        <label>Point F</label>
                        <input type="checkbox" name="m_f" class="form-control" placeholder="Enter ...">
                        <span style="font-size: 12px;font-weight: normal;">Hasil asuhan dan pengobatan yang tidak diharapkan</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Waktu</label>
                        <input type="datetime-local" name="m_waktu" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Nama Pasien/Keluarga</label>
                        <input type="text" name="m_pasien" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Nama Edukator</label>
                        <input type="text" name="m_edukator" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
            </div>

            <h3>Keperawatan</h3>
            <div class="row">
                <div class="col-sm-2">
                    <div class="form-group text-center">
                        <label>Point A</label>
                        <input type="checkbox" name="k_a" class="form-control" placeholder="Enter ...">
                        <span style="font-size: 12px;font-weight: normal;">Pendidikan kesehatan</span>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group text-center">
                        <label>Point B</label>
                        <input type="checkbox" name="k_b" class="form-control" placeholder="Enter ...">
                        <span style="font-size: 12px;font-weight: normal;">Penanganan & perawatan di RS</span>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group text-center">
                        <label>Point C</label>
                        <input type="checkbox" name="k_c" class="form-control" placeholder="Enter ...">
                        <span style="font-size: 12px;font-weight: normal;">Penanganan dan perawatan di rumah</span>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group text-center">
                        <label>Point D</label>
                        <input type="checkbox" name="k_d" class="form-control" placeholder="Enter ...">
                        <span style="font-size: 12px;font-weight: normal;">Alat-alat yang perlu disiapkan di rumah</span>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group text-center">
                        <label>Point E</label>
                        <input type="checkbox" name="k_e" class="form-control" placeholder="Enter ...">
                        <span style="font-size: 12px;font-weight: normal;">.Keamanan lingkungan rumah</span>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group text-center">
                        <label>Point F</label>
                        <input type="checkbox" name="k_f" class="form-control" placeholder="Enter ...">
                        <span style="font-size: 12px;font-weight: normal;">Keamanan lingkungan bermain</span>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group text-center">
                        <label>Point G</label>
                        <input type="checkbox" name="k_g" class="form-control" placeholder="Enter ...">
                        <span style="font-size: 12px;font-weight: normal;">Pencegahan & pengendalian infeksi</span>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group text-center">
                        <label>Point H</label>
                        <input type="checkbox" name="k_h" class="form-control" placeholder="Enter ...">
                        <span style="font-size: 12px;font-weight: normal;">Sumber-sumber pelayan kesehatan di
                            komunitas/pemenuhan kebutuhan
                            kesehatan berkelanjutan</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Waktu</label>
                        <input type="datetime-local" name="k_waktu" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Nama Pasien/Keluarga</label>
                        <input type="text" name="k_pasien" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Nama Edukator</label>
                        <input type="text" name="k_edukator" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
            </div>

            <h3>Farmasi</h3>
            <div class="row">
                <div class="col-sm-2">
                    <div class="form-group text-center">
                        <label>Point A</label>
                        <input type="checkbox" name="f_a" class="form-control" placeholder="Enter ...">
                        <span style="font-size: 12px;font-weight: normal;">Nama Obat & Kegunaanya</span>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group text-center">
                        <label>Point B</label>
                        <input type="checkbox" name="f_b" class="form-control" placeholder="Enter ...">
                        <span style="font-size: 12px;font-weight: normal;">Aturan Pemakaian</span>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group text-center">
                        <label>Point C</label>
                        <input type="checkbox" name="f_c" class="form-control" placeholder="Enter ...">
                        <span style="font-size: 12px;font-weight: normal;">Jumlah obat yang diberikan</span>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group text-center">
                        <label>Point D</label>
                        <input type="checkbox" name="f_d" class="form-control" placeholder="Enter ...">
                        <span style="font-size: 12px;font-weight: normal;">Cara menyimpan obat</span>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group text-center">
                        <label>Point E</label>
                        <input type="checkbox" name="f_e" class="form-control" placeholder="Enter ...">
                        <span style="font-size: 12px;font-weight: normal;">Efek samping obat</span>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group text-center">
                        <label>Point F</label>
                        <input type="checkbox" name="f_f" class="form-control" placeholder="Enter ...">
                        <span style="font-size: 12px;font-weight: normal;">Interaksi antar obat & interaksi obat dengan makanan</span>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Waktu</label>
                        <input type="datetime-local" name="f_waktu" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Nama Pasien/Keluarga</label>
                        <input type="text" name="f_pasien" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Nama Edukator</label>
                        <input type="text" name="f_edukator" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
            </div>

            <h3>Diet & Nutrisi</h3>
            <div class="row">
                <div class="col-sm-2">
                    <div class="form-group text-center">
                        <label>Point A</label>
                        <input type="checkbox" name="dn_a" class="form-control" placeholder="Enter ...">
                        <span style="font-size: 12px;font-weight: normal;">Status gizi</span>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group text-center">
                        <label>Point B</label>
                        <input type="checkbox" name="dn_b" class="form-control" placeholder="Enter ...">
                        <span style="font-size: 12px;font-weight: normal;">Pelayanan makanan RS</span>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group text-center">
                        <label>Point C</label>
                        <input type="checkbox" name="dn_c" class="form-control" placeholder="Enter ...">
                        <span style="font-size: 12px;font-weight: normal;">Pembatasan diluar RS</span>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group text-center">
                        <label>Point D</label>
                        <input type="checkbox" name="dn_d" class="form-control" placeholder="Enter ...">
                        <span style="font-size: 12px;font-weight: normal;">Diet selama dirumah</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Waktu</label>
                        <input type="datetime-local" name="dn_waktu" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Nama Pasien/Keluarga</label>
                        <input type="text" name="dn_pasien" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Nama Edukator</label>
                        <input type="text" name="dn_edukator" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
            </div>

            <h3>Rehabilitasi Medik</h3>
            <div class="row">
                <div class="col-sm-2">
                    <div class="form-group text-center">
                        <label>Point A</label>
                        <input type="checkbox" name="rm_a" class="form-control" placeholder="Enter ...">
                        <span style="font-size: 12px;font-weight: normal;">Fisioterapi</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Waktu</label>
                        <input type="datetime-local" name="rm_waktu" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Nama Pasien/Keluarga</label>
                        <input type="text" name="rm_pasien" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Nama Edukator</label>
                        <input type="text" name="rm_edukator" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
            </div>

            <h3>Manajemen Nyeri</h3>
            <div class="row">
                <div class="col-sm-2">
                    <div class="form-group text-center">
                        <label>Point A</label>
                        <input type="checkbox" name="mn_a" class="form-control" placeholder="Enter ...">
                        <span style="font-size: 12px;font-weight: normal;">Non farmakologi</span>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group text-center">
                        <label>Point B</label>
                        <input type="checkbox" name="mn_b" class="form-control" placeholder="Enter ...">
                        <span style="font-size: 12px;font-weight: normal;">Farmakologi</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Waktu</label>
                        <input type="datetime-local" name="mn_waktu" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Nama Pasien/Keluarga</label>
                        <input type="text" name="mn_pasien" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Nama Edukator</label>
                        <input type="text" name="mn_edukator" class="form-control" placeholder="Enter ...">
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
    function showHideNameInput() {
        var selectElement = document.getElementById("bahasa");
        var namaContainer = document.getElementById("bahasa-lain");

        if (selectElement.value === "lainlain" || selectElement.value === "daerah") {
            namaContainer.style.display = "block";
        } else {
            namaContainer.style.display = "none";
        }
    }

    function showHideNameInputPenerjemah() {
        var selectElement = document.getElementById("penerjemah");
        var namaContainer = document.getElementById("penerjemah-bahasa");

        if (selectElement.value === "Ya") {
            namaContainer.style.display = "block";
        } else {
            namaContainer.style.display = "none";
        }
    }

    function showHideNameInputKebutuhanPendidikan() {
        var selectElement = document.getElementById("kebutuhan-pendidikan");
        var namaContainer = document.getElementById("kebutuhan-pendidikan-lain");

        if (selectElement.value === "lainlain") {
            namaContainer.style.display = "block";
        } else {
            namaContainer.style.display = "none";
        }
    }

    function showHideNameInputPemberiPendidikan() {
        var selectElement = document.getElementById("pemberi-pendidikan");
        var namaContainer = document.getElementById("pemberi-pendidikan-lain");

        if (selectElement.value === "lainlain") {
            namaContainer.style.display = "block";
        } else {
            namaContainer.style.display = "none";
        }
    }
</script>
<?= $this->endSection(); ?>