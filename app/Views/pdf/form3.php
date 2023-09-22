<?php
function compare($a, $b)
{
    if ($a == $b) return 'checked';
}
function compareC($a)
{
    if ($a == 'on') return 'checked';
}

function cekStrKosong($a)
{
    return $a != '' ? '<span class="underline">' . $a . '</span>' : '...';
}

function cekTgl($tgl)
{
    if ($tgl == '0000-00-00') {
        echo ''; // Output kosong jika $tgl adalah "0000-00-00"
    } else {
        $formattedDate = date("d-m-Y", strtotime($tgl));
        echo $formattedDate;
    }
}
function cekTgl2($tgl)
{
    if ($tgl == '0000-00-00 00:00:00') {
        echo ''; // Output kosong jika $tgl adalah "0000-00-00"
    } else {
        $formattedDate = date("d-m-Y H:i:s", strtotime($tgl));
        echo $formattedDate;
    }
}


?>
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
            margin: 10px;
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

        .bold {
            font-weight: bold;
        }

        .page_break {
            page-break-before: always;
        }

        .pl-5 {
            padding-left: 5px;
        }

        .pl-10 {
            padding-left: 10px;
        }

        .pl-20 {
            padding-left: 20px;
        }

        .px-5 {
            padding-left: 5px;
            padding-right: 5px;
        }

        .py-10 {
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .underline {
            text-decoration: underline;
        }

        .lh-0 {
            line-height: 0;
        }
    </style>
</head>

<body>
    <table class="border" style="width: 100%;">
        <!-- Header -->
        <tr class="border">
            <td style="height: 30px;">
                <h3 class="text-center">ASSESMEN KEPERAWATAN SPF MATERNITAS</h3>
            </td>
        </tr>
        <!-- Biodata -->
        <tr class="border">
            <td style="padding-top:10px;padding-bottom: 10px;">
                <table style="margin-left: 40px;font-size: 14px;">
                    <tr>
                        <td>Nama</td>
                        <td class="pl-10">: <?= $nama; ?></td>
                    </tr>
                    <tr>
                        <td>No. RM</td>
                        <td class="pl-10">: <?= $norm; ?></td>
                    </tr>
                    <tr>
                        <td>Tgl. Lahir</td>
                        <td class="pl-10">: <?= cekTgl($tgllahir) ?></td>
                    </tr>

                </table>
            </td>
        </tr>
        <tr style="font-size: 12.92px;">
            <h4 style="margin-left: 20px;">POLA FUNGSIONAL</h4>
            <table style="margin-left: 20px;">
                <tr>
                    <td class="bold">1.</td>
                    <td class="pl-10 bold">Pola Presepsi dan Pemeliharaan Kesehatan</td>
                </tr>
                <tr>
                    <td></td>
                    <td class="pl-10">
                        Kebiasaan periksa bila sakit :
                        <input <?= compare($kebiasaan_periksa, 'Beli obat warung') ?> type="checkbox" class="v-bottom pl-10"> Beli obat warung
                        <input <?= compare($kebiasaan_periksa, 'Periksa ke fasilitas kesehatan') ?> type="checkbox" class="v-bottom pl-10"> Periksa ke fasilitas kesehatan <br>
                        <input <?= compare($kebiasaan_periksa, 'Tidak / jarang diobati karena sembuh sendiri') ?> type="checkbox" class="v-bottom" style="margin-left: 164.6px;"> Tidak / jarang diobati karena sembuh sendiri
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td class="pl-10">
                        Presepsi mengenai sakitnya :
                        <input <?= compare($presepsi, 'Tidak tahu') ?> type="checkbox" class="v-bottom" style="padding-left: 12px;"> Tidak tahu
                        <input <?= compare($presepsi, 'Tahu sedikit') ?> type="checkbox" class="v-bottom pl-10"> Tahu sedikit
                        <input <?= compare($presepsi, 'Mengerti dan paham mengenal sakitnya') ?> type="checkbox" class="v-bottom pl-10"> Mengerti dan paham mengenal sakitnya
                    </td>
                </tr>
                <tr>
                    <td class="bold">2.</td>
                    <td class="pl-10 bold">Pola Nutrisi dan Metabolik</td>
                </tr>
                <tr>
                    <td></td>
                    <td class="pl-10">
                        <table>
                            <tr>
                                <td>a. </td>
                                <td class="pl-10">Pemeriksaan laboratorium :</td>
                            </tr>
                            <tr>

                                <td></td>
                                <td class="pl-10">
                                    <table>
                                        <tr>
                                            <td>Hb</td>
                                            <td class="pl-10">:</td>
                                            <td class="pl-10"><span class="underline"><?= $hb; ?></span> gr%</td>
                                            <td class="pl-20">tgl <span class="underline"><?= cekTgl($tgl_hb) ?></span></td>
                                        </tr>
                                        <tr>
                                            <td>Albumin</td>
                                            <td class="pl-10">:</td>
                                            <td class="pl-10"><span class="underline"><?= $albumin; ?></span> gr/dl</td>
                                            <td class="pl-20">tgl <span class="underline"><?= cekTgl($tgl_albumin) ?></span></td>
                                        </tr>
                                        <tr>
                                            <td>Protein</td>
                                            <td class="pl-10">:</td>
                                            <td class="pl-10"><span class="underline"><?= $protein; ?></span> gr/dl</td>
                                            <td class="pl-20">tgl <span class="underline"><?= cekTgl($tgl_protein) ?></span></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td class="v-top">b. </td>
                                <td class="pl-10">
                                    Tanda-tanda klinis :
                                    <input <?= compareC($pucat) ?> type="checkbox" class="v-bottom" style="padding-left: 12px;"> Pucat
                                    <input <?= compareC($membrane_mukosa) ?> type="checkbox" class="v-bottom pl-10" style="margin-left: 74.5px;"> Membrane mukosa kering <br>
                                    <input <?= compareC($conjunctiva) ?> type="checkbox" class="v-bottom pl-10" style="margin-left: 108.5px;"> Conjunctiva anemis

                                    <input <?= $kulit != '' ? 'checked' : '' ?> type="checkbox" class="v-bottom pl-10"> Kulit :
                                    <input <?= $kulit == 'Kering' ? 'checked' : '' ?> type="checkbox" class="v-bottom pl-10"> Kering <br>
                                    <input <?= $kulit == 'Turgor' ? 'checked' : '' ?> type="checkbox" class="v-bottom pl-10" style="margin-left: 310px;"> Turgor :
                                    <input <?= $turgor == 'Baik' ? 'checked' : '' ?> type="checkbox" class="v-bottom pl-5"> Baik
                                    <input <?= $turgor == 'Kurang' ? 'checked' : '' ?> type="checkbox" class="v-bottom pl-5"> Kurang
                                    <input <?= $turgor == 'Jelek' ? 'checked' : '' ?> type="checkbox" class="v-bottom pl-5"> Jelek
                                </td>
                            </tr>
                            <tr>
                                <td class="v-top">c. </td>
                                <td class="pl-10">
                                    <table>
                                        <tr>
                                            <td>
                                                Riwayat Nutrisi
                                            </td>
                                            <td class="pl-10">:</td>
                                            <td>
                                                <input <?= compare($riwayat_nutrisi, 'Anoreksia') ?> type="checkbox" class="v-bottom pl-5"> Anoreksia
                                                <input <?= compare($riwayat_nutrisi, 'Mual') ?> type="checkbox" class="v-bottom pl-5"> Mual
                                                <input <?= compare($riwayat_nutrisi, 'Muntah') ?> type="checkbox" class="v-bottom pl-5"> Muntah
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Porsi Makan
                                            </td>
                                            <td class="pl-10">:</td>
                                            <td>
                                                <input <?= compare($porsi_makan, 'Cukup') ?> type="checkbox" class="v-bottom pl-5"> Cukup
                                                <input <?= compare($porsi_makan, 'Kurang') ?> type="checkbox" class="v-bottom pl-5"> Kurang
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Diet
                                            </td>
                                            <td class="pl-10">:</td>
                                            <td>
                                                <input <?= compare($diet, 'Nasi') ?> type="checkbox" class="v-bottom pl-5"> Nasi
                                                <input <?= compare($diet, 'Bubur kasar') ?> type="checkbox" class="v-bottom pl-5"> Bubur kasar
                                                <input <?= compare($diet, 'Bubur saring') ?> type="checkbox" class="v-bottom pl-5"> Bubur saring
                                                <input <?= compare($diet, 'Sonde') ?> type="checkbox" class="v-bottom pl-5"> Sonde
                                                <input <?= compare($diet, 'Puasa') ?> type="checkbox" class="v-bottom pl-5"> Puasa
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Jenis Diet
                                            </td>
                                            <td class="pl-10">:</td>
                                            <td>
                                                <input <?= compare($jenis_diet, 'DM') ?> type="checkbox" class="v-bottom pl-5"> DM
                                                <input <?= compare($jenis_diet, 'DH') ?> type="checkbox" class="v-bottom pl-5"> DH
                                                <input <?= compare($jenis_diet, 'RGRP') ?> type="checkbox" class="v-bottom pl-5"> RGRP
                                                <input <?= compare($jenis_diet, 'lainlain') ?> type="checkbox" class="v-bottom pl-5"> lain-lain : <?= $jenis_diet_lain == '' ? '.........' : $jenis_diet_lain; ?>
                                                <span class="pl-20">kalori : <span class="underline"><?= $kalori; ?></span></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td class="pl-10"></td>
                                            <td>
                                                <input <?= $asi == 'Ya' ? 'checked' : ''; ?> type="checkbox" class="v-bottom lh-0 pl-5"> ASI, Frekuensi <?= $frekuensi_asi != '' ? '<span class="underline">' . $frekuensi_asi . '</span>' : '...'; ?> X perhari
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td class="pl-10"></td>
                                            <td>
                                                <input <?= $asb == 'Ya' ? 'checked' : ''; ?> type="checkbox" class="v-bottom lh-0 pl-5"> ASB, Frekuensi <?= $frekuensi_asb != '' ? '<span class="underline">' . $frekuensi_asb . '</span>' : '...'; ?> X <?= $ukuran_asb != '' ? '<span class="underline">' . $ukuran_asb . '</span>' : '...'; ?> ml
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Terpasang NGT
                                            </td>
                                            <td class="pl-10">:</td>
                                            <td>
                                                <input <?= compare($ngt, 'Ya') ?> type="checkbox" class="v-bottom pl-5"> Ya
                                                <input <?= compare($ngt, 'Tidak') ?> type="checkbox" class="v-bottom pl-5"> Tidak
                                                <span class="pl-10">Terpasang hari ke : <span class="underline"><?= $terpasang_ngt; ?></span></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Tujuan pemasangan NGT
                                            </td>
                                            <td class="pl-10">:</td>
                                            <td>
                                                <input <?= compare($tujuan_ngt, 'Pemenuhan nutrisi') ?> type="checkbox" class="v-bottom pl-5"> Pemenuhan nutrisi
                                                <input <?= compare($tujuan_ngt, 'Cuci lambung') ?> type="checkbox" class="v-bottom pl-5"> Cuci lambung
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Jumlah minum
                                            </td>
                                            <td class="pl-10">:</td>
                                            <td>
                                                <span class="pl-5"><?= cekStrKosong($jumlah_minum_ngt); ?> ml/hari</span>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td class="bold">3.</td>
                    <td class="pl-10 bold">Pola Eliminasi</td>
                </tr>
                <tr>
                    <td></td>
                    <td class="pl-10">
                        <table>
                            <tr>
                                <td>BAB</td>
                                <td class="pl-10">:</td>
                                <td class="pl-5"><?= cekStrKosong($bab) ?> kali/hari</td>
                            </tr>
                            <tr>
                                <td>Konsistensi</td>
                                <td class="pl-10">:</td>
                                <td class="pl-5">
                                    <input <?= compare($konsistensi, 'Cair') ?> type="checkbox" class="v-bottom"> Cair
                                    <input <?= compare($konsistensi, 'Lunak') ?> type="checkbox" class="v-bottom pl-5"> Lunak
                                    <input <?= compare($konsistensi, 'Keras') ?> type="checkbox" class="v-bottom pl-5"> Keras
                                </td>
                            </tr>
                            <tr>
                                <td>Warna</td>
                                <td class="pl-10">:</td>
                                <td class="pl-5">
                                    <input <?= compare($warna, 'Merah') ?> type="checkbox" class="v-bottom"> Merah
                                    <input <?= compare($warna, 'Hitam') ?> type="checkbox" class="v-bottom pl-5"> Hitam
                                    <input <?= compare($warna, 'Normal') ?> type="checkbox" class="v-bottom pl-5"> Normal
                                </td>
                            </tr>
                            <tr>
                                <td>Keluhan</td>
                                <td class="pl-10">:</td>
                                <td class="pl-5">
                                    <input <?= compare($keluhan, 'Kembung') ?> type="checkbox" class="v-bottom"> Kembung
                                    <input <?= compare($keluhan, 'Sebah') ?> type="checkbox" class="v-bottom pl-5"> Sebah
                                    <input <?= compare($keluhan, 'Konstipasi') ?> type="checkbox" class="v-bottom pl-5"> Konstipasi
                                    <input <?= compare($keluhan, 'Diare') ?> type="checkbox" class="v-bottom pl-5"> Diare
                                </td>
                            </tr>
                            <tr>
                                <td>Peristaltik Usus</td>
                                <td class="pl-10">:</td>
                                <td class="pl-5"><?= cekStrKosong($peristaltik_usus) ?> kali/menit <input <?= compare($flatus, 'Ya') ?> type="checkbox" class="v-bottom pl-5"> Flatus</td>
                            </tr>
                            <tr>
                                <td>BAK</td>
                                <td class="pl-10">:</td>
                                <td class="pl-5">
                                    <?= cekStrKosong($bak) ?> kali/hari
                                    <input <?= compare($jenis_bak, 'Incontinentia') ?> type="checkbox" class="v-bottom pl-5"> Incontinentia
                                    <input <?= compare($jenis_bak, 'Retensi Urine') ?> type="checkbox" class="v-bottom pl-5"> Retensi Urine
                                    <input <?= compare($jenis_bak, 'Disuria') ?> type="checkbox" class="v-bottom pl-5"> Disuria
                                    <input <?= compare($jenis_bak, 'Anuria') ?> type="checkbox" class="v-bottom pl-5"> Anuria
                                </td>
                            </tr>
                            <tr>
                                <td>Jumlah</td>
                                <td class="pl-10">:</td>
                                <td class="pl-5"> <?= cekStrKosong($jumlah_bak) ?> ml/hari</td>
                            </tr>
                            <tr>
                                <td>Warna Urine</td>
                                <td class="pl-10">:</td>
                                <td class="pl-5">
                                    <input <?= compare($warna_urine, 'Jernih') ?> type="checkbox" class="v-bottom"> Jernih
                                    <input <?= compare($warna_urine, 'Merah') ?> type="checkbox" class="v-bottom pl-5"> Merah
                                    <input <?= compare($warna_urine, 'Kekuningan') ?> type="checkbox" class="v-bottom pl-5"> Kekuningan
                                </td>
                            </tr>
                            <tr>
                                <td>Terpasang Kateter</td>
                                <td class="pl-10">:</td>
                                <td class="pl-5">
                                    <input <?= compare($terpasang_kateter, 'Ya') ?> type="checkbox" class="v-bottom"> Ya
                                    <input <?= compare($terpasang_kateter, 'Tidak') ?> type="checkbox" class="v-bottom pl-5"> Tidak
                                    <span class="pl-5">Terpasang hari ke : <?= cekStrKosong($hari_kateter) ?> </span>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td class="bold">4.</td>
                    <td class="pl-10 bold">Pola Istirahat Tidur</td>
                </tr>
                <tr>
                    <td></td>
                    <td class="pl-10">
                        <table>
                            <tr>
                                <td>Jumlah jam tidur malam</td>
                                <td class="pl-10">:</td>
                                <td class="pl-5"> <?= cekStrKosong($jam_tidur_malam) ?> jam/hari. <input <?= compare($insomnia, 'Ya') ?> type="checkbox" class="v-bottom"> Insomnia</td>
                            </tr>
                            <tr>
                                <td>Kebiasaan tidur siang</td>
                                <td class="pl-10">:</td>
                                <td class="pl-5"> <?= cekStrKosong($jam_tidur_siang) ?> jam/hari</td>
                            </tr>
                            <tr>
                                <td>
                                    Kebiasaan mengkonsumsi obat sebelum tidur
                                </td>
                                <td class="pl-10">:</td>
                                <td class="pl-5">
                                    <input <?= compare($konsumsi_obat, 'Tidak') ?> type="checkbox" class="v-bottom"> Tidak
                                    <input <?= compare($konsumsi_obat, 'Ya') ?> type="checkbox" class="v-bottom"> Ya, <?= cekStrKosong($nama_obat) ?>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td class="bold">5.</td>
                    <td class="pl-10 bold">Pola Toleransi Koping Stres</td>
                </tr>
                <tr>
                    <td></td>
                    <td class="pl-10">
                        <table>
                            <tr>
                                <td>Koping terhadap sakitnya</td>
                                <td class="pl-10">:</td>
                                <td class="pl-5">
                                    <input <?= compare($koping, 'Takut/Khawatir') ?> type="checkbox" class="v-bottom"> Takut/Khawatir
                                    <input <?= compare($koping, 'Cemas') ?> type="checkbox" class="v-bottom"> Cemas
                                    <input <?= compare($koping, 'Menerima') ?> type="checkbox" class="v-bottom"> Menerima
                                </td>
                            </tr>
                            <tr>
                                <td>Penyelesaian bila ada masalah</td>
                                <td class="pl-10">:</td>
                                <td class="pl-5">
                                    <input <?= compare($penyelesaian_masalah, 'Sendiri') ?> type="checkbox" class="v-bottom"> Sendiri
                                    <input <?= compare($penyelesaian_masalah, 'Minta bantuan orang terdekat') ?> type="checkbox" class="v-bottom"> Minta bantuan orang terdekat
                                </td>
                            </tr>

                        </table>
                    </td>
                </tr>
                <tr>
                    <td class="bold">6.</td>
                    <td class="pl-10 bold">Pola Hubungan dan Peran</td>
                </tr>
                <tr>
                    <td></td>
                    <td class="pl-10">
                        <table>
                            <tr>
                                <td>Hubungan dengan orang lain selama dirawat</td>
                                <td class="pl-10">:</td>
                                <td class="pl-5">
                                    <input <?= compare($hubungan_orang, 'Terganggu') ?> type="checkbox" class="v-bottom"> Terganggu
                                    <input <?= compare($hubungan_orang, 'Tidak Terganggu') ?> type="checkbox" class="v-bottom"> Tidak Terganggu
                                </td>
                            </tr>
                            <tr>
                                <td>Peran di dalam keluarga sebagai</td>
                                <td class="pl-10">:</td>
                                <td class="pl-5">
                                    <input <?= compare($peran_dikeluarga, 'Ayah') ?> type="checkbox" class="v-bottom"> Ayah
                                    <input <?= compare($peran_dikeluarga, 'Ibu') ?> type="checkbox" class="v-bottom"> Ibu
                                    <input <?= compare($peran_dikeluarga, 'Anak') ?> type="checkbox" class="v-bottom"> Anak
                                    <input <?= compare($peran_dikeluarga, 'lainlain') ?> type="checkbox" class="v-bottom"> lain lain <?= cekStrKosong($peran_lain) ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Perannya selama sakit</td>
                                <td class="pl-10">:</td>
                                <td class="pl-5">
                                    <input <?= compare($peran_selama_sakit, 'Tidak dapat dilakukan') ?> type="checkbox" class="v-bottom"> Tidak dapat dilakukan
                                    <input <?= compare($peran_selama_sakit, 'Minimal') ?> type="checkbox" class="v-bottom"> Minimal
                                    <input <?= compare($peran_selama_sakit, 'Digantikan orang lain') ?> type="checkbox" class="v-bottom"> Digantikan orang lain
                                </td>
                            </tr>

                        </table>
                    </td>
                </tr>
                <tr>
                    <td class="bold">7.</td>
                    <td class="pl-10 bold">Pola Seksual dan Reproduksi</td>
                </tr>
                <tr>
                    <td></td>
                    <td class="pl-10">
                        <table>
                            <tr>
                                <td>Jumlah anak</td>
                                <td class="pl-10">:</td>
                                <td class="pl-5">
                                    <?= cekStrKosong($jumlah_anak) ?> orang
                                </td>
                            </tr>
                            <tr>
                                <td>Menikah umur</td>
                                <td class="pl-10">:</td>
                                <td class="pl-5">
                                    <?= cekStrKosong($menikah_umur) ?> tahun
                                </td>
                            </tr>
                            <tr>
                                <td>Anak pertama lahir umur</td>
                                <td class="pl-10">:</td>
                                <td class="pl-5">
                                    <?= cekStrKosong($anak_pertama) ?> tahun
                                </td>
                            </tr>
                            <tr>
                                <td>Pernah menderita penyakit kelamin</td>
                                <td class="pl-10">:</td>
                                <td class="pl-5">
                                    <input <?= compare($penyakit_kelamin, 'Ya') ?> type="checkbox" class=" v-bottom"> Ya
                                    <input <?= compare($penyakit_kelamin, 'Tidak') ?> type="checkbox" class="pl-5 v-bottom"> Tidak
                                </td>
                            </tr>
                            <tr>
                                <td>Jenis / keluhan</td>
                                <td class="pl-10">:</td>
                                <td class="pl-5">
                                    <?= cekStrKosong($jenis_keluhan) ?>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td class="bold">8.</td>
                    <td class="pl-10 bold">
                        Pola Nilai dan Kepercayaan : Kebiasaan menjalankan ibadah :
                        <input <?= compare($ibadah, 'Teratur') ?> type="checkbox" class="v-bottom pl-10"> Teratur
                        <input <?= compare($ibadah, 'Tidak Teratur') ?> type="checkbox" class="v-bottom pl-10"> Tidak teratur
                    </td>
                </tr>
            </table>

        </tr>
    </table>

    <div class="page_break"></div>

    <table class="border" style="width: 100%;">
        <tr class="border">
            <td style="height: 30px;">
                <h3 class="text-center">SPF MATERNITAS</h3>
            </td>
        </tr>
        <tr style="font-size: 12.92px;">
            <table style="margin-left: 20px;">
                <tr>
                    <td class="bold">A.</td>
                    <td class="pl-10 bold">DATA SUBYEKTIF</td>
                </tr>
                <tr class="">
                    <td></td>
                    <td class="pl-10">
                        <table>
                            <tr>
                                <td>1.</td>
                                <td class="pl-5">
                                    Riwayat Menstruasi: Menarche : <?= cekStrKosong($menarche) ?> tahun, HPHT : <?= cekStrKosong($hpht) ?> HPL : <?= cekStrKosong($hpl) ?>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="pl-5">
                                    <input <?= compare($jenis_menstruasi, 'Dismenorroe') ?> type="checkbox" class="v-bottom lh-0"> Dismenorroe
                                    <input <?= compare($jenis_menstruasi, 'Spoting') ?> type="checkbox" class="v-bottom lh-0 pl-5"> Spoting
                                    <input <?= compare($jenis_menstruasi, 'Menorragia') ?> type="checkbox" class="v-bottom lh-0 pl-5"> Menorragia
                                    <input <?= compare($jenis_menstruasi, 'Metrorhagia') ?> type="checkbox" class="v-bottom lh-0 pl-5"> Metrorhagia
                                    <input <?= compare($jenis_menstruasi, 'Pre menstruasi syndrome') ?> type="checkbox" class="v-bottom lh-0 pl-5"> Pre menstruasi syndrome
                                </td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td class="pl-5">
                                    Perkawinan : status : <?= cekStrKosong($status_perkawinan) ?> Perkawinan ke : <?= cekStrKosong($perkawinan_ke) ?> menikah umur : <?= cekStrKosong($menikah_umur_2) ?> tahun
                                </td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td class="pl-5">
                                    Riwayat Kehamilan Persalinan dan Nifas
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="pl-5">
                                    <div style="width: 700px;">
                                        <span style="margin-left: 0;">
                                            G: <span style="font-size: 8px;"><?= $g; ?> </span>
                                        </span>
                                        <span style="margin-left: 0px;" class="">
                                            P: <span style="font-size: 8px;"><?= $p; ?></span>
                                        </span>
                                        <span style="margin-left: 0px;" class="">
                                            Ab: <span style="font-size: 8px;"><?= $ab; ?></span>
                                        </span>
                                        <span style="margin-left: 0px;" class="">
                                            Ah: <span style="font-size: 8px;"><?= $ah; ?></span>
                                        </span>
                                        <span style="margin-left: 0px;" class="">
                                            ANC: <span style="font-size: 8px;"><?= $anc; ?></span>
                                        </span>
                                        <span style="margin-left: 0px;" class="">
                                            x: <span style="font-size: 8px;"><?= $x; ?></span>
                                        </span>
                                        <span style="margin-left: 0px;" class="">Imunisasi : </span>
                                        <input <?= compare($imunisasi, 'Ya') ?> type="checkbox" class="v-bottom lh-0"> Ya
                                        <input <?= compare($imunisasi, 'Tidak') ?> type="checkbox" class="v-bottom lh-0 pl-5"> Tidak
                                        <input <?= compare($imunisasi, 'TT I') ?> type="checkbox" class="v-bottom lh-0 pl-5"> TT I
                                        <input type="checkbox" class="v-bottom lh-0 pl-5"> TT I
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <table style="width: 100%;margin-left: -10px;margin-top: 3px;" class="border">
                                        <thead style="font-size: 12px;">
                                            <tr class="border">
                                                <td class="border px-5 py-5 text-center">No</td>
                                                <td class="border px-5 py-5 text-center" style="width: 50px;">Tgl/Th Partus</td>
                                                <td class="border px-5 py-5 text-center" style="width: 80px;">Tempat Partus</td>
                                                <td class="border px-5 py-5 text-center" style="width: 40px;">Umur Hamil</td>
                                                <td class="border px-5 py-5 text-center">Jenis Persalinan</td>
                                                <td class="border px-5 py-5 text-center">Penolong Persalinan</td>
                                                <td class="border px-5 py-5 text-center" style="width: 100px;">Penyulit</td>
                                                <td class="border px-5 py-5 text-center" style="width: 60px;">JK/BB</td>
                                                <td class="border px-5 py-5 text-center" style="width: 80px;">Keadaan Anak Sekarang</td>
                                            </tr>
                                        </thead>
                                        <tbody style="font-size: 8px;">
                                            <tr>
                                                <td class="border px-5 text-center">1</td>
                                                <td class="border px-5"><?= cekTgl($tabel[0]['tgl_partus']) ?></td>
                                                <td class="border px-5"><?= $tabel[0]['tempat_partus']; ?></td>
                                                <td class="border px-5"><?= $tabel[0]['umur_hamil']; ?></td>
                                                <td class="border px-5"><?= $tabel[0]['jenis_persalinan']; ?></td>
                                                <td class="border px-5"><?= $tabel[0]['penolong_persalinan']; ?></td>
                                                <td class="border px-5"><?= $tabel[0]['penyulit']; ?></td>
                                                <td class="border px-5"><?= $tabel[0]['jkbb']; ?></td>
                                                <td class="border px-5"><?= $tabel[0]['keadaan_anak']; ?></td>
                                            </tr>
                                            <tr>
                                                <td class="border px-5 text-center">2</td>
                                                <td class="border px-5"><?= cekTgl($tabel[1]['tgl_partus']) ?></td>
                                                <td class="border px-5"><?= $tabel[1]['tempat_partus']; ?></td>
                                                <td class="border px-5"><?= $tabel[1]['umur_hamil']; ?></td>
                                                <td class="border px-5"><?= $tabel[1]['jenis_persalinan']; ?></td>
                                                <td class="border px-5"><?= $tabel[1]['penolong_persalinan']; ?></td>
                                                <td class="border px-5"><?= $tabel[1]['penyulit']; ?></td>
                                                <td class="border px-5"><?= $tabel[1]['jkbb']; ?></td>
                                                <td class="border px-5"><?= $tabel[1]['keadaan_anak']; ?></td>
                                            </tr>
                                            <tr>
                                                <td class="border px-5 text-center">3</td>
                                                <td class="border px-5"><?= cekTgl($tabel[2]['tgl_partus']) ?></td>
                                                <td class="border px-5"><?= $tabel[2]['tempat_partus']; ?></td>
                                                <td class="border px-5"><?= $tabel[2]['umur_hamil']; ?></td>
                                                <td class="border px-5"><?= $tabel[2]['jenis_persalinan']; ?></td>
                                                <td class="border px-5"><?= $tabel[2]['penolong_persalinan']; ?></td>
                                                <td class="border px-5"><?= $tabel[2]['penyulit']; ?></td>
                                                <td class="border px-5"><?= $tabel[2]['jkbb']; ?></td>
                                                <td class="border px-5"><?= $tabel[2]['keadaan_anak']; ?></td>
                                            </tr>
                                            <tr>
                                                <td class="border px-5 text-center">4</td>
                                                <td class="border px-5"><?= cekTgl($tabel[3]['tgl_partus']) ?></td>
                                                <td class="border px-5"><?= $tabel[3]['tempat_partus']; ?></td>
                                                <td class="border px-5"><?= $tabel[3]['umur_hamil']; ?></td>
                                                <td class="border px-5"><?= $tabel[3]['jenis_persalinan']; ?></td>
                                                <td class="border px-5"><?= $tabel[3]['penolong_persalinan']; ?></td>
                                                <td class="border px-5"><?= $tabel[3]['penyulit']; ?></td>
                                                <td class="border px-5"><?= $tabel[3]['jkbb']; ?></td>
                                                <td class="border px-5"><?= $tabel[3]['keadaan_anak']; ?></td>
                                            </tr>
                                            <tr>
                                                <td class="border px-5 text-center">5</td>
                                                <td class="border px-5"><?= cekTgl($tabel[4]['tgl_partus']) ?></td>
                                                <td class="border px-5"><?= $tabel[4]['tempat_partus']; ?></td>
                                                <td class="border px-5"><?= $tabel[4]['umur_hamil']; ?></td>
                                                <td class="border px-5"><?= $tabel[4]['jenis_persalinan']; ?></td>
                                                <td class="border px-5"><?= $tabel[4]['penolong_persalinan']; ?></td>
                                                <td class="border px-5"><?= $tabel[4]['penyulit']; ?></td>
                                                <td class="border px-5"><?= $tabel[4]['jkbb']; ?></td>
                                                <td class="border px-5"><?= $tabel[4]['keadaan_anak']; ?></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td>4.</td>
                                <td class="pl-5">
                                    Riwayat Hamil Ini
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="pl-5">
                                    <div style="width: 700px;">
                                        Hamil muda :
                                        <input <?= compare($hamil_muda, 'Mual') ?> type="checkbox" class="v-bottom lh-0"> Mual
                                        <input <?= compare($hamil_muda, 'Muntah') ?> type="checkbox" class="v-bottom lh-0 "> Muntah
                                        <input <?= compare($hamil_muda, 'Perdarahan') ?> type="checkbox" class="v-bottom lh-0 "> Perdarahan
                                        <input <?= compare($hamil_muda, 'lainlain') ?> type="checkbox" class="v-bottom lh-0 "> <?= cekStrKosong($hamil_muda_lain) ?>
                                        Hamil Tua :
                                        <input <?= compare($hamil_tua, 'Pusing') ?> type="checkbox" class="v-bottom lh-0 "> Pusing
                                        <input <?= compare($hamil_tua, 'Sakit Kepala') ?> type="checkbox" class="v-bottom lh-0 "> Sakit Kepala
                                        <input <?= compare($hamil_tua, 'Perdarahan') ?> type="checkbox" class="v-bottom lh-0 "> Perdarahan
                                        <input <?= compare($hamil_tua, 'lainlain') ?> type="checkbox" class="v-bottom lh-0 "> <?= cekStrKosong($hamil_tua_lain) ?>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>5.</td>
                                <td class="pl-5">
                                    Riwayat Penyakit Yang Lalu/Operasi
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="pl-5">
                                    <div style="width: 700px;">
                                        Pernah dirawat : <input <?= compare($pernah_dirawat, 'Ya') ?> type="checkbox" class="v-bottom lh-0"> Ya : <?= cekStrKosong($tempat_pernah_dirawat) ?>
                                        <input <?= compare($pernah_dirawat, 'Tidak') ?> type="checkbox" class="v-bottom lh-0"> Tidak : Operasi <input <?= compare($operasi, 'Ya') ?> type="checkbox" class="v-bottom lh-0"> Ya : <?= cekStrKosong($tempat_operasi) ?>
                                        <input <?= compare($operasi, 'Tidak') ?> type="checkbox" class="v-bottom lh-0"> Tidak
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>6.</td>
                                <td class="pl-5">
                                    Riwayat Penyakit Keluarga
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="pl-5">
                                    <input <?= compare($riwayat_penyakit_keluarga, 'Kanker') ?> type="checkbox" class="v-bottom lh-0"> Kanker
                                    <input <?= compare($riwayat_penyakit_keluarga, 'Penyakit Hati') ?> type="checkbox" class="v-bottom lh-0 pl-5" style="margin-left: 33px;"> Penyakit Hati
                                    <input <?= compare($riwayat_penyakit_keluarga, 'Hipertensi') ?> type="checkbox" class="v-bottom lh-0 pl-5" style="margin-left: 18px;"> Hipertensi
                                    <input <?= compare($riwayat_penyakit_keluarga, 'DM') ?> type="checkbox" class="v-bottom lh-0 pl-5" style="margin-left: 20.5px;"> DM
                                    <input <?= compare($riwayat_penyakit_keluarga, 'Penyakit Ginjal') ?> type="checkbox" class="v-bottom lh-0 pl-5" style="margin-left: 4.5px;"> Penyakit Ginjal
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="pl-5">
                                    <input <?= compare($riwayat_penyakit_keluarga, 'Penyakit jiwa') ?> type="checkbox" class="v-bottom lh-0"> Penyakit jiwa
                                    <input <?= compare($riwayat_penyakit_keluarga, 'Kelainan bawaan') ?> type="checkbox" class="v-bottom lh-0 pl-5"> Kelainan bawaan
                                    <input <?= compare($riwayat_penyakit_keluarga, 'Hamil kembar') ?> type="checkbox" class="v-bottom lh-0 pl-5"> Hamil kembar
                                    <input <?= compare($riwayat_penyakit_keluarga, 'TBC') ?> type="checkbox" class="v-bottom lh-0 pl-5"> TBC
                                    <input <?= compare($riwayat_penyakit_keluarga, 'Epilepsi') ?> type="checkbox" class="v-bottom lh-0 pl-5"> Epilepsi
                                    <input <?= compare($riwayat_penyakit_keluarga, 'Alergi') ?> type="checkbox" class="v-bottom lh-0 pl-5"> Alergi
                                </td>
                            </tr>
                            <tr>
                                <td>7.</td>
                                <td class="pl-5">
                                    Riwayat Penyakit Gynecologi
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="pl-5">
                                    <input <?= compare($riwayat_penyakit_gynecologi, 'Infertilitas') ?> type="checkbox" class="v-bottom lh-0"> Infertilitas
                                    <input <?= compare($riwayat_penyakit_gynecologi, 'Infeksi virus') ?> type="checkbox" class="v-bottom lh-0 pl-5" style="margin-left: 8px;"> Infeksi virus
                                    <input <?= compare($riwayat_penyakit_gynecologi, 'PMS') ?> type="checkbox" class="v-bottom lh-0 pl-5" style="margin-left: 33px;"> PMS
                                    <input <?= compare($riwayat_penyakit_gynecologi, 'Cervicitis cronis') ?> type="checkbox" class="v-bottom lh-0 pl-5" style="margin-left: 74.5px;"> Cervicitis cronis
                                    <input <?= compare($riwayat_penyakit_gynecologi, 'Endometriosis') ?> type="checkbox" class="v-bottom lh-0 pl-5"> Endometriosis
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="pl-5">
                                    <input <?= compare($riwayat_penyakit_gynecologi, 'Polip servix') ?> type="checkbox" class="v-bottom lh-0"> Polip servix
                                    <input <?= compare($riwayat_penyakit_gynecologi, 'Kanker kandungan') ?> type="checkbox" class="v-bottom lh-0 pl-5"> Kanker kandungan
                                    <input <?= compare($riwayat_penyakit_gynecologi, 'Operasi kandungan') ?> type="checkbox" class="v-bottom lh-0 pl-5"> Operasi kandungan
                                    <input <?= compare($riwayat_penyakit_gynecologi, 'Perkosaan') ?> type="checkbox" class="v-bottom lh-0 pl-5"> Perkosaan
                                    <input <?= compare($riwayat_penyakit_gynecologi, 'Myoma') ?> type="checkbox" class="v-bottom lh-0 pl-5" style="margin-left: 32px;"> Myoma
                                </td>
                            </tr>
                            <tr>
                                <td>8.</td>
                                <td class="pl-5">
                                    Riwayat Kb : jenis <?= cekStrKosong($jenis_kb) ?> Lama : <?= cekStrKosong($lama_pemakaian_kb) ?> Keluhan : <?= cekStrKosong($keluhan_kb) ?>
                                </td>
                            </tr>
                            <tr>
                                <td>9.</td>
                                <td class="pl-5">
                                    Nutrisi, Eliminasi dan Istirahat Terakhir
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="pl-5">
                                    Makan. tgl/jam : <?= cekTgl2($makan) ?> : Minum, tgl/jam : <?= cekTgl2($minum) ?> : Tidur, jam <?= cekStrKosong($tidur) ?>
                                </td>
                            </tr>
                            <tr>
                                <td>10.</td>
                                <td class="pl-5">
                                    Psikososial : Penerimaan klien terhadap kehamilan ini : <?= cekStrKosong($penerimaan_klien) ?>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="pl-5">
                                    Sosial support dari
                                    <input <?= compare($support, 'Suami') ?> type="checkbox" class="v-bottom"> Suami
                                    <input <?= compare($support, 'Orang Tua') ?> type="checkbox" class="v-bottom pl-5"> Orang Tua
                                    <input <?= compare($support, 'Mertua') ?> type="checkbox" class="v-bottom pl-5"> Mertua
                                    <input <?= compare($support, 'Keluarga Lain') ?> type="checkbox" class="v-bottom pl-5"> Keluarga Lain
                                </td>
                            </tr>

                        </table>
                    </td>
                </tr>
            </table>
        </tr>
    </table>


    <table class="border-left border-right " style="width: 100%;">
        <tr style="font-size: 12.92px;">
            <table style="margin-left: 20px;">
                <tr>
                    <td class="bold">B.</td>
                    <td class="pl-10 bold">PEMERIKSAAN TAMBAHAN</td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <table>
                            <tr>
                                <td>1.</td>
                                <td class="pl-5">Pemeriksaan khusus</td>
                            </tr>
                            <tr>
                                <td>a.</td>
                                <td class="pl-5">Hamil/Bersalin</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="pl-5">
                                    <table>
                                        <tr>
                                            <td>
                                                Inspeksi
                                            </td>
                                            <td>
                                                <input <?= compare($inspeksi, 'Membesar dengan arah memanjang') ?> type="checkbox" class="v-bottom lh-0 pl-10"> Membesar dengan arah memanjang
                                                <input <?= compare($inspeksi, 'Melebar') ?> type="checkbox" class="v-bottom lh-0 pl-5"> Melebar
                                                <input <?= compare($inspeksi, 'Pelebaran Vena') ?> type="checkbox" class="v-bottom lh-0 pl-5"> Pelebaran Vena
                                                <input <?= compare($inspeksi, 'Linea Alba') ?> type="checkbox" class="v-bottom lh-0 pl-5"> Linea Alba
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                                <input <?= compare($inspeksi, 'Linea Nigra') ?> type="checkbox" class="v-bottom lh-0 pl-10"> Linea Nigra
                                                <input <?= compare($inspeksi, 'Striae Livide') ?> type="checkbox" class="v-bottom lh-0 pl-5"> Striae Livide
                                                <input <?= compare($inspeksi, 'Striae Albican') ?> type="checkbox" class="v-bottom lh-0 pl-5"> Striae Albican
                                                <input <?= compare($inspeksi, 'Luka bekas operasi') ?> type="checkbox" class="v-bottom lh-0 pl-5"> Luka bekas operasi
                                                <input <?= compare($inspeksi, 'lainlain') ?> type="checkbox" class="v-bottom lh-0 pl-5"> Lain lain <?= cekStrKosong($inspeksi_lain) ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Palpasi TFU
                                            </td>
                                            <td>
                                                <span class="pl-10">Let. Punggung:</span>
                                                <input <?= compare($let_punggung, 'puka') ?> type="checkbox" class="v-bottom lh-0 pl-5"> puka
                                                <input <?= compare($let_punggung, 'puki') ?> type="checkbox" class="v-bottom lh-0 pl-5"> puki
                                                <span class="pl-10">Presentasi:</span>
                                                <input <?= compare($presentasi, 'kepala') ?> type="checkbox" class="v-bottom lh-0 pl-5"> kepala
                                                <input <?= compare($presentasi, 'bokong') ?> type="checkbox" class="v-bottom lh-0 pl-5"> bokong
                                                <input <?= compare($presentasi, 'lainlain') ?> type="checkbox" class="v-bottom lh-0 pl-5"> Lain Lain <?= cekStrKosong($presentasi_lain) ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            </td>
                                            <td>
                                                <input <?= compare($let_punggung, 'Nyeri tekan') ?> type="checkbox" class="v-bottom lh-0 pl-10"> Nyeri tekan
                                                <input <?= compare($let_punggung, 'obsorn test') ?> type="checkbox" class="v-bottom lh-0 pl-5"> obsorn test
                                                <input <?= compare($presentasi, 'Cekungan pada perut') ?> type="checkbox" class="v-bottom lh-0 pl-5" style="margin-left: 88px;"> Cekungan pada perut
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                Taksiran berat janin (TBJ) : <?= cekStrKosong($tbj) ?>
                                                Auskultasi: DJJ <?= cekStrKosong($auskultasi) ?> x/menit
                                                <input <?= compare($djj, 'Teratur') ?> type="checkbox" class="v-bottom lh-0 pl-10"> Teratur
                                                <input <?= compare($djj, 'Tidak Teratur') ?> type="checkbox" class="v-bottom lh-0 pl-5"> Tidak Teratur
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                Bagian terendah <?= cekStrKosong($bagian_terendah) ?>
                                                HIS/kontraksi <?= cekStrKosong($his) ?> 10 menit
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan=" 2">
                                                Durasi :
                                                <input <?= compare($durasi, '20') ?> type="checkbox" class="v-bottom lh-0 pl-10">&lt;20&quot;
                                                <input <?= compare($durasi, '20-40') ?> type="checkbox" class="v-bottom lh-0 pl-5"> 20-40
                                                <input <?= compare($durasi, '40') ?> type="checkbox" class="v-bottom lh-0 pl-5"> >40"
                                                <span style="margin-left: 20px;">Interisitas :</span>
                                                <input <?= compare($interisitas, 'lemah') ?> type="checkbox" class="v-bottom lh-0 pl-10"> lemah
                                                <input <?= compare($interisitas, 'sedang') ?> type="checkbox" class="v-bottom lh-0 pl-5"> sedang
                                                <input <?= compare($interisitas, 'kuat') ?> type="checkbox" class="v-bottom lh-0 pl-5"> kuat
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                Pengeluaran per vaginam :
                                                <input <?= compare($vaginam, 'lendir darah') ?> type="checkbox" class="v-bottom lh-0 "> lendir darah
                                                <input <?= compare($vaginam, 'Darah') ?> type="checkbox" class="v-bottom lh-0 "> Darah
                                                <span style="margin-left: 0px;">Jumlah :</span>
                                                <input <?= compare($jumlah, '250cc') ?> type="checkbox" class="v-bottom lh-0 ">
                                                < 250 cc <input <?= compare($jumlah, '250-500') ?> type="checkbox" class="v-bottom lh-0 "> 250-500
                                                    <input <?= compare($jumlah, '>500') ?> type="checkbox" class="v-bottom lh-0 "> > 500
                                                    <input <?= compare($jumlah, 'air ketuban') ?> type="checkbox" class="v-bottom lh-0 "> air ketuban
                                                    <input <?= compare($jumlah, 'lainlain') ?> type="checkbox" class="v-bottom lh-0 "> <?= cekStrKosong($jumlah_lain) ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                Inspekulo : vagina
                                                <?= cekStrKosong($inspekulo) ?>
                                                portio <?= cekStrKosong($portio) ?>
                                                Vagina Toucher <?= cekStrKosong($vagina_toucher) ?>
                                            </td>
                                        </tr>
                                    </table>

                                </td>
                            </tr>
                            <tr>
                                <td>b.</td>
                                <td class="pl-5">Nifas :</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="pl-5">
                                    TFU : <?= cekStrKosong($nifas_tfu) ?>
                                    Kontraksi uterus :
                                    <input <?= compare($kontraksi_uterus, 'keras') ?> type="checkbox" class="v-bottom lh-0 pl-10"> keras
                                    <input <?= compare($kontraksi_uterus, 'lemah') ?> type="checkbox" class="v-bottom lh-0 pl-5"> lemah
                                    <input <?= compare($kontraksi_uterus, 'tidak ada') ?> type="checkbox" class="v-bottom lh-0 pl-5"> tidak ada
                                    <br>
                                    Pengeluaran Pervaginam <br>
                                    <input <?= compare($nifas_pengeluaran_pervaginam, 'Darah') ?> type="checkbox" class="v-bottom lh-0"> Darah : jumlah
                                    <input <?= compare($nifas_darah, '250 cc') ?> type="checkbox" class="v-bottom lh-0 ">
                                    < 250 cc <input <?= compare($nifas_darah, '250-500') ?> type="checkbox" class="v-bottom lh-0 "> 250-500
                                        <input <?= compare($nifas_darah, '> 500') ?> type="checkbox" class="v-bottom lh-0 "> > 500
                                        <input <?= compare($nifas_pengeluaran_pervaginam, 'Lochea') ?> type="checkbox" class="v-bottom lh-0 pl-10"> Lochea :
                                        <input <?= compare($lochea_nifas, 'Rubra') ?> type="checkbox" class="v-bottom lh-0 "> Rubra
                                        <input <?= compare($lochea_nifas, 'Sanguinolenta') ?> type="checkbox" class="v-bottom lh-0 "> Sanguinolenta
                                        <input <?= compare($lochea_nifas, 'Alba') ?> type="checkbox" class="v-bottom lh-0 "> Alba
                                        <br>
                                        Luka Jalan Lahir :
                                        <input <?= compare($luka_jalan, 'utuh') ?> type="checkbox" class="v-bottom lh-0 "> utuh
                                        <input <?= compare($luka_jalan, 'Ruptor') ?> type="checkbox" class="v-bottom lh-0 "> Ruptor
                                        <input <?= compare($luka_jalan, 'Episiotomi') ?> type="checkbox" class="v-bottom lh-0 "> Episiotomi :
                                        Derajat Luka :
                                        <input <?= compare($derajat_luka, '1') ?> type="checkbox" class="v-bottom lh-0 "> 1
                                        <input <?= compare($derajat_luka, '2') ?> type="checkbox" class="v-bottom lh-0 "> 2
                                        <input <?= compare($derajat_luka, '3') ?> type="checkbox" class="v-bottom lh-0 "> 3
                                        <input <?= compare($derajat_luka, '4') ?> type="checkbox" class="v-bottom lh-0 "> 4
                                        <input <?= compare($derajat_luka, 'lainlain') ?> type="checkbox" class="v-bottom lh-0 "> Lain-lain <?= cekStrKosong($derajat_luka_lain) ?>
                                        <br>
                                        Luka post sectio :
                                        <input <?= compare($luka_post, 'ada') ?> type="checkbox" class="v-bottom" style="margin-left: 2.5px;"> ada
                                        <input <?= compare($luka_post, 'tidak') ?> type="checkbox" class="v-bottom" style="margin-left: 5px;"> tidak
                                </td>
                            </tr>

                        </table>
                    </td>
                </tr>
            </table>
        </tr>
    </table>

    <table class="border-left border-right border-bottom" style="width: 100%;">
        <tr class="border">
            <td style="height: 20px;">
                <h4 class="text-center">ANALISA MASALAH KEPERAWATAN KEBIDANAN</h4>
            </td>
        </tr>
        <tr style="font-size: 12.92px;">
            <td style="padding-left: 20px;">
                <input <?= compareC($checkbox1) ?> type="checkbox" class="v-bottom lh-0 pl-5"> Bersihan jalan nafas tidak efektif
                <input <?= compareC($checkbox2) ?> type="checkbox" class="v-bottom lh-0 pl-10"> Kerusakan pertukaran gas
                <input <?= compareC($checkbox3) ?> type="checkbox" class="v-bottom lh-0 pl-10"> Pola nafas tidak efektif
                <input <?= compareC($checkbox4) ?> type="checkbox" class="v-bottom lh-0 pl-10" style="margin-left: 12.5px;"> Nyeri
                <br>
                <input <?= compareC($checkbox5) ?> type="checkbox" class="v-bottom lh-0 pl-5"> Penurunan curah jantung
                <input <?= compareC($checkbox6) ?> type="checkbox" class="v-bottom lh-0 pl-5" style="margin-left: 46.5px;"> Intoleransi aktifitas
                <input <?= compareC($checkbox7) ?> type="checkbox" class="v-bottom lh-0 pl-5" style="margin-left: 39.5px;"> Risiko cidera
                <input <?= compareC($checkbox8) ?> type="checkbox" class="v-bottom lh-0 pl-5"> Kelebihan/kurang volume cairan
                <br>
                <input <?= compareC($checkbox9) ?> type="checkbox" class="v-bottom lh-0 pl-5"> Perubahan perfusi jaringan jantung paru/jaringan otak/perifer
                <input <?= compareC($checkbox10) ?> type="checkbox" class="v-bottom lh-0 pl-5" style="margin-left: 26px;"> Ganggunan mobilitas fisik
                <input <?= compareC($checkbox11) ?> type="checkbox" class="v-bottom lh-0 pl-5"> Diare
                <br>
                <input <?= compareC($checkbox12) ?> type="checkbox" class="v-bottom lh-0 pl-5"> Konstipati
                <input <?= compareC($checkbox13) ?> type="checkbox" class="v-bottom lh-0 pl-5"> Perubahan nutrisi kurang/lebih dari kebutuhan
                <input <?= compareC($checkbox14) ?> type="checkbox" class="v-bottom lh-0 pl-5" style="margin-left: 22px;"> Risiko infeksi/sepsis
                <br>
                <input <?= compareC($checkbox15) ?> type="checkbox" class="v-bottom lh-0 pl-5"> Keseimbangan cairan & elektrolit
                <input <?= compareC($checkbox16) ?> type="checkbox" class="v-bottom lh-0 pl-5" style="margin-left: 1.5px;"> Gangguan integritas kulit/jaringan
                <input <?= compareC($checkbox17) ?> type="checkbox" class="v-bottom lh-0 pl-5"> Hipertermia
                <input <?= compareC($checkbox18) ?> type="checkbox" class="v-bottom lh-0 pl-5" style="margin-left: 36.5px;"> Hipotermia
                <br>
                <input <?= compareC($checkbox19) ?> type="checkbox" class="v-bottom lh-0 pl-5"> Inkontinensia/Retensio urin
                <input <?= compareC($checkbox20) ?> type="checkbox" class="v-bottom lh-0 pl-5" style="margin-left: 32.6px;"> Gangguan komunikasi verbal
                <input <?= compareC($checkbox21) ?> type="checkbox" class="v-bottom lh-0 pl-5"> Kurang perawatan diri
                <input <?= compareC($checkbox22) ?> type="checkbox" class="v-bottom lh-0 pl-5" style="margin-left: 8.5px;"> Konflik peran
                <br>
                <input <?= compareC($checkbox23) ?> type="checkbox" class="v-bottom lh-0 pl-5"> Cemas
                <input <?= compareC($checkbox24) ?> type="checkbox" class="v-bottom lh-0 pl-5"> Gaungguan pola tidur
                <input <?= compareC($checkbox25) ?> type="checkbox" class="v-bottom lh-0 pl-5" style="margin-left: .6px;"> Harga diri rendah
                <input <?= compareC($checkbox26) ?> type="checkbox" class="v-bottom lh-0 pl-5"> Koping individu tidak efektif
                <input <?= compareC($checkbox27) ?> type="checkbox" class="v-bottom lh-0 pl-5" style="margin-left: 34.5px;"> Tumbuh kembang
                <br>
                <input <?= compareC($checkbox28) ?> type="checkbox" class="v-bottom lh-0 pl-5"> Menyusui kurang efektif
                <input <?= compareC($checkbox29) ?> type="checkbox" class="v-bottom lh-0 pl-5" style="margin-left: 48px;"> Risiko komplikasi syok anafilatik
                <input <?= compareC($checkbox30) ?> type="checkbox" class="v-bottom lh-0 pl-5"> Perdarahan
                <input <?= compareC($checkbox31) ?> type="checkbox" class="v-bottom lh-0 pl-5" style="margin-left: 45px;"> Risiko jatuh
                <br>
                <input <?= compareC($diagnosa_kebidanan) ?> type="checkbox" class="v-bottom lh-0 pl-5"> Diagnosa kebidanan : <?= cekStrKosong($uraian_diagnosa) ?>
                <br>
                <input <?= compareC($uraian_diagnosa) ?> type="checkbox" class="v-bottom lh-0 pl-5"> Lain-lain : <?= cekStrKosong($uraian) ?>
                <br>
                <h4 class="text-center">D. RENCANA KEPERAWATAN INTERDISIPLIN</h4>
                <table class="pl-5">
                    <tr>
                        <td>Diet dan Nutrisi</td>
                        <td class="pl-10">:</td>
                        <td>
                            <input <?= compare($dn, 'Tidak') ?> type="checkbox" class="v-bottom lh-0 pl-5"> Tidak
                            <input <?= compare($dn, 'Ya') ?> type="checkbox" class="v-bottom lh-0 pl-5"> Ya, <?= cekStrKosong($uraian_dn) ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Rehabilitasi Medik</td>
                        <td class="pl-10">:</td>
                        <td>
                            <input <?= compare($rm, 'Tidak') ?> type="checkbox" class="v-bottom lh-0 pl-5"> Tidak
                            <input <?= compare($rm, 'Ya') ?> type="checkbox" class="v-bottom lh-0 pl-5"> Ya, <?= cekStrKosong($uraian_rm) ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Farmasi</td>
                        <td class="pl-10">:</td>
                        <td>
                            <input <?= compare($far, 'Tidak') ?> type="checkbox" class="v-bottom lh-0 pl-5"> Tidak
                            <input <?= compare($far, 'Ya') ?> type="checkbox" class="v-bottom lh-0 pl-5"> Ya, <?= cekStrKosong($uraian_far) ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Kerohanian</td>
                        <td class="pl-10">:</td>
                        <td>
                            <input <?= compare($roh, 'Tidak') ?> type="checkbox" class="v-bottom lh-0 pl-5"> Tidak
                            <input <?= compare($roh, 'Ya') ?> type="checkbox" class="v-bottom lh-0 pl-5"> Ya, <?= cekStrKosong($uraian_roh) ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Psikologi</td>
                        <td class="pl-10">:</td>
                        <td>
                            <input <?= compare($psi, 'Tidak') ?> type="checkbox" class="v-bottom lh-0 pl-5"> Tidak
                            <input <?= compare($psi, 'Ya') ?> type="checkbox" class="v-bottom lh-0 pl-5"> Ya, <?= cekStrKosong($uraian_psi) ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Lain-lain</td>
                        <td class="pl-10">:</td>
                        <td>
                            <input <?= compare($ll, 'Tidak') ?> type="checkbox" class="v-bottom lh-0 pl-5"> Tidak
                            <input <?= compare($ll, 'Ya') ?> type="checkbox" class="v-bottom lh-0 pl-5"> Ya, <?= cekStrKosong($uraian_ll) ?>
                        </td>
                    </tr>
                    <br>
                </table>








            </td>
        </tr>
    </table>

</body>

</html>