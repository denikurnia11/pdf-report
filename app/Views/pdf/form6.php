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
    </style>
</head>

<body>
    <table class="border" style="width: 100%">
        <tr class="border">
            <td colspan="2" style="padding-top: 5px;padding-bottom: 5px;">
                <h3 class="text-center">ASSEMEN PRA ANESTESI</h3>
            </td>
        </tr>
        <!-- Biodata -->
        <tr class="border-bottom" style="font-size: 12px;">
            <td style="padding-right: 100px;" class="border-right">
                <table class="py-5" style="font-weight: bold;margin-left: 15px;">
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
            <td>
                <p class="text-center">Alergi Obat :</p>
                <table class="py-5" style="font-weight: normal;margin-left: 5px;">
                    <tr>
                        <td>1</td>
                        <td style="padding-left: 10px;">: <?= $alergi_obat1 ?></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td style="padding-left: 10px;">: <?= $alergi_obat2 ?></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td style="padding-left: 10px;">: <?= $alergi_obat3 ?></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td style="padding-left: 10px;">: <?= $alergi_obat4 ?></td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr style="font-size: 12px;">
            <td colspan="2">
                <table>
                    <tr>
                        <td class="v-top border-right" style="width: 490px;">
                            <table style="width: 100%;">
                                <tr class="border-bottom ">
                                    <td class="px-5">
                                        Tanggal/ Jam Pemeriksaan : <?= $tgl_pemeriksaan; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-5">
                                        Rencana Tindakan : <?= $rencana_tindakan; ?>
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td class="v-top">
                            <table class="px-5">
                                <tr>
                                    <td>
                                        Tanda - tanda Vital Sebelum Tindakan :
                                    </td>
                                </tr>
                                <tr>
                                    <td>TD : <?= cekStrKosong($td) ?> Nadi : <?= cekStrKosong($nadi) ?></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>BB : <?= cekStrKosong($bb) ?>Kg RR : <?= cekStrKosong($rr) ?></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>TB : <?= cekStrKosong($tb) ?>cm Suhu : <?= cekStrKosong($suhu) ?> C°</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>

        </tr>
        <tr style="font-size: 12px;">
            <td colspan="2">
                <table style="width: 100%;">
                    <tr>
                        <td class="v-top border-top">
                            <table class="px-5">
                                <tr>
                                    <td>
                                        Tanggal Tindakan
                                    </td>
                                    <td>:</td>
                                    <td><?= cekTgl($tgl_tindakan) ?></td>
                                </tr>
                                <tr>
                                    <td>
                                        Operator
                                    </td>
                                    <td>:</td>
                                    <td><?= $operator; ?></td>
                                </tr>
                                <tr>
                                    <td>
                                        Spesialis Anestesi
                                    </td>
                                    <td>:</td>
                                    <td><?= $sa; ?></td>
                                </tr>
                                <tr>
                                    <td>
                                        <input <?= compare($jenis_tindakan, 'ODC') ?> type="checkbox" class="v-bottom"> ODC
                                    </td>
                                    <td> </td>
                                    <td><input <?= compare($jenis_tindakan, 'Rawat Inap') ?> type="checkbox" class="v-bottom"> Rawat Inap</td>
                                </tr>

                            </table>
                        </td>
                        <td class="v-top border-top border-left" style="width: 350px;">
                            <table style="width: 100%;">
                                <tr class="border-bottom ">
                                    <td class="px-5">
                                        Obat yang sedang dikonsumsi : <br>
                                        <input <?= compare($obat_konsumsi, 'Tidak') ?> type="checkbox" class="lh-0"> Tidak ada
                                        <input <?= compare($obat_konsumsi, 'Ada') ?> type="checkbox" class="lh-0"> Ada : <?= cekStrKosong($nama_obat) ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-5">
                                        Riwayat Anestesi : <?= $riwayat_anestesi ?>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr style="font-size: 12px;">
            <td colspan="2">
                <table class="w-100">
                    <tr>
                        <td class="px-5 border-top border-bottom border-right v-top" style="width: 600px;"><?= $jgl; ?><br>
                            <?= $keterangan_jgl; ?></td>
                        <td class="px-5 border-top border-bottom">
                            Anamnesa dari : <br>
                            <input type="checkbox" <?= compare($anamnesa, 'Pasien') ?> class="lh-0"> Pasien <br>
                            <input type="checkbox" <?= compare($anamnesa, 'Keluarga') ?> class="lh-0"> Keluarga <br>
                            <input type="checkbox" <?= compare($anamnesa, 'Wali / Orang tua') ?> class="lh-0"> Wali / Orang tua
                        </td>
                    </tr>
                </table>
            </td>

        </tr>

        <tr style="font-size: 12px;">
            <td colspan="2">
                <table class="w-100">
                    <tr>
                        <td class="bold text-center border-right">Pemeriksaan Fisik</td>
                        <td class="bold text-center border-right border-bottom">DBN</td>
                        <td class="bold text-center border-right border-bottom" style="width: 300px;">Keterangan</td>
                        <td class="bold text-center border-bottom">Pemeriksaan Penunjang</td>
                    </tr>
                    <tr style="font-size: 12px;">
                        <td class="px-5 border-top text-center border-right border-bottom bold">Respirasi</td>
                        <td rowspan="2" class="v-top text-center border-left"><input <?= compareC($respirasi_dbn) ?> type="checkbox" class=""></td>
                        <td rowspan="2" class="v-top border-left px-5 "><?= $keterangan_respirasi; ?></td>
                        <td rowspan="2" class="v-top border-left px-5">Echocardiogram <br> <?= $echocardiogram; ?></td>
                    </tr>
                    <tr style="font-size: 12px;">
                        <td class="px-5" style="padding-bottom: 5px;">
                            <input <?= compareC($asma) ?> type="checkbox" class="v-bottom lh-0"> Asma <br>
                            <input <?= compareC($bronkitis) ?> type="checkbox" class="v-bottom lh-0"> Bronkitis <br>
                            <input <?= compareC($pnemonia) ?> type="checkbox" class="v-bottom lh-0"> Pnemonia <br>
                            <input <?= compareC($tuberkolosis) ?> type="checkbox" class="v-bottom lh-0"> Tuberkolosis
                        </td>
                    </tr>


                    <tr style="font-size: 12px;">
                        <td class="px-5 border-top text-center border-right border-bottom bold">Cardlovascular</td>
                        <td rowspan="2" class="v-top  border-top text-center border-left"><input <?= compareC($card_dbn) ?> type="checkbox" class=""></td>
                        <td rowspan="2" class="v-top  border-top border-left px-5 "><?= $keterangan_card; ?></td>
                        <td rowspan="2" class="v-top border-left px-5">EKG <br><?= $ekg; ?></td>
                    </tr>
                    <tr style="font-size: 12px;">
                        <td class="px-5" style="width: 250px;padding-bottom: 5px;">
                            <table class="w-100">
                                <tr>
                                    <td>
                                        <input <?= compareC($ekg_abnormal) ?> type="checkbox" class="v-bottom lh-0"> EKG Abnormal <br>
                                        <input <?= compareC($angina) ?> type="checkbox" class="v-bottom lh-0"> Angina <br>
                                        <input <?= compareC($chf) ?> type="checkbox" class="v-bottom lh-0"> CHF <br>
                                        <input <?= compareC($disritmia) ?> type="checkbox" class="v-bottom lh-0"> Disritmia
                                    </td>
                                    <td>
                                        <input <?= compareC($hipertensi) ?> type="checkbox" class="v-bottom lh-0"> Hipertensi <br>
                                        <input <?= compareC($murmur) ?> type="checkbox" class="v-bottom lh-0"> Murmur <br>
                                        <input <?= compareC($pacemaker) ?> type="checkbox" class="v-bottom lh-0"> Pacemaker <br>
                                        <input <?= compareC($penyakit_katup) ?> type="checkbox" class="v-bottom lh-0"> Penyakit Katup
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr style="font-size: 12px;">
                        <td class="px-5 border-top text-center border-right border-bottom bold">Hepato / Gastrointestinal</td>
                        <td rowspan="2" class="v-top  border-top text-center border-left"><input <?= compareC($hg_dbn) ?> type="checkbox" class=""></td>
                        <td rowspan="2" class="v-top  border-top border-left px-5 "><?= $keterangan_hg; ?></td>
                        <td rowspan="2" class="v-top border-left px-5">Pemeriksaan Radiologi <br><?= $pr; ?></td>
                    </tr>
                    <tr style="font-size: 12px;">
                        <td class="px-5" style="width: 250px;padding-bottom: 5px;">
                            <table class="w-100">
                                <tr>
                                    <td>
                                        <input <?= compareC($bowel_obstruction) ?> type="checkbox" class="v-bottom lh-0"> Bowel Obstruction <br>
                                        <input <?= compareC($sirosis) ?> type="checkbox" class="v-bottom lh-0"> Sirosis <br>
                                        <input <?= compareC($jaundice) ?> type="checkbox" class="v-bottom lh-0"> Jaundice <br>
                                        <input <?= compareC($nv) ?> type="checkbox" class="v-bottom lh-0"> Nausea & Vomiting
                                    </td>

                                </tr>
                            </table>
                        </td>
                    </tr>


                    <tr style="font-size: 12px;">
                        <td class="px-5 border-top text-center border-right border-bottom bold">Neuro / Muscoluskeletal</td>
                        <td rowspan="2" class="v-top  border-top text-center border-left"><input <?= compareC($nm_dbn) ?> type="checkbox" class=""></td>
                        <td rowspan="2" class="v-top  border-top border-left px-5 "><?= $keterangan_nm; ?></td>
                        <td rowspan="2" class="v-top border-left px-5">Spirometri / Bronkoskopi <br><?= $sb; ?></td>
                    </tr>
                    <tr style="font-size: 12px;">
                        <td class="px-5" style="width: 250px;padding-bottom: 5px;">
                            <table class="w-100">
                                <tr>
                                    <td>
                                        <input <?= compareC($cva) ?> type="checkbox" class="v-bottom lh-0"> CVA/Stroke/TIA <br>
                                        <input <?= compareC($sakit_kepala) ?> type="checkbox" class="v-bottom lh-0"> Sakit Kepala <br>
                                        <input <?= compareC($penurunan_kesadaran) ?> type="checkbox" class="v-bottom lh-0"> Penurunan Kesadaran <br>
                                        <input <?= compareC($paralis) ?> type="checkbox" class="v-bottom lh-0"> Paralis <br>
                                        <input <?= compareC($parastesia) ?> type="checkbox" class="v-bottom lh-0"> Parastesia
                                    </td>
                                    <td class="v-top">
                                        <input <?= compareC($hp) ?> type="checkbox" class="v-bottom lh-0"> Hemiparesa/Plegi <br>
                                        <input <?= compareC($pp) ?> type="checkbox" class="v-bottom lh-0"> Paraparese/Plegi <br>
                                        <input <?= compareC($kejang) ?> type="checkbox" class="v-bottom lh-0"> Kejang <br>
                                        <input <?= compareC($nd) ?> type="checkbox" class="v-bottom lh-0"> Neuromuscular Distroft<br>
                                    </td>

                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr style="font-size: 12px;">
                        <td class="px-5 border-top text-center border-right border-bottom bold">Renal / Endokrin</td>
                        <td rowspan="2" class="v-top  border-top text-center border-left"><input <?= compareC($re_dbn) ?> type="checkbox" class=""></td>
                        <td rowspan="2" class="v-top  border-top border-left px-5 "><?= $keterangan_re; ?></td>
                        <td rowspan="2" class="v-top border-left px-5">Lain - lain <br><?= $pp_lain; ?></td>
                    </tr>
                    <tr style="font-size: 12px;">
                        <td class="px-5" style="width: 250px;padding-bottom: 5px;">
                            <table class="w-100">
                                <tr>
                                    <td>
                                        <input <?= compareC($dm) ?> type="checkbox" class="v-bottom lh-0"> DM <br>
                                        <input <?= compareC($gg) ?> type="checkbox" class="v-bottom lh-0"> Gagal ginjal / Dialisis <br>
                                        <input <?= compareC($thyroid) ?> type="checkbox" class="v-bottom lh-0"> Thyroid
                                    </td>

                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr style="font-size: 12px;">
                        <td class="px-5 border-top text-center border-right border-bottom bold">Other</td>
                        <td rowspan="2" class="v-top  border-top text-center border-left border-bottom"><input <?= compareC($o_dbn) ?> type="checkbox" class=""></td>
                        <td rowspan="2" class="v-top  border-top border-left px-5  border-bottom">
                            <table class="w-100">
                                <tr>
                                    <td> <?= $keterangan_o; ?></td>
                                </tr>
                                <tr class="v-bottom">
                                    <td class="v-bottom">
                                        *DBN = Dalam Batas Normal
                                    </td>
                                </tr>
                            </table>

                        </td>
                        <td rowspan="2" class="v-top border-left px-5 border-top v-bottom text-center border-bottom">ASA <br> <?= $asa; ?></td>
                    </tr>
                    <tr style="font-size: 12px;">
                        <td class="px-5 border-bottom" style="width: 250px;padding-bottom: 5px;">
                            <table class="w-100">
                                <tr>
                                    <td>
                                        <input <?= compareC($anemia) ?> type="checkbox" class="v-bottom lh-0"> Anemia <br>
                                        <input <?= compareC($kanker) ?> type="checkbox" class="v-bottom lh-0"> Kanker <br>
                                        <input <?= compareC($kemoterapi) ?> type="checkbox" class="v-bottom lh-0"> Kemoterapi
                                    </td>
                                    <td class="v-top">
                                        <input <?= compareC($dehidrasi) ?> type="checkbox" class="v-bottom lh-0"> Dehidrasi <br>
                                        <input <?= compareC($hemofilia) ?> type="checkbox" class="v-bottom lh-0"> Hemofilia <br>
                                        <input <?= compareC($hamil) ?> type="checkbox" class="v-bottom lh-0"> Hamil
                                    </td>

                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr style="font-size: 12px;">
                        <td colspan="4" class="">
                            <table class="w-100">
                                <tr>
                                    <td class="border-right" style="width: 400px;">
                                        Pemeriksaan Lab. <br>
                                        <table class="w-100 px-5">
                                            <tr>
                                                <td>Hb/Hct</td>
                                                <td>:</td>
                                                <td><?= cekStrKosong($hbhct) ?></td>
                                            </tr>
                                            <tr>
                                                <td style="width: 70px;">Fungsi Ginjal</td>
                                                <td>:</td>
                                                <td>
                                                    <table>
                                                        <tr>
                                                            <td>Ureum</td>
                                                            <td>:</td>
                                                            <td><?= cekStrKosong($ureum) ?></td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <table>
                                                        <tr>
                                                            <td>Creatinin</td>
                                                            <td>:</td>
                                                            <td><?= cekStrKosong($creatinin) ?></td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Fungsi Hati</td>
                                                <td>:</td>
                                                <td>
                                                    <table>
                                                        <tr>
                                                            <td>SGOT</td>
                                                            <td>:</td>
                                                            <td><?= cekStrKosong($sgot) ?></td>
                                                        </tr>
                                                    </table>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <table>
                                                        <tr>
                                                            <td>SGPT</td>
                                                            <td>:</td>
                                                            <td><?= cekStrKosong($sgpt) ?></td>
                                                        </tr>
                                                    </table>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <table>
                                                        <tr>
                                                            <td>Albumin</td>
                                                            <td>:</td>
                                                            <td><?= cekStrKosong($albumin) ?></td>
                                                        </tr>
                                                    </table>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <table>
                                                        <tr>
                                                            <td>Globulin</td>
                                                            <td>:</td>
                                                            <td><?= cekStrKosong($globulin) ?></td>
                                                        </tr>
                                                    </table>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <table style="padding-top: 5px;">
                                                        <tr>
                                                            <td class="v-top">Bilirubin</td>
                                                            <td class="v-top">:</td>
                                                            <td>
                                                                <input <?= compare($bilirubin, 'Direct') ?> type="checkbox" class="v-bottom lh-0"> Direct <?= cekStrKosong($direct) ?> <br>
                                                                <input <?= compare($bilirubin, 'Indirect') ?> type="checkbox" class="v-bottom"> Indirect <?= cekStrKosong($indirect) ?>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <?php function cekStrKosong2($a)
                                                {
                                                    return $a != '' ? '<span class="underline">' . $a . '</span>' : '___';
                                                } ?>
                                                <td>Elektrolit</td>
                                                <td>:</td>
                                                <td>
                                                    NA <?= cekStrKosong2($na) ?> K <?= cekStrKosong2($k) ?> CI <?= cekStrKosong2($ci) ?> Ca <?= cekStrKosong2($ca) ?> Mg <?= cekStrKosong2($mg) ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Lain - lain</td>
                                                <td>:</td>
                                                <td>
                                                    <?= cekStrKosong($lab_lain) ?>
                                                </td>
                                            </tr>
                                        </table>
                                        <table class="w-100 border-top" style="height: 49px;">
                                            <tr>
                                                <td class="v-top px-5">
                                                    <p class="">KESIMPULAN PRA ANESTESI : <?= $kesimpulan; ?>/p>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td class="v-top">
                                        <table class="w-100 ">
                                            <tr class="">
                                                <td class="px-5">
                                                    <p class="text-center">INSTRUKSI PRA ANESTESI</p>
                                                    <p>Puasa <?= cekStrKosong($puasa) ?></p>
                                                    <p>Makanan padat <?= cekStrKosong($makanan_padat) ?> Makanan Cair <?= cekStrKosong($makanan_cair) ?></p>
                                                    <p>Obat - obat Diberikan tertulis <input <?= compare($obat_diberikan, 'Ya') ?> type="checkbox" class="v-bottom">Ya <input <?= compare($obat_diberikan, 'Tidak') ?> type="checkbox" class="v-bottom">Tidak</p>
                                                    <p>Obat yang dihentikan : <?= cekStrKosong($obat_dihentikan) ?></p>
                                                </td>
                                            </tr>
                                        </table>

                                        <table class="w-100 border-top">
                                            <tr class="">
                                                <td class="px-5">Rencana Anestesi : <?= $rencana; ?></td>
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
    <table class="w-100" style="font-size: 12px;">
        <tr>
            <td class="text-center" style="padding-left: 500px;">
                <p>Dokter Anestesi</p>
                <!-- <br> -->
                <br>
                <p style="margin-top: 10px;">(<?= $dokter; ?>)</p>
            </td>
        </tr>
    </table>
</body>

</html>