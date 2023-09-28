<?php
function compare($a, $b)
{
    if ($a == $b) return 'checked';
}
function compareC($a)
{
    if ($a == 'on') return 'checked';
}
function compareC2($a, $b)
{
    if ($a != '') return $b;
}

function cekStrKosong($a)
{
    return $a != '' ? '<span class="underlinee">' . $a . '</span>' : '.....................';
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
function compareYesNo($a)
{
    if ($a == 'Ya') return 'checked';
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
    <table class="border" style="width: 100%">
        <tr class="border">
            <td>
                <h2 class="text-center py-10">REKAMAN ASUHAN KEPERAWATAN KAMAR BEDAH</h2>
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
                        <td>Tgl. Lahir/Umur</td>
                        <td style="padding-left: 10px;">: <?= cekTgl($tgllahir); ?> / <?= $umur; ?> tahun</td>
                    </tr>
                    <tr>
                        <td>NIK</td>
                        <td style="padding-left: 10px;">: <?= $nik; ?></td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr style="font-size: 12px;">
            <td class="px-5">
                Diagnosa pre operasi : <?= $pre; ?> Diagnosa post operasi : <?= $post; ?>
            </td>
        </tr>
        <tr style="font-size: 12px;">
            <td class="px-5">
                Tindakan Operasi: <?= $tindakan_operasi; ?> Jenis Anestesi : <?= $jenis_anestesi; ?>
            </td>
        </tr>
        <tr style="font-size: 12px;">
            <td>
                <table class="w-100">
                    <tr class="px-5 border-top">
                        <td colspan="3" class="border-right px-5" style="width: 650px;">Pengkajian <br>Data Subyektif (<?= $jam1 . ' ' . $nama1; ?>)</td>
                        <td class="px-5 py-5 text-center bold" style="line-height: 14px;">Jam, TT & Nm Terang</td>
                    </tr>
                    <tr class="px-5 border-top">
                        <td colspan="3" class="border-right px-5" style="width: 650px;">
                            <input type="checkbox" <?= compareC($s1) ?> class="lh-0 v-bottom mb-2"> Pasien/klg banyak bertanya ttg keberhasilan operasi & kemungkinan kegagalan dari operasi
                        </td>
                        <td class="px-5 py-5 text-center" style="line-height: 14px;"></td>
                    </tr>
                    <tr class="px-5 border-top">
                        <td colspan="3" class="border-right px-5" style="width: 650px;">
                            <input type="checkbox" <?= compareC($s2) ?> class="lh-0 v-bottom mb-2"> Pasien/klg banyak tanya ttg prosedur operasi
                            <input type="checkbox" <?= compareC($s3) ?> class="lh-0 v-bottom mb-2"> Pasien mengatakan takut kematian
                            <input type="checkbox" <?= compareC($s4) ?> class="lh-0 v-bottom mb-2"> Pasien mengatakan nyeri
                        </td>
                        <td class="px-5 py-5 text-center" style="line-height: 14px;"></td>
                    </tr>
                    <tr class="px-5 border-top">
                        <td colspan="3" class="border-right px-5" style="width: 650px;">
                            <input type="checkbox" <?= compareC($s5) ?> class="lh-0 v-bottom mb-2"> Pasien mengatakan mual
                            <input type="checkbox" <?= compareC($s6) ?> class="lh-0 v-bottom mb-2"> Pasien mengatakan sesak nafas
                            <input type="checkbox" <?= compareC($s7) ?> class="lh-0 v-bottom mb-2"> Pasien mengatakan dingin
                            <input type="checkbox" <?= compareC2($s1_lain, 'checked') ?> class="lh-0 v-bottom mb-2"> <?= compareC2($s1_lain, $s1_lain) ?>
                        </td>
                        <td class="px-5 py-5 text-center" style="line-height: 14px;"></td>
                    </tr>
                    <tr class="px-5 border-top">
                        <td colspan="3" class="border-right px-5" style="width: 650px;">
                            <input type="checkbox" <?= compareC2($s2_lain, 'checked') ?> class="lh-0 v-bottom mb-2"> <?= cekStrKosong(compareC2($s2_lain, $s2_lain)) ?>
                            <input type="checkbox" <?= compareC2($s3_lain, 'checked') ?> class="lh-0 v-bottom mb-2"> <?= cekStrKosong(compareC2($s3_lain, $s3_lain)) ?>
                            <input type="checkbox" <?= compareC2($s4_lain, 'checked') ?> class="lh-0 v-bottom mb-2"> <?= cekStrKosong(compareC2($s4_lain, $s4_lain)) ?>
                        </td>
                        <td class="px-5 py-5 text-center" style="line-height: 14px;"></td>
                    </tr>
                    <tr class="px-5 border-top">
                        <td colspan="3" class="border-right px-5" style="width: 650px;">
                            Data Obyektif (<?= $jam2 . ' ' . $nama2; ?>)
                        </td>
                        <td class="px-5 py-5 text-center" style="line-height: 14px;"></td>
                    </tr>
                    <tr class="px-5 border-top">
                        <td colspan="3" class="border-right px-5" style="width: 650px;">
                            <input type="checkbox" <?= compareC($o1) ?> class="lh-0 v-bottom mb-2"> Gelang identitas
                            <input type="checkbox" <?= compareC($o2) ?> class="lh-0 v-bottom mb-2"> Informetd Consent
                            <input type="checkbox" <?= compareC($o3) ?> class="lh-0 v-bottom mb-2"> Lengkap
                            <input type="checkbox" <?= compareC($o4) ?> class="lh-0 v-bottom mb-2"> Tidak Lengkap
                            <input type="checkbox" <?= compareC($o5) ?> class="lh-0 v-bottom mb-2"> Hasil lab
                            <input type="checkbox" <?= compareC($o6) ?> class="lh-0 v-bottom mb-2"> Hasil Foto
                            <input type="checkbox" <?= compareC($o7) ?> class="lh-0 v-bottom mb-2"> Persediaan darah
                        </td>
                        <td class="px-5 py-5 text-center" style="line-height: 14px;"></td>
                    </tr>
                    <tr class="px-5 border-top">
                        <td colspan="3" class="border-right px-5" style="width: 650px;">
                            <input type="checkbox" <?= compareC($o8) ?> class="lh-0 v-bottom mb-2"> Lavement
                            <input type="checkbox" <?= compareC($o9) ?> class="lh-0 v-bottom mb-2"> Puasa
                            <input type="checkbox" <?= compareC($o10) ?> class="lh-0 v-bottom mb-2"> Mandi keramas
                            <input type="checkbox" <?= compareC($o11) ?> class="lh-0 v-bottom mb-2"> Oral Hygiene
                            <input type="checkbox" <?= compareC($o12) ?> class="lh-0 v-bottom mb-2"> Kebersihan kuku
                            <input type="checkbox" <?= compareC($o13) ?> class="lh-0 v-bottom mb-2"> Persiapan kulit
                            <input type="checkbox" <?= compareC($o14) ?> class="lh-0 v-bottom mb-2"> Gelang
                            <input type="checkbox" <?= compareC($o15) ?> class="lh-0 v-bottom mb-2"> Kalung
                        </td>
                        <td class="px-5 py-5 text-center" style="line-height: 14px;"></td>
                    </tr>
                    <tr class="px-5 border-top">
                        <td colspan="3" class="border-right px-5" style="width: 650px;">
                            <input type="checkbox" <?= compareC($o16) ?> class="lh-0 v-bottom mb-2"> Cincin
                            <input type="checkbox" <?= compareC($o17) ?> class="lh-0 v-bottom mb-2"> Gigi palsu
                            <input type="checkbox" <?= compareC($o18) ?> class="lh-0 v-bottom mb-2"> Soft lens
                            <input type="checkbox" <?= compareC($o19) ?> class="lh-0 v-bottom mb-2"> Make Up
                            <input type="checkbox" <?= compareC($o20) ?> class="lh-0 v-bottom mb-2"> Lipstik
                            <input type="checkbox" <?= compareC($o21) ?> class="lh-0 v-bottom mb-2"> Kitek kuku
                            <input type="checkbox" <?= compareC($o22) ?> class="lh-0 v-bottom mb-2"> Eyes Shadow
                            <input type="checkbox" <?= compareC($o23) ?> class="lh-0 v-bottom mb-2"> Penyakit Jantung
                            <input type="checkbox" <?= compareC($o24) ?> class="lh-0 v-bottom mb-2"> CKD
                        </td>
                        <td class="px-5 py-5 text-center" style="line-height: 14px;"></td>
                    </tr>
                    <tr class="px-5 border-top">
                        <td colspan="3" class="border-right px-5" style="width: 650px;">
                            <input type="checkbox" <?= compareC($o25) ?> class="lh-0 v-bottom mb-2"> TBC Paru
                            <input type="checkbox" <?= compareC($o26) ?> class="lh-0 v-bottom mb-2"> Asma
                            <input type="checkbox" <?= compareC($o27) ?> class="lh-0 v-bottom mb-2"> HIV
                            <input type="checkbox" <?= compareC($o28) ?> class="lh-0 v-bottom mb-2"> Hepatitis B/C
                            <input type="checkbox" <?= compareC($o29) ?> class="lh-0 v-bottom mb-2"> DM
                            <input type="checkbox" <?= compareC($o30) ?> class="lh-0 v-bottom mb-2"> Hipertensi
                        </td>
                        <td class="px-5 py-5 text-center" style="line-height: 14px;"></td>
                    </tr>
                    <tr class="px-5 border-top">
                        <td colspan="3" class="border-right px-5" style="width: 650px;">
                            <span class="bold">Premidikassi</span> 1. <?= cekStrKosong($premidikassi) ?> Jam<?= cekStrKosong($jam_premidikassi) ?> 2. <?= cekStrKosong($premidikassi2) ?> Jam<?= cekStrKosong($jam_premidikassi2) ?> Propolaksis<?= cekStrKosong($propolaksis) ?> Jam<?= cekStrKosong($jam_propolaksis) ?>
                        </td>
                        <td class="px-5 py-5 text-center" style="line-height: 14px;"></td>
                    </tr>
                    <tr class="px-5 border-top">
                        <td colspan="3" class="border-right px-5" style="width: 650px;">
                            <input type="checkbox" <?= compareC($p1) ?> class="lh-0 v-bottom mb-2"> Tingkat kesadaran
                            <input type="checkbox" <?= compareC($p2) ?> class="lh-0 v-bottom mb-2"> Kompos mentis
                            <input type="checkbox" <?= compareC($p3) ?> class="lh-0 v-bottom mb-2"> Apatis
                            <input type="checkbox" <?= compareC($p4) ?> class="lh-0 v-bottom mb-2"> Somnolens
                            <input type="checkbox" <?= compareC($p5) ?> class="lh-0 v-bottom mb-2"> Delirium
                            <input type="checkbox" <?= compareC($p6) ?> class="lh-0 v-bottom mb-2"> Sopor
                            <input type="checkbox" <?= compareC($p7) ?> class="lh-0 v-bottom mb-2"> Koma
                        </td>
                        <td class="px-5 py-5 text-center" style="line-height: 14px;"></td>
                    </tr>
                    <tr class="px-5 border-top">
                        <td colspan="3" class="border-right px-5" style="width: 650px;">
                            <input type="checkbox" <?= compareC($p8) ?> class="lh-0 v-bottom mb-2"> Pasien kelihatan tegang
                            <input type="checkbox" <?= compareC($p9) ?> class="lh-0 v-bottom mb-2"> Kulit teraba dingin
                            <input type="checkbox" <?= compareC($p10) ?> class="lh-0 v-bottom mb-2"> Pasien menangis dan tampak asing
                            <input type="checkbox" <?= compareC($p11) ?> class="lh-0 v-bottom mb-2"> Perubahan suara
                        </td>
                        <td class="px-5 py-5 text-center" style="line-height: 14px;"></td>
                    </tr>
                    <tr class="px-5 border-top">
                        <td colspan="3" class="border-right px-5" style="width: 650px;">
                            <input type="checkbox" <?= compareC($p12) ?> class="lh-0 v-bottom mb-2"> Peningkatan frekuensi pernafasan dan jantung
                            <input type="checkbox" <?= compareC($p13) ?> class="lh-0 v-bottom mb-2"> Tremor atau gemetar
                            <input type="checkbox" <?= compareC($p14) ?> class="lh-0 v-bottom mb-2"> Pandangan kosong
                            <input type="checkbox" <?= compareC($p15) ?> class="lh-0 v-bottom mb-2"> Menggigil
                        </td>
                        <td class="px-5 py-5 text-center" style="line-height: 14px;"></td>
                    </tr>
                    <tr class="px-5 border-top">
                        <td colspan="3" class="border-right px-5" style="width: 650px;">
                            <input type="checkbox" <?= compareC($p16) ?> class="lh-0 v-bottom mb-2"> Pucat
                            <input type="checkbox" <?= compareC2($p17, 'checked') ?> class="lh-0 v-bottom mb-2"> Pasien mengatakan nyeri skala <?= compareC2($p17, $p17) ?>
                            <input type="checkbox" <?= compareC2($p1_lain, 'checked') ?> class="lh-0 v-bottom mb-2"> <?= cekStrKosong(compareC2($p1_lain, $p1_lain)) ?>
                            <input type="checkbox" <?= compareC2($p2_lain, 'checked') ?> class="lh-0 v-bottom mb-2"> <?= cekStrKosong(compareC2($p2_lain, $p2_lain)) ?>
                        </td>
                        <td class="px-5 py-5 text-center" style="line-height: 14px;"></td>
                    </tr>
                    <tr class="px-5 border-top">
                        <td colspan="3" class="border-right px-5" style="width: 650px;">
                            <input type="checkbox" <?= compareC($p18) ?> class="lh-0 v-bottom mb-2"> Posisi pronasi
                            <input type="checkbox" <?= compareC($p19) ?> class="lh-0 v-bottom mb-2"> Supinal
                            <input type="checkbox" <?= compareC($p20) ?> class="lh-0 v-bottom mb-2"> Dorsal recumbent
                            <input type="checkbox" <?= compareC($p21) ?> class="lh-0 v-bottom mb-2"> Litholomy
                            <input type="checkbox" <?= compareC($p22) ?> class="lh-0 v-bottom mb-2"> Pasien tidak sadar G. Anestesi
                        </td>
                        <td class="px-5 py-5 text-center" style="line-height: 14px;"></td>
                    </tr>
                    <tr class="px-5 border-top">
                        <td colspan="3" class="border-right px-5" style="width: 650px;">
                            <input type="checkbox" <?= compareC($p23) ?> class="lh-0 v-bottom mb-2"> Sekresi lendir meningkat
                            <input type="checkbox" <?= compareC($p24) ?> class="lh-0 v-bottom mb-2"> Tdk ada reflek batuk
                            <input type="checkbox" <?= compareC($p25) ?> class="lh-0 v-bottom mb-2"> Suara nafas ngorok
                            <input type="checkbox" <?= compareC($p26) ?> class="lh-0 v-bottom mb-2"> Sianosis
                        </td>
                        <td class="px-5 py-5 text-center" style="line-height: 14px;"></td>
                    </tr>
                    <tr class="px-5 border-top">
                        <td colspan="3" class="border-right px-5" style="width: 650px;">
                            <input type="checkbox" <?= compareC2($td, 'checked') ?> class="lh-0 v-bottom mb-2"> TD: <?= $td; ?> mmHg
                            <input type="checkbox" <?= compareC2($c, 'checked') ?> class="lh-0 v-bottom mb-2"> T: <?= $c; ?> °C
                            <input type="checkbox" <?= compareC2($rp, 'checked') ?> class="lh-0 v-bottom mb-2"> RP: <?= $rp; ?> x/mnt
                            <input type="checkbox" <?= compareC2($nadi, 'checked') ?> class="lh-0 v-bottom mb-2"> Nadi <?= $nadi; ?> x/min
                            <input type="checkbox" <?= compareC2($luka, 'checked') ?> class="lh-0 v-bottom mb-2"> Lebar luka <?= $luka; ?> Cm
                            <input type="checkbox" <?= compareC2($pendarahan, 'checked') ?> class="lh-0 v-bottom mb-2"> Pendarahan <?= $pendarahan; ?> cc
                        </td>
                        <td class="px-5 py-5 text-center" style="line-height: 14px;"></td>
                    </tr>
                    <tr class="px-5 border-top">
                        <td colspan="3" class="border-right px-5" style="width: 650px;">
                            <input type="checkbox" <?= compareC2($urine, 'checked') ?> class="lh-0 v-bottom mb-2"> Urine <?= $urine; ?> cc
                            <input type="checkbox" <?= compareC2($lama_op, 'checked') ?> class="lh-0 v-bottom mb-2"> Lama operasi : <?= $lama_op; ?> jam
                        </td>
                        <td class="px-5 py-5 text-center" style="line-height: 14px;"></td>
                    </tr>
                    <tr class="px-5 border-top">
                        <td colspan="3" class="border-right px-5" style="width: 650px;">
                            <input type="checkbox" <?= compareC($p27) ?> class="lh-0 v-bottom mb-2"> Pasien dalam proses pembedahan dg menggunakan alat couter
                            <input type="checkbox" <?= compareC($p28) ?> class="lh-0 v-bottom mb-2"> Dilakukan pemasangan netral elektro couter
                        </td>
                        <td class="px-5 py-5 text-center" style="line-height: 14px;"></td>
                    </tr>
                    <tr class="px-5 border-top">
                        <td colspan="3" class="border-right px-5" style="width: 650px;">
                            <input type="checkbox" <?= compareC($p29) ?> class="lh-0 v-bottom mb-2"> Pasien tidak sadar reflek motorik (-)
                            <input type="checkbox" <?= compareC($p30) ?> class="lh-0 v-bottom mb-2"> Gerakan berlebihan
                            <input type="checkbox" <?= compareC($p31) ?> class="lh-0 v-bottom mb-2"> Sekresi lendir berlebihan
                            <input type="checkbox" <?= compareC($p32) ?> class="lh-0 v-bottom mb-2"> Akral dingin
                        </td>
                        <td class="px-5 py-5 text-center" style="line-height: 14px;"></td>
                    </tr>
                    <tr class="px-5 border-top">
                        <td colspan="3" class="border-right px-5" style="width: 650px;">
                            <table class="w-100">
                                <tr>
                                    <td class="border-right">
                                        <input type="checkbox" <?= compareYesNo($ttv) ?> class="lh-0 v-bottom mb-2"> TTV pre operasi
                                    </td>
                                    <td class="border-right px-5">Tensi <?= $td2; ?> mmHg</td>
                                    <td class="border-right px-5">Nadi <?= $nadi2; ?> x/mnt</td>
                                    <td class="border-right px-5">Nafas <?= $nafas; ?> x/mnt</td>
                                    <td class="px-5">Suhu <?= $suhu; ?> °C</td>
                                </tr>
                            </table>

                        </td>
                        <td class="px-5 py-5 text-center" style="line-height: 14px;"></td>
                    </tr>
                    <tr class="border-top">
                        <td colspan="3" class="border-right " style="width: 650px;">
                            <table class="w-100">
                                <tr>
                                    <td class="border-right bold px-5" colspan="2">
                                        Adrete Score (<?= $jam3 . ' ' . $nama3; ?>)
                                    </td>
                                    <td class="px-5 text-center" style="width: 50px;">Score</td>
                                </tr>
                                <tr class="border-top">
                                    <td class="border-right px-5">Aktifitas mampu gerak dg perintah</td>
                                    <td class="border-right px-5">
                                        <input type="checkbox" <?= compare($soal1, '4 ekstremitas') ?> class="lh-0 v-bottom mb-2"> 4 ekstremitas
                                        <input type="checkbox" <?= compare($soal1, '2 ekstremitas') ?> class="lh-0 v-bottom mb-2"> 2 ekstremitas
                                        <input type="checkbox" <?= compare($soal1, 'tidak mampu gerak ekstremitas') ?> class="lh-0 v-bottom mb-2"> tidak mampu gerak ekstremitas
                                    </td>
                                    <td class="text-center"><?= $score1; ?></td>
                                </tr>
                                <tr class="border-top">
                                    <td class="border-right px-5">Respirasi</td>
                                    <td class="border-right px-5">
                                        <input type="checkbox" <?= compare($soal2, 'Mampu nafas dlm & Batuk') ?> class="lh-0 v-bottom mb-2"> Mampu nafas dlm & Batuk
                                        <input type="checkbox" <?= compare($soal2, 'Dyspneu, usaha nafas terbatas') ?> class="lh-0 v-bottom mb-2"> Dyspneu, usaha nafas terbatas
                                        <input type="checkbox" <?= compare($soal2, 'Apneu') ?> class="lh-0 v-bottom mb-2"> Apneu
                                    </td>
                                    <td class="text-center"><?= $score2; ?></td>
                                </tr>
                                <tr class="border-top">
                                    <td class="border-right px-5">Sirkulasi TD ± dari pre operasi</td>
                                    <td class="border-right px-5">
                                        <input type="checkbox" <?= compare($soal3, 'TD ± 20 mmHg') ?> class="lh-0 v-bottom mb-2"> TD ± 20 mmHg
                                        <input type="checkbox" <?= compare($soal3, 'TD ± 20 - 50 mmHg') ?> class="lh-0 v-bottom mb-2"> TD ± 20 - 50 mmHg
                                        <input type="checkbox" <?= compare($soal3, 'TD > 50 mmHg') ?> class="lh-0 v-bottom mb-2"> TD > 50 mmHg
                                    </td>
                                    <td class="text-center"><?= $score3; ?></td>
                                </tr>
                                <tr class="border-top">
                                    <td class="border-right px-5">Kesadaran</td>
                                    <td class="border-right px-5">
                                        <input type="checkbox" <?= compare($soal4, 'Sadar penuh') ?> class="lh-0 v-bottom mb-2"> Sadar penuh
                                        <input type="checkbox" <?= compare($soal4, 'Bangun jika dipanggil') ?> class="lh-0 v-bottom mb-2"> Bangun jika dipanggil
                                        <input type="checkbox" <?= compare($soal4, 'Tidak ada respon') ?> class="lh-0 v-bottom mb-2"> Tidak ada respon
                                    </td>
                                    <td class="text-center"><?= $score4; ?></td>
                                </tr>
                                <tr class="border-top">
                                    <td class="border-right px-5">Warna Kulit</td>
                                    <td class="border-right px-5">
                                        <input type="checkbox" <?= compare($soal5, 'Kemerahan') ?> class="lh-0 v-bottom mb-2"> Kemerahan
                                        <input type="checkbox" <?= compare($soal5, 'Pucat') ?> class="lh-0 v-bottom mb-2"> Pucat
                                        <input type="checkbox" <?= compare($soal5, 'Sianosis') ?> class="lh-0 v-bottom mb-2"> Sianosis
                                    </td>
                                    <td class="text-center"><?= $score5; ?></td>
                                </tr>
                                <tr class="border-top">
                                    <td class="border-right bold px-5" colspan="2">
                                        Steward Score
                                    </td>
                                    <td class="px-5 text-center px-5" style="width: 50px;"></td>
                                </tr>
                                <tr class="border-top">
                                    <td class="border-right px-5">Aktifitas</td>
                                    <td class="border-right px-5">
                                        <input type="checkbox" <?= compare($soal6, 'Bangun') ?> class="lh-0 v-bottom mb-2"> Bangun
                                        <input type="checkbox" <?= compare($soal6, 'Respon terhadap rangsang') ?> class="lh-0 v-bottom mb-2"> Respon terhadap rangsang
                                        <input type="checkbox" <?= compare($soal6, 'Tidak ada respon') ?> class="lh-0 v-bottom mb-2"> Tidak ada respon
                                    </td>
                                    <td class="text-center"><?= $score6; ?></td>
                                </tr>
                                <tr class="border-top">
                                    <td class="border-right px-5">Respirasi</td>
                                    <td class="border-right px-5">
                                        <input type="checkbox" <?= compare($soal7, 'Batuk / menangis') ?> class="lh-0 v-bottom mb-2"> Batuk / menangis
                                        <input type="checkbox" <?= compare($soal7, 'Pertahankan jalan nafas') ?> class="lh-0 v-bottom mb-2"> Pertahankan jalan nafas
                                        <input type="checkbox" <?= compare($soal7, 'Tidak ada respon') ?> class="lh-0 v-bottom mb-2"> Tidak ada respon
                                    </td>
                                    <td class="text-center"><?= $score7; ?></td>
                                </tr>
                                <tr class="border-top">
                                    <td class="border-right px-5">Motorik</td>
                                    <td class="border-right px-5">
                                        <input type="checkbox" <?= compare($soal8, 'Gerak bertujuan') ?> class="lh-0 v-bottom mb-2"> Gerak bertujuan
                                        <input type="checkbox" <?= compare($soal8, 'Gerak tanpa tujuan') ?> class="lh-0 v-bottom mb-2"> Gerak tanpa tujuan
                                        <input type="checkbox" <?= compare($soal8, 'Tidak ada gerak') ?> class="lh-0 v-bottom mb-2"> Tidak ada gerak
                                    </td>
                                    <td class="text-center"><?= $score8; ?></td>
                                </tr>
                                <tr class="border-top">
                                    <td class="border-right bold px-5" colspan="2">
                                        Bromage Score
                                    </td>
                                    <td class="px-5 text-center px-5" style="width: 50px;"></td>
                                </tr>
                                <tr class="border-top">
                                    <td class="border-right px-5" colspan="2">
                                        <input type="checkbox" <?= compare($soal9, 'Gerakan penuh ditungkai') ?> class="lh-0 v-bottom mb-2"> Gerakan penuh ditungkai
                                        <input type="checkbox" <?= compare($soal9, 'Tdk mampu ekstensi tungkai') ?> class="lh-0 v-bottom mb-2"> Tdk mampu ekstensi tungkai
                                        <input type="checkbox" <?= compare($soal9, 'Tdk mampu fleksi lutut') ?> class="lh-0 v-bottom mb-2"> Tdk mampu fleksi lutut
                                        <input type="checkbox" <?= compare($soal9, 'Tdk mampu fleksi pergelangan kaki') ?> class="lh-0 v-bottom mb-2"> Tdk mampu fleksi pergelangan kaki
                                    </td>
                                    <td class="text-center"><?= $score9; ?></td>
                                </tr>
                            </table>
                        </td>
                        <td class="v-top">
                            <table class="w-100 text-center">
                                <tr class="border-bottom">
                                    <td style="line-height: 14.3px;opacity: 0;">100</td>
                                </tr>
                                <tr class="border-bottom">
                                    <td><span style="opacity: 0;">12</span></td>
                                </tr>
                                <tr class="border-bottom">
                                    <td><span style="opacity: 0;">12</span></td>
                                </tr>
                                <tr class="border-bottom">
                                    <td><span style="opacity: 0;">12</span></td>
                                </tr>
                                <tr class="border-bottom">
                                    <td><span style="opacity: 0;">12</span></td>
                                </tr>
                                <tr class="border-bottom">
                                    <td><span style="opacity: 0;">12</span></td>
                                </tr>
                                <tr class="border-bottom">
                                    <td><span style="opacity: 0;">12</span></td>
                                </tr>
                                <tr class="border-bottom">
                                    <td><span style="opacity: 0;">12</span></td>
                                </tr>
                                <tr class="border-bottom">
                                    <td><span style="opacity: 0;">12</span></td>
                                </tr>
                                <tr class="border-bottom">
                                    <td><span style="opacity: 0;">12</span></td>
                                </tr>
                                <tr class="border-bottom">
                                    <td><span style="opacity: 0;">12</span></td>
                                </tr>
                                <tr>
                                    <td><span style="opacity: 0;">12</span></td>
                                </tr>


                            </table>
                        </td>
                    </tr>

                    <tr class="border-top">
                        <td class="bold px-5 border-right">Diagnosa Keperawatan</td>
                        <td class="bold py-5 px-5 border-right" style="width: 200px;">Rencana Tindakan Keperawatan Tujuan (Setelah dilakukan tindakan)</td>
                        <td class="bold px-5 border-right text-center" style="width: 70px;">Target Waktu</td>
                        <td class="bold px-5 text-center">Jam, TT & Nm Terang</td>
                    </tr>
                    <tr class="border-top">
                        <td class="px-5 border-right">
                            <input type="checkbox" <?= compareC($d1) ?> class="lh-0 v-bottom mb-2"> Takut b.d. kurangnya pengetahuan tentang jalannya operasi/lingkungan asing
                        </td>
                        <td class="px-5 border-right">
                            <input type="checkbox" <?= compareC($r1) ?> class="lh-0 v-bottom mb-2"> Takut pasien/klg hilang/berkurang
                        </td>
                        <td class="px-5 border-right text-center"><?= cekTgl($w1) ?></td>
                        <td class="px-5 text-center"></td>
                    </tr>
                    <tr class="border-top">
                        <td class="px-5 border-right">
                            <input type="checkbox" <?= compareC($d2) ?> class="lh-0 v-bottom mb-2"> Cemas b.d. kegagalan operasi/kecelakaan/kecacatan/kematian
                        </td>
                        <td class="px-5 border-right">
                            <input type="checkbox" <?= compareC($r2) ?> class="lh-0 v-bottom mb-2"> Cemas pasien/klg hilang/berkurang
                        </td>
                        <td class="px-5 border-right text-center"><?= cekTgl($w2) ?></td>
                        <td class="px-5 text-center"></td>
                    </tr>
                    <tr class="border-top">
                        <td class="px-5 border-right">
                            <input type="checkbox" <?= compareC($d3) ?> class="lh-0 v-bottom mb-2"> Resiko cedera : jatuh b.d. Penurunan kesadaran proses pemindahan pasien
                        </td>
                        <td class="px-5 border-right">
                            <input type="checkbox" <?= compareC($r3) ?> class="lh-0 v-bottom mb-2"> Cedera jatuh tidak terjadi
                        </td>
                        <td class="px-5 border-right text-center"><?= cekTgl($w3) ?></td>
                        <td class="px-5 text-center"></td>
                    </tr>
                    <tr class="border-top">
                        <td class="px-5 border-right">
                            <input type="checkbox" <?= compareC($d4) ?> class="lh-0 v-bottom mb-2"> Resti inefektif bersihan jalan nafas b.d. akumilasi sekret berlebihan
                        </td>
                        <td class="px-5 border-right">
                            <input type="checkbox" <?= compareC($r4) ?> class="lh-0 v-bottom mb-2"> Inefektif bersihan jalan nafas tidak terjadi
                        </td>
                        <td class="px-5 border-right text-center"><?= cekTgl($w4) ?></td>
                        <td class="px-5 text-center"></td>
                    </tr>
                    <tr class="border-top">
                        <td class="px-5 border-right">
                            <input type="checkbox" <?= compareC($d5) ?> class="lh-0 v-bottom mb-2"> Resti aspirasi b.d. menurunnya tidak adanya reflek batuk/tidak jatuh
                        </td>
                        <td class="px-5 border-right">
                            <input type="checkbox" <?= compareC($r5) ?> class="lh-0 v-bottom mb-2"> Aspirasi tidak terjadi
                        </td>
                        <td class="px-5 border-right text-center"><?= cekTgl($w5) ?></td>
                        <td class="px-5 text-center"></td>
                    </tr>
                    <tr class="border-top">
                        <td class="px-5 border-right">
                            <input type="checkbox" <?= compareC($d6) ?> class="lh-0 v-bottom mb-2"> Resti infeksi b.d. Adanya luka sayat operasi
                        </td>
                        <td class="px-5 border-right">
                            <input type="checkbox" <?= compareC($r6) ?> class="lh-0 v-bottom mb-2"> Resti infeksi dpt diminimalisir
                        </td>
                        <td class="px-5 border-right text-center"><?= cekTgl($w6) ?></td>
                        <td class="px-5 text-center"></td>
                    </tr>
                    <tr class="border-top">
                        <td class="px-5 border-right">
                            <input type="checkbox" <?= compareC($d7) ?> class="lh-0 v-bottom mb-2"> Resti g3 keseimbangan cairan & elektrolit b.d. perdarahan/terapi cairan yg tdk adekuat
                        </td>
                        <td class="px-5 border-right">
                            <input type="checkbox" <?= compareC($r7) ?> class="lh-0 v-bottom mb-2"> Resti g3 keseimbangan cairan tidak terjadi
                        </td>
                        <td class="px-5 border-right text-center"><?= cekTgl($w7) ?></td>
                        <td class="px-5 text-center"></td>
                    </tr>
                    <tr class="border-top">
                        <td class="px-5 border-right">
                            <input type="checkbox" <?= compareC($d8) ?> class="lh-0 v-bottom mb-2"> Resti terjadi combustio b.d. netral couter yg tdk adekuat
                        </td>
                        <td class="px-5 border-right">
                            <input type="checkbox" <?= compareC($r8) ?> class="lh-0 v-bottom mb-2"> Resti combustion tidak terjadi
                        </td>
                        <td class="px-5 border-right text-center"><?= cekTgl($w8) ?></td>
                        <td class="px-5 text-center"></td>
                    </tr>
                    <tr class="border-top">
                        <td class="px-5 border-right">
                            <input type="checkbox" <?= compareC($d9) ?> class="lh-0 v-bottom mb-2"> Resti hipotermi b.d. pemanjanan lingkungan, dehidrasi
                        </td>
                        <td class="px-5 border-right">
                            <input type="checkbox" <?= compareC($r9) ?> class="lh-0 v-bottom mb-2"> G3 keseimbangan cairan & elektrolit tdk terjadi
                        </td>
                        <td class="px-5 border-right text-center"><?= cekTgl($w9) ?></td>
                        <td class="px-5 text-center"></td>
                    </tr>
                    <tr class="border-top">
                        <td class="px-5 border-right">
                            <input type="checkbox" <?= compareC($d10) ?> class="lh-0 v-bottom mb-2"> Resti tjd aberasi kulit b.d. pemindahan pasien yg tdk adekuat
                        </td>
                        <td class="px-5 border-right">
                            <input type="checkbox" <?= compareC($r10) ?> class="lh-0 v-bottom mb-2"> Resti tjd aberasi kulit
                        </td>
                        <td class="px-5 border-right text-center"><?= cekTgl($w10) ?></td>
                        <td class="px-5 text-center"></td>
                    </tr>
                    <tr class="border-top">
                        <td class="px-5 border-right">
                            <input type="checkbox" <?= compareC($d11) ?> class="lh-0 v-bottom mb-2"> Resti cedera b.d. tercabutnya drainage
                        </td>
                        <td class="px-5 border-right">
                            <input type="checkbox" <?= compareC($r11) ?> class="lh-0 v-bottom mb-2"> Resti tercabutnya drainage tdk terjadi
                        </td>
                        <td class="px-5 border-right text-center"><?= cekTgl($w11) ?></td>
                        <td class="px-5 text-center"></td>
                    </tr>
                    <tr class="border-top">
                        <td class="px-5 border-right">
                            <input type="checkbox" <?= compareC($d12) ?> class="lh-0 v-bottom mb-2"> Resti cedera b.d. tertinggalnya alat/barang habis pakai
                        </td>
                        <td class="px-5 border-right">
                            <input type="checkbox" <?= compareC($r12) ?> class="lh-0 v-bottom mb-2"> Resti tertinggalnya alat/barang habis pakai tdk terjadi
                        </td>
                        <td class="px-5 border-right text-center"><?= cekTgl($w12) ?></td>
                        <td class="px-5 text-center"></td>
                    </tr>
                    <tr class="border-top">
                        <td class="px-5 border-right">
                            <input type="checkbox" <?= compareC($d13) ?> class="lh-0 v-bottom mb-2"> Nyeri b.d. luka operasi / traksi karakter
                        </td>
                        <td class="px-5 border-right">
                            <input type="checkbox" <?= compareC($r13) ?> class="lh-0 v-bottom mb-2"> Nyeri hilang/berkurang
                        </td>
                        <td class="px-5 border-right text-center"><?= cekTgl($w13) ?></td>
                        <td class="px-5 text-center"></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>