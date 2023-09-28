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
    return $a != '' ? '<span class="underline">' . $a . '</span>' : '_________';
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
                        <td style="padding-left: 10px;">: <?= '$nama;' ?></td>
                    </tr>
                    <tr>
                        <td>No. RM</td>
                        <td style="padding-left: 10px;">: <?= '$norm;' ?></td>
                    </tr>
                    <tr>
                        <td>Tgl. Lahir</td>
                        <td style="padding-left: 10px;">: <?= 'cekTgl($tgllahir);' ?></td>
                    </tr>
                    <tr>
                        <td>NIK</td>
                        <td style="padding-left: 10px;">: <?= '$nik;' ?></td>
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
                            <input type="checkbox" class="v-bottom"> jalan
                            <input type="checkbox" class="v-bottom"> kursi roda
                            <input type="checkbox" class="v-bottom"> brankart
                            <span style="margin-left: 20px;">Asal masuk :</span>

                            <input type="checkbox" class="v-bottom"> IGD
                            <input type="checkbox" class="v-bottom"> Poliklinik
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
                            <input type="checkbox" class=" v-bottom"> tidak
                            <input type="checkbox" class=" v-bottom"> ya, Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus, inventore!
                            <br>
                            Bila Ya,Tindakan penanganan :
                            <input type="checkbox" class=" v-bottom"> hindari penyebab
                            <input type="checkbox" class=" v-bottom"> periksa
                            <input type="checkbox" class=" v-bottom"> lain-lain. Lorem ipsum dolor sit amet.
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
                                    <td>.../...mmHg. Denyut Jantung : .../menit, pernafasan : .../menit</td>
                                </tr>
                                <tr>
                                    <td>Suhu</td>
                                    <td>:</td>
                                    <td>
                                        ...°C. Saturasi Oksigen : ...%
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
                                        <input type="checkbox" class="lh-0 v-bottom"> compos mentis
                                        <input type="checkbox" class="lh-0 v-bottom"> somnolen
                                        <input type="checkbox" class="lh-0 v-bottom"> delirium
                                        <input type="checkbox" class="lh-0 v-bottom"> sopor
                                        <input type="checkbox" class="lh-0 v-bottom"> koma
                                    </td>
                                </tr>
                                <tr>
                                    <td>GCS</td>
                                    <td>:</td>
                                    <td>
                                        E...M...V...
                                    </td>
                                </tr>
                            </table>
                            <table class="w-100">
                                <tr>
                                    <td>Pendengaran</td>
                                    <td>:</td>
                                    <td>
                                        <input type="checkbox" class="lh-0 v-bottom"> Normal
                                        <input type="checkbox" class="lh-0 v-bottom"> Kurang pendengaran (Ka/Ki)
                                        <input type="checkbox" class="lh-0 v-bottom"> Gangguan pendengaran
                                        <input type="checkbox" class="lh-0 v-bottom"> Lainnya ...
                                    </td>
                                </tr>
                                <tr>
                                    <td>Penglihatan</td>
                                    <td>:</td>
                                    <td>
                                        <input type="checkbox" class="lh-0 v-bottom"> Normal
                                        <input type="checkbox" class="lh-0 v-bottom"> Kacamata
                                        <input type="checkbox" class="lh-0 v-bottom"> Lensa Kontak
                                        <input type="checkbox" class="lh-0 v-bottom"> Lainnya ...
                                    </td>
                                </tr>
                                <tr>
                                    <td>Bicara</td>
                                    <td>:</td>
                                    <td class="pb-5">
                                        <input type="checkbox" class="lh-0 v-bottom"> Normal
                                        <input type="checkbox" class="lh-0 v-bottom"> Pelo
                                        <input type="checkbox" class="lh-0 v-bottom"> Aphasia
                                        <input type="checkbox" class="lh-0 v-bottom"> Kelainan bicara
                                        <input type="checkbox" class="lh-0 v-bottom"> Tidak komunikatif
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
                                        <input type="checkbox" class="lh-0 v-bottom"> Reguler
                                        <input type="checkbox" class="lh-0 v-bottom" style="padding-left: 10.3px;"> Irreguler
                                        <input type="checkbox" class="lh-0 v-bottom"> Dyspnea
                                        <input type="checkbox" class="lh-0 v-bottom"> Orthopnea
                                    </td>
                                </tr>
                                <tr>
                                    <td class="v-top">Adakah</td>
                                    <td class="v-top">:</td>
                                    <td class="pb-5">
                                        <input type="checkbox" class="lh-0 v-bottom"> Whezing
                                        <input type="checkbox" class="lh-0 v-bottom pl-5"> Ronkhi
                                        <input type="checkbox" class="lh-0 v-bottom" style="padding-left: 6.5px;"> stridor
                                        <input type="checkbox" class="lh-0 v-bottom" style="padding-left: 11px;"> Tak ada Kelainan <br>
                                        <input type="checkbox" class="lh-0 v-bottom"> Batuk :
                                        <input type="checkbox" class="lh-0 v-bottom" style="padding-left: 13.3px;"> Tidak,
                                        <input type="checkbox" class="lh-0 v-bottom" style="padding-left: 11px;"> Ya : (Jelaskan...) <br>
                                        <input type="checkbox" class="lh-0 v-bottom"> Sputum :
                                        <input type="checkbox" class="lh-0 v-bottom" style="padding-left: 4.7px;"> Tidak,
                                        <input type="checkbox" class="lh-0 v-bottom" style="padding-left: 11px;"> Ya : (Jelaskan...)
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
                                        <input type="checkbox" class="v-bottom"> Reguler
                                        <input type="checkbox" class="v-bottom"> Irreguler
                                    </td>
                                </tr>
                                <tr>
                                    <td>b. adakah</td>
                                    <td>
                                        <input type="checkbox" class="v-bottom"> Nyeri dada
                                        <input type="checkbox" class="v-bottom"> Edema, Jelaskan...
                                    </td>
                                </tr>
                                <tr>
                                    <td>c. Ekstremitas</td>
                                    <td class="pb-5">
                                        <input type="checkbox" class="v-bottom"> Hangat
                                        <input type="checkbox" class="v-bottom"> Dingin
                                        <input type="checkbox" class="v-bottom"> Sianosis
                                        <input type="checkbox" class="v-bottom"> Capillary refill (> 3 detik/ &lt; 3 detik)
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
                                        <input type="checkbox" class="lh-0 v-bottom"> ada
                                        <input type="checkbox" class="lh-0 v-bottom" style="padding-left: 59.5px;"> tidak ada
                                    </td>
                                </tr>
                                <tr>
                                    <td>Bila ada, jenis luka</td>
                                    <td>:</td>
                                    <td>
                                        <input type="checkbox" class="lh-0 v-bottom"> steril
                                        <input type="checkbox" class="lh-0 v-bottom" style="padding-left: 52.3px;"> bersih
                                        <input type="checkbox" class="lh-0 v-bottom" style="padding-left: 59.7px;"> kotor
                                    </td>
                                </tr>
                                <tr>
                                    <td>Lokasi luka</td>
                                    <td>:</td>
                                    <td>
                                        <input type="checkbox" class="lh-0 v-bottom"> ekstremitas atas
                                        <input type="checkbox" class="lh-0 v-bottom"> ekstremitas bawah
                                        <input type="checkbox" class="lh-0 v-bottom"> seluruh tubuh
                                        <input type="checkbox" class="lh-0 v-bottom" style="padding-left: 80px;"> lainnya...
                                    </td>
                                </tr>
                                <tr>
                                    <td>Luka karena</td>
                                    <td>:</td>
                                    <td class="">
                                        <input type="checkbox" class="lh-0 v-bottom"> operasi
                                        <input type="checkbox" class="lh-0 v-bottom" style="padding-left: 41.6px;"> WSD
                                        <input type="checkbox" class="lh-0 v-bottom" style="padding-left: 62.5px;"> sulkus (diabetikum/dekubitus)
                                        <input type="checkbox" class="lh-0 v-bottom"> lain-lain
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tanda - tanda radang</td>
                                    <td>:</td>
                                    <td class="pb-5">
                                        <input type="checkbox" class="lh-0 v-bottom"> kemerahan
                                        <input type="checkbox" class="lh-0 v-bottom" style="padding-left: 23.6px;"> panas
                                        <input type="checkbox" class="lh-0 v-bottom" style="padding-left:61.9px;"> bengkak
                                        <input type="checkbox" class="lh-0 v-bottom" style="padding-left: 20px;"> nyeri
                                        <input type="checkbox" class="lh-0 v-bottom" style="padding-left: 38.5px;"> fungsioleisa (berubah fungsi)
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
                                        <input type="checkbox" class="v-bottom"> beli obat warung
                                        <input type="checkbox" class="v-bottom"> periksa ke fasilitas kesehatan
                                        <input type="checkbox" class="v-bottom"> tidak/jarang diobati karena sembuh sendiri
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
                                                    <input type="checkbox" class="lh-0 v-bottom"> anoreksia
                                                    <input type="checkbox" class="lh-0 v-bottom"> mual
                                                    <input type="checkbox" class="lh-0 v-bottom"> muntah
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Porsi makan</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="checkbox" class="lh-0 v-bottom"> cukup
                                                    <input type="checkbox" class="lh-0 v-bottom"> kurang
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Diet</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="checkbox" class="lh-0 v-bottom"> Nasi
                                                    <input type="checkbox" class="lh-0 v-bottom"> bubur kasar
                                                    <input type="checkbox" class="lh-0 v-bottom"> bubur saring
                                                    <input type="checkbox" class="lh-0 v-bottom"> sonde
                                                    <input type="checkbox" class="lh-0 v-bottom"> puasa
                                                    <input type="checkbox" class="lh-0 v-bottom"> ASI, Frekuensi ... X perhari
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Terpasang NGT</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="checkbox" class="lh-0 v-bottom"> Ya
                                                    <input type="checkbox" class="lh-0 v-bottom"> Tidak
                                                    <input type="checkbox" class="lh-0 v-bottom"> bubur saring
                                                    <input type="checkbox" class="lh-0 v-bottom"> Terpasang Hari Ke : ...
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Tujuan pemasangan NGT</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="checkbox" class="lh-0 v-bottom"> Pemenuhan nutrisi
                                                    <input type="checkbox" class="lh-0 v-bottom"> Cuci lambung
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Jumlah minuman</td>
                                                <td>:</td>
                                                <td>
                                                    ... ml/hari
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
                                                    ... Kali/hari
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Konsistensi</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="checkbox" class="lh-0 v-bottom"> Cair
                                                    <input type="checkbox" class="lh-0 v-bottom" style="padding-left: 27px;"> lunak
                                                    <input type="checkbox" class="lh-0 v-bottom"> keras
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Warna</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="checkbox" class="lh-0 v-bottom"> merah
                                                    <input type="checkbox" class="lh-0 v-bottom" style="padding-left: 17.5px;"> hitam
                                                    <input type="checkbox" class="lh-0 v-bottom"> normal
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Keluhan</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="checkbox" class="lh-0 v-bottom"> Kembung
                                                    <input type="checkbox" class="lh-0 v-bottom"> sebah
                                                    <input type="checkbox" class="lh-0 v-bottom"> Konstipasi
                                                    <input type="checkbox" class="lh-0 v-bottom"> Diare
                                                    <input type="checkbox" class="lh-0 v-bottom"> Lainnya : ...
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>BAK</td>
                                                <td>:</td>
                                                <td>
                                                    ... kali/hari,
                                                    <input type="checkbox" class="lh-0 v-bottom"> incontinentia
                                                    <input type="checkbox" class="lh-0 v-bottom"> retensi urine
                                                    <input type="checkbox" class="lh-0 v-bottom"> disuria
                                                    <input type="checkbox" class="lh-0 v-bottom"> anuria
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Jumlah</td>
                                                <td>:</td>
                                                <td>
                                                    ... ml/hari
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Warna urine</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="checkbox" class="lh-0 v-bottom"> jernih
                                                    <input type="checkbox" class="lh-0 v-bottom"> merah
                                                    <input type="checkbox" class="lh-0 v-bottom"> kekuningan
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Terpasang kateter</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="checkbox" class="lh-0 v-bottom"> ya
                                                    <input type="checkbox" class="lh-0 v-bottom" style="padding-left: 16.6px;"> tidak
                                                    terpasang hari ke : ...
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
                                                    <input type="checkbox" class="v-bottom"> Tidak
                                                    <input type="checkbox" class="v-bottom"> Ya, jelaskan: ...
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
                                                    <input type="checkbox" class=" v-bottom"> takut / khawatir
                                                    <input type="checkbox" class=" v-bottom"> menerima
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Penyelesaian bila ada masalah</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="checkbox" class=" v-bottom"> sendiri
                                                    <input type="checkbox" class=" v-bottom"> minta bantuan orang terdekat
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
                                                    <input type="checkbox" class=" v-bottom"> teratur
                                                    <input type="checkbox" class=" v-bottom"> tidak teratur
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Kebutuhan pelayanan rohani</td>
                                                <td>:</td>
                                                <td class="pb-5">
                                                    <input type="checkbox" class=" v-bottom"> Tidak
                                                    <input type="checkbox" class=" v-bottom"> Ya
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
                                                    <input type="checkbox" class="lh-0 v-bottom"> tidak tahu
                                                    <input type="checkbox" class="lh-0 v-bottom"> sedikit tahu
                                                    <input type="checkbox" class="lh-0 v-bottom"> mengerti dan memahami
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Perawatan/tindakan yang dilakukan</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="checkbox" class="lh-0 v-bottom"> mengerti
                                                    <input type="checkbox" class="lh-0 v-bottom" style="padding-left: 4.9px;"> tidak mengerti
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr class="bold">
                                    <td style="width: 15px;">8. </td>
                                    <td>Pola Konsep DIri</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <table class="w-100">
                                            <tr>
                                                <td>Gambaran diri</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="checkbox" class="lh-0 v-bottom"> optimis dengan kondisi tubuhnya
                                                    <input type="checkbox" class="lh-0 v-bottom" style="padding-left: 20px;"> merasa cacat/kurang
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Ideal diri</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="checkbox" class="lh-0 v-bottom"> menerima diri
                                                    <input type="checkbox" class="lh-0 v-bottom" style="padding-left: 112px;"> menolak keadaan penyakitnya
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Harga diri</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="checkbox" class="lh-0 v-bottom"> percaya diri positif
                                                    <input type="checkbox" class="lh-0 v-bottom" style="padding-left: 89px;"> rendah diri
                                                    <input type="checkbox" class="lh-0 v-bottom"> malu
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Peran</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="checkbox" class="lh-0 v-bottom"> peran minimal
                                                    <input type="checkbox" class="lh-0 v-bottom" style="padding-left: 110px;"> digantikan orang lain
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Identitas diri</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="checkbox" class="lh-0 v-bottom"> persepsi diri baik
                                                    <input type="checkbox" class="lh-0 v-bottom" style="padding-left: 97px;"> persepsi diri kurang baik
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
                                                    <input type="checkbox" class="lh-0 v-bottom"> Ya
                                                    <input type="checkbox" class="lh-0 v-bottom" style="padding-left: 27px;"> Tidak
                                                </td>
                                                <td rowspan="2">
                                                    <table class="w-10s0">
                                                        <tr>
                                                            <td>Kekuatan Otot</td>
                                                            <td style="padding-left: 20px;">:</td>
                                                            <td style="padding-left: 10px;">
                                                                <table>
                                                                    <tr>
                                                                        <td class="border-right border-bottom">1 2 3 4 5</td>
                                                                        <td class="border-bottom">1 2 3 4 5</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="border-right">1 2 3 4 5</td>
                                                                        <td class="">1 2 3 4 5</td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Sesak Nafas saat aktifitas</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="checkbox" class="lh-0 v-bottom"> Ya
                                                    <input type="checkbox" class="lh-0 v-bottom" style="padding-left: 27px;"> Tidak
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
                                                    <input type="checkbox" class="lh-0 v-bottom"> terganggu
                                                    <input type="checkbox" class="lh-0 v-bottom"> tidak terganggu
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 142px;">Peran di dalam keluarga sebagai</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="checkbox" class="lh-0 v-bottom"> Ayah
                                                    <input type="checkbox" class="lh-0 v-bottom"> Ibu
                                                    <input type="checkbox" class="lh-0 v-bottom"> Anak
                                                    <input type="checkbox" class="lh-0 v-bottom"> Lainlain...
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 142px;">Perannya selama sakit</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="checkbox" class="lh-0 v-bottom"> tidak dapat dilakukan
                                                    <input type="checkbox" class="lh-0 v-bottom"> minimal
                                                    <input type="checkbox" class="lh-0 v-bottom"> digantikan orang lain
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
                                                    ... orang
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Menikah umur</td>
                                                <td>:</td>
                                                <td>
                                                    ... tahun
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Anak pertama lahir umur</td>
                                                <td>:</td>
                                                <td>
                                                    ... tahun
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Pernah menderita penyakit kelamin</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="checkbox" class="lh-0 v-bottom"> ya
                                                    <input type="checkbox" class="lh-0 v-bottom"> tidak
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Jenis/ keluhan</td>
                                                <td>:</td>
                                                <td>
                                                    ...
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
                                                    <td class="px-5 border-right"><input type="checkbox" class="v-bottom lh-0" style="line-height: 13px;"> Baik</td>
                                                    <td class="px-5 border-right"><input type="checkbox" class="v-bottom lh-0" style="line-height: 13px;"> Lumayan</td>
                                                    <td class="px-5 border-right"><input type="checkbox" class="v-bottom lh-0" style="line-height: 13px;"> Buruk</td>
                                                    <td class="px-5 border-right"><input type="checkbox" class="v-bottom lh-0" style="line-height: 13px;"> Sangat Buruk</td>
                                                    <td class="px-5 border-right text-center"></td>
                                                </tr>
                                                <tr class="border">
                                                    <td class="px-5 border-right">Kesadaran</td>
                                                    <td class="px-5 border-right"><input type="checkbox" class="v-bottom lh-0" style="line-height: 13px;"> Komposmentis</td>
                                                    <td class="px-5 border-right"><input type="checkbox" class="v-bottom lh-0" style="line-height: 13px;"> Apatis</td>
                                                    <td class="px-5 border-right"><input type="checkbox" class="v-bottom lh-0" style="line-height: 13px;"> Soporis</td>
                                                    <td class="px-5 border-right"><input type="checkbox" class="v-bottom lh-0" style="line-height: 13px;"> Koma</td>
                                                    <td class="px-5 border-right text-center"></td>
                                                </tr>
                                                <tr class="border">
                                                    <td class="px-5 border-right">Aktifitas</td>
                                                    <td class="px-5 border-right"><input type="checkbox" class="v-bottom lh-0" style="line-height: 13px;"> Dapat berpindah</td>
                                                    <td class="px-5 border-right"><input type="checkbox" class="v-bottom lh-0" style="line-height: 13px;"> Dapat bantuan</td>
                                                    <td class="px-5 border-right"><input type="checkbox" class="v-bottom lh-0" style="line-height: 13px;"> Dikursi</td>
                                                    <td class="px-5 border-right"><input type="checkbox" class="v-bottom lh-0" style="line-height: 13px;"> Ditempat tidur</td>
                                                    <td class="px-5 border-right text-center"></td>
                                                </tr>
                                                <tr class="border">
                                                    <td class="px-5 border-right">Mobilitas</td>
                                                    <td class="px-5 border-right"><input type="checkbox" class="v-bottom lh-0" style="line-height: 13px;"> Bergerak bebas</td>
                                                    <td class="px-5 border-right"><input type="checkbox" class="v-bottom lh-0" style="line-height: 13px;"> Sedikit terbatas</td>
                                                    <td class="px-5 border-right"><input type="checkbox" class="v-bottom lh-0" style="line-height: 13px;"> Sangat terbatas</td>
                                                    <td class="px-5 border-right"><input type="checkbox" class="v-bottom lh-0" style="line-height: 13px;"> Tak bisa bergerak</td>
                                                    <td class="px-5 border-right text-center"></td>
                                                </tr>
                                                <tr class="border">
                                                    <td class="px-5 border-right">Inkontinensia urin</td>
                                                    <td class="px-5 border-right"><input type="checkbox" class="v-bottom lh-0" style="line-height: 13px;"> Tidak ngompol</td>
                                                    <td class="px-5 border-right"><input type="checkbox" class="v-bottom lh-0" style="line-height: 13px;"> Kadang-kadang</td>
                                                    <td class="px-5 border-right"><input type="checkbox" class="v-bottom lh-0" style="line-height: 13px;"> Sering</td>
                                                    <td class="px-5 border-right"><input type="checkbox" class="v-bottom lh-0" style="line-height: 13px;"> Seing (alvi+urine)</td>
                                                    <td class="px-5 border-right text-center"></td>
                                                </tr>
                                                <tr class="border">
                                                    <td class="border-right px-5" colspan="5">
                                                        <span style="padding-right: 49px;">Hasil Scoring</span>
                                                        <span style="padding-right: 20px;">
                                                            <input type="checkbox" class="v-bottom lh-0" style="line-height: 13px;"> <span class="bold"> &lt; 12 (resiko besar)</span>
                                                        </span>
                                                        <span style="padding-right: 20px;">
                                                            <input type="checkbox" class="v-bottom lh-0" style="line-height: 13px;"> <span class="bold"> &lt; 12-15 (resiko sedang)</span>
                                                        </span>
                                                        <input type="checkbox" class="v-bottom lh-0" style="line-height: 13px;"> <span class="bold"> &lt; 16-20 (resiko kecil)</span>
                                                    </td>
                                                    <td class="border-right text-center"></td>
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
                                                    <input type="checkbox" class="v-bottom lh-0" style="padding-left: 19px;"> tidak
                                                    <input type="checkbox" class="v-bottom lh-0"> ada
                                                    <span style="padding-left: 20px;">derajat</span>
                                                    <input type="checkbox" class="v-bottom lh-0"> I
                                                    <input type="checkbox" class="v-bottom lh-0"> II
                                                    <input type="checkbox" class="v-bottom lh-0"> III
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
                                                <td>
                                                    <input type="checkbox" class="v-bottom lh-0"> tidak
                                                    <input type="checkbox" class="v-bottom lh-0"> ya, pernah ...bulan... tahun yang lalu
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
                                                    <input type="checkbox" class="v-bottom lh-0" style="padding-left: 19px;"> tidak
                                                    <input type="checkbox" class="v-bottom lh-0"> ya, di...
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
                                                    <input type="checkbox" class="v-bottom lh-0" style="padding-left: 19px;"> tidak
                                                    <input type="checkbox" class="v-bottom lh-0"> ya
                                                    <input type="checkbox" class="v-bottom lh-0" style="padding-left: 41.5px;"> tongkat
                                                    <input type="checkbox" class="v-bottom lh-0"> walker
                                                    <input type="checkbox" class="v-bottom lh-0"> kursi roda
                                                    <input type="checkbox" class="v-bottom lh-0"> komodo
                                                    <input type="checkbox" class="v-bottom lh-0"> lainnya

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
                                                    <input type="checkbox" class="v-bottom lh-0" style="padding-left: 19px;"> baik
                                                    <input type="checkbox" class="v-bottom lh-0" style="padding-left:3.5px;"> sering lupa
                                                    <input type="checkbox" class="v-bottom lh-0"> tidak ingat
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
                            1
                        </td>
                    </tr>
                    <tr class="">
                        <td></td>
                        <td><span class="bold" style="text-decoration: underline;">UNTUK OBSTETRI / KEHAMILAN / NIFAS</span></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>