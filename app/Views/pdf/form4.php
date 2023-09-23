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
    return $a != '' ? '<span class="underline">' . $a . '</span>' : '________';
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
            <td style="padding-top: 20px;padding-bottom: 20px;">
                <h2 class="text-center">SURVEILENS INFEKSI RS</h2>
            </td>
        </tr>
        <!-- Biodata -->
        <tr class="border-bottom">
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

        <tr>
            <table class="px-10">
                <!-- A -->
                <tr>
                    <td class="v-top bold" style="width: 170px;">A. Diagnosa Masuk</td>
                    <td class="v-top">:</td>
                    <td class="pl-5"><?= ($diagnosa_masuk); ?></td>
                </tr>
                <!-- B -->
                <tr class="">
                    <td rowspan="2" class="v-top bold">B. Pindah Ke Ruangan</td>
                    <td rowspan="2" class="v-top">:</td>
                    <td class="pl-5">1. <?= cekStrKosong($pindah_keruangan1); ?> <span class="pl-5">Tanggal <?= cekTgl($tanggal_pindah1) ?></span> </td>
                </tr>
                <tr class="">
                    <td class="pl-5">2. <?= cekStrKosong($pindah_keruangan2); ?> <span class="pl-5">Tanggal <?= cekTgl($tanggal_pindah2) ?></span> </td>
                </tr>
            </table>

        </tr>

        <tr>
            <td>
                <h4 class="pl-10" style="padding-top: 5px;">C. Faktor Resiko Selamat Dirawat :</h4>
            </td>
        </tr>
        <tr>
            <td style="padding-left: 28px;">
                <table>
                    <tr>
                        <td>1.</td>
                        <td class="pl-10">Jenis Tindakan / Alat Kesehatan</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td style="padding-left: 28px;padding-right: 10px;">
                <table class="border w-100">
                    <thead>
                        <tr class="border">
                            <td class="border text-center" rowspan="2">No</td>
                            <td class="border text-center px-5" rowspan="2" style="width: 150px;">Jenis Tindakan/ Alkes</td>
                            <td class="border text-center" rowspan="2" style="width: 100px;">Lokasi</td>
                            <td class="border text-center" colspan="2" style="width: 50px;">Tanggal Pemasangan</td>
                            <td class="border text-center" rowspan="2" style="width: 50px;">Total Hari</td>
                            <td class="border text-center" rowspan="2" style="width: 100px;">Tanggal Infeksi</td>
                            <td class="border text-center" rowspan="2" style="width: 100px;">Tanggal Infeksi</td>
                        </tr>
                        <tr class="border">
                            <td class="border text-center">Mulai</td>
                            <td class="border text-center">s/d</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $str = '<span style="opacity: 0;">.</span>';
                        $no = ['1', $str, $str, $str, $str, $str, $str, $str, $str, '2', $str, $str, $str, '3', $str, $str, $str, '4', $str];
                        foreach ($tabel as $key => $row) { ?>
                            <tr>
                                <td class="border text-center px-5"><?= $no[$key]; ?></td>
                                <td class="border px-5"><?= $row['jenis_tindakan']; ?></td>
                                <td class="border text-center px-5"><?= $row['lokasi']; ?></td>
                                <td class="border text-center px-5"><?= cekTgl($row['tgl_mulai']); ?></td>
                                <td class="border text-center px-5"><?= cekTgl($row['tgl_selesai']); ?></td>
                                <td class="border text-center px-5"><?= $row['total_hari'] == '0' ? '' : $row['total_hari']; ?></td>
                                <td class="border text-center px-5"><?= cekTgl($row['tgl_infeksi']); ?></td>
                                <td class="border text-center px-5"><?= cekTgl($row['tgl_infeksi2']); ?></td>
                            </tr>
                        <?php  } ?>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td style="padding-left: 28px;">
                <table style="padding-top: 5px;">
                    <tr>
                        <td>2.</td>
                        <td class="pl-10">Faktor Penyakit</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="pl-10">a. HBS.AG</td>
                        <td>:</td>
                        <td>
                            <input type="checkbox" <?= compare($hbs, 'Positif') ?> class="v-bottom pl-5"> Positif
                            <input type="checkbox" <?= compare($hbs, 'Negatif') ?> class="v-bottom"> Negatif
                            <input type="checkbox" <?= compare($hbs, 'Tidak Diperiksa') ?> class="v-bottom"> Tidak Diperiksa
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="pl-10">b. Anti HCV</td>
                        <td>:</td>
                        <td>
                            <input type="checkbox" <?= compare($hcv, 'Positif') ?> class="v-bottom pl-5"> Positif
                            <input type="checkbox" <?= compare($hcv, 'Negatif') ?> class="v-bottom"> Negatif
                            <input type="checkbox" <?= compare($hcv, 'Tidak Diperiksa') ?> class="v-bottom"> Tidak Diperiksa
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="pl-10">c. Anti HIV</td>
                        <td>:</td>
                        <td>
                            <input type="checkbox" <?= compare($hiv, 'Positif') ?> class="v-bottom pl-5"> Positif
                            <input type="checkbox" <?= compare($hiv, 'Negatif') ?> class="v-bottom"> Negatif
                            <input type="checkbox" <?= compare($hiv, 'Tidak Diperiksa') ?> class="v-bottom"> Tidak Diperiksa
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="pl-10">d. <?= cekStrKosong($faktor_lain) ?></td>
                        <td>:</td>
                        <td>
                            <input type="checkbox" <?= compare($faktor_lain_pilih, 'Positif') ?> class="v-bottom pl-5"> Positif
                            <input type="checkbox" <?= compare($faktor_lain_pilih, 'Negatif') ?> class="v-bottom"> Negatif
                            <input type="checkbox" <?= compare($faktor_lain_pilih, 'Tidak Diperiksa') ?> class="v-bottom"> Tidak Diperiksa
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td style="padding-left: 28px;">
                <table style="padding-top: 5px;">
                    <tr>
                        <td>3.</td>
                        <td class="pl-10">
                            Hasil Laboratorium : Lekosit : <?= cekStrKosong($lekosit) ?> LED : <?= cekStrKosong($led) ?> GDS : <?= cekStrKosong($gds) ?>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td class="v-top" style="padding-left: 28px;padding-right: 28px;height: 230px;">
                <table style="padding-top: 5px;">
                    <tr>
                        <td class="v-top">4.</td>
                        <td class="pl-10">
                            Hasil Radiologi : <?= $hasil_radiologi; ?>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <div class="page_break"></div>
    <table class="border" style="width: 100%">
        <tr>
            <td>
                <h4 class="pl-10" style="padding-top: 5px;">D. Tindakan / Operasi</h4>
            </td>
        </tr>
        <tr>
            <td class="pl-20">
                <table class="px-10">
                    <tr class="v-top">
                        <td class="v-top">1.</td>
                        <td class="pl-10">Diagnosa</td>
                        <td class="pl-10">:</td>
                        <td class="pl-5 pb-10"><?= cekStrKosong($diagnosa) ?></td>
                    </tr>
                    <tr>
                        <td class="v-top ">2.</td>
                        <td class="pl-10">Tanggal Operasi</td>
                        <td class="pl-10">:</td>
                        <td class="pl-5">
                            1. <?= cekStrKosong(cekTgl($tgl_operasi)) ?>
                            <span class="pl-5">Lama Operasi <?= cekStrKosong($jam_operasi) ?> Jam</span>
                            <span class=""><?= cekStrKosong($menit_operasi) ?> menit</span>
                        </td>
                    </tr>
                    <tr class="v-top">
                        <td class="v-top opacity-0">2.</td>
                        <td class="pl-10 opacity-0">Tanggal Operasi</td>
                        <td class="pl-10">:</td>
                        <td class="pl-5 pb-10">
                            2. <?= cekStrKosong(cekTgl($tgl_operasi2)) ?>
                            <span class="pl-5">Lama Operasi <?= cekStrKosong($jam_operasi2) ?> Jam</span>
                            <span class=""><?= cekStrKosong($menit_operasi2) ?> menit</span>
                        </td>
                    </tr>

                    <tr class="v-top">
                        <td class="v-top">3.</td>
                        <td class="pl-10">Jenis Operasi</td>
                        <td class="pl-10">:</td>
                        <td class="pb-10">
                            <input type="checkbox" <?= compare($jenis_operasi, 'Bersih') ?> class="v-bottom pl-5"> Bersih
                            <input type="checkbox" <?= compare($jenis_operasi, 'Bersih Tercemar') ?> class="v-bottom"> Bersih Tercemar
                            <input type="checkbox" <?= compare($jenis_operasi, 'Tercemar') ?> class="v-bottom"> Tercemar
                            <input type="checkbox" <?= compare($jenis_operasi, 'Kotor') ?> class="v-bottom"> Kotor
                        </td>
                    </tr>
                    <tr class="v-top">
                        <td class="v-top ">4.</td>
                        <td class="pl-10">Tindakan Operasi</td>
                        <td class="pl-10">:</td>
                        <td class="pb-10">
                            <input type="checkbox" <?= compare($tindakan_operasi, 'Cito') ?> class="v-bottom pl-5"> Cito
                            <input type="checkbox" <?= compare($tindakan_operasi, 'Elektif') ?> class="v-bottom"> Elektif
                            <input type="checkbox" <?= compare($tindakan_operasi, 'lainlain') ?> class="v-bottom"> <?= cekStrKosong($tindakan_operasi_lain) ?>

                        </td>
                    </tr>
                    <tr class="v-top">
                        <td class="v-top ">5.</td>
                        <td class="pl-10">ASA Score</td>
                        <td class="pl-10">:</td>
                        <td class="pb-10">
                            <input type="checkbox" <?= compare($asa, '1') ?> class="v-bottom pl-5"> 1
                            <input type="checkbox" <?= compare($asa, '2') ?> class="v-bottom"> 2
                            <input type="checkbox" <?= compare($asa, '3') ?> class="v-bottom"> 3
                            <input type="checkbox" <?= compare($asa, '4') ?> class="v-bottom"> 4
                            <input type="checkbox" <?= compare($asa, '5') ?> class="v-bottom"> 5

                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <h4 class="pl-10" style="padding-top: 5px;">E. Komplikasi / Infeksi RS</h4>
            </td>
        </tr>
        <tr>
            <td class="pl-20">
                <table class="px-10">
                    <tr class="v-top">
                        <td class="v-top">1.</td>
                        <td class="pl-10">ILO</td>
                        <td class="pl-10">:</td>
                        <td class="">
                            <input type="checkbox" <?= compare($ilo, 'Ada') ?> class="v-bottom pl-5"> Ada
                            <input type="checkbox" <?= compare($ilo, 'Tidak Ada') ?> class="v-bottom"> Tidak Ada
                            <span class="pl-5">Hari ke <?= cekStrKosong($hari_ilo) ?></span>
                        </td>
                    </tr>
                    <tr class="v-top">
                        <td class="v-top"></td>
                        <td class="pl-10">Hasil Kultur</td>
                        <td class="pl-10">:</td>
                        <td class="pb-10">
                            <span class="pl-5"><?= cekStrKosong($hasil_ilo) ?></span>
                        </td>
                    </tr>
                    <tr class="v-top">
                        <td class="v-top">2.</td>
                        <td class="pl-10">ISK</td>
                        <td class="pl-10">:</td>
                        <td class="">
                            <input type="checkbox" <?= compare($isk, 'Ada') ?> class="v-bottom pl-5"> Ada
                            <input type="checkbox" <?= compare($isk, 'Tidak Ada') ?> class="v-bottom"> Tidak Ada
                            <span class="pl-5">Hari ke <?= cekStrKosong($hari_isk) ?></span>
                        </td>
                    </tr>
                    <tr class="v-top">
                        <td class="v-top"></td>
                        <td class="pl-10">Hasil Kultur</td>
                        <td class="pl-10">:</td>
                        <td class="pb-10">
                            <span class="pl-5"><?= cekStrKosong($hasil_isk) ?></span>
                        </td>
                    </tr>
                    <tr class="v-top">
                        <td class="v-top">3.</td>
                        <td class="pl-10">Pnemonia</td>
                        <td class="pl-10">:</td>
                        <td class="">
                            <input type="checkbox" <?= compare($pnemonia, 'Ada') ?> class="v-bottom pl-5"> Ada
                            <input type="checkbox" <?= compare($pnemonia, 'Tidak Ada') ?> class="v-bottom"> Tidak Ada
                            <span class="pl-5">Hari ke <?= cekStrKosong($hari_pnemonia) ?></span>
                        </td>
                    </tr>
                    <tr class="v-top">
                        <td class="v-top"></td>
                        <td class="pl-10">Hasil Kultur</td>
                        <td class="pl-10">:</td>
                        <td class="pb-10">
                            <span class="pl-5"><?= cekStrKosong($hasil_pnemonia) ?></span>
                        </td>
                    </tr>
                    <tr class="v-top">
                        <td class="v-top">4.</td>
                        <td class="pl-10">IADP</td>
                        <td class="pl-10">:</td>
                        <td class="">
                            <input type="checkbox" <?= compare($iadp, 'Ada') ?> class="v-bottom pl-5"> Ada
                            <input type="checkbox" <?= compare($iadp, 'Tidak Ada') ?> class="v-bottom"> Tidak Ada
                            <span class="pl-5">Hari ke <?= cekStrKosong($hari_iadp) ?></span>
                        </td>
                    </tr>
                    <tr class="v-top">
                        <td class="v-top"></td>
                        <td class="pl-10">Hasil Kultur</td>
                        <td class="pl-10">:</td>
                        <td class="pb-10">
                            <span class="pl-5"><?= cekStrKosong($hasil_iadp) ?></span>
                        </td>
                    </tr>
                    <tr class="v-top">
                        <td class="v-top">5.</td>
                        <td class="pl-10">Plebitis</td>
                        <td class="pl-10">:</td>
                        <td class="">
                            <input type="checkbox" <?= compare($plebitis, 'Ada') ?> class="v-bottom pl-5"> Ada
                            <input type="checkbox" <?= compare($plebitis, 'Tidak Ada') ?> class="v-bottom"> Tidak Ada
                            <span class="pl-5">Hari ke <?= cekStrKosong($hari_plebitis) ?></span>
                        </td>
                    </tr>
                    <tr class="v-top">
                        <td class="v-top"></td>
                        <td class="pl-10">Hasil Kultur</td>
                        <td class="pl-10">:</td>
                        <td class="pb-10">
                            <span class="pl-5"><?= cekStrKosong($hasil_plebitis) ?></span>
                        </td>
                    </tr>
                    <tr class="v-top">
                        <td class="v-top">6.</td>
                        <td class="pl-10">Decubitus</td>
                        <td class="pl-10">:</td>
                        <td class="pb-10">
                            <input type="checkbox" <?= compare($decubitus, 'Ada') ?> class="v-bottom pl-5"> Ada
                            <input type="checkbox" <?= compare($decubitus, 'Tidak Ada') ?> class="v-bottom"> Tidak Ada
                            <span class="pl-5">Hari ke <?= cekStrKosong($hari_decubitus) ?></span>
                        </td>
                    </tr>
                    <tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <h4 class="pl-10" style="padding-top: 5px;">F. Pemakaian Antimikroba</h4>
            </td>
        </tr>
        <tr>
            <td class="pl-20">
                <table class="px-10">
                    <tr class="v-top">
                        <td class="pb-10">
                            1. <?= cekStrKosong($pemakaian) ?> Dosis <?= cekStrKosong($dosis) ?> Mulai Tgl <?= cekStrKosong(cekTgl($tgl_mulai_am)) ?> s/d <?= cekStrKosong(cekTgl($tgl_selesai_am)) ?>
                        </td>
                    </tr>
                    <tr class="v-top">
                        <td class="pb-10">
                            2. <?= cekStrKosong($pemakaian2) ?> Dosis <?= cekStrKosong($dosis2) ?> Mulai Tgl <?= cekStrKosong(cekTgl($tgl_mulai_am2)) ?> s/d <?= cekStrKosong(cekTgl($tgl_selesai_am2)) ?>
                        </td>
                    </tr>
                    <tr class="v-top">
                        <td class="pb-10">
                            3. <?= cekStrKosong($pemakaian3) ?> Dosis <?= cekStrKosong($dosis3) ?> Mulai Tgl <?= cekStrKosong(cekTgl($tgl_mulai_am3)) ?> s/d <?= cekStrKosong(cekTgl($tgl_selesai_am3)) ?>
                        </td>
                    </tr>
                    <tr class="v-top">
                        <td class="pb-10">
                            4. <?= cekStrKosong($pemakaian4) ?> Dosis <?= cekStrKosong($dosis4) ?> Mulai Tgl <?= cekStrKosong(cekTgl($tgl_mulai_am4)) ?> s/d <?= cekStrKosong(cekTgl($tgl_selesai_am4)) ?>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <h4 class="pl-10" style="padding-top: 5px;">G. Pasien Keluar</h4>
            </td>
        </tr>
        <tr>
            <td class="pl-20">
                <table class="px-10">
                    <tr class="v-top">
                        <td class="v-top">1.</td>
                        <td class="pl-10 v-top">Tanggal Pasien Keluar RS / Meninggal</td>
                        <td class="pl-10 v-top">:</td>
                        <td class="pb-10">
                            <span class="pl-5"><?= cekStrKosong(cekTgl($tgl_keluar)) ?></span>
                        </td>
                    </tr>
                    <tr class="v-top">
                        <td class="v-top">2.</td>
                        <td class="pl-10 v-top">Pindah ke RS</td>
                        <td class="pl-10 v-top">:</td>
                        <td class="pb-10">
                            <span class="pl-5"><?= cekStrKosong(($pindah)) ?></span>
                        </td>
                    </tr>
                    <tr class="v-top">
                        <td class="v-top">3.</td>
                        <td class="pl-10 v-top">Diagnosa Akhir</td>
                        <td class="pl-10 v-top">:</td>
                        <td class="pb-10">
                            <span class="pl-5"><?= cekStrKosong(($diagnosa_akhir)) ?></span>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <?php
            function cekTTD($a)
            {
                if ($a == '') {
                    return '_______________________';
                } else {
                    return $a;
                }
            }
            ?>
            <td>
                <table class="w-100  py-20">
                    <tr class="">
                        <td class=" text-center" style="width: 50%;"><span class="bold">Perawat Penanggung Jawab</span> (Pengisi Formulir)</td>
                        <td class=" text-center bold" style="width: 50%;">IPCLN</td>
                    </tr>
                    <tr class="">
                        <td class=" text-center" style="width: 50%;padding-top: 100px;">
                            (<?= cekTTD($pj) ?>) <br>Nama Lengkap & Tanda Tangan
                        </td>
                        <td class=" text-center" style="width: 50%;padding-top: 100px;">
                            (<?= cekTTD($ipcln) ?>) <br>Nama Lengkap & Tanda Tangan
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>