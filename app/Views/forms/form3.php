<?= $this->extend("layout/template"); ?>

<?= $this->section('content'); ?>
<div class="card card-primary px-3">
    <div class="card-header">
        <h3 class="card-title">Form 3</h3>
    </div>
    <form action="<?= base_url('form3'); ?>" method="POST">
        <div class="card-body">
            <!-- Page 1 -->
            <div class="page1">
                <hr>
                <h2>ASSESMEN KEPERAWATAN SPF MATERNITAS</h2>
                <hr>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Enter ...">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>No. RM</label>
                            <input type="text" name="norm" class="form-control" placeholder="Enter ...">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" name="tgllahir" class="form-control" placeholder="Enter ...">
                        </div>
                    </div>
                </div>
                <hr>
                <h4>1. Pola Presepsi dan Pemeliharaan Kesehatan</h4>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Kebiasaan periksa bila sakit</label>
                            <select name="kebiasaan_periksa" class="form-control">
                                <option value="Beli obat warung">Beli obat warung</option>
                                <option value="Periksa ke fasilitas kesehatan">Periksa ke fasilitas kesehatan</option>
                                <option value="Tidak / jarang diobati karena sembuh sendiri">Tidak / jarang diobati karena sembuh sendiri</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Presepsi mengenai sakitnya</label>
                            <select name="presepsi" class="form-control">
                                <option value="Tidak tahu">Tidak tahu</option>
                                <option value="Tahu sedikit">Tahu sedikit</option>
                                <option value="Mengerti dan paham mengenal sakitnya">Mengerti dan paham mengenal sakitnya</option>
                            </select>
                        </div>
                    </div>

                </div>

                <hr>
                <h4>2. Pola Nutrisi dan Metabolik</h4>
                <hr>
                <h5>a. Pemeriksaan Laboratorium</h5>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>HB</label>
                            <input type="text" name="hb" class="form-control" placeholder="Enter ...">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Tanggal Pemeriksaan HB</label>
                            <input type="date" name="tgl_hb" class="form-control" placeholder="Enter ...">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Albumin</label>
                            <input type="text" name="albumin" class="form-control" placeholder="Enter ...">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Tanggal Pemeriksaan Albumin</label>
                            <input type="date" name="tgl_albumin" class="form-control" placeholder="Enter ...">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Protein</label>
                            <input type="text" name="protein" class="form-control" placeholder="Enter ...">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Tanggal Pemeriksaan Protein</label>
                            <input type="date" name="tgl_protein" class="form-control" placeholder="Enter ...">
                        </div>
                    </div>
                </div>

                <h5>b. Tanda-tanda klinis</h5>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group text-center">
                            <label>Pucat</label>
                            <input type="checkbox" class="form-control" name="pucat">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group text-center">
                            <label>Membrane mukosa kering</label>
                            <input type="checkbox" class="form-control" name="membrane_mukosa">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group text-center">
                            <label>Conjunctiva anemis</label>
                            <input type="checkbox" class="form-control" name="conjunctiva">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group text-center">
                            <label>Kulit</label>
                            <input type="checkbox" class="form-control" id="chkKulit">
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Kulit</label>
                            <select name="kulit" class="form-control" id="selectKulit" disabled>
                                <option value="Kering">Kering</option>
                                <option value="Turgor">Turgor</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Turgor</label>
                            <select name="turgor" class="form-control" id="selectTurgor" disabled>
                                <option value="Baik">Baik</option>
                                <option value="Kurang">Kurang</option>
                                <option value="Jelek">Jelek</option>
                            </select>
                        </div>
                    </div>
                </div>

                <h5>c. Riwayat Nutrisi</h5>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Riwayat Nutrisi</label>
                            <select name="riwayat_nutrisi" class="form-control">
                                <option value="Anoreksia">Anoreksia</option>
                                <option value="Mual">Mual</option>
                                <option value="Muntah">Muntah</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Porsi makan</label>
                            <select id="porsi_makan" name="porsi_makan" class="form-control">
                                <option value="Cukup">Cukup</option>
                                <option value="Kurang">Kurang</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Diet</label>
                            <select id="diet" name="diet" class="form-control">
                                <option value="Nasi">Nasi</option>
                                <option value="Bubur kasar">Bubur kasar</option>
                                <option value="Bubur saring">Bubur saring</option>
                                <option value="Sonde">Sonde</option>
                                <option value="Puasa">Puasa</option>
                            </select>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Jenis Diet</label>
                            <select name="jenis_diet" class="form-control" id="jenisDietSelect">
                                <option value="DM">DM</option>
                                <option value="DH">DH</option>
                                <option value="RGRP">RGRP</option>
                                <option value="lainlain">Lain-lain</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Jenis Diet Lain</label>
                            <input type="text" name="jenis_diet_lain" class="form-control" id="jenisDietLainInput" disabled>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Kalori</label>
                            <input type="text" name="kalori" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>ASI</label>
                            <select name="asi" class="form-control" id="asiSelect">
                                <option value="Tidak">Tidak</option>
                                <option value="Ya">Ya</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label>Frekuensi (perhari)</label>
                            <input type="number" name="frekuensi_asi" class="form-control" id="frekuensiInput" disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>ASB</label>
                            <select name="asb" class="form-control" id="asbSelect">
                                <option value="Tidak">Tidak</option>
                                <option value="Ya">Ya</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Frekuensi</label>
                            <input type="number" name="frekuensi_asb" class="form-control" id="frekuensiAsbInput" disabled>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Ukuran (ml)</label>
                            <input type="number" name="ukuran_asb" class="form-control" id="ukuranAsbInput" disabled>
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

                <hr>
                <h4>3. Pola Eliminasi</h4>
                <hr>
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
                                <option value="Lunak">Lunak</option>
                                <option value="Keras">Keras</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Warna</label>
                            <select id="warna" name="warna" class="form-control">
                                <option value="Merah">Merah</option>
                                <option value="Hitam">Hitam</option>
                                <option value="Normal">Normal</option>
                            </select>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Keluhan</label>
                            <select id="keluhan" name="keluhan" class="form-control">
                                <option value="Kembung">Kembung</option>
                                <option value="Sebah">Sebah</option>
                                <option value="Konstipasi">Konstipasi</option>
                                <option value="Diare">Diare</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Peristaltik Usus (kali/menit)</label>
                            <input type="number" name="peristaltik_usus" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Flatus</label>
                            <select id="flatus" name="flatus" class="form-control">
                                <option value="Tidak">Tidak</option>
                                <option value="Ya">Ya</option>
                            </select>
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
                                <option value="Incontinentia">Incontinentia</option>
                                <option value="Retensi Urine">Retensi Urine</option>
                                <option value="Disuria">Disuria</option>
                                <option value="Anuria">Anuria</option>
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
                                <option value="Jernih">Jernih</option>
                                <option value="Merah">Merah</option>
                                <option value="Kekuningan">Kekuningan</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Terpasang Kateter</label>
                            <select id="terpasang_kateter" name="terpasang_kateter" class="form-control">
                                <option value="Tidak">Tidak</option>
                                <option value="Ya">Ya</option>
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

                <hr>
                <h4>4. Pola Istirahat Tidur</h4>
                <hr>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Jumlah jam tidur malam (jam/hari)</label>
                            <input type="number" name="jam_tidur_malam" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Insomnia</label>
                            <select id="insomnia" name="insomnia" class="form-control">
                                <option value="Tidak">Tidak</option>
                                <option value="Ya">Ya</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Kebiasaan tidur siang (jam/hari)</label>
                            <input type="number" name="jam_tidur_siang" class="form-control">
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Kebiasaan mengkonsumsi obat sebelum tidur</label>
                            <select id="konsumsi_obat" name="konsumsi_obat" class="form-control">
                                <option value="Tidak">Tidak</option>
                                <option value="Ya">Ya</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Nama Obat Tidur Yang Digunakan</label>
                            <input type="text" name="nama_obat" class="form-control" id="namaObatInput" disabled>
                        </div>
                    </div>
                </div>

                <hr>
                <h4>5. Pola Toleransi Koping Stres</h4>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Koping terhadap sakitnya</label>
                            <select id="koping" name="koping" class="form-control">
                                <option value="Takut/Khawatir">Takut/Khawatir</option>
                                <option value="Cemas">Cemas</option>
                                <option value="Menerima">Menerima</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Penyelesaian bila ada masalah</label>
                            <select id="penyelesaian_masalah" name="penyelesaian_masalah" class="form-control">
                                <option value="Sendiri">Sendiri</option>
                                <option value="Minta bantuan orang terdekat">Minta bantuan orang terdekat</option>
                            </select>
                        </div>
                    </div>

                </div>

                <hr>
                <h4>6. Pola Hubungan dan Peran</h4>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Hubungan dengan orang lain selama dirawat</label>
                            <select id="hubungan_orang" name="hubungan_orang" class="form-control">
                                <option value="Terganggu">Terganggu</option>
                                <option value="Tidak Terganggu">Tidak Terganggu</option>
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
                                <option value="Tidak dapat dilakukan">Tidak dapat dilakukan</option>
                                <option value="Minimal">Minimal</option>
                                <option value="Digantikan orang lain">Digantikan orang lain</option>
                            </select>
                        </div>
                    </div>
                </div>

                <hr>
                <h4>7. Pola Seksual dan Reproduksi</h4>
                <hr>
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
                                <option value="Tidak">Tidak</option>
                                <option value="Ya">Ya</option>
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


                <hr>
                <h4>8. Pola Nilai dan Kepercayaan</h4>
                <hr>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Kebiasaan Menjalankan Ibadah</label>
                            <select id="ibadah" name="ibadah" class="form-control">
                                <option value="Teratur">Teratur</option>
                                <option value="Tidak Teratur">Tidak Teratur</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Page 2 -->
            <div class="page2">
                <hr>
                <h2 class="text-center">SPF MATERNITAS</h2>
                <hr>
                <h4>A. DATA SUBYEKTIF</h4>
                <hr>
                <h5>1. Riwayat Menstruasi</h5>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Menarche (Tahun)</label>
                            <input type="number" name="menarche" class="form-control" placeholder="Enter ...">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>HPHT</label>
                            <input type="text" name="hpht" class="form-control" placeholder="Enter ...">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>HPL</label>
                            <input type="text" name="hpl" class="form-control" placeholder="Enter ...">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Jenis Menstruasi</label>
                            <select name="jenis_menstruasi" class="form-control">
                                <option value="Dismenorroe">Dismenorroe</option>
                                <option value="Spoting">Spoting</option>
                                <option value="Menorragia">Menorragia</option>
                                <option value="Metrorhagia">Metrorhagia</option>
                                <option value="Pre menstruasi syndrome">Pre menstruasi syndrome</option>
                            </select>
                        </div>
                    </div>
                </div>
                <h5>2. Perkawinan</h5>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Status Perkawinan</label>
                            <input type="text" name="status_perkawinan" class="form-control" placeholder="Enter ...">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Perkawinan Ke</label>
                            <input type="number" name="perkawinan_ke" class="form-control" placeholder="Enter ...">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Menikah Umur (Tahun)</label>
                            <input type="number" name="menikah_umur_2" class="form-control" placeholder="Enter ...">
                        </div>
                    </div>
                </div>
                <h5>3. Riwayat Kehamilan Persalinan dan Nifas</h5>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group text-center">
                            <label>G</label>
                            <input type="text" name="g" class="form-control" placeholder="Enter ...">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group text-center">
                            <label>P</label>
                            <input type="text" name="p" class="form-control" placeholder="Enter ...">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group text-center">
                            <label>Ab</label>
                            <input type="text" name="ab" class="form-control" placeholder="Enter ...">
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group text-center">
                            <label>Ah</label>
                            <input type="text" name="ah" class="form-control" placeholder="Enter ...">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group text-center">
                            <label>ANC</label>
                            <input type="text" name="anc" class="form-control" placeholder="Enter ...">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group text-center">
                            <label>x</label>
                            <input type="text" name="x" class="form-control" placeholder="Enter ...">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Imunisasi</label>
                            <select name="imunisasi" class="form-control">
                                <option value="Tidak">Tidak</option>
                                <option value="Ya">Ya</option>
                                <option value="TT I">TT I</option>
                            </select>
                        </div>
                    </div>

                </div>
                <hr>
                <h4>Tabel Riwayat Persalinan dan Nifas</h4>
                <h5>Baris 1</h5>
                <hr>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Tgl/Th Partus</label>
                            <input class="form-control" type="date" name="tgl_partus[]">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Tempat Partus</label>
                            <input class="form-control" type="text" name="tempat_partus[]">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Umur Hamil</label>
                            <input class="form-control" type="text" name="umur_hamil[]">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Jenis Persalinan</label>
                            <input class="form-control" type="text" name="jenis_persalinan[]">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Penolong Persalinan</label>
                            <input class="form-control" type="text" name="penolong_persalinan[]">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Penyulit</label>
                            <input class="form-control" type="text" name="penyulit[]">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>JK/BB</label>
                            <input class="form-control" type="text" name="jkbb[]">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Keadaan Anak Sekarang</label>
                            <input class="form-control" type="text" name="keadaan_anak[]">
                        </div>
                    </div>
                </div>
                <hr>
                <h5>Baris 2</h5>
                <hr>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Tgl/Th Partus</label>
                            <input class="form-control" type="date" name="tgl_partus[]">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Tempat Partus</label>
                            <input class="form-control" type="text" name="tempat_partus[]">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Umur Hamil</label>
                            <input class="form-control" type="text" name="umur_hamil[]">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Jenis Persalinan</label>
                            <input class="form-control" type="text" name="jenis_persalinan[]">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Penolong Persalinan</label>
                            <input class="form-control" type="text" name="penolong_persalinan[]">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Penyulit</label>
                            <input class="form-control" type="text" name="penyulit[]">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>JK/BB</label>
                            <input class="form-control" type="text" name="jkbb[]">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Keadaan Anak Sekarang</label>
                            <input class="form-control" type="text" name="keadaan_anak[]">
                        </div>
                    </div>
                </div>
                <hr>
                <h5>Baris 3</h5>
                <hr>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Tgl/Th Partus</label>
                            <input class="form-control" type="date" name="tgl_partus[]">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Tempat Partus</label>
                            <input class="form-control" type="text" name="tempat_partus[]">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Umur Hamil</label>
                            <input class="form-control" type="text" name="umur_hamil[]">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Jenis Persalinan</label>
                            <input class="form-control" type="text" name="jenis_persalinan[]">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Penolong Persalinan</label>
                            <input class="form-control" type="text" name="penolong_persalinan[]">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Penyulit</label>
                            <input class="form-control" type="text" name="penyulit[]">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>JK/BB</label>
                            <input class="form-control" type="text" name="jkbb[]">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Keadaan Anak Sekarang</label>
                            <input class="form-control" type="text" name="keadaan_anak[]">
                        </div>
                    </div>
                </div>
                <hr>
                <h5>Baris 4</h5>
                <hr>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Tgl/Th Partus</label>
                            <input class="form-control" type="date" name="tgl_partus[]">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Tempat Partus</label>
                            <input class="form-control" type="text" name="tempat_partus[]">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Umur Hamil</label>
                            <input class="form-control" type="text" name="umur_hamil[]">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Jenis Persalinan</label>
                            <input class="form-control" type="text" name="jenis_persalinan[]">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Penolong Persalinan</label>
                            <input class="form-control" type="text" name="penolong_persalinan[]">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Penyulit</label>
                            <input class="form-control" type="text" name="penyulit[]">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>JK/BB</label>
                            <input class="form-control" type="text" name="jkbb[]">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Keadaan Anak Sekarang</label>
                            <input class="form-control" type="text" name="keadaan_anak[]">
                        </div>
                    </div>
                </div>
                <hr>
                <h5>Baris 5</h5>
                <hr>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Tgl/Th Partus</label>
                            <input class="form-control" type="date" name="tgl_partus[]">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Tempat Partus</label>
                            <input class="form-control" type="text" name="tempat_partus[]">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Umur Hamil</label>
                            <input class="form-control" type="text" name="umur_hamil[]">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Jenis Persalinan</label>
                            <input class="form-control" type="text" name="jenis_persalinan[]">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Penolong Persalinan</label>
                            <input class="form-control" type="text" name="penolong_persalinan[]">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Penyulit</label>
                            <input class="form-control" type="text" name="penyulit[]">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>JK/BB</label>
                            <input class="form-control" type="text" name="jkbb[]">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Keadaan Anak Sekarang</label>
                            <input class="form-control" type="text" name="keadaan_anak[]">
                        </div>
                    </div>
                </div>

                <h5>4. Riwayat Hamil</h5>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Hamil Muda</label>
                            <select name="hamil_muda" id="hamil_muda" class="form-control">
                                <option value="Mual">Mual</option>
                                <option value="Muntah">Muntah</option>
                                <option value="Perdarahan">Perdarahan</option>
                                <option value="lainlain">Lain-lain</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Gejala Lain</label>
                            <input type="text" name="hamil_muda_lain" class="form-control" placeholder="Enter ..." id="gejalaLainInput" disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Hamil Tua</label>
                            <select name="hamil_tua" id="hamil_tua" class="form-control">
                                <option value="Pusing">Pusing</option>
                                <option value="Sakit Kepala">Sakit Kepala</option>
                                <option value="Perdarahan">Perdarahan</option>
                                <option value="lainlain">Lain-lain</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Gejala Lain</label>
                            <input type="text" name="hamil_tua_lain" class="form-control" placeholder="Enter ..." id="gejalaTuaLainInput" disabled>
                        </div>
                    </div>
                </div>

                <h5>5. Riwayat Penyakit Yang Lalu/Operasi</h5>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Pernah Dirawat</label>
                            <select name="pernah_dirawat" id="pernah_dirawat" class="form-control">
                                <option value="Tidak">Tidak</option>
                                <option value="Ya">Ya</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Tempat Dirawat</label>
                            <input type="text" name="tempat_pernah_dirawat" class="form-control" placeholder="Enter ..." id="tempatDirawatInput" disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Operasi</label>
                            <select name="operasi" id="operasi" class="form-control">
                                <option value="Tidak">Tidak</option>
                                <option value="Ya">Ya</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Tempat Operasi</label>
                            <input type="text" name="tempat_operasi" class="form-control" placeholder="Enter ..." id="tempatOperasiInput" disabled>
                        </div>
                    </div>
                </div>

                <h5>6. Riwayat Penyakit Keluarga</h5>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Riwayat Penyakit Keluarga</label>
                            <select name="riwayat_penyakit_keluarga" class="form-control">
                                <option value="Kanker">Kanker</option>
                                <option value="Penyakit Hati">Penyakit Hati</option>
                                <option value="Hipertensi">Hipertensi</option>
                                <option value="DM">DM</option>
                                <option value="Penyakit Ginjal">Penyakit Ginjal</option>
                                <option value="Penyakit jiwa">Penyakit jiwa</option>
                                <option value="Kelainan bawaan">Kelainan bawaan</option>
                                <option value="Hamil kembar">Hamil kembar</option>
                                <option value="TBC">TBC</option>
                                <option value="Epilepsi">Epilepsi</option>
                                <option value="Alergi">Alergi</option>
                            </select>
                        </div>
                    </div>

                </div>

                <h5>7. Riwayat Penyakit Gynecologi</h5>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Riwayat Penyakit Gynecologi</label>
                            <select name="riwayat_penyakit_gynecologi" class="form-control">
                                <option value="Infertilitas">Infertilitas</option>
                                <option value="Infeksi virus">Infeksi virus</option>
                                <option value="PMS">PMS</option>
                                <option value="Cervicitis cronis">Cervicitis cronis</option>
                                <option value="Endometriosis">Endometriosis</option>
                                <option value="Polip servix">Polip servix</option>
                                <option value="Kanker kandungan">Kanker kandungan</option>
                                <option value="Operasi kandungan">Operasi kandungan</option>
                                <option value="Perkosaan">Perkosaan</option>
                                <option value="Myoma">Myoma</option>
                            </select>
                        </div>
                    </div>

                </div>

                <h5>8. Riwayat Kb</h5>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Jenis KB</label>
                            <input type="text" name="jenis_kb" class="form-control" placeholder="Enter ...">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Lama Pemakaian</label>
                            <input type="text" name="lama_pemakaian_kb" class="form-control" placeholder="Enter ...">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Keluhan</label>
                            <input type="text" name="keluhan_kb" class="form-control" placeholder="Enter ...">
                        </div>
                    </div>
                </div>
                <h5>9. Nutrisi, Eliminasi dan Istirahat Terakhir</h5>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Makan (tgl/Jam)</label>
                            <input type="datetime-local" name="makan" class="form-control" placeholder="Enter ...">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Minum (tgl/Jam)</label>
                            <input type="datetime-local" name="minum" class="form-control" placeholder="Enter ...">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Tidur (jam)</label>
                            <input type="number" name="tidur" class="form-control" placeholder="Enter ...">
                        </div>
                    </div>
                </div>
                <h5>10. Psikososial</h5>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Penerimaan klien terhadap kehamilan ini</label>
                            <input type="text" name="penerimaan_klien" class="form-control" placeholder="Enter ...">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Sosial support dari</label>
                            <select name="support" class="form-control">
                                <option value="Suami">Suami</option>
                                <option value="Orang Tua">Orang Tua</option>
                                <option value="Mertua">Mertua</option>
                                <option value="Keluarga Lain">Keluarga Lain</option>
                            </select>
                        </div>
                    </div>
                </div>

                <hr>
                <h4>B. PEMERIKSAAN TAMBAHAN</h4>
                <hr>
                <h5>1. Pemeriksaan khusus</h5>
                <h5>a. Hamil/Bersalin</h5>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Inspeksi</label>
                            <select name="inspeksi" class="form-control" id="inspeksi">
                                <option value="Membesar dengan arah memanjang">Membesar dengan arah memanjang</option>
                                <option value="Melebar">Melebar</option>
                                <option value="Pelebaran Vena">Pelebaran Vena</option>
                                <option value="Linea Alba">Linea Alba</option>
                                <option value="Linea Nigra">Linea Nigra</option>
                                <option value="Striae Livide">Striae Livide</option>
                                <option value="Striae Albican">Striae Albican</option>
                                <option value="Luka bekas operasi">Luka bekas operasi</option>
                                <option value="lainlain">Lain lain</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Inspeksi Lain</label>
                            <input type="text" name="inspeksi_lain" id="inspeksi_lain" disabled class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Palpasi TFU Let. Punggung</label>
                            <select name="let_punggung" class="form-control" id="let_punggung">
                                <option value="puka">puka</option>
                                <option value="puki">puki</option>
                                <option value="Nyeri tekan">Nyeri tekan</option>
                                <option value="obsorn test">obsorn test</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Presentasi</label>
                            <select name="presentasi" class="form-control" id="presentasi">
                                <option value="kepala">kepala</option>
                                <option value="bokong">bokong</option>
                                <option value=" Cekungan pada perut">Cekungan pada perut</option>
                                <option value="lainlain">Lain-lain</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Presentasi Lain</label>
                            <input type="text" name="presentasi_lain" id="presentasi_lain" disabled class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Taksiran berat janin (TBJ)</label>
                            <input type="text" name="tbj" id="tbj" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Auskultasi: DJJ (kali/menit)</label>
                            <input type="number" name="auskultasi" id="auskultasi" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Auskultasi: DJJ (Frekuensi)</label>
                            <select name="djj" id="djj" class="form-control">
                                <option value="Teratur">Teratur</option>
                                <option value="Tidak Teratur">Tidak Teratur</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Bagian terendah</label>
                            <input type="text" name="bagian_terendah" id="bagian_terendah" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>HIS/kontraksi (kali/10 menit)</label>
                            <input type="number" name="his" id="his" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Durasi</label>
                            <select name="durasi" id="durasi" class="form-control">
                                <option value="20">&lt;20&quot;</option>
                                <option value="20-40">20-40</option>
                                <option value="40">>40&quot;</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Interisitas</label>
                            <select name="interisitas" id="interisitas" class="form-control">
                                <option value="lemah">lemah</option>
                                <option value="sedang">sedang</option>
                                <option value="kuat">kuat</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Pengeluaran per vaginam</label>
                            <select name="vaginam" id="vaginam" class="form-control">
                                <option value="lendir darah">lendir darah</option>
                                <option value="Darah">Darah</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Jumlah</label>
                            <select name="jumlah" id="jumlah" class="form-control">
                                <option value="250cc">250cc</option>
                                <option value="250-500">250-500</option>
                                <option value=">500">>500</option>
                                <option value="air ketuban">air ketuban</option>
                                <option value="lainlain">Lain-lain</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Jumlah Lain</label>
                            <input type="text" name="jumlah_lain" id="jumlah_lain" disabled class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Inspekulo : vagina</label>
                            <input type="text" name="inspekulo" id="inspekulo" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Portio</label>
                            <input type="text" name="portio" id="portio" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Vagina Toucher</label>
                            <input type="text" name="vagina_toucher" id="vagina_toucher" class="form-control">
                        </div>
                    </div>
                </div>

                <h5>b. Nifas</h5>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Nifas TFU</label>
                            <input type="text" name="nifas_tfu" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Kontraksi uterus</label>
                            <select name="kontraksi_uterus" id="kontraksi_uterus" class="form-control">
                                <option value="keras">keras</option>
                                <option value="lemah">lemah</option>
                                <option value="tidak ada">tidak ada</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Pengeluaran Pervaginam</label>
                            <select name="nifas_pengeluaran_pervaginam" id="nifas_pengeluaran_pervaginam" class="form-control">
                                <option value="Darah">Darah</option>
                                <option value="Lochea">Lochea</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Darah</label>
                            <select name="nifas_darah" id="nifas_darah" class="form-control">
                                <option value="250 cc">250 cc</option>
                                <option value="250-500">250-500</option>
                                <option value="> 500">> 500</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Lochea</label>
                            <select name="lochea_nifas" id="lochea_nifas" class="form-control" disabled>
                                <option value="Rubra">Rubra</option>
                                <option value="Sanguinolenta">Sanguinolenta</option>
                                <option value="Alba">Alba</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Luka Jalan Lahir</label>
                            <select name="luka_jalan" id="luka_jalan" class="form-control">
                                <option value="utuh">utuh</option>
                                <option value="Ruptor">Ruptor</option>
                                <option value="Episiotomi">Episiotomi</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Derajat Luka</label>
                            <select name="derajat_luka" id="derajat_luka" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="lainlain">Lain-lain</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Derajat Luka Lain</label>
                            <input type="text" name="derajat_luka_lain" id="derajat_luka_lain" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Luka post sectio</label>
                            <select name="luka_post" id="luka_post" class="form-control">
                                <option value="tidak">tidak</option>
                                <option value="ada">ada</option>
                            </select>
                        </div>
                    </div>
                </div>

                <hr>
                <h2 class="text-center">ANALISA MASALAH KEPERAWATAN KEBIDANAN</h2>
                <hr>

                <div class="row text-center">
                    <div class="col-sm-2">
                        <div class="form-group">
                            <input type="checkbox" name="checkbox1" class="form-control">
                            <span style="font-size: 12px;font-weight: normal;">Bersihan jalan nafas tidak efektif</span>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <input type="checkbox" name="checkbox2" class="form-control">
                            <span style="font-size: 12px;font-weight: normal;">Kerusakan pertukaran gas</span>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <input type="checkbox" name="checkbox3" class="form-control">
                            <span style="font-size: 12px;font-weight: normal;">Pola nafas tidak efektif</span>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <input type="checkbox" name="checkbox4" class="form-control">
                            <span style="font-size: 12px;font-weight: normal;">Nyeri</span>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <input type="checkbox" name="checkbox5" class="form-control">
                            <span style="font-size: 12px;font-weight: normal;">Penurunan curah jantung</span>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <input type="checkbox" name="checkbox6" class="form-control">
                            <span style="font-size: 12px;font-weight: normal;">Intoleransi aktifitas</span>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <input type="checkbox" name="checkbox7" class="form-control">
                            <span style="font-size: 12px;font-weight: normal;">Risiko cidera</span>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <input type="checkbox" name="checkbox8" class="form-control">
                            <span style="font-size: 12px;font-weight: normal;">Kelebihan/kurang volume cairan</span>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <input type="checkbox" name="checkbox9" class="form-control">
                            <span style="font-size: 12px;font-weight: normal;">Perubahan perfusi jaringan jantung paru/jaringan otak/perifer</span>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <input type="checkbox" name="checkbox10" class="form-control">
                            <span style="font-size: 12px;font-weight: normal;">Ganggunan mobilitas fisik</span>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <input type="checkbox" name="checkbox11" class="form-control">
                            <span style="font-size: 12px;font-weight: normal;">Diare</span>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <input type="checkbox" name="checkbox12" class="form-control">
                            <span style="font-size: 12px;font-weight: normal;">Konstipasi</span>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <input type="checkbox" name="checkbox13" class="form-control">
                            <span style="font-size: 12px;font-weight: normal;">Perubahan nutrisi kurang/lebih dari kebutuhan</span>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <input type="checkbox" name="checkbox14" class="form-control">
                            <span style="font-size: 12px;font-weight: normal;">Risiko infeksi/sepsis</span>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <input type="checkbox" name="checkbox15" class="form-control">
                            <span style="font-size: 12px;font-weight: normal;">Keseimbangan cairan & elektrolit</span>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <input type="checkbox" name="checkbox16" class="form-control">
                            <span style="font-size: 12px;font-weight: normal;">Gangguan integritas kulit/jaringan</span>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <input type="checkbox" name="checkbox17" class="form-control">
                            <span style="font-size: 12px;font-weight: normal;">Hipertermia</span>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <input type="checkbox" name="checkbox18" class="form-control">
                            <span style="font-size: 12px;font-weight: normal;">Hipotermia</span>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <input type="checkbox" name="checkbox19" class="form-control">
                            <span style="font-size: 12px;font-weight: normal;">Inkontinensia/Retensio urin</span>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <input type="checkbox" name="checkbox20" class="form-control">
                            <span style="font-size: 12px;font-weight: normal;">Gangguan komunikasi verbal </span>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <input type="checkbox" name="checkbox21" class="form-control">
                            <span style="font-size: 12px;font-weight: normal;">Kurang perawatan diri</span>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <input type="checkbox" name="checkbox22" class="form-control">
                            <span style="font-size: 12px;font-weight: normal;">Konflik peran</span>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <input type="checkbox" name="checkbox23" class="form-control">
                            <span style="font-size: 12px;font-weight: normal;">Cemas</span>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <input type="checkbox" name="checkbox24" class="form-control">
                            <span style="font-size: 12px;font-weight: normal;">Gaungguan pola tidur</span>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <input type="checkbox" name="checkbox25" class="form-control">
                            <span style="font-size: 12px;font-weight: normal;">Harga diri rendah</span>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <input type="checkbox" name="checkbox26" class="form-control">
                            <span style="font-size: 12px;font-weight: normal;">Koping individu tidak efektif</span>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <input type="checkbox" name="checkbox27" class="form-control">
                            <span style="font-size: 12px;font-weight: normal;">Tumbuh kembang</span>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <input type="checkbox" name="checkbox28" class="form-control">
                            <span style="font-size: 12px;font-weight: normal;">Menyusui kurang efektif</span>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <input type="checkbox" name="checkbox29" class="form-control">
                            <span style="font-size: 12px;font-weight: normal;">Risiko komplikasi syok anafilatik</span>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <input type="checkbox" name="checkbox30" class="form-control">
                            <span style="font-size: 12px;font-weight: normal;">Perdarahan</span>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <input type="checkbox" name="checkbox31" class="form-control">
                            <span style="font-size: 12px;font-weight: normal;">Risiko jatuh</span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Diagnosa kebidanan</label>
                            <select name="diagnosa_kebidanan" id="diagnosa_kebidanan" class="form-control">
                                <option value="Ya">Ya</option>
                                <option value="Tidak">Tidak</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Uraian Diagnosa</label>
                            <input type="text" name="uraian_diagnosa" class="form-control" id="uraian_diagnosa">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Lain-lain</label>
                            <select name="lain_lain" id="lain_lain" class="form-control">
                                <option value="Ya">Ya</option>
                                <option value="Tidak">Tidak</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Uraian</label>
                            <input type="text" name="uraian" id="uraian" class="form-control">
                        </div>
                    </div>

                </div>

                <h5 class="text-center">D. RENCANA KEPERAWATAN INTERDISIPLIN</h5>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Diet dan Nutrisi</label>
                            <select name="dn" id="dn" class="form-control">
                                <option value="Tidak">Tidak</option>
                                <option value="Ya">Ya</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label>Uraian</label>
                            <input type="text" name="uraian_dn" id="uraian_dn" class="form-control" disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Rehabilitasi Medik</label>
                            <select name="rm" id="rm" class="form-control">
                                <option value="Tidak">Tidak</option>
                                <option value="Ya">Ya</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label>Uraian</label>
                            <input type="text" name="uraian_rm" id="uraian_rm" class="form-control" disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Farmasi</label>
                            <select name="far" id="far" class="form-control">
                                <option value="Tidak">Tidak</option>
                                <option value="Ya">Ya</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label>Uraian</label>
                            <input type="text" name="uraian_far" id="uraian_far" class="form-control" disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Kerohanian</label>
                            <select name="roh" id="roh" class="form-control">
                                <option value="Tidak">Tidak</option>
                                <option value="Ya">Ya</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label>Uraian</label>
                            <input type="text" name="uraian_roh" id="uraian_roh" class="form-control" disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Psikologi</label>
                            <select name="psi" id="psi" class="form-control">
                                <option value="Tidak">Tidak</option>
                                <option value="Ya">Ya</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label>Uraian</label>
                            <input type="text" name="uraian_psi" id="uraian_psi" class="form-control" disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Lain-lain</label>
                            <select name="ll" id="ll" class="form-control">
                                <option value="Tidak">Tidak</option>
                                <option value="Ya">Ya</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label>Uraian</label>
                            <input type="text" name="uraian_ll" id="uraian_ll" class="form-control" disabled>
                        </div>
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
    // Tanda-tanda klinis
    const chkKulit = document.getElementById('chkKulit');
    const selectKulit = document.getElementById('selectKulit');
    const selectTurgor = document.getElementById('selectTurgor');

    chkKulit.addEventListener('change', function() {
        if (chkKulit.checked) {
            selectKulit.removeAttribute('disabled');
            if (selectKulit.value == 'Turgor') {
                selectTurgor.removeAttribute('disabled');
            }
        } else {
            selectKulit.setAttribute('disabled', 'disabled');
            selectTurgor.setAttribute('disabled', 'disabled');
        }
    });

    selectKulit.addEventListener('change', function() {
        if (selectKulit.value === 'Turgor') {
            selectTurgor.removeAttribute('disabled');
        } else {
            selectTurgor.setAttribute('disabled', 'disabled');
        }
    });
    // End Tanda-tanda klinis

    // Jenis Diet
    const jenisDietSelect = document.getElementById('jenisDietSelect');
    const jenisDietLainInput = document.getElementById('jenisDietLainInput');

    jenisDietSelect.addEventListener('change', function() {
        if (jenisDietSelect.value === 'lainlain') {
            jenisDietLainInput.removeAttribute('disabled');
        } else {
            jenisDietLainInput.setAttribute('disabled', 'disabled');
            jenisDietLainInput.value = '';
        }
    });
    // End Jenis Diet

    // ASI
    const asiSelect = document.getElementById('asiSelect');
    const frekuensiInput = document.getElementById('frekuensiInput');

    asiSelect.addEventListener('change', function() {
        if (asiSelect.value === 'Ya') {
            frekuensiInput.removeAttribute('disabled');
        } else {
            frekuensiInput.setAttribute('disabled', 'disabled');
            frekuensiInput.value = '';
        }
    });
    // End ASI

    // ASB
    const asbSelect = document.getElementById('asbSelect');
    const frekuensiAsbInput = document.getElementById('frekuensiAsbInput');
    const ukuranAsbInput = document.getElementById('ukuranAsbInput');

    asbSelect.addEventListener('change', function() {
        if (asbSelect.value === 'Ya') {
            frekuensiAsbInput.removeAttribute('disabled');
            ukuranAsbInput.removeAttribute('disabled');
        } else {
            frekuensiAsbInput.setAttribute('disabled', 'disabled');
            ukuranAsbInput.setAttribute('disabled', 'disabled');
            frekuensiAsbInput.value = '';
            ukuranAsbInput.value = '';
        }
    });
    // End ASB

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
        if (terpasangKateterSelect.value === 'Ya') {
            hariKateterInput.removeAttribute('disabled');
        } else {
            hariKateterInput.setAttribute('disabled', 'disabled');
            hariKateterInput.value = '';
        }
    });
    // End Kateter

    // Konsumsi Obat
    const konsumsiObatSelect = document.getElementById('konsumsi_obat');
    const namaObatInput = document.getElementById('namaObatInput');

    konsumsiObatSelect.addEventListener('change', function() {
        if (konsumsiObatSelect.value === 'Ya') {
            namaObatInput.removeAttribute('disabled');
        } else {
            namaObatInput.setAttribute('disabled', 'disabled');
            namaObatInput.value = '';
        }
    });
    // End Konsumsi Obat

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
        if (penyakitKelaminSelect.value === 'Ya') {
            jenisKeluhanInput.removeAttribute('disabled');
        } else {
            jenisKeluhanInput.setAttribute('disabled', 'disabled');
            jenisKeluhanInput.value = ''; // Mengatur nilai input menjadi kosong jika tidak
        }
    });
    // End Penyakit Kelamin

    // Hamil Muda
    const hamilMudaSelect = document.getElementById('hamil_muda');
    const gejalaLainInput = document.getElementById('gejalaLainInput');

    hamilMudaSelect.addEventListener('change', function() {
        if (hamilMudaSelect.value === 'lainlain') {
            gejalaLainInput.removeAttribute('disabled');
        } else {
            gejalaLainInput.setAttribute('disabled', 'disabled');
            gejalaLainInput.value = ''; // Mengatur nilai input menjadi kosong jika tidak
        }
    });
    // End Hamil Muda
    // Hamil Tua
    const hamilTuaSelect = document.getElementById('hamil_tua');
    const gejalaTuaLainInput = document.getElementById('gejalaTuaLainInput');

    hamilTuaSelect.addEventListener('change', function() {
        if (hamilTuaSelect.value === 'lainlain') {
            gejalaTuaLainInput.removeAttribute('disabled');
        } else {
            gejalaTuaLainInput.setAttribute('disabled', 'disabled');
            gejalaTuaLainInput.value = ''; // Mengatur nilai input menjadi kosong jika tidak
        }
    });
    // End Hamil Tua

    // Pernah dirawat
    const pernahDirawatSelect = document.getElementById('pernah_dirawat');
    const tempatDirawatInput = document.getElementById('tempatDirawatInput');

    pernahDirawatSelect.addEventListener('change', function() {
        if (pernahDirawatSelect.value === 'Ya') {
            tempatDirawatInput.removeAttribute('disabled');
        } else {
            tempatDirawatInput.setAttribute('disabled', 'disabled');
            tempatDirawatInput.value = ''; // Mengatur nilai input menjadi kosong jika tidak
        }
    });
    // End Pernah dirawat

    // Pernah operasi
    const operasiSelect = document.getElementById('operasi');
    const tempatOperasiInput = document.getElementById('tempatOperasiInput');

    operasiSelect.addEventListener('change', function() {
        if (operasiSelect.value === 'Ya') {
            tempatOperasiInput.removeAttribute('disabled');
        } else {
            tempatOperasiInput.setAttribute('disabled', 'disabled');
            tempatOperasiInput.value = ''; // Mengatur nilai input menjadi kosong jika tidak
        }
    });
    // End Pernah operasi

    // Inspeksi
    const inspeksiDropdown = document.getElementById("inspeksi");
    const inspeksiLainInput = document.getElementById("inspeksi_lain");

    inspeksiDropdown.addEventListener("change", function() {
        if (inspeksiDropdown.value === "lainlain") {
            inspeksiLainInput.disabled = false;
        } else {
            inspeksiLainInput.disabled = true;
            inspeksiLainInput.value = ""; // Kosongkan nilai input jika tidak dipilih "Lain lain"
        }
    });
    // End Inspeksi

    // Presentasi
    const presentasiDropdown = document.getElementById("presentasi");
    const presentasiLainInput = document.getElementById("presentasi_lain");

    presentasiDropdown.addEventListener("change", function() {
        if (presentasiDropdown.value === "lainlain") {
            presentasiLainInput.disabled = false;
        } else {
            presentasiLainInput.disabled = true;
            presentasiLainInput.value = ""; // Kosongkan nilai input jika tidak dipilih "Lain-lain"
        }
    });
    // End Presentasi

    // Jumlah
    const jumlahDropdown = document.getElementById("jumlah");
    const jumlahLainInput = document.getElementById("jumlah_lain");

    jumlahDropdown.addEventListener("change", function() {
        if (jumlahDropdown.value === "lainlain") {
            jumlahLainInput.disabled = false;
        } else {
            jumlahLainInput.disabled = true;
            jumlahLainInput.value = ""; // Kosongkan nilai input jika tidak dipilih "Lain-lain"
        }
    });
    // End Jumlah

    // Nifas
    const pengeluaranPervaginamDropdown = document.getElementById("nifas_pengeluaran_pervaginam");
    const darahDropdown = document.getElementById("nifas_darah");
    const locheaDropdown = document.getElementById("lochea_nifas");

    pengeluaranPervaginamDropdown.addEventListener("change", function() {
        if (pengeluaranPervaginamDropdown.value === "Darah") {
            darahDropdown.disabled = false;
            locheaDropdown.disabled = true;
        } else if (pengeluaranPervaginamDropdown.value === "Lochea") {
            darahDropdown.disabled = true;
            locheaDropdown.disabled = false;
        } else {
            darahDropdown.disabled = true;
            locheaDropdown.disabled = true;
        }
    });
    // End Nifas

    // Luka Jalan Lahir
    const derajatLukaDropdown = document.getElementById("derajat_luka");
    const derajatLukaLainInput = document.getElementById("derajat_luka_lain");

    derajatLukaDropdown.addEventListener("change", function() {
        if (derajatLukaDropdown.value === "lainlain") {
            derajatLukaLainInput.disabled = false;
        } else {
            derajatLukaLainInput.disabled = true;
            derajatLukaLainInput.value = ""; // Kosongkan nilai input jika tidak dipilih "Lain-lain"
        }
    });
    // End Luka Jalan Lahir

    // Diagnosa Kebidanan
    const diagnosaSelect = document.getElementById("diagnosa_kebidanan");
    const uraianDiagnosaInput = document.getElementById("uraian_diagnosa")
    diagnosaSelect.addEventListener("change", function() {
        if (diagnosaSelect.value === "Tidak") {
            uraianDiagnosaInput.disabled = true;
            uraianDiagnosaInput.value = "";
        } else {
            uraianDiagnosaInput.disabled = false;
        }
    });
    // End Diagnosa Kebidanan
    // Diagnosa Lain Lain
    const lainSelect = document.getElementById("lain_lain");
    const uraianLainInput = document.getElementById("uraian")
    lainSelect.addEventListener("change", function() {
        if (lainSelect.value === "Tidak") {
            uraianLainInput.disabled = true;
            uraianLainInput.value = "";
        } else {
            uraianLainInput.disabled = false;
        }
    });
    // End Diagnosa Lain Lain


    function handleUraianInputChange(selectId, uraianInputId) {
        const select = document.getElementById(selectId);
        const uraianInput = document.getElementById(uraianInputId);

        select.addEventListener('change', function() {
            if (select.value === 'Ya') {
                uraianInput.removeAttribute('disabled');
            } else {
                uraianInput.setAttribute('disabled', 'disabled');
                uraianInput.value = ''; // Mengatur nilai input menjadi kosong jika tidak
            }
        });
    }

    // Panggil fungsi handleUraianInputChange untuk setiap pasangan select dan input
    handleUraianInputChange('dn', 'uraian_dn');
    handleUraianInputChange('rm', 'uraian_rm');
    handleUraianInputChange('far', 'uraian_far');
    handleUraianInputChange('roh', 'uraian_roh');
    handleUraianInputChange('psi', 'uraian_psi');
    handleUraianInputChange('ll', 'uraian_ll');
</script>
<?= $this->endSection(); ?>