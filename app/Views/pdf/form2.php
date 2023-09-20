<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report PDF</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            margin: 20px;
        }



        table {
            border-collapse: collapse;
            border-color: black;
        }

        .w-100 {
            width: 100%;
        }

        .text-center {
            text-align: center;
        }

        .v-top {
            vertical-align: top;
        }

        .v-bottom {
            vertical-align: bottom;
        }

        .border {
            border: 1px solid black;
        }

        .border-bottom {
            border-bottom: 1px solid black;
        }

        .border-right {
            border-right: 1px solid black;
        }

        .border-left {
            border-left: 1px solid black;
        }

        .d-flex {
            display: flex;
        }

        .bold {
            font-weight: bold;
        }

        #biodata table {
            margin-left: 15px;
            font-weight: bold;
        }

        #bab-a h4 span {
            margin-left: 30px;
        }

        .page_break {
            page-break-before: always;
        }

        .px-5 {
            padding-left: 5px;
            padding-right: 5px;
        }

        .ml-10 {
            margin-left: 10px;
        }
    </style>
</head>

<body>
    <table class="border" style="width: 100%;">
        <!-- Header -->
        <tr class="border">
            <td>
                <h2 class="text-center">ASSESMEN KEBUTUHAN & PERENCANAAN</h2>
                <h2 class="text-center">PENDIDIKAN PASIEN DAN KELUARGA</h2>
                <h4 class="text-center" style="font-weight: normal;"><i>DIISI OLEH PERAWAT</i></h4>
            </td>
        </tr>
        <!-- Biodata -->
        <tr class="border">
            <td>
                <table style="font-weight: bold;margin-left: 15px;">
                    <tr>
                        <td>Nama</td>
                        <td style="padding-left: 10px;">: <?= $nama; ?></td>
                    </tr>
                    <tr>
                        <td>No. RM</td>
                        <td style="padding-left: 10px;">: <?= $norm; ?></td>
                    </tr>
                    <tr>
                        <td>Tgl. Lahir</td>
                        <td style="padding-left: 10px;">: <?= $tgllahir; ?></td>
                    </tr>
                    <tr>
                        <td>NIK</td>
                        <td style="padding-left: 10px;">: <?= $nik; ?></td>
                    </tr>
                </table>
            </td>
        </tr>
        <!-- BAB A -->
        <tr class="border">
            <td>
                <h4 style="margin-left: 30px;">A. PENGKAJIAN KEBUTUHAN PENDIDIKAN</h4>
            </td>
        </tr>
        <!-- Nomor 1 - 10-->
        <tr class="border">
            <td>
                <table style="width: 100%;">
                    <!-- No. 1 -->
                    <tr class="border-bottom">
                        <td style="border-right: 1px solid black;width: 30px;" class="text-center v-top">1</td>
                        <td style="padding-left:10px" colspan="4">Agama, keyakinan dan nilai - nilai / budaya</td>
                    </tr>
                    <!-- No 2 -->
                    <tr class="border-bottom">
                        <td style="border-right: 1px solid black;" class="text-center v-top">2</td>
                        <td style="padding-left:10px" colspan="4">
                            <p>Bahasa sehari - hari</p>
                            <input type="checkbox" class="v-bottom" <?= $bahasa == 'Indonesia Aktif' || $bahasa == 'Indonesia Pasif' ? 'checked' : ''; ?>> <?= $bahasa == 'Indonesia Aktif' || $bahasa == 'Indonesia Pasif' ? $bahasa : 'Indonesia, Aktif/Pasif'; ?>
                            <input type="checkbox" class="v-bottom" style="margin-left: 20px;" <?= $jenis_bahasa == 'daerah' ? 'checked' : ''; ?>> <?= $jenis_bahasa == 'daerah' ? $bahasa : 'Daerah, sebutkan...................Aktif/Pasif'; ?>
                            <br>
                            <input type="checkbox" class="v-bottom" <?= $bahasa == 'Inggris Aktif' || $bahasa == 'Inggris Pasif' ? 'checked' : ''; ?>> <?= $bahasa == 'Inggris Aktif' || $bahasa == 'Inggris Pasif' ? $bahasa : 'Inggris, Aktif/Pasif'; ?>
                            <input type="checkbox" class="v-bottom" style="margin-left: 37px;" <?= $jenis_bahasa == 'lainlain' ? 'checked' : ''; ?>> <?= $jenis_bahasa == 'lainlain' ? $bahasa : 'Lain-lain, sebutkan...................Aktif/Pasif'; ?>
                            <br>
                            <br>
                        </td>
                    </tr>
                    <!-- No. 3 -->
                    <tr class="border-bottom">
                        <td style="border-right: 1px solid black;width: 20px;" class="text-center v-top">3</td>
                        <td style="padding-left:10px" class="border-right">Perlu penerjemah</td>
                        <td style="padding-left:10px;width: 150px;" class="border-right"><input type="checkbox" class="v-bottom" <?= $penerjemah == 'Tidak' ? 'checked' : '' ?>>Tidak</td>
                        <td colspan="2" style="padding-left:10px"><input type="checkbox" <?= $penerjemah != 'Tidak' ? 'checked' : '' ?> class="v-bottom"><span>Ya, bahasa : <?= $penerjemah != 'Tidak' ? $penerjemah : '' ?></span></td>
                    </tr>
                    <!-- No. 4 -->
                    <tr class="border-bottom">
                        <td style="border-right: 1px solid black;width: 20px;" class="text-center v-top">4</td>
                        <td style="padding-left:10px" class="border-right">Keterbatasan fisik dan kognitif</td>
                        <td style="padding-left:10px" class="border-right"><input type="checkbox" <?= $keterbatasan == 'Tidak' ? 'checked' : '' ?> class="v-bottom">Tidak</td>
                        <td colspan="2" style="padding-left:10px"><input type="checkbox" <?= $keterbatasan == 'Ya' ? 'checked' : '' ?> class="v-bottom"><span>Ya</span></td>
                    </tr>
                    <!-- No. 5 -->
                    <tr class="border-bottom">
                        <td style="border-right: 1px solid black;width: 20px;" class="text-center">5</td>
                        <td class="border-right" style="padding-left:10px;width: 250px;">Cara belajar yang disukai</td>
                        <td colspan="3" style="padding-left:10px;">
                            <input type="checkbox" <?= $cara_belajar == 'Menulis' ? 'checked' : '' ?> class="v-bottom"> Menulis
                            <input type="checkbox" <?= $cara_belajar == 'Diskusi' ? 'checked' : '' ?> class="v-bottom" style="margin-left: 107px;"> Diskusi
                            <br>
                            <input type="checkbox" <?= $cara_belajar == 'Audio-Visual/Gambar' ? 'checked' : '' ?> class="v-bottom"> Audio-Visual/gambar
                            <input type="checkbox" <?= $cara_belajar == 'Demonstrasi' ? 'checked' : '' ?> class="v-bottom" style="margin-left: 20px;"> Demonstrasi
                        </td>
                    </tr>
                    <!-- No. 6 -->
                    <tr class="border-bottom">
                        <td style="border-right: 1px solid black;width: 20px;" class="text-center">6</td>
                        <td style="padding-left:10px" class="border-right">Tingkat pendidikan</td>
                        <td style="padding-left:10px" class="border-right">
                            <input type="checkbox" <?= $tingkat_pendidikan == 'TK' ? 'checked' : '' ?> class="v-bottom">TK <br>
                            <input type="checkbox" <?= $tingkat_pendidikan == 'SD' ? 'checked' : '' ?> class="v-bottom">SD <br>
                            <input type="checkbox" <?= $tingkat_pendidikan == 'SMP' ? 'checked' : '' ?> class="v-bottom">SMP <br>
                        </td>
                        <td style="padding-left:10px" class="border-right">
                            <input type="checkbox" <?= $tingkat_pendidikan == 'SMA' ? 'checked' : '' ?> class="v-bottom">SMA <br>
                            <input type="checkbox" <?= $tingkat_pendidikan == 'Akademi' ? 'checked' : '' ?> class="v-bottom">Akademi <br>
                            <input type="checkbox" <?= $tingkat_pendidikan == 'Sarjana' ? 'checked' : '' ?> class="v-bottom">Sarjana <br>
                        </td>
                        <td style="padding-left:10px" class="v-top"><input type="checkbox" <?= $tingkat_pendidikan == 'Lain-lain' ? 'checked' : '' ?> class="v-bottom"><span>Lain-lain</span></td>
                    </tr>
                    <!-- No. 7 -->
                    <tr class="border-bottom">
                        <td style="border-right: 1px solid black;width: 20px;" class="text-center v-top">7</td>
                        <td style="padding-left:10px" class="border-right">Kemampuan membaca</td>
                        <td style="padding-left:10px" class="border-right"><input type="checkbox" <?= $kemampuan_membaca == 'Tidak' ? 'checked' : '' ?> class="v-bottom">Tidak</td>
                        <td colspan="2" style="padding-left:10px"><input type="checkbox" <?= $kemampuan_membaca == 'Ya' ? 'checked' : '' ?> class="v-bottom"><span>Ya</span></td>
                    </tr>
                    <!-- No. 8 -->
                    <tr class="border-bottom">
                        <td style="border-right: 1px solid black;width: 20px;" class="text-center v-top">8</td>
                        <td style="padding-left:10px" class="border-right">Hambatan emosi dan motivasi</td>
                        <td style="padding-left:10px" class="border-right"><input type="checkbox" <?= $hambatan == 'Tidak' ? 'checked' : '' ?> class="v-bottom">Tidak</td>
                        <td colspan="2" style="padding-left:10px"><input type="checkbox" <?= $hambatan == 'Ya' ? 'checked' : '' ?> class="v-bottom"><span>Ya</span></td>
                    </tr>
                    <!-- No. 9 -->
                    <tr class="border-bottom">
                        <td style="border-right: 1px solid black;width: 20px;" class="text-center v-top">9</td>
                        <td style="padding-left:10px" class="border-right">Kesediaan menerima pendidikan</td>
                        <td style="padding-left:10px" class="border-right"><input type="checkbox" <?= $kesediaan == 'Tidak' ? 'checked' : '' ?> class="v-bottom">Tidak</td>
                        <td colspan="2" style="padding-left:10px"><input type="checkbox" <?= $kesediaan == 'Ya' ? 'checked' : '' ?> class="v-bottom"><span>Ya</span></td>
                    </tr>
                    <!-- No. 10 -->
                    <tr class="border-bottom">
                        <td style="border-right: 1px solid black;width: 20px;" class="text-center v-top">10</td>
                        <td style="padding-left:10px" class="border-right">Kebutuan Pendidikan</td>
                        <td style="padding-left:10px"></td>
                        <td colspan="2" style="padding-left:10px"></td>
                    </tr>
                    <tr class="">
                        <td style="border-right: 1px solid black;width: 20px;" class="text-center v-top"></td>
                        <td style="padding-left:10px" class="border-rigdht">
                            <?php $lainlain = false; ?>
                            <input type="checkbox" <?= $kebutuhan_pendidikan == 'Medis' ? 'checked' : ''; ?> class="v-bottom">1. Medis <br>
                            <input type="checkbox" <?= $kebutuhan_pendidikan == 'Keperawatan' ? 'checked' : ''; ?> class="v-bottom">2. Keperawatan <br>
                            <input type="checkbox" <?= $kebutuhan_pendidikan == 'Farmasi' ? 'checked' : ''; ?> class="v-bottom">3. Farmasi <br>
                            <input type="checkbox" <?= $kebutuhan_pendidikan == 'Diet dan Nutrisi' ? 'checked' : ''; ?> class="v-bottom">4. Diet dan Nutrisi <br>
                        </td>
                        <td colspan="3" style="padding-left:10px" class="v-top border-left">
                            <input type="checkbox" <?= $kebutuhan_pendidikan == 'Rehabilitasi Medik' ? 'checked' : ''; ?> class="v-bottom">5. Rehabilitasi Medik <br>
                            <input type="checkbox" <?= $kebutuhan_pendidikan == 'Manajemen nyeri' ? 'checked' : ''; ?> class="v-bottom">6. Manajemen nyeri <br>
                            <?php
                            function cekLainlainKebPen($kebpen)
                            {
                                if ($kebpen != 'Medis' && $kebpen != 'Keperawatan' && $kebpen != 'Farmasi' && $kebpen != 'Diet dan Nutrisi' && $kebpen != 'Rehabilitasi Medik' && $kebpen != 'Manajemen nyeri') {
                                    return 'checked';
                                }
                            }
                            ?>
                            <input type="checkbox" <?= cekLainlainKebPen($kebutuhan_pendidikan) ?> class="v-bottom">7. Lain-lain : <?= cekLainlainKebPen($kebutuhan_pendidikan) == 'checked' ?  $kebutuhan_pendidikan : '...' ?> <br>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <!-- BAB B -->
        <tr class="border">
            <td>
                <h4 style="margin-left: 30px;">B. PERENCANAAN PEMBERIAN EDUKASI</h4>
            </td>
        </tr>
        <tr>
            <td>
                <table style="width: 100%;">
                    <tr class="border-bottom">
                        <td class="text-center border-right" style="width: 180px;height: 100px;">Kebutuhan Pendidikan</td>
                        <td class="text-center border-right" style="width: 120px;">Pemberi Pendidikan</td>
                        <td class="text-center border-right">Waktu Pemberian</td>
                        <td class="text-center border-right">Sasaran (Pasien/Keluarga/P&K)</td>
                        <td class="text-center">Cara Edukasi (D/C/Demo/S/O/PL)**</td>
                    </tr>
                    <tr>
                        <td class="border-right v-top" style="padding-left:10px;height: 327px;">
                            <div style="margin-top: 20px;margin-bottom: 10px;">
                                <input type="checkbox" class="v-bottom" <?= $kebutuhan_pendidikan == 'Medis' ? 'checked' : ''; ?>><label for="">Medis</label> <br>
                            </div>
                            <div style="margin-bottom: 10px;">
                                <input type="checkbox" class="v-bottom" <?= $kebutuhan_pendidikan == 'Keperawatan' ? 'checked' : ''; ?>>Keperawatan <br>
                            </div>
                            <div style="margin-bottom: 10px;">
                                <input type="checkbox" class="v-bottom" <?= $kebutuhan_pendidikan == 'Farmasi' ? 'checked' : ''; ?>>Farmasi <br>
                            </div>
                            <div style="margin-bottom: 10px;">
                                <input type="checkbox" class="v-bottom" <?= $kebutuhan_pendidikan == 'Diet dan Nutrisi' ? 'checked' : ''; ?>>Diet dan Nutrisi<br>
                            </div>
                            <div style="margin-bottom: 10px;">
                                <input type="checkbox" class="v-bottom" <?= $kebutuhan_pendidikan == 'Rehabilitasi Medik' ? 'checked' : ''; ?>>Rehabilitasi medik <br>
                            </div>
                            <div style="margin-bottom: 10px;">
                                <input type="checkbox" class="v-bottom" <?= $kebutuhan_pendidikan == 'Manajemen nyeri' ? 'checked' : ''; ?>>Manajemen nyeri <br>
                            </div>
                            <div style="margin-bottom: 10px;">
                                <input type="checkbox" class="v-bottom" <?= cekLainlainKebPen($kebutuhan_pendidikan) ?>>Lain-lain : <?= cekLainlainKebPen($kebutuhan_pendidikan) == 'checked' ?  $kebutuhan_pendidikan : '...' ?> <br>
                            </div>
                        </td>
                        <td class="border-right v-top" style="padding-left:10px">
                            <div style="margin-top: 20px;margin-bottom: 10px;">
                                <input type="checkbox" class="v-bottom" <?= $pemberi_pendidikan == 'Dokter' ? 'checked' : ''; ?>><label for="">Dokter</label> <br>
                            </div>
                            <div style="margin-bottom: 10px;">
                                <input type="checkbox" class="v-bottom" <?= $pemberi_pendidikan == 'Perawat' ? 'checked' : ''; ?>>Perawat <br>
                            </div>
                            <div style="margin-bottom: 10px;">
                                <input type="checkbox" class="v-bottom" <?= $pemberi_pendidikan == 'Farmasi' ? 'checked' : ''; ?>>Farmasi <br>
                            </div>
                            <div style="margin-bottom: 10px;">
                                <input type="checkbox" class="v-bottom" <?= $pemberi_pendidikan == 'Ahli Gizi' ? 'checked' : ''; ?>>Ahli Gizi<br>
                            </div>
                            <div style="margin-bottom: 10px;">
                                <input type="checkbox" class="v-bottom" <?= $pemberi_pendidikan == 'Fisioterapis' ? 'checked' : ''; ?>>Fisioterapis <br>
                            </div>
                            <?php
                            function cekLainlainPem($pem)
                            {
                                if ($pem != 'Dokter' && $pem != 'Perawat' && $pem != 'Farmasi' && $pem != 'Ahli Gizi' && $pem != 'Fisioterapis') {
                                    return 'checked';
                                }
                            }
                            ?>
                            <div style="margin-bottom: 10px;">
                                <input type="checkbox" class="v-bottom" <?= cekLainlainPem($pemberi_pendidikan) ?>> <?= cekLainlainPem($pemberi_pendidikan) == 'checked' ?  $pemberi_pendidikan : '...' ?> <br>
                            </div>

                        </td>
                        <td class="border-right v-top text-center" style="font-size: 14px;">
                            <div style="margin-top: 20px;"><?= $waktu_pemberian; ?></div>
                        </td>
                        <td class="border-right v-top" style="padding-left:10px">
                            <div style="margin-top: 20px;margin-bottom: 10px;">
                                <input type="checkbox" class="v-bottom" <?= $sasaran == 'Pasien' ? 'checked' : ''; ?>><label for="">Pasien</label> <br>
                            </div>
                            <div style="margin-bottom: 10px;">
                                <input type="checkbox" class="v-bottom" <?= $sasaran == 'Keluarga' ? 'checked' : ''; ?>>Keluarga <br>
                            </div>
                            <div style="margin-bottom: 10px;">
                                <input type="checkbox" class="v-bottom" <?= $sasaran == 'Pasien & Keluarga' ? 'checked' : ''; ?>>Pasien & Keluarga <br>
                            </div>
                        </td>
                        <td class="v-top" style="padding-left:10px;width: 150px;">
                            <div style="margin-top: 0;">Dengan</div>
                            <div style="margin-bottom: 10px;">
                                <input type="checkbox" class="v-bottom" <?= $cara_edukasi == 'Diskusi' ? 'checked' : ''; ?>><label for="">Diskusi</label> <br>
                            </div>
                            <div style="margin-bottom: 10px;">
                                <input type="checkbox" class="v-bottom" <?= $cara_edukasi == 'Observasi' ? 'checked' : ''; ?>>Observasi <br>
                            </div>
                            <div style="margin-bottom: 10px;">
                                <input type="checkbox" class="v-bottom" <?= $cara_edukasi == 'Ceramah' ? 'checked' : ''; ?>>Ceramah <br>
                            </div>
                            <div style="margin-bottom: 10px;">
                                <input type="checkbox" class="v-bottom" <?= $cara_edukasi == 'Demonstrasi' ? 'checked' : ''; ?>>Demonstrasi<br>
                            </div>
                            <div style="margin-bottom: 10px;">
                                <input type="checkbox" class="v-bottom" <?= $cara_edukasi == 'Simulasi' ? 'checked' : ''; ?>>Simulasi <br>
                            </div>
                            <div style="margin-bottom: 10px;">
                                <input type="checkbox" class="v-bottom" <?= $cara_edukasi == 'Praktek Langsung' ? 'checked' : ''; ?>>Praktek Langsung <br>
                            </div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    <div class="page_break"></div>

    <!-- Halaman 2 -->
    <table style="width: 100%;">
        <!-- Header -->
        <tr class="border">
            <td style="padding-top: 10px;padding-bottom: 10px;">
                <h3 class="text-center">PEMBERIAN INFORMASI DAN PENDIDIKAN PASIEN & KELUARGA</h3>
                <h4 class="text-center" style="font-weight: normal;"><i>DIISI OLEH PEMBERI ASUHAN</i></h4>
            </td>
        </tr>
        <!-- Biodata -->
        <tr class="border">
            <td>
                <table style="font-weight: bold;margin-left: 15px;">
                    <tr>
                        <td>Nama</td>
                        <td style="padding-left: 10px;">: <?= $nama_pa; ?></td>
                    </tr>
                    <tr>
                        <td>No. RM</td>
                        <td style="padding-left: 10px;">: <?= $norm_pa; ?></td>
                    </tr>
                    <tr>
                        <td>Tgl. Lahir</td>
                        <td style="padding-left: 10px;">: <?= $tgllahir_pa; ?></td>
                    </tr>
                    <tr>
                        <td>NIK</td>
                        <td style="padding-left: 10px;">: <?= $nik_pa; ?></td>
                    </tr>
                </table>
            </td>
        </tr>
        <!-- Content -->
        <?php
        function cekChecked($checkbox)
        {
            if ($checkbox == 'on') {
                return 'checked';
            } else {
                return '';
            }
        }
        ?>
        <tr class="border">
            <td>
                <table class="w-100">
                    <tr class="border-bottom">
                        <td class="border-right bold text-center" style="width: 30px;">No</td>
                        <td class="border-right bold text-center">Penjelasan</td>
                        <td class="border-right bold text-center px-5" style="font-size: 12px;width: 30px;">Metode & Kode Materi</td>
                        <td class="border-right bold text-center" style="width: 130px;">Evaluasi</td>
                        <td class="border-right bold text-center px-5">Waktu</td>
                        <td class="border-right bold text-center px-5" style="width: 100px;">Nama Pasien/Keluarga</td>
                        <td class="bold text-center px-5" style="font-size: 12px;width: 80px;">Tanda Tangan & Nama Edukator</td>
                    </tr>
                    <!-- Nomor 1 -->
                    <tr class="border-bottom" style="font-size: 14px;">
                        <td class="border-right px-5 text-center v-top">1</td>
                        <td class="border-right px-5">
                            <span class="bold">Medis</span>
                            <table>
                                <tr>
                                    <td class="v-top">a. </td>
                                    <td>Penyakit, Penyebab, tanda dan gejala</td>
                                </tr>
                                <tr>
                                    <td class="v-top">b. </td>
                                    <td>Hasil Pemeriksaan</td>
                                </tr>
                                <tr>
                                    <td class="v-top">c. </td>
                                    <td>Tindakan Medis, Pengobatan dan resikonya</td>
                                </tr>
                                <tr>
                                    <td class="v-top">d. </td>
                                    <td>Perkiraan biaya</td>
                                </tr>
                                <tr>
                                    <td class="v-top">e. </td>
                                    <td>Komplikasi yang mungkin terjadi</td>
                                </tr>
                                <tr>
                                    <td class="v-top">f. </td>
                                    <td>Hasil asuhan dan pengobatan yang tidak diharapkan</td>
                                </tr>
                            </table>

                        </td>
                        <td class="border-right px-5">
                            <table>
                                <tr>
                                    <td><input type="checkbox" class="ml-10" <?= cekChecked($m_a) ?> style="margin-top: -5px;"></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="ml-10" <?= cekChecked($m_b) ?> style="margin-top: -5px;"></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="ml-10" <?= cekChecked($m_c) ?> style="margin-top: -5px;"></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="ml-10" <?= cekChecked($m_d) ?> style="margin-top: -5px;"></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="ml-10" <?= cekChecked($m_e) ?> style="margin-top: -5px;"></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="ml-10" <?= cekChecked($m_f) ?> style="margin-top: -5px;"></td>
                                </tr>
                            </table>
                        </td>
                        <td class="border-right px-5 v-top">Mampu menjelaskan Point : a, b, c, d, e, f</td>
                        <td class="border-right px-5 text-center">
                            <span style="font-size: 12px;"><?= $m_waktu; ?></span>
                        </td>
                        <td class="border-right px-5 v-top">
                            <span><?= $m_pasien; ?></span>
                        </td>
                        <td class="text-center v-bottom"> <span style="font-size: 12px;"><?= $m_edukator; ?></span></td>
                    </tr>
                    <!-- Nomor 2 -->
                    <tr class="border-bottom" style="font-size: 14px;">
                        <td class="border-right px-5 text-center v-top">2</td>
                        <td class="border-right px-5">
                            <span class="bold">Keperawatan</span>
                            <table>
                                <tr>
                                    <td class="v-top">a. </td>
                                    <td>
                                        Pendidikan kesehatan tentang :
                                        <table>
                                            <tr>
                                                <td style="padding-right: 5px;">1)</td>
                                                <td>Cuci tangan</td>
                                            </tr>
                                            <tr>
                                                <td style="padding-right: 5px;">2)</td>
                                                <td>Resiko jatuh</td>
                                            </tr>
                                            <tr>
                                                <td style="padding-right: 5px;">3)</td>
                                                <td>Orientasi pasien baru</td>
                                            </tr>
                                            <tr>
                                                <td style="padding-right: 5px;">4)</td>
                                                <td>Administrasi obat</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="v-top">b. </td>
                                    <td>Penanganan & perawatan di RS</td>
                                </tr>
                                <tr>
                                    <td class="v-top">c. </td>
                                    <td>Penanganan dan perawatan di rumah</td>
                                </tr>
                                <tr>
                                    <td class="v-top">d. </td>
                                    <td>Alat-alat yang perlu disiapkan di rumah</td>
                                </tr>
                                <tr>
                                    <td class="v-top">e. </td>
                                    <td>Keamanan lingkungan rumah</td>
                                </tr>
                                <tr>
                                    <td class="v-top">f. </td>
                                    <td>Keamanan lingkungan bermain</td>
                                </tr>
                                <tr>
                                    <td class="v-top">g. </td>
                                    <td>
                                        Pencegahan & pengendalian infeksi
                                        <table>
                                            <tr>
                                                <td style="padding-right: 5px;">1)</td>
                                                <td>Cuci tangan</td>
                                            </tr>
                                            <tr>
                                                <td style="padding-right: 5px;">2)</td>
                                                <td>Penggunaan alat medis</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="v-top">h. </td>
                                    <td>Sumber-sumber pelayan kesehatan di komunitas/pemenuhan kebutuhan kesehatan berkelanjutan</td>
                                </tr>
                            </table>

                        </td>
                        <td class="border-right px-5 v-top">
                            <table class="">
                                <tr>
                                    <td><input type="checkbox" class="ml-10" <?= cekChecked($k_a) ?> style="margin-top: 10px;"></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="ml-10" <?= cekChecked($k_b) ?> style="margin-top: 60px;"></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="ml-10" <?= cekChecked($k_c) ?> style="margin-top: -5px;"></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="ml-10" <?= cekChecked($k_d) ?> style="margin-top: -5px;"></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="ml-10" <?= cekChecked($k_e) ?> style="margin-top: -5px;"></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="ml-10" <?= cekChecked($k_f) ?> style="margin-top: -5px;"></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="ml-10" <?= cekChecked($k_g) ?> style="margin-top: -5px;"></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="ml-10" <?= cekChecked($k_h) ?> style="margin-top: 22px;"></td>
                                </tr>
                            </table>
                        </td>
                        <td class="border-right px-5 v-top">
                            Mampu menjelaskan Point : <br>
                            a. 1), 2), 3), 4) <br>
                            b. <br>
                            c. <br>
                            d. <br>
                            e. <br>
                            f. <br>
                            g. Mampu mendemontrasikan<br>
                            1) Cuci tangan <br>
                            2) Penggunaan alat medis <br>
                            h.

                        </td>
                        <td class="border-right px-5 text-center">
                            <span style="font-size: 12px;"><?= $k_waktu; ?></span>
                        </td>
                        <td class="border-right px-5 v-top">
                            <span><?= $k_pasien; ?></span>
                        </td>
                        <td class="text-center v-bottom"> <span style="font-size: 12px;"><?= $k_edukator; ?></span></td>
                    </tr>
                    <!-- Nomor 3 -->
                    <tr class="border-bottom" style="font-size: 14px;">
                        <td class="border-right px-5 text-center v-top">3</td>
                        <td class="border-right px-5">
                            <span class="bold">Farmasi</span>
                            <table>
                                <tr>
                                    <td class="v-top">a. </td>
                                    <td>Nama Obat & Kegunaanya</td>
                                </tr>
                                <tr>
                                    <td class="v-top">b. </td>
                                    <td>Aturan Pemakaian</td>
                                </tr>
                                <tr>
                                    <td class="v-top">c. </td>
                                    <td>Jumlah obat yang diberikan</td>
                                </tr>
                                <tr>
                                    <td class="v-top">d. </td>
                                    <td>Cara menyimpan obat</td>
                                </tr>
                                <tr>
                                    <td class="v-top">e. </td>
                                    <td>Efek samping obat</td>
                                </tr>
                                <tr>
                                    <td class="v-top">f. </td>
                                    <td>Interaksi antar obat & interaksi obat dengan makanan</td>
                                </tr>
                            </table>

                        </td>
                        <td class="border-right px-5">
                            <table>
                                <tr>
                                    <td><input type="checkbox" class="ml-10" <?= cekChecked($f_a) ?> style="margin-top: -5px;"></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="ml-10" <?= cekChecked($f_b) ?> style="margin-top: -5px;"></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="ml-10" <?= cekChecked($f_c) ?> style="margin-top: -5px;"></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="ml-10" <?= cekChecked($f_d) ?> style="margin-top: -5px;"></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="ml-10" <?= cekChecked($f_e) ?> style="margin-top: -5px;"></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="ml-10" <?= cekChecked($f_f) ?> style="margin-top: -5px;"></td>
                                </tr>
                            </table>
                        </td>
                        <td class="border-right px-5 v-top">Mampu menjelaskan Point : a, b, c, d, e, f</td>
                        <td class="border-right px-5 text-center">
                            <span style="font-size: 12px;"><?= $f_waktu; ?></span>
                        </td>
                        <td class="border-right px-5 v-top">
                            <span><?= $f_pasien; ?></span>
                        </td>
                        <td class="text-center v-bottom"> <span style="font-size: 12px;"><?= $f_edukator; ?></span></td>
                    </tr>
                    <!-- Nomor 4 -->
                    <tr class="border-bottom" style="font-size: 14px;">
                        <td class="border-right px-5 text-center v-top">4</td>
                        <td class="border-right px-5">
                            <span class="bold">Diet & Nutrisi</span>
                            <table>
                                <tr>
                                    <td class="v-top">a. </td>
                                    <td>Status gizi</td>
                                </tr>
                                <tr>
                                    <td class="v-top">b. </td>
                                    <td>Pelayanan makanan RS</td>
                                </tr>
                                <tr>
                                    <td class="v-top">c. </td>
                                    <td>Pembatasan diluar RS</td>
                                </tr>
                                <tr>
                                    <td class="v-top">d. </td>
                                    <td>Diet selama dirumah</td>
                                </tr>

                            </table>

                        </td>
                        <td class="border-right px-5">
                            <table>
                                <tr>
                                    <td><input type="checkbox" class="ml-10" <?= cekChecked($dn_a) ?> style="margin-top: 10px;"></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="ml-10" <?= cekChecked($dn_b) ?> style="margin-top: -5px;"></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="ml-10" <?= cekChecked($dn_c) ?> style="margin-top: -5px;"></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="ml-10" <?= cekChecked($dn_d) ?> style="margin-top: -5px;"></td>
                                </tr>
                            </table>
                        </td>
                        <td class="border-right px-5 v-top">Mampu menjelaskan Point : a, b, c, d</td>
                        <td class="border-right px-5 text-center">
                            <span style="font-size: 12px;"><?= $dn_waktu; ?></span>
                        </td>
                        <td class="border-right px-5 v-top">
                            <span><?= $dn_pasien; ?></span>
                        </td>
                        <td class="text-center v-bottom"> <span style="font-size: 12px;"><?= $dn_edukator; ?></span></td>
                    </tr>
                    <!-- Nomor 5 -->
                    <tr class="border-bottom" style="font-size: 14px;">
                        <td class="border-right px-5 text-center v-top">5</td>
                        <td class="border-right px-5">
                            <span class="bold">Rehabilitasi Medik</span>
                            <table>
                                <tr>
                                    <td class="v-top">a. </td>
                                    <td>Fisioterapi</td>
                                </tr>
                            </table>

                        </td>
                        <td class="border-right px-5 v-top">
                            <table>
                                <tr>
                                    <td><input type="checkbox" class="ml-10" <?= cekChecked($rm_a) ?> style="margin-top: 20px;"></td>
                                </tr>

                            </table>
                        </td>
                        <td class="border-right px-5 v-top">Mampu menjelaskan Point : a</td>
                        <td class="border-right px-5 text-center">
                            <span style="font-size: 12px;"><?= $rm_waktu; ?></span>
                        </td>
                        <td class="border-right px-5 v-top">
                            <span><?= $rm_pasien; ?></span>
                        </td>
                        <td class="text-center v-bottom"> <span style="font-size: 12px;"><?= $rm_edukator; ?></span></td>
                        <td class=""></td>
                    </tr>
                    <!-- Nomor 6 -->
                    <tr class="border-bottom" style="font-size: 14px;">
                        <td class="border-right px-5 text-center v-top">6</td>
                        <td class="border-right px-5 v-top">
                            <span class="bold">Manajemen Nyeri</span>
                            <table>
                                <tr>
                                    <td class="v-top">a. </td>
                                    <td>
                                        Non farmakologi
                                        <table>
                                            <tr>
                                                <td style="padding-right: 5px;">1)</td>
                                                <td>Teknik relaksasi (nafas dalam)</td>
                                            </tr>
                                            <tr>
                                                <td style="padding-right: 5px;">2)</td>
                                                <td>Distraksi, dll</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="v-top">b. </td>
                                    <td>Farmakologi</td>
                                </tr>
                            </table>

                        </td>
                        <td class="border-right px-5 v-top">
                            <table>
                                <tr>
                                    <td><input type="checkbox" class="ml-10" <?= cekChecked($mn_a) ?> style="margin-top: 20px;"></td>
                                </tr>
                                <tr>
                                    <td><input type="checkbox" class="ml-10" <?= cekChecked($mn_b) ?> style="margin-top: 20px;"></td>
                                </tr>
                            </table>
                        </td>
                        <td class="border-right px-5 v-top">
                            Mampu menjelaskan Point : a, b <br> <br>
                            Mampu mendemonstrasikan Point : 1), 2)
                        </td>
                        <td class="border-right px-5 text-center">
                            <span style="font-size: 12px;"><?= $mn_waktu; ?></span>
                        </td>
                        <td class="border-right px-5 v-top">
                            <span><?= $mn_pasien; ?></span>
                        </td>
                        <td class="text-center v-bottom"> <span style="font-size: 12px;"><?= $mn_edukator; ?></span></td>
                    </tr>
                    <!-- Nomor 7 -->
                    <tr class="" style="font-size: 14px;">
                        <td class="border-right px-5 text-center v-top" style="height: 40px;">7</td>
                        <td class="border-right px-5 v-top">
                            <span class="bold">Lain - lain</span>
                        </td>
                        <td class="border-right px-5"></td>
                        <td class="border-right px-5 v-top">Mampu menjelaskan Point</td>
                        <td class="border-right px-5"></td>
                        <td class="border-right px-5"></td>
                        <td class=""></td>
                    </tr>
                </table>

            </td>
        </tr>
    </table>
    <span style="font-size: 14px;">
        Keterangan : <br>
        Kode Metode : Diskusi (D), Ceramah (C), Demonstrasi (Demo), Simulasi (S), Observasi (O), Praktek Langsung (PL), Pasien(P)
    </span>

</body>

</html>