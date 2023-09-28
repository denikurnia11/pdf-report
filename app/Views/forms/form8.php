<?= $this->extend("layout/template"); ?>

<?= $this->section('content'); ?>
<div class="card card-primary px-3">
    <div class="card-header">
        <h3 class="card-title">Quick Example</h3>
    </div>
    <form action="<?= base_url('form8'); ?>" method="POST">
        <div class="card-body">
            <hr>
            <h2 class="text-center">REKAMAN ASUHAN KEPERAWATAN KAMAR BEDAH</h2>
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
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>NIK</label>
                        <input type="text" name="nik" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" name="tgllahir" id="tgllahir" class="form-control" placeholder="Enter ..." onchange="calculateAge()">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Umur (Tahun)</label>
                        <input type="text" name="umur" id="umur" class="form-control" readonly>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Diagnosa Pre Operasi</label>
                        <input type="text" name="pre" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Diagnosa Post Operasi</label>
                        <input type="text" name="post" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Tindakan Operasi</label>
                        <input type="text" name="tindakan_operasi" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Jenis Anestesi</label>
                        <input type="text" name="jenis_anestesi" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
            </div>

            <label>Pengkajian</label><br>
            <label>Data Subyektif</label>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Jam</label>
                        <input type="time" name="jam1" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama1" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group clas text-center">
                        <input type="checkbox" name="s1" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Pasien/klg banyak bertanya ttg keberhasilan operasi & kemungkinan kegagalan dari operasi</label>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group clas text-center">
                        <input type="checkbox" name="s2" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Pasien/klg banyak tanya ttg prosedur operasi</label>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group clas text-center">
                        <input type="checkbox" name="s3" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Pasien mengatakan takut kematian</label>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group clas text-center">
                        <input type="checkbox" name="s4" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Pasien mengatakan nyeri</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group clas text-center">
                        <input type="checkbox" name="s5" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Pasien mengatakan mual</label>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group clas text-center">
                        <input type="checkbox" name="s6" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Pasien mengatakan sesak nafas</label>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group clas text-center">
                        <input type="checkbox" name="s7" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Pasien mengatakan dingin</label>
                    </div>
                </div>
                <div class="col-sm-3"></div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Lain-lain 1</label>
                        <input type="text" name="s1_lain" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Lain-lain 2</label>
                        <input type="text" name="s2_lain" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Lain-lain 3</label>
                        <input type="text" name="s3_lain" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Lain-lain 4</label>
                        <input type="text" name="s4_lain" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
            </div>

            <label>Data Obyektif</label>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Jam</label>
                        <input type="time" name="jam2" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama2" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <div class="form-group clas text-center">
                        <input type="checkbox" name="o1" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Gelang identitas</label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group clas text-center">
                        <input type="checkbox" name="o2" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Informetd Consent </label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group clas text-center">
                        <input type="checkbox" name="o3" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Lengkap</label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group clas text-center">
                        <input type="checkbox" name="o4" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Tidak Lengkap</label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group clas text-center">
                        <input type="checkbox" name="o5" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Hasil lab</label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group clas text-center">
                        <input type="checkbox" name="o6" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Hasil Foto</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <div class="form-group clas text-center">
                        <input type="checkbox" name="o7" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Persediaan darah</label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group clas text-center">
                        <input type="checkbox" name="o8" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Lavement</label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group clas text-center">
                        <input type="checkbox" name="o9" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Puasa</label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group clas text-center">
                        <input type="checkbox" name="o10" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Mandi keramas</label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group clas text-center">
                        <input type="checkbox" name="o11" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Oral Hygiene</label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group clas text-center">
                        <input type="checkbox" name="o12" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Kebersihan kuku</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <div class="form-group clas text-center">
                        <input type="checkbox" name="o13" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Persiapan kulit</label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group clas text-center">
                        <input type="checkbox" name="o14" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Gelang</label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group clas text-center">
                        <input type="checkbox" name="o15" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Kalung</label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group clas text-center">
                        <input type="checkbox" name="o16" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Cincin</label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group clas text-center">
                        <input type="checkbox" name="o17" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Gigi palsu</label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group clas text-center">
                        <input type="checkbox" name="o18" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Soft lens</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <div class="form-group clas text-center">
                        <input type="checkbox" name="o19" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Make Up</label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group clas text-center">
                        <input type="checkbox" name="o20" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Lipstik</label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group clas text-center">
                        <input type="checkbox" name="o21" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Kitek kuku</label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group clas text-center">
                        <input type="checkbox" name="o22" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Eyes Shadow</label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group clas text-center">
                        <input type="checkbox" name="o23" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Penyakit Jantung</label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group clas text-center">
                        <input type="checkbox" name="o24" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">CKD</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <div class="form-group clas text-center">
                        <input type="checkbox" name="o25" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">TBC Paru</label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group clas text-center">
                        <input type="checkbox" name="o26" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Asma</label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group clas text-center">
                        <input type="checkbox" name="o27" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">HIV</label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group clas text-center">
                        <input type="checkbox" name="o28" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Hepatitis B/C</label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group clas text-center">
                        <input type="checkbox" name="o29" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">DM</label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group clas text-center">
                        <input type="checkbox" name="o30" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Hipertensi</label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Premidikassi 1</label>
                        <input type="text" name="premidikassi" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Jam Premidikassi 1</label>
                        <input type="time" name="jam_premidikassi" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Premidikassi 2</label>
                        <input type="text" name="premidikassi2" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Jam Premidikassi 2</label>
                        <input type="time" name="jam_premidikassi2" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Propolaksis</label>
                        <input type="text" name="propolaksis" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Jam Propolaksis</label>
                        <input type="time" name="jam_propolaksis" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <div class="form-group clas text-center">
                        <input type="checkbox" name="p1" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Tingkat kesadaran</label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group clas text-center">
                        <input type="checkbox" name="p2" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Kompos mentis</label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group clas text-center">
                        <input type="checkbox" name="p3" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Apatis</label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group clas text-center">
                        <input type="checkbox" name="p4" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Somnolens</label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group clas text-center">
                        <input type="checkbox" name="p5" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Delirium</label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group clas text-center">
                        <input type="checkbox" name="p6" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Sopor</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <div class="form-group clas text-center">
                        <input type="checkbox" name="p7" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Pasien kelihatan tegang</label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group clas text-center">
                        <input type="checkbox" name="p8" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Kulit teraba dingin</label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group clas text-center">
                        <input type="checkbox" name="p9" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Pasien menangis dan tampak asing</label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group clas text-center">
                        <input type="checkbox" name="p10" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Perubahan suara</label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group clas text-center">
                        <input type="checkbox" name="p11" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Peningkatan frekuensi pernafasan dan jantung</label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group clas text-center">
                        <input type="checkbox" name="p12" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Tremor atau gemetar</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <div class="form-group clas text-center">
                        <input type="checkbox" name="p13" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Pandangan kosong</label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group clas text-center">
                        <input type="checkbox" name="p14" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Menggigil</label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group clas text-center">
                        <input type="checkbox" name="p15" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Pucat</label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group clas text-center">
                        <input type="checkbox" name="p16" class="form-control" placeholder="Enter ..." onchange="toggleInput(this)">
                        <label style="font-weight: normal;">Pasien mengatakan nyeri skala</label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group clas text-center">
                        <label style="font-weight: normal;">Skala</label>
                        <input type="text" name="p17" class="form-control" placeholder="Enter ..." disabled>
                    </div>
                </div>
                <div class="col-sm-2">
                    <!-- <div class="form-group clas text-center">
                        <input type="checkbox" name="p18" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Soft lens</label>
                    </div> -->
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group clas ">
                        <label>Lain - lain 1</label>
                        <input type="text" name="p1_lain" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group clas ">
                        <label>Lain - lain 2</label>
                        <input type="text" name="p2_lain" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <div class="form-group clas text-center">
                        <input type="checkbox" name="p18" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Posisi pronasi</label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group clas text-center">
                        <input type="checkbox" name="p19" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Supinal</label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group clas text-center">
                        <input type="checkbox" name="p20" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Dorsal recumbent</label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group clas text-center">
                        <input type="checkbox" name="p21" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Litholomy</label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group clas text-center">
                        <input type="checkbox" name="p22" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Pasien tidak sadar G. Anestesi </label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group clas text-center">
                        <input type="checkbox" name="p23" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Sekresi lendir meningkat</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <div class="form-group clas text-center">
                        <input type="checkbox" name="p24" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Tdk ada reflek batuk</label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group clas text-center">
                        <input type="checkbox" name="p25" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Suara nafas ngorok</label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group clas text-center">
                        <input type="checkbox" name="p26" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Sianosis</label>
                    </div>
                </div>
                <div class="col-sm-2">

                </div>
                <div class="col-sm-2">

                </div>
                <div class="col-sm-2">

                </div>
            </div>

            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group clas ">
                        <label>TD:.../...mmHg</label>
                        <input type="text" name="td" class="form-control" placeholder="Contoh input : 120/80">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group clas ">
                        <label>T:...°C</label>
                        <input type="text" name="c" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group clas ">
                        <label>RP:....x/mnt</label>
                        <input type="number" name="rp" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group clas ">
                        <label>Nadi...x/min</label>
                        <input type="number" name="nadi" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group clas ">
                        <label>Lebar luka...Cm</label>
                        <input type="number" name="luka" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group clas ">
                        <label>Pendarahan...cc</label>
                        <input type="number" name="pendarahan" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group clas ">
                        <label>Urine...cc</label>
                        <input type="number" name="urine" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group clas ">
                        <label>Lama operasi : ... jam</label>
                        <input type="number" name="lama_op" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-2">
                    <div class="form-group clas text-center">
                        <input type="checkbox" name="p27" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Pasien dalam proses pembedahan dg menggunakan alat couter</label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group clas text-center">
                        <input type="checkbox" name="p28" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Dilakukan pemasangan netral elektro couter</label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group clas text-center">
                        <input type="checkbox" name="p29" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Pasien tidak sadar reflek motorik (-)</label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group clas text-center">
                        <input type="checkbox" name="p30" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Gerakan berlebihan</label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group clas text-center">
                        <input type="checkbox" name="p31" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Sekresi lendir berlebihan</label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group clas text-center">
                        <input type="checkbox" name="p32" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Akral dingin</label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label>TTV Pre Operasi</label>
                    <select name="ttv" id="ttv" class="form-control" onchange="toggleInputs()">
                        <option value="Tidak">Tidak</option>
                        <option value="Ya">Ya</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group clas">
                        <label>Tensi:.../...mmHg</label>
                        <input type="text" name="td2" class="form-control" placeholder="Contoh input : 120/80" disabled>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group clas">
                        <label>Nadi...x/mnt</label>
                        <input type="number" name="nadi2" class="form-control" placeholder="Enter ..." disabled>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group clas">
                        <label>Nafas...x/mnt</label>
                        <input type="text" name="nafas" class="form-control" placeholder="Enter ..." disabled>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group clas">
                        <label>Suhu ... °C</label>
                        <input type="number" name="suhu" class="form-control" placeholder="Enter ..." disabled>
                    </div>
                </div>
            </div>

            <label>Adrete Score</label>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Jam</label>
                        <input type="time" name="jam3" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama3" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Aktifitas mampu gerak dg perintah </label>
                        <select name="soal1" class="form-control">
                            <option value="4 ekstremitas">4 ekstremitas</option>
                            <option value="2 ekstremitas">2 ekstremitas</option>
                            <option value="tidak mampu gerak ekstremitas">tidak mampu gerak ekstremitas</option>
                        </select>

                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Score</label>
                        <input type="text" name="score1" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Respirasi</label>
                        <select name="soal2" class="form-control">
                            <option value="Mampu nafas dlm & Batuk">Mampu nafas dlm & Batuk</option>
                            <option value="Dyspneu, usaha nafas terbatas">Dyspneu, usaha nafas terbatas</option>
                            <option value="Apneu">Apneu</option>
                        </select>

                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Score</label>
                        <input type="text" name="score2" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Sirkulasi TD ± dari pre operasi</label>
                        <select name="soal3" class="form-control">
                            <option value="TD ± 20 mmHg">TD ± 20 mmHg</option>
                            <option value="TD ± 20 - 50 mmHg">TD ± 20 - 50 mmHg</option>
                            <option value="TD > 50 mmHg">TD > 50 mmHg</option>
                        </select>

                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Score</label>
                        <input type="text" name="score3" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Kesadaran</label>
                        <select name="soal4" class="form-control">
                            <option value="Sadar penuh">Sadar penuh</option>
                            <option value="Bangun jika dipanggil">Bangun jika dipanggil</option>
                            <option value="Tidak ada respon">Tidak ada respon</option>
                        </select>

                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Score</label>
                        <input type="text" name="score4" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Warna Kulit </label>
                        <select name="soal5" class="form-control">
                            <option value="Kemerahan">Kemerahan</option>
                            <option value="Pucat">Pucat</option>
                            <option value="Sianosis">Sianosis</option>
                        </select>

                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Score</label>
                        <input type="text" name="score5" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
            </div>

            <label>Steward Score</label>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Aktifitas</label>
                        <select name="soal6" class="form-control">
                            <option value="Bangun">Bangun</option>
                            <option value="Respon terhadap rangsang">Respon terhadap rangsang</option>
                            <option value="Tidak ada respon">Tidak ada respon</option>
                        </select>

                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Score</label>
                        <input type="text" name="score6" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Respirasi</label>
                        <select name="soal7" class="form-control">
                            <option value="Batuk / menangis">Batuk / menangis</option>
                            <option value="Pertahankan jalan nafas">Pertahankan jalan nafas</option>
                            <option value="Tidak ada respon">Tidak ada respon</option>
                        </select>

                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Score</label>
                        <input type="text" name="score7" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Motorik</label>
                        <select name="soal8" class="form-control">
                            <option value="Gerak bertujuan">Gerak bertujuan</option>
                            <option value="Gerak tanpa tujuan">Gerak tanpa tujuan</option>
                            <option value="Tidak ada gerak">Tidak ada gerak</option>
                        </select>

                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Score</label>
                        <input type="text" name="score8" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
            </div>
            <label>Bromage Score</label>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Bromage Score</label>
                        <select name="soal9" class="form-control">
                            <option value="Gerakan penuh ditungkai">Gerakan penuh ditungkai</option>
                            <option value="Tdk mampu ekstensi tungkai">Tdk mampu ekstensi tungkai</option>
                            <option value="Tdk mampu fleksi lutut">Tdk mampu fleksi lutut</option>
                            <option value="Tdk mampu fleksi pergelangan kaki">Tdk mampu fleksi pergelangan kaki</option>
                        </select>

                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Score</label>
                        <input type="text" name="score9" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
            </div>

            <label for="">Diagnosa Keperawatan dan Rencana Tindakan Keperawatan Tujuan (Setelah dilakukan tindakan)</label>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group text-center">
                        <input type="checkbox" name="d1" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Takut b.d. kurangnya pengetahuan tentang jalannya operasi/lingkungan asing </label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group text-center">
                        <input type="checkbox" name="r1" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Takut pasien/klg hilang/berkurang</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Target Waktu</label>
                        <input type="date" name="w1" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group text-center">
                        <input type="checkbox" name="d2" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Cemas b.d. kegagalan operasi/kecelakaan/kecacatan/kematian</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group text-center">
                        <input type="checkbox" name="r2" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Cemas pasien/klg hilang/berkurang</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Target Waktu</label>
                        <input type="date" name="w2" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group text-center">
                        <input type="checkbox" name="d3" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Resiko cedera : jatuh b.d. Penurunan kesadaran proses pemindahan pasien</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group text-center">
                        <input type="checkbox" name="r3" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Cedera jatuh tidak terjadi</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Target Waktu</label>
                        <input type="date" name="w3" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group text-center">
                        <input type="checkbox" name="d4" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Resti inefektif bersihan jalan nafas b.d. akumilasi sekret berlebihan</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group text-center">
                        <input type="checkbox" name="r4" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Inefektif bersihan jalan nafas tidak terjadi</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Target Waktu</label>
                        <input type="date" name="w4" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group text-center">
                        <input type="checkbox" name="d5" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Resti aspirasi b.d. menurunnya tidak adanya reflek batuk/tidak jatuh </label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group text-center">
                        <input type="checkbox" name="r5" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Aspirasi tidak terjadi</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Target Waktu</label>
                        <input type="date" name="w5" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group text-center">
                        <input type="checkbox" name="d6" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Resti infeksi b.d. Adanya luka sayat operasi</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group text-center">
                        <input type="checkbox" name="r6" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Resti infeksi dpt diminimalisir</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Target Waktu</label>
                        <input type="date" name="w6" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group text-center">
                        <input type="checkbox" name="d7" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Resti g3 keseimbangan cairan & elektrolit b.d. perdarahan/terapi cairan yg tdk adekuat</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group text-center">
                        <input type="checkbox" name="r7" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Resti g3 keseimbangan cairan tidak terjadi</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Target Waktu</label>
                        <input type="date" name="w7" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group text-center">
                        <input type="checkbox" name="d8" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Resti terjadi combustio b.d. netral couter yg tdk adekuat</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group text-center">
                        <input type="checkbox" name="r8" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Resti combustion tidak terjadi</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Target Waktu</label>
                        <input type="date" name="w8" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group text-center">
                        <input type="checkbox" name="d9" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Resti hipotermi b.d. pemanjanan lingkungan, dehidrasi </label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group text-center">
                        <input type="checkbox" name="r9" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">G3 keseimbangan cairan & elektrolit tdk terjadi</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Target Waktu</label>
                        <input type="date" name="w9" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group text-center">
                        <input type="checkbox" name="d10" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Resti tjd aberasi kulit b.d. pemindahan pasien yg tdk adekuat </label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group text-center">
                        <input type="checkbox" name="r10" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Resti tjd aberasi kulit</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Target Waktu</label>
                        <input type="date" name="w10" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group text-center">
                        <input type="checkbox" name="d11" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Resti cedera b.d. tercabutnya drainage</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group text-center">
                        <input type="checkbox" name="r11" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Resti tercabutnya drainage tdk terjadi</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Target Waktu</label>
                        <input type="date" name="w11" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group text-center">
                        <input type="checkbox" name="d12" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Resti cedera b.d. tertinggalnya alat/barang habis pakai </label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group text-center">
                        <input type="checkbox" name="r12" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Resti tertinggalnya alat/barang habis pakai tdk terjadi</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Target Waktu</label>
                        <input type="date" name="w12" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group text-center">
                        <input type="checkbox" name="d13" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Nyeri b.d. luka operasi / traksi karakter</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group text-center">
                        <input type="checkbox" name="r13" class="form-control" placeholder="Enter ...">
                        <label style="font-weight: normal;">Nyeri hilang/berkurang</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Target Waktu</label>
                        <input type="date" name="w13" class="form-control" placeholder="Enter ...">
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
    function calculateAge() {
        // Get the date of birth input value
        const dob = document.getElementById("tgllahir").value;

        if (dob) {
            // Convert the date of birth to a Date object
            const birthDate = new Date(dob);
            const today = new Date();

            // Calculate the age
            let age = today.getFullYear() - birthDate.getFullYear();

            // Check if the birthday hasn't occurred yet this year
            if (today.getMonth() < birthDate.getMonth() || (today.getMonth() === birthDate.getMonth() && today.getDate() < birthDate.getDate())) {
                age--;
            }

            // Update the "Umur (Tahun)" input field
            document.getElementById("umur").value = age;
        } else {
            // Clear the "Umur (Tahun)" input field if no date is selected
            document.getElementById("umur").value = "";
        }
    }

    function toggleInput(checkbox) {
        var inputText = document.querySelector('input[name="p17"]');
        if (checkbox.checked) {
            inputText.removeAttribute('disabled');
        } else {
            inputText.setAttribute('disabled', 'disabled');
            inputText.value = '';
        }
    }

    function toggleInputs() {
        var ttvSelect = document.getElementById('ttv');
        var inputsToToggle = document.querySelectorAll('input[name="td2"], input[name="nadi2"], input[name="nafas"], input[name="suhu"]');

        if (ttvSelect.value === 'Ya') {
            for (var i = 0; i < inputsToToggle.length; i++) {
                inputsToToggle[i].removeAttribute('disabled');
            }
        } else {
            for (var i = 0; i < inputsToToggle.length; i++) {
                inputsToToggle[i].setAttribute('disabled', 'disabled');
            }
        }
    }
</script>
<?= $this->endSection(); ?>