<?php
function compare($a, $b)
{
    if ($a == $b) return 'checked';
}
function compareC($a)
{
    if ($a == 'on') return 'checked';
}

function cekStrKosong($a, $b)
{
    return $a != '' ? '<span class="underline">' . $a . '</span>' : $b;
}
function cekTgl($tgl)
{
    if ($tgl == '0000-00-00') {
        return ''; // Output kosong jika $tgl adalah "0000-00-00"
    } else {
        $formattedDate = date("d-m-Y", strtotime($tgl));
        return $formattedDate;
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
            margin: 20px;
        }

        table {
            border-collapse: collapse;
            border-color: black;
        }

        .opacity-0 {
            opacity: 0;
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

        .border-top {
            border-top: 1px solid black;
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

        .pt-5 {
            padding-top: 5px;
        }

        .pt-10 {
            padding-top: 10px;
        }

        .pt-20 {
            padding-top: 20px;
        }

        .pb-5 {
            padding-bottom: 5px;
        }

        .pb-10 {
            padding-bottom: 10px;
        }

        .pb-20 {
            padding-bottom: 20px;
        }

        .px-5 {
            padding-left: 5px;
            padding-right: 5px;
        }

        .px-10 {
            padding-left: 10px;
            padding-right: 10px;
        }

        .py-5 {
            padding-top: 5px;
            padding-bottom: 5px;
        }

        .py-10 {
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .py-20 {
            padding-top: 20px;
            padding-bottom: 20px;
        }

        .underline {
            text-decoration: underline;
        }

        .lh-0 {
            line-height: 0;
        }

        .mb-2 {
            margin-bottom: 2px;
        }
    </style>
</head>

<body>
    <!-- Page 1 -->
    <table class="border" style="width: 100%">
        <tr class="border">
            <td>
                <h2 class="text-center">PENGKAJIAN AWAL PASIEN DEWASA / LANSIA</h2>
                <h4 class="text-center" style="font-weight: normal;"><i>DIISI OLEH PERAWAT</i></h4>
            </td>
        </tr>
        <!-- Biodata -->
        <tr class="border-bottom" style="font-size: 14px;">
            <td>
                <table class="py-5" style="font-weight: normal;margin-left: 40px;">
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
                        <td style="padding-left: 10px;">: <?= cekTgl($tgllahir); ?></td>
                    </tr>
                    <tr>
                        <td>NIK</td>
                        <td style="padding-left: 10px;">: <?= $nik; ?></td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr style="font-size: 12px;">
            <td class="pl-20 bold">
                PENGKAJIAN KEPERAWATAN
            </td>
        </tr>
        <tr class="border-bottom" style="font-size: 12px;">
            <td class="">
                <table class="w-100">
                    <tr class="pl-20">
                        <td></td>
                        <td>
                            Cara masuk
                            <input type="checkbox" <?= compare($cara_masuk, 'jalan') ?> class="v-bottom"> jalan
                            <input type="checkbox" <?= compare($cara_masuk, 'kursi roda') ?> class="v-bottom"> kursi roda
                            <input type="checkbox" <?= compare($cara_masuk, 'brankart') ?> class="v-bottom"> brankart
                            <span style="margin-left: 20px;">Asal masuk :</span>

                            <input type="checkbox" <?= compare($asal_masuk, 'IGD') ?> class="v-bottom"> IGD
                            <input type="checkbox" <?= compare($asal_masuk, 'Poliklinik') ?> class="v-bottom"> Poliklinik
                        </td>
                    </tr>
                    <tr class="bold pl-20">
                        <td class="pl-20" style="width: 25px;">A. </td>
                        <td>RIWAYAT ALERGI</td>
                    </tr>
                    <tr class="border-bottom">
                        <td></td>
                        <td style="padding-bottom: 5px;">
                            Alergi :
                            <input type="checkbox" <?= compare($alergi, 'tidak') ?> class=" v-bottom"> tidak
                            <input type="checkbox" <?= compare($alergi, 'ya') ?> class=" v-bottom"> ya, <?= cekStrKosong($alergi_ya, '...................') ?>
                            <br>
                            Bila Ya,Tindakan penanganan :
                            <input type="checkbox" <?= compare($tindakan, 'hindari penyebab') ?> class=" v-bottom"> hindari penyebab
                            <input type="checkbox" <?= compare($tindakan, 'periksa') ?> class=" v-bottom"> periksa
                            <input type="checkbox" <?= compare($tindakan, 'lainlain') ?> class=" v-bottom"> lain-lain. <?= cekStrKosong($tindakan_lain, '...................') ?>
                        </td>
                    </tr>
                    <tr class="bold ">
                        <td style="width: 25px;" class="pl-20">B. </td>
                        <td>Tanda Vital</td>
                    </tr>
                    <tr class="border-bottom">
                        <td></td>
                        <td style="padding-bottom: 5px;">
                            <table class="w-100">
                                <tr>
                                    <td style="width: 100px;">
                                        Tekanan Darah
                                    </td>
                                    <td>:</td>
                                    <td><?= cekStrKosong($td, '.../...') ?> mmHg. Denyut Jantung : <?= cekStrKosong($dj, '...') ?>/menit, pernafasan : <?= cekStrKosong($pernafasan, '...') ?>/menit</td>
                                </tr>
                                <tr>
                                    <td>Suhu</td>
                                    <td>:</td>
                                    <td>
                                        <?= cekStrKosong($suhu, '...') ?> °C. Saturasi Oksigen : <?= cekStrKosong($so, '...') ?> %
                                    </td>
                                </tr>
                            </table>


                        </td>

                    </tr>

                    <tr class="bold">
                        <td style="width: 25px;" class="pl-20">C. </td>
                        <td>Neurosensorik</td>
                    </tr>
                    <tr class="border-bottom">
                        <td></td>
                        <td>
                            <table class="w-100">
                                <tr>
                                    <td>Kesadaran</td>
                                    <td>:</td>
                                    <td>
                                        <input type="checkbox" <?= compare($kesadaran, 'compos mentis') ?> class="lh-0 v-bottom"> compos mentis
                                        <input type="checkbox" <?= compare($kesadaran, 'somnolen') ?> class="lh-0 v-bottom"> somnolen
                                        <input type="checkbox" <?= compare($kesadaran, 'delirium') ?> class="lh-0 v-bottom"> delirium
                                        <input type="checkbox" <?= compare($kesadaran, 'sopor') ?> class="lh-0 v-bottom"> sopor
                                        <input type="checkbox" <?= compare($kesadaran, 'koma') ?> class="lh-0 v-bottom"> koma
                                    </td>
                                </tr>
                                <tr>
                                    <td>GCS</td>
                                    <td>:</td>
                                    <td>
                                        E <?= cekStrKosong($gcse, '________') ?> M <?= cekStrKosong($gcsm, '________') ?> V <?= cekStrKosong($gcsv, '________') ?>
                                    </td>
                                </tr>
                            </table>
                            <table class="w-100">
                                <tr>
                                    <td>Pendengaran</td>
                                    <td>:</td>
                                    <td>
                                        <input type="checkbox" <?= compare($pendengaran, 'Normal') ?> class="lh-0 v-bottom"> Normal
                                        <input type="checkbox" <?= compare($pendengaran, 'Kurang pendengaran (Ka/Ki)') ?> class="lh-0 v-bottom"> Kurang pendengaran (Ka/Ki)
                                        <input type="checkbox" <?= compare($pendengaran, 'Gangguan pendengaran') ?> class="lh-0 v-bottom"> Gangguan pendengaran
                                        <input type="checkbox" <?= compare($pendengaran, 'Lainnya') ?> class="lh-0 v-bottom"> Lainnya <?= cekStrKosong($pendengaran_lain, '.............') ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Penglihatan</td>
                                    <td>:</td>
                                    <td>
                                        <input type="checkbox" <?= compare($penglihatan, 'Normal') ?> class="lh-0 v-bottom"> Normal
                                        <input type="checkbox" <?= compare($penglihatan, 'Kacamata') ?> class="lh-0 v-bottom"> Kacamata
                                        <input type="checkbox" <?= compare($penglihatan, 'Lensa Kontak') ?> class="lh-0 v-bottom"> Lensa Kontak
                                        <input type="checkbox" <?= compare($penglihatan, 'Lainnya') ?> class="lh-0 v-bottom"> Lainnya <?= cekStrKosong($penglihatan_lain, '......................') ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Bicara</td>
                                    <td>:</td>
                                    <td class="pb-5">
                                        <input type="checkbox" <?= compare($bicara, 'Normal') ?> class="lh-0 v-bottom"> Normal
                                        <input type="checkbox" <?= compare($bicara, 'Pelo') ?> class="lh-0 v-bottom"> Pelo
                                        <input type="checkbox" <?= compare($bicara, 'Aphasia') ?> class="lh-0 v-bottom"> Aphasia
                                        <input type="checkbox" <?= compare($bicara, 'Kelainan bicara') ?> class="lh-0 v-bottom"> Kelainan bicara
                                        <input type="checkbox" <?= compare($bicara, 'Tidak komunikatif') ?> class="lh-0 v-bottom"> Tidak komunikatif
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr class="bold ">
                        <td style="width: 25px;" class="pl-20">D. </td>
                        <td>Respirasi</td>
                    </tr>
                    <tr class="border-bottom">
                        <td></td>
                        <td>
                            <table class="w-100">
                                <tr>
                                    <td style="width: 70px;">Pernapasan</td>
                                    <td>:</td>
                                    <td>
                                        <input type="checkbox" <?= compare($pernapasan, 'Reguler') ?> class="lh-0 v-bottom"> Reguler
                                        <input type="checkbox" <?= compare($pernapasan, 'Irreguler') ?> class="lh-0 v-bottom" style="padding-left: 10.3px;"> Irreguler
                                        <input type="checkbox" <?= compare($pernapasan, 'Dyspnea') ?> class="lh-0 v-bottom"> Dyspnea
                                        <input type="checkbox" <?= compare($pernapasan, 'Orthopnea') ?> class="lh-0 v-bottom"> Orthopnea
                                    </td>
                                </tr>
                                <tr>
                                    <td class="v-top">Adakah</td>
                                    <td class="v-top">:</td>
                                    <td class="pb-5">
                                        <input type="checkbox" <?= compare($pernapasan_kelainan, 'Whezing') ?> class="lh-0 v-bottom"> Whezing
                                        <input type="checkbox" <?= compare($pernapasan_kelainan, 'Ronkhi') ?> class="lh-0 v-bottom pl-5"> Ronkhi
                                        <input type="checkbox" <?= compare($pernapasan_kelainan, 'stridor') ?> class="lh-0 v-bottom" style="padding-left: 6.5px;"> stridor
                                        <input type="checkbox" <?= compare($pernapasan_kelainan, 'Tak ada Kelainan') ?> class="lh-0 v-bottom" style="padding-left: 11px;"> Tak ada Kelainan <br>

                                        <input type="checkbox" <?= $batuk == 'Ya' ? 'checked' : '' ?> class="lh-0 v-bottom"> Batuk :
                                        <input type="checkbox" <?= compare($batuk, 'Tidak') ?> class="lh-0 v-bottom" style="padding-left: 13.3px;"> Tidak,
                                        <input type="checkbox" <?= compare($batuk, 'Ya') ?> class="lh-0 v-bottom" style="padding-left: 11px;"> Ya : (Jelaskan <?= cekStrKosong($batuk_ya, '................................') ?>) <br>
                                        <input type="checkbox" <?= $sputum == 'Ya' ? 'checked' : '' ?> class="lh-0 v-bottom"> Sputum :
                                        <input type="checkbox" <?= compare($sputum, 'Tidak') ?> class="lh-0 v-bottom" style="padding-left: 4.7px;"> Tidak,
                                        <input type="checkbox" <?= compare($sputum, 'Ya') ?> class="lh-0 v-bottom" style="padding-left: 11px;"> Ya : (Jelaskan <?= cekStrKosong($sputum_ya, '................................') ?>)
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr class="bold ">
                        <td style="width: 25px;" class="pl-20">E. </td>
                        <td>Sirkulasi</td>
                    </tr>
                    <tr class="border-bottom">
                        <td></td>
                        <td>
                            <table class="w-100">
                                <tr>
                                    <td>a. Nadi</td>
                                    <td>
                                        <input type="checkbox" <?= compare($nadi, 'Reguler') ?> class="v-bottom"> Reguler
                                        <input type="checkbox" <?= compare($nadi, 'Irreguler') ?> class="v-bottom"> Irreguler
                                    </td>
                                </tr>
                                <tr>
                                    <td>b. adakah</td>
                                    <td>
                                        <input type="checkbox" <?= compare($nadi_adakah, 'Nyeri dada') ?> class="v-bottom"> Nyeri dada
                                        <input type="checkbox" <?= compare($nadi_adakah, 'Edema') ?> class="v-bottom"> Edema, Jelaskan <?= cekStrKosong($nadi_jelaskan, '............................') ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>c. Ekstremitas</td>
                                    <td class="pb-5">
                                        <input type="checkbox" <?= compare($ekstremitas, 'Hangat') ?> class="v-bottom"> Hangat
                                        <input type="checkbox" <?= compare($ekstremitas, 'Dingin') ?> class="v-bottom"> Dingin
                                        <input type="checkbox" <?= compare($ekstremitas, 'Sianosis') ?> class="v-bottom"> Sianosis
                                        <input type="checkbox" <?= compare($ekstremitas, 'Capillary refill (> 3 detik/ < 3 detik)') ?> class="v-bottom"> Capillary refill (> 3 detik/ &lt; 3 detik)
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr class="bold">
                        <td style="width: 25px;" class="pl-20">F. </td>
                        <td>Integritas Kulit</td>
                    </tr>
                    <tr class="border-bottom">
                        <td></td>
                        <td>
                            <table class="w-100">
                                <tr>
                                    <td>Luka / lesi</td>
                                    <td>:</td>
                                    <td>
                                        <input type="checkbox" <?= compare($lukalesi, 'ada') ?> class="lh-0 v-bottom"> ada
                                        <input type="checkbox" <?= compare($lukalesi, 'tidak ada') ?> class="lh-0 v-bottom" style="padding-left: 59.5px;"> tidak ada
                                    </td>
                                </tr>
                                <tr>
                                    <td>Bila ada, jenis luka</td>
                                    <td>:</td>
                                    <td>
                                        <input type="checkbox" <?= compare($jenis_luka, 'steril') ?> class="lh-0 v-bottom"> steril
                                        <input type="checkbox" <?= compare($jenis_luka, 'bersih') ?> class="lh-0 v-bottom" style="padding-left: 52.3px;"> bersih
                                        <input type="checkbox" <?= compare($jenis_luka, 'kotor') ?> class="lh-0 v-bottom" style="padding-left: 59.7px;"> kotor
                                    </td>
                                </tr>
                                <tr>
                                    <td>Lokasi luka</td>
                                    <td>:</td>
                                    <td>
                                        <input type="checkbox" <?= compare($lokasi_luka, 'ekstremitas atas') ?> class="lh-0 v-bottom"> ekstremitas atas
                                        <input type="checkbox" <?= compare($lokasi_luka, 'ekstremitas bawah') ?> class="lh-0 v-bottom"> ekstremitas bawah
                                        <input type="checkbox" <?= compare($lokasi_luka, 'seluruh tubuh') ?> class="lh-0 v-bottom"> seluruh tubuh
                                        <input type="checkbox" <?= compare($lokasi_luka, 'lainlain') ?> class="lh-0 v-bottom" style="padding-left: 80px;"> lainnya <?= cekStrKosong($lokasi_luka_lain, '.................') ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Luka karena</td>
                                    <td>:</td>
                                    <td class="">
                                        <input type="checkbox" <?= compare($luka_karena, 'operasi') ?> class="lh-0 v-bottom"> operasi
                                        <input type="checkbox" <?= compare($luka_karena, 'WSD') ?> class="lh-0 v-bottom" style="padding-left: 41.6px;"> WSD
                                        <input type="checkbox" <?= compare($luka_karena, 'sulkus (diabetikum/dekubitus)') ?> class="lh-0 v-bottom" style="padding-left: 62.5px;"> sulkus (diabetikum/dekubitus)
                                        <input type="checkbox" <?= compare($luka_karena, 'lainlain') ?> class="lh-0 v-bottom"> lain-lain <?= cekStrKosong($luka_karena_lain, '.................') ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tanda - tanda radang</td>
                                    <td>:</td>
                                    <td class="pb-5">
                                        <input type="checkbox" <?= compare($radang, 'kemerahan') ?> class="lh-0 v-bottom"> kemerahan
                                        <input type="checkbox" <?= compare($radang, 'panas') ?> class="lh-0 v-bottom" style="padding-left: 23.6px;"> panas
                                        <input type="checkbox" <?= compare($radang, 'bengkak') ?> class="lh-0 v-bottom" style="padding-left:61.9px;"> bengkak
                                        <input type="checkbox" <?= compare($radang, 'nyeri') ?> class="lh-0 v-bottom" style="padding-left: 20px;"> nyeri
                                        <input type="checkbox" <?= compare($radang, 'fungsioleisa (berubah fungsi)') ?> class="lh-0 v-bottom" style="padding-left: 38.5px;"> fungsioleisa (berubah fungsi)
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr class="bold">
                        <td style="width: 25px;" class="pl-20">G. </td>
                        <td>POLA FUNGSIONAL</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <table class="w-100">
                                <tr class="bold">
                                    <td style="width: 15px;">1. </td>
                                    <td>Pola Persepsi dan Pemeliharaan Kesehatan</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        Kebiasaan periksa bila sakit :
                                        <input type="checkbox" <?= compare($kebiasaan_periksa, 'beli obat warung') ?> class="v-bottom"> beli obat warung
                                        <input type="checkbox" <?= compare($kebiasaan_periksa, 'periksa ke fasilitas kesehatan') ?> class="v-bottom"> periksa ke fasilitas kesehatan
                                        <input type="checkbox" <?= compare($kebiasaan_periksa, 'tidak/jarang diobati karena sembuh sendiri') ?> class="v-bottom"> tidak/jarang diobati karena sembuh sendiri
                                    </td>
                                </tr>
                                <tr class="bold">
                                    <td style="width: 15px;">2. </td>
                                    <td>Pola Nutrisi & Metabolik</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <table class="w-100">
                                            <tr>
                                                <td>Riwayat nutrisi</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="checkbox" <?= compare($riwayat_nutrisi, 'anoreksia') ?> class="lh-0 v-bottom"> anoreksia
                                                    <input type="checkbox" <?= compare($riwayat_nutrisi, 'mual') ?> class="lh-0 v-bottom"> mual
                                                    <input type="checkbox" <?= compare($riwayat_nutrisi, 'muntah') ?> class="lh-0 v-bottom"> muntah
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Porsi makan</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="checkbox" <?= compare($porsi_makan, 'cukup') ?> class="lh-0 v-bottom"> cukup
                                                    <input type="checkbox" <?= compare($porsi_makan, 'kurang') ?> class="lh-0 v-bottom"> kurang
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Diet</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="checkbox" <?= compare($diet, 'Nasi') ?> class="lh-0 v-bottom"> Nasi
                                                    <input type="checkbox" <?= compare($diet, 'bubur kasar') ?> class="lh-0 v-bottom"> bubur kasar
                                                    <input type="checkbox" <?= compare($diet, 'bubur saring') ?> class="lh-0 v-bottom"> bubur saring
                                                    <input type="checkbox" <?= compare($diet, 'sonde') ?> class="lh-0 v-bottom"> sonde
                                                    <input type="checkbox" <?= compare($diet, 'puasa') ?> class="lh-0 v-bottom"> puasa
                                                    <input type="checkbox" <?= compare($diet, 'ASI') ?> class="lh-0 v-bottom"> ASI, Frekuensi <?= cekStrKosong($frekuensi, '...') ?> X perhari
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Terpasang NGT</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="checkbox" <?= compare($ngt, 'Ya') ?> class="lh-0 v-bottom"> Ya
                                                    <input type="checkbox" <?= compare($ngt, 'Tidak') ?> class="lh-0 v-bottom"> Tidak
                                                    Terpasang Hari Ke : <?= cekStrKosong($terpasang_ngt, '.....') ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Tujuan pemasangan NGT</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="checkbox" <?= compare($tujuan_ngt, 'Pemenuhan nutrisi') ?> class="lh-0 v-bottom"> Pemenuhan nutrisi
                                                    <input type="checkbox" <?= compare($tujuan_ngt, 'Cuci lambung') ?> class="lh-0 v-bottom"> Cuci lambung
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Jumlah minuman</td>
                                                <td>:</td>
                                                <td>
                                                    <?= cekStrKosong($jumlah_minum_ngt, '...') ?> ml/hari
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr class="bold">
                                    <td style="width: 15px;">3. </td>
                                    <td>Pola Eliminasi</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <table class="w-100">
                                            <tr>
                                                <td>BAB</td>
                                                <td>:</td>
                                                <td>
                                                    <?= cekStrKosong($bab, '...') ?> Kali/hari
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Konsistensi</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="checkbox" <?= compare($konsistensi, 'Cair') ?> class="lh-0 v-bottom"> Cair
                                                    <input type="checkbox" <?= compare($konsistensi, 'lunak') ?> class="lh-0 v-bottom" style="padding-left: 27px;"> lunak
                                                    <input type="checkbox" <?= compare($konsistensi, 'keras') ?> class="lh-0 v-bottom"> keras
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Warna</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="checkbox" <?= compare($warna, 'merah') ?> class="lh-0 v-bottom"> merah
                                                    <input type="checkbox" <?= compare($warna, 'hitam') ?> class="lh-0 v-bottom" style="padding-left: 17.5px;"> hitam
                                                    <input type="checkbox" <?= compare($warna, 'normal') ?> class="lh-0 v-bottom"> normal
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Keluhan</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="checkbox" <?= compare($keluhan, 'Kembung') ?> class="lh-0 v-bottom"> Kembung
                                                    <input type="checkbox" <?= compare($keluhan, 'sebah') ?> class="lh-0 v-bottom"> sebah
                                                    <input type="checkbox" <?= compare($keluhan, 'Konstipasi') ?> class="lh-0 v-bottom"> Konstipasi
                                                    <input type="checkbox" <?= compare($keluhan, 'Diare') ?> class="lh-0 v-bottom"> Diare
                                                    <input type="checkbox" <?= compare($keluhan, 'lainlain') ?> class="lh-0 v-bottom"> Lainnya : <?= cekStrKosong($keluhan_lain, '..................................') ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>BAK</td>
                                                <td>:</td>
                                                <td>
                                                    <?= cekStrKosong($bak, '...') ?> kali/hari,
                                                    <input type="checkbox" <?= compare($jenis_bak, 'incontinentia') ?> class="lh-0 v-bottom"> incontinentia
                                                    <input type="checkbox" <?= compare($jenis_bak, 'retensi urine') ?> class="lh-0 v-bottom"> retensi urine
                                                    <input type="checkbox" <?= compare($jenis_bak, 'disuria') ?> class="lh-0 v-bottom"> disuria
                                                    <input type="checkbox" <?= compare($jenis_bak, 'anuria') ?> class="lh-0 v-bottom"> anuria
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Jumlah</td>
                                                <td>:</td>
                                                <td>
                                                    <?= cekStrKosong($jumlah_bak, '...') ?> ml/hari
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Warna urine</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="checkbox" <?= compare($warna_urine, 'jernih') ?> class="lh-0 v-bottom"> jernih
                                                    <input type="checkbox" <?= compare($warna_urine, 'merah') ?> class="lh-0 v-bottom"> merah
                                                    <input type="checkbox" <?= compare($warna_urine, 'kekuningan') ?> class="lh-0 v-bottom"> kekuningan
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Terpasang kateter</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="checkbox" <?= compare($terpasang_kateter, 'ya') ?> class="lh-0 v-bottom"> ya
                                                    <input type="checkbox" <?= compare($terpasang_kateter, 'tidak') ?> class="lh-0 v-bottom" style="padding-left: 16.6px;"> tidak
                                                    terpasang hari ke : <?= cekStrKosong($hari_kateter, '.....') ?>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr class="bold">
                                    <td style="width: 15px;">4. </td>
                                    <td>Pola Istirahat Tidur</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <table class="w-100">
                                            <tr>
                                                <td style="width: 142px;">Gangguan tidur</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="checkbox" <?= compare($gangguan_tidur, 'tidak') ?> class="v-bottom"> Tidak
                                                    <input type="checkbox" <?= compare($gangguan_tidur, 'ya') ?> class="v-bottom"> Ya, jelaskan: <?= cekStrKosong($ganguan_tidur_jelaskan, '.......................') ?>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr class="bold">
                                    <td style="width: 15px;">5. </td>
                                    <td>Pola Toleransi Koping Stres</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <table class="w-100">
                                            <tr>
                                                <td style="width: 200px;">Koping terhadap sakitnya</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="checkbox" <?= compare($koping, 'takut / khawatir') ?> class=" v-bottom"> takut / khawatir
                                                    <input type="checkbox" <?= compare($koping, 'menerima') ?> class=" v-bottom"> menerima
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Penyelesaian bila ada masalah</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="checkbox" <?= compare($penyelesaian_masalah, 'sendiri') ?> class=" v-bottom"> sendiri
                                                    <input type="checkbox" <?= compare($penyelesaian_masalah, 'minta bantuan orang terdekat') ?> class=" v-bottom"> minta bantuan orang terdekat
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr class="bold">
                                    <td style="width: 15px;">6. </td>
                                    <td>Pola Nilai dan Kepercayaan</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <table class="w-100">
                                            <tr>
                                                <td style="width: 200px;">Kebiasaan menjalankan ibadah</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="checkbox" <?= compare($ibadah, 'teratur') ?> class=" v-bottom"> teratur
                                                    <input type="checkbox" <?= compare($ibadah, 'tidak teratur') ?> class=" v-bottom"> tidak teratur
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Kebutuhan pelayanan rohani</td>
                                                <td>:</td>
                                                <td class="pb-5">
                                                    <input type="checkbox" <?= compare($pelayanan, 'Tidak') ?> class=" v-bottom"> Tidak
                                                    <input type="checkbox" <?= compare($pelayanan, 'Ya') ?> class=" v-bottom"> Ya
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>

    <div class="page-break"></div>
    <!-- Page 2 -->
    <table class="w-100 border">
        <tr class="border-bottom" style="font-size: 12px;">
            <td class="">
                <table class="w-100">
                    <tr class="bold">
                        <td style="width: 25px;" class="pl-20"></td>
                        <td></td>
                    </tr>
                    <tr class="border-bottom">
                        <td></td>
                        <td>
                            <table class="w-100">
                                <tr class="bold">
                                    <td style="width: 15px;">7. </td>
                                    <td>Pola Persepsi Kognitif</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <table class="w-100">
                                            <tr>
                                                <td style="width: 210px;">Pengetahuan tentang penyakitnya saat ini</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="checkbox" <?= compare($pengetahuan_penyakit, 'tidak tahu') ?> class="lh-0 v-bottom"> tidak tahu
                                                    <input type="checkbox" <?= compare($pengetahuan_penyakit, 'sedikit tahu') ?> class="lh-0 v-bottom"> sedikit tahu
                                                    <input type="checkbox" <?= compare($pengetahuan_penyakit, 'mengerti dan memahami') ?> class="lh-0 v-bottom"> mengerti dan memahami
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Perawatan/tindakan yang dilakukan</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="checkbox" <?= compare($perawatan, 'mengerti') ?> class="lh-0 v-bottom"> mengerti
                                                    <input type="checkbox" <?= compare($perawatan, 'tidak mengerti') ?> class="lh-0 v-bottom" style="padding-left: 4.9px;"> tidak mengerti
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr class="bold">
                                    <td style="width: 15px;">8. </td>
                                    <td>Pola Konsep Diri</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <table class="w-100">
                                            <tr>
                                                <td>Gambaran diri</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="checkbox" <?= compare($gambaran_diri, 'optimis dengan kondisi tubuhnya') ?> class="lh-0 v-bottom"> optimis dengan kondisi tubuhnya
                                                    <input type="checkbox" <?= compare($gambaran_diri, 'merasa cacat/kurang') ?> class="lh-0 v-bottom" style="padding-left: 20px;"> merasa cacat/kurang
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Ideal diri</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="checkbox" <?= compare($ideal_diri, 'menerima diri') ?> class="lh-0 v-bottom"> menerima diri
                                                    <input type="checkbox" <?= compare($ideal_diri, 'menolak keadaan penyakitnya') ?> class="lh-0 v-bottom" style="padding-left: 112px;"> menolak keadaan penyakitnya
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Harga diri</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="checkbox" <?= compare($harga_diri, 'percaya diri positif') ?> class="lh-0 v-bottom"> percaya diri positif
                                                    <input type="checkbox" <?= compare($harga_diri, 'rendah diri') ?> class="lh-0 v-bottom" style="padding-left: 89px;"> rendah diri
                                                    <input type="checkbox" <?= compare($harga_diri, 'malu') ?> class="lh-0 v-bottom"> malu
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Peran</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="checkbox" <?= compare($peran, 'peran minimal') ?> class="lh-0 v-bottom"> peran minimal
                                                    <input type="checkbox" <?= compare($peran, 'digantikan orang lain') ?> class="lh-0 v-bottom" style="padding-left: 110px;"> digantikan orang lain
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Identitas diri</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="checkbox" <?= compare($identitas_diri, 'persepsi diri baik') ?> class="lh-0 v-bottom"> persepsi diri baik
                                                    <input type="checkbox" <?= compare($identitas_diri, 'persepsi diri kurang baik') ?> class="lh-0 v-bottom" style="padding-left: 97px;"> persepsi diri kurang baik
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr class="bold">
                                    <td style="width: 15px;">9. </td>
                                    <td>Pola Aktifitas dan Latihan</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <table class="w-100">
                                            <tr>
                                                <td style="width: 160px;">Membutuhkan Alat bantu</td>
                                                <td>:</td>
                                                <td style="width: 150px;">
                                                    <input type="checkbox" <?= compare($alat_bantu, 'Ya') ?> class="lh-0 v-bottom"> Ya
                                                    <input type="checkbox" <?= compare($alat_bantu, 'Tidak') ?> class="lh-0 v-bottom" style="padding-left: 27px;"> Tidak
                                                </td>
                                                <td rowspan="2">
                                                    <table class="w-10s0">
                                                        <tr>
                                                            <td>Kekuatan Otot</td>
                                                            <td style="padding-left: 20px;">:</td>
                                                            <td style="padding-left: 10px;">
                                                                <?= cekStrKosong($kekuatan_otot, '.........') ?>
                                                                <!-- <table>
                                                                    <tr>
                                                                        <td class="border-right border-bottom">1 2 3 4 5</td>
                                                                        <td class="border-bottom">1 2 3 4 5</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="border-right">1 2 3 4 5</td>
                                                                        <td class="">1 2 3 4 5</td>
                                                                    </tr>
                                                                </table> -->
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Sesak Nafas saat aktifitas</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="checkbox" <?= compare($sesak_nafas, 'Ya') ?> class="lh-0 v-bottom"> Ya
                                                    <input type="checkbox" <?= compare($sesak_nafas, 'Tidak') ?> class="lh-0 v-bottom" style="padding-left: 27px;"> Tidak
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr class="bold">
                                    <td style="width: 15px;">10. </td>
                                    <td>Pola Hubungan dan Peran</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <table class="w-100">
                                            <tr>
                                                <td style="width: 142px;">Hubungan dengan orang lain selama dirawat</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="checkbox" <?= compare($hubungan_orang, 'terganggu') ?> class="lh-0 v-bottom"> terganggu
                                                    <input type="checkbox" <?= compare($hubungan_orang, 'tidak terganggu') ?> class="lh-0 v-bottom"> tidak terganggu
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 142px;">Peran di dalam keluarga sebagai</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="checkbox" <?= compare($peran_dikeluarga, 'Ayah') ?> class="lh-0 v-bottom"> Ayah
                                                    <input type="checkbox" <?= compare($peran_dikeluarga, 'Ibu') ?> class="lh-0 v-bottom"> Ibu
                                                    <input type="checkbox" <?= compare($peran_dikeluarga, 'Anak') ?> class="lh-0 v-bottom"> Anak
                                                    <input type="checkbox" <?= compare($peran_dikeluarga, 'lainlain') ?> class="lh-0 v-bottom"> Lainlain <?= cekStrKosong($peran_lain, '............') ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 142px;">Perannya selama sakit</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="checkbox" <?= compare($peran_selama_sakit, 'tidak dapat dilakukan') ?> class="lh-0 v-bottom"> tidak dapat dilakukan
                                                    <input type="checkbox" <?= compare($peran_selama_sakit, 'minimal') ?> class="lh-0 v-bottom"> minimal
                                                    <input type="checkbox" <?= compare($peran_selama_sakit, 'digantikan orang lain') ?> class="lh-0 v-bottom"> digantikan orang lain
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr class="bold">
                                    <td style="width: 15px;">11. </td>
                                    <td>Pola Seksual dan Reproduksi</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <table class="w-100">
                                            <tr>
                                                <td style="width: 200px;">Jumlah anak</td>
                                                <td>:</td>
                                                <td>
                                                    <?= cekStrKosong($jumlah_anak, '...') ?> orang
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Menikah umur</td>
                                                <td>:</td>
                                                <td>
                                                    <?= cekStrKosong($menikah_umur, '...') ?> tahun
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Anak pertama lahir umur</td>
                                                <td>:</td>
                                                <td>
                                                    <?= cekStrKosong($anak_pertama, '...') ?> tahun
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Pernah menderita penyakit kelamin</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="checkbox" <?= compare($penyakit_kelamin, 'ya') ?> class="lh-0 v-bottom"> ya
                                                    <input type="checkbox" <?= compare($penyakit_kelamin, 'tidak') ?> class="lh-0 v-bottom"> tidak
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-bottom: 10px;">Jenis/ keluhan</td>
                                                <td style="padding-bottom: 10px;">:</td>
                                                <td style="padding-bottom: 10px;">
                                                    <?= cekStrKosong($jenis_keluhan, '............................................') ?>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>

                            </table>
                        </td>
                    </tr>
                    <tr class="bold ">
                        <td style="width: 25px;" class="pl-20">H. </td>
                        <td>ASSESMEN KHUSUS LANSIA (USIA > 60 TAHUN)</td>
                    </tr>
                    <tr class="border-bottom">
                        <td></td>
                        <td>
                            Kondisi fisik
                            <table class="w-100">
                                <tr class="">
                                    <td style="width: 15px;">a. </td>
                                    <td>Skor notron (resiko dekubitus)</td>
                                </tr>
                                <tr class="">
                                    <td style="width: 15px;"></td>
                                    <td>
                                        <table class="w-100" style="padding-right: 10px;">
                                            <thead>
                                                <tr class="border">
                                                    <td colspan="5" class="bold text-center border-right">BERILAH TANDA CENTANG</td>
                                                    <td rowspan="2" class="bold text-center">NILAI</td>
                                                </tr>
                                                <tr class="border">
                                                    <td class="bold text-center border-right">ITEM/SKOR</td>
                                                    <td class="bold text-center border-right">4</td>
                                                    <td class="bold text-center border-right">3</td>
                                                    <td class="bold text-center border-right">2</td>
                                                    <td class="bold text-center border-right">1</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="border">
                                                    <td class="px-5 border-right">Kondisi Umum</td>
                                                    <td class="px-5 border-right"><input type="checkbox" <?= compare($kondisi_umum, 'Baik') ?> class="v-bottom lh-0" style="line-height: 13px;"> Baik</td>
                                                    <td class="px-5 border-right"><input type="checkbox" <?= compare($kondisi_umum, 'Lumayan') ?> class="v-bottom lh-0" style="line-height: 13px;"> Lumayan</td>
                                                    <td class="px-5 border-right"><input type="checkbox" <?= compare($kondisi_umum, 'Buruk') ?> class="v-bottom lh-0" style="line-height: 13px;"> Buruk</td>
                                                    <td class="px-5 border-right"><input type="checkbox" <?= compare($kondisi_umum, 'Sangat Buruk') ?> class="v-bottom lh-0" style="line-height: 13px;"> Sangat Buruk</td>
                                                    <td class="px-5 border-right text-center"><?= $nilai1 ?></td>
                                                </tr>
                                                <tr class="border">
                                                    <td class="px-5 border-right">Kesadaran</td>
                                                    <td class="px-5 border-right"><input type="checkbox" <?= compare($kesadaran_skor, 'Komposmentis') ?> class="v-bottom lh-0" style="line-height: 13px;"> Komposmentis</td>
                                                    <td class="px-5 border-right"><input type="checkbox" <?= compare($kesadaran_skor, 'Apatis') ?> class="v-bottom lh-0" style="line-height: 13px;"> Apatis</td>
                                                    <td class="px-5 border-right"><input type="checkbox" <?= compare($kesadaran_skor, 'Soporis') ?> class="v-bottom lh-0" style="line-height: 13px;"> Soporis</td>
                                                    <td class="px-5 border-right"><input type="checkbox" <?= compare($kesadaran_skor, 'Koma') ?> class="v-bottom lh-0" style="line-height: 13px;"> Koma</td>
                                                    <td class="px-5 border-right text-center"><?= $nilai2 ?></td>
                                                </tr>
                                                <tr class="border">
                                                    <td class="px-5 border-right">Aktifitas</td>
                                                    <td class="px-5 border-right"><input type="checkbox" <?= compare($aktifitas, 'Dapat berpindah') ?> class="v-bottom lh-0" style="line-height: 13px;"> Dapat berpindah</td>
                                                    <td class="px-5 border-right"><input type="checkbox" <?= compare($aktifitas, 'Dapat bantuan') ?> class="v-bottom lh-0" style="line-height: 13px;"> Dapat bantuan</td>
                                                    <td class="px-5 border-right"><input type="checkbox" <?= compare($aktifitas, 'Dikursi') ?> class="v-bottom lh-0" style="line-height: 13px;"> Dikursi</td>
                                                    <td class="px-5 border-right"><input type="checkbox" <?= compare($aktifitas, 'Ditempat tidur') ?> class="v-bottom lh-0" style="line-height: 13px;"> Ditempat tidur</td>
                                                    <td class="px-5 border-right text-center"><?= $nilai3; ?></td>
                                                </tr>
                                                <tr class="border">
                                                    <td class="px-5 border-right">Mobilitas</td>
                                                    <td class="px-5 border-right"><input type="checkbox" <?= compare($mobilitas, 'Bergerak bebas') ?> class="v-bottom lh-0" style="line-height: 13px;"> Bergerak bebas</td>
                                                    <td class="px-5 border-right"><input type="checkbox" <?= compare($mobilitas, 'Sedikit terbatas') ?> class="v-bottom lh-0" style="line-height: 13px;"> Sedikit terbatas</td>
                                                    <td class="px-5 border-right"><input type="checkbox" <?= compare($mobilitas, 'Sangat terbatas') ?> class="v-bottom lh-0" style="line-height: 13px;"> Sangat terbatas</td>
                                                    <td class="px-5 border-right"><input type="checkbox" <?= compare($mobilitas, 'Tak bisa bergerak') ?> class="v-bottom lh-0" style="line-height: 13px;"> Tak bisa bergerak</td>
                                                    <td class="px-5 border-right text-center"><?= $nilai4; ?></td>
                                                </tr>
                                                <tr class="border">
                                                    <td class="px-5 border-right">Inkontinensia urin</td>
                                                    <td class="px-5 border-right"><input type="checkbox" <?= compare($inkontinensia_urin, 'Tidak ngompol') ?> class="v-bottom lh-0" style="line-height: 13px;"> Tidak ngompol</td>
                                                    <td class="px-5 border-right"><input type="checkbox" <?= compare($inkontinensia_urin, 'Kadang-kadang') ?> class="v-bottom lh-0" style="line-height: 13px;"> Kadang-kadang</td>
                                                    <td class="px-5 border-right"><input type="checkbox" <?= compare($inkontinensia_urin, 'Sering') ?> class="v-bottom lh-0" style="line-height: 13px;"> Sering</td>
                                                    <td class="px-5 border-right"><input type="checkbox" <?= compare($inkontinensia_urin, 'Sering (alvi+urine)') ?> class="v-bottom lh-0" style="line-height: 13px;"> Sering (alvi+urine)</td>
                                                    <td class="px-5 border-right text-center"><?= $nilai5; ?></td>
                                                </tr>
                                                <?php
                                                $hasil_skoring = $nilai1 + $nilai2 + $nilai3 + $nilai4 + $nilai5;
                                                ?>
                                                <tr class="border">
                                                    <td class="border-right px-5" colspan="5">
                                                        <span style="padding-right: 49px;">Hasil Scoring</span>
                                                        <span style="padding-right: 20px;">
                                                            <input type="checkbox" class="v-bottom lh-0" style="line-height: 13px;" <?= $hasil_skoring < 12 ? 'checked' : '' ?>> <span class="bold"> &lt; 12 (resiko besar)</span>
                                                        </span>
                                                        <span style="padding-right: 20px;">
                                                            <input <?= $hasil_skoring >= 12 && $hasil_skoring < 15 ? 'checked' : ''; ?> type="checkbox" class="v-bottom lh-0" style="line-height: 13px;"> <span class="bold"> &lt; 12-15 (resiko sedang)</span>
                                                        </span>
                                                        <input <?= $hasil_skoring >= 15 ? 'checked' : '' ?> type="checkbox" class="v-bottom lh-0" style="line-height: 13px;"> <span class="bold"> &lt; 16-20 (resiko kecil)</span>
                                                    </td>
                                                    <td class="border-right text-center"><?= $hasil_skoring; ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td>b. </td>
                                    <td>
                                        <table class="w-100">
                                            <tr>
                                                <td style="width: 120px;">Decubitus</td>
                                                <td>
                                                    <input type="checkbox" <?= compare($decubitus, 'tidak') ?> class="v-bottom lh-0" style="padding-left: 19px;"> tidak
                                                    <input type="checkbox" <?= compare($decubitus, 'ada') ?> class="v-bottom lh-0"> ada
                                                    <span style="padding-left: 20px;">derajat</span>
                                                    <input type="checkbox" <?= compare($derajat, 'I') ?> class="v-bottom lh-0"> I
                                                    <input type="checkbox" <?= compare($derajat, 'II') ?> class="v-bottom lh-0"> II
                                                    <input type="checkbox" <?= compare($derajat, 'III') ?> class="v-bottom lh-0"> III
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td>c. </td>
                                    <td>
                                        <table class="w-100">
                                            <tr>
                                                <td>Pernah jatuh</td>
                                                <td style="padding-left: 16px;">
                                                    <input type="checkbox" <?= compare($pernah_jatuh, 'tidak') ?> class="v-bottom lh-0"> tidak
                                                    <input type="checkbox" <?= compare($pernah_jatuh, 'ya') ?> class="v-bottom lh-0"> ya, pernah <?= cekStrKosong($bulan_jatuh, '......') ?> bulan <?= cekStrKosong($tahun_jatuh, '......') ?> tahun yang lalu
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td>d. </td>
                                    <td>
                                        <table class="w-100">
                                            <tr>
                                                <td style="width: 120px;">Kontraktur/nyeri gerak</td>
                                                <td>
                                                    <input type="checkbox" <?= compare($kontraktur, 'tidak') ?> class="v-bottom lh-0" style="padding-left: 19px;"> tidak
                                                    <input type="checkbox" <?= compare($kontraktur, 'ya') ?> class="v-bottom lh-0"> ya, di <?= cekStrKosong($letak_nyeri, '...') ?>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td>e. </td>
                                    <td>
                                        <table class="w-100">
                                            <tr>
                                                <td style="width: 120px;">Menggunakan alat bantu</td>
                                                <td>
                                                    <input type="checkbox" <?= compare($alat_bantu_h, 'tidak') ?> class="v-bottom lh-0" style="padding-left: 19px;"> tidak
                                                    <input type="checkbox" <?= compare($alat_bantu_h, 'ya') ?> class="v-bottom lh-0"> ya
                                                    <input type="checkbox" <?= compare($jenis_alat_bantu_h, 'tongkat') ?> class="v-bottom lh-0" style="padding-left: 41.5px;"> tongkat
                                                    <input type="checkbox" <?= compare($jenis_alat_bantu_h, 'walker') ?> class="v-bottom lh-0"> walker
                                                    <input type="checkbox" <?= compare($jenis_alat_bantu_h, 'kursi roda') ?> class="v-bottom lh-0"> kursi roda
                                                    <input type="checkbox" <?= compare($jenis_alat_bantu_h, 'komodo') ?> class="v-bottom lh-0"> komodo
                                                    <input type="checkbox" <?= compare($jenis_alat_bantu_h, 'lainnya') ?> class="v-bottom lh-0"> lainnya

                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr class="">
                                    <td></td>
                                    <td>
                                        <table class="w-100">
                                            <tr>
                                                <td style="width: 120px;" class="v-top">Memori</td>
                                                <td style="padding-bottom: 10px;">
                                                    <input type="checkbox" <?= compare($memori, 'baik') ?> class="v-bottom lh-0" style="padding-left: 19px;"> baik
                                                    <input type="checkbox" <?= compare($memori, 'sering lupa') ?> class="v-bottom lh-0" style="padding-left:3.5px;"> sering lupa
                                                    <input type="checkbox" <?= compare($memori, 'tidak ingat') ?> class="v-bottom lh-0"> tidak ingat
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr class="bold ">
                        <td style="width: 25px;" class="pl-20">I. </td>
                        <td>NUTRISI</td>
                    </tr>
                    <tr class="">
                        <td></td>
                        <td><span class="bold" style="text-decoration: underline;">UNTUK PASIEN DEWASA / LANSIA</span></td>
                    </tr>
                    <tr class="">
                        <td></td>
                        <td>
                            <table class="w-100">
                                <tr>
                                    <td style="width: 530px;"><i>Bila skor > 2 dan ataub pasien dengan diagnosis / kondisi khusus dilakukan pengkajian lanjut oleh Ahli Gizi</i></td>
                                    <td class="text-center">Skor</td>
                                </tr>
                                <tr>
                                    <td>
                                        1. Apakah pasien mengalami penurunan BB yang tidak diinginkan dalam 6 bulan terakhir
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>
                                        <span style="opacity: 0;">1. </span>a. <input type="checkbox" <?= compare($soal1, 'Tidak ada penurunan BB') ?> class="lh-0"> Tidak ada penurunan BB
                                    </td>
                                    <td class="text-center">0</td>
                                </tr>
                                <tr>
                                    <td>
                                        <span style="opacity: 0;">1. </span>b. <input type="checkbox" <?= compare($soal1, 'Tidak Yakin/tidak tahu/terasa baju longgar') ?> class="lh-0"> Tidak Yakin/tidak tahu/terasa baju longgar
                                    </td>
                                    <td class="text-center">2</td>
                                </tr>
                                <tr>
                                    <td>
                                        <span style="opacity: 0;">1. </span>c. <input type="checkbox" <?= compare($soal1, 'ya') ?> class="lh-0"> Jika Ya, berapa penurunan BB tersebut :
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>
                                        <span style="opacity: 0;">1. </span><span style="opacity: 0;">1. </span>
                                        <ul class="two" style=" list-style: square inside; margin-left: 25px;margin-top: -15px;">
                                            <li><input type="checkbox" <?= compare($soal2, '1 - 5 kg') ?> class="lh-0"> 1 - 5 kg</li>
                                        </ul>
                                    </td>
                                    <td class="text-center">1</td>
                                </tr>
                                <tr>
                                    <td>
                                        <span style="opacity: 0;">1. </span><span style="opacity: 0;">1. </span>
                                        <ul class="two" style=" list-style: square inside; margin-left: 25px;margin-top: -15px;">
                                            <li><input type="checkbox" <?= compare($soal2, '6 - 10 kg') ?> class="lh-0"> 6 - 10 kg</li>
                                        </ul>
                                    </td>
                                    <td class="text-center">2</td>
                                </tr>
                                <tr>
                                    <td>
                                        <span style="opacity: 0;">1. </span><span style="opacity: 0;">1. </span>
                                        <ul class="two" style=" list-style: square inside; margin-left: 25px;margin-top: -15px;">
                                            <li><input type="checkbox" <?= compare($soal2, '11 - 15 kg') ?> class="lh-0"> 11 - 15 kg</li>
                                        </ul>
                                    </td>
                                    <td class="text-center">3</td>
                                </tr>
                                <tr>
                                    <td>
                                        <span style="opacity: 0;">1. </span><span style="opacity: 0;">1. </span>
                                        <ul class="two" style=" list-style: square inside; margin-left: 25px;margin-top: -15px;">
                                            <li><input type="checkbox" <?= compare($soal2, '> 15 kg') ?> class="lh-0"> > 15 kg</li>
                                        </ul>
                                    </td>
                                    <td class="text-center">4</td>
                                </tr>
                                <tr>
                                    <td>
                                        2. Apakah asupan makan berkurang karena tidak nafsu makan
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>
                                        <span style="opacity: 0;">1. </span>a. <input type="checkbox" <?= compare($soal3, 'Tidak') ?> class="lh-0"> Tidak
                                    </td>
                                    <td class="text-center">0</td>
                                </tr>
                                <tr>
                                    <td>
                                        <span style="opacity: 0;">1. </span>b. <input type="checkbox" <?= compare($soal3, 'Ya') ?> class="lh-0"> Ya
                                    </td>
                                    <td class="text-center">1</td>
                                </tr>
                                <tr>
                                    <td>
                                        <span style="opacity: 0;">1. </span>Pasien dengan diagnosis khusus
                                        <input type="checkbox" <?= compare($diagnosis_khusus, 'Ya') ?> class="v-bottom"> Ya
                                        <input type="checkbox" <?= compare($diagnosis_khusus, 'Tidak') ?> class="v-bottom"> Tidak
                                    </td>
                                    <td class="text-center">________</td>
                                </tr>
                                <tr>
                                    <td>
                                        <span style="opacity: 0;">1. </span>(<?= cekStrKosong($diagnosis_khusus_sebutkan, 'DM/KCD/Infeksi kronis/lain-lain sebutkan ...') ?>)
                                    </td>
                                    <td class="text-center">
                                        <table>
                                            <tr>
                                                <td style="width: 85px;">Total</td>
                                                <td class="text-center"><?= cekStrKosong($total_skor, '0') ?></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span style="opacity: 0;">1. </span><span class="bold">Kesimpulan : Beresiko Manultrisi
                                            <input type="checkbox" <?= compare($kesimpulan, 'Ya') ?> class="v-bottom"> Ya
                                            <input type="checkbox" <?= compare($kesimpulan, 'Tidak') ?> class="v-bottom"> Tidak
                                        </span>
                                    </td>
                                    <td class="text-center"></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="py-10"><span class="bold" style="text-decoration: underline;">UNTUK OBSTETRI / KEHAMILAN / NIFAS</span></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <table class="w-100">
                                <tr>
                                    <td class="bold">
                                        <i>Jika Salah satu jawab "Ya" dilakukan pengkajian lanjut oleh Ahli Gizi</i>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>
                                        <span style="opacity: 0;">1. </span>1. Apakah asupan makan berkurang karena tidak nafsu makan ?
                                    </td>
                                    <td class="bold">
                                        <input type="checkbox" <?= compare($soal4, 'Ya') ?> class="lh-0"> Ya
                                        <input type="checkbox" <?= compare($soal4, 'Tidak') ?> class="lh-0"> Tidak
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span style="opacity: 0;">1. </span>2. Ada gangguan metabolisme (DM; gangguan fungsi tiroid; infeksi kronis spt : <br> <span style="opacity: 0;">1. </span><span style="opacity: 0;">1. </span><?= cekStrKosong($soal5_sebutkan, 'HIV, TB, Lupus, Lain-lain sebutkan...............)') ?>
                                    </td>
                                    <td class="bold v-top">
                                        <input type="checkbox" <?= compare($soal5, 'Ya') ?> class="lh-0"> Ya
                                        <input type="checkbox" <?= compare($soal5, 'Tidak') ?> class="lh-0"> Tidak
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span style="opacity: 0;">1. </span>3. Ada pertambahan BB yang kurang atau lebih selama kehamilan
                                    </td>
                                    <td class="bold">
                                        <input type="checkbox" <?= compare($soal6, 'Ya') ?> class="lh-0"> Ya
                                        <input type="checkbox" <?= compare($soal6, 'Tidak') ?> class="lh-0"> Tidak
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span style="opacity: 0;">1. </span>4. Nilai HB < 11 g/dl atau HCT < 30% </td>
                                    <td class="bold">
                                        <input type="checkbox" <?= compare($soal7, 'Ya') ?> class="lh-0"> Ya
                                        <input type="checkbox" <?= compare($soal7, 'Tidak') ?> class="lh-0"> Tidak
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="bold">Kesimpulan : Beresiko Manultrisi
                                            <input type="checkbox" <?= compare($kesimpulan2, 'Ya') ?> class="v-bottom"> Ya
                                            <input type="checkbox" <?= compare($kesimpulan2, 'Tidak') ?> class="v-bottom"> Tidak
                                        </span>
                                    </td>
                                    <td class="text-center"></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>