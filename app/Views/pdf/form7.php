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
            <td>
                <h2 class="text-center">RENCANA PEMULANGAN PASIEN</h2>
                <h4 class="text-center" style="font-weight: normal;">DIISI OLEH PERAWAT</h4>
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
        <tr class="border">
            <td>
                <h4 class="text-center">SAAT MASUK RUMAH SAKIT</h4>
            </td>
        </tr>
        <tr>
            <td>
                <table class="w-100 px-5" style="font-size: 14px;">
                    <tr>
                        <td style="width: 200px;">Masuk Rumah Sakit</td>
                        <td>:</td>
                        <td>Tanggal <?= cekTgl($tgl_masuk) ?> Jam <?= $jam_masuk; ?></td>
                    </tr>
                    <tr>
                        <td class="v-top">Alasan Masuk Rumah Sakit</td>
                        <td class="v-top">:</td>
                        <td><?= $alasan_masuk; ?></td>
                    </tr>
                    <tr>
                        <td class="v-top">Diagnosa Medis</td>
                        <td class="v-top">:</td>
                        <td><?= $diagnosa_medis; ?></td>
                    </tr>
                </table>
                <table class="w-100 px-5" style="font-size: 14px;">
                    <tr>
                        <td style="width: 280px;">Estimasi / Rencana Tanggal Pemulangan Pasien</td>
                        <td style="width: 10px;">:</td>
                        <td><?= cekTgl($tgl_estimasi) ?></td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr class="border">
            <td>
                <h4 class="text-center">KETERANGAN RENCANA PEMULANGAN</h4>
            </td>
        </tr>
        <table class="w-100 px-5" style="font-size: 14px;">
            <tr>
                <td class="v-top">1. </td>
                <td>Pengaruh rawat inap terhadap :</td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <table class="">
                        <tr>
                            <td>- Pasien dan keluarga pasien</td>
                            <td class="pl-20">
                                <input type="checkbox" <?= compare($pkp, 'Tidak') ?> class="lh-0"> Tidak
                                <input type="checkbox" <?= compare($pkp, 'Ya') ?> class="lh-0"> Ya, <?= $pkp_ya; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>- Pekerjaan / Sekolah</td>
                            <td class="pl-20">
                                <input type="checkbox" <?= compare($ps, 'Tidak') ?> class="lh-0"> Tidak
                                <input type="checkbox" <?= compare($ps, 'Ya') ?> class="lh-0"> Ya, <?= $ps_ya; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>- Keuangan</td>
                            <td class="pl-20">
                                <input type="checkbox" <?= compare($keuangan, 'Tidak') ?> class="lh-0"> Tidak
                                <input type="checkbox" <?= compare($keuangan, 'Ya') ?> class="lh-0"> Ya, <?= $keuangan_ya; ?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <br style="line-height: 5px;">
            <tr>
                <td class="v-top">2. </td>
                <td>Antisipasi terhadap masalah saat pulang :</td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="checkbox" <?= compare($antisipasi, 'Tidak') ?> class="lh-0"> Tidak <input type="checkbox" <?= compare($antisipasi, 'Ya') ?> class="lh-0"> Ya, Jelaskan <?= $antisipasi_ya; ?>
                </td>
            </tr>
            <br style="line-height: 5px;">
            <tr>
                <td class="v-top">3. </td>
                <td>Bantuan diperlukan dalam hal :</td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="checkbox" <?= compareC($menyiapkan_makanan) ?> class="lh-0"> menyiapkan makanan
                    <input type="checkbox" <?= compareC($makanan) ?> class="lh-0"> makanan
                    <input type="checkbox" <?= compareC($diet) ?> class="lh-0" style="margin-left: 10px;"> diet
                    <input type="checkbox" <?= compareC($menyiapkan_obat) ?> class="lh-0" style="margin-left: 45px;"> menyiapkan obat
                    <input type="checkbox" <?= compareC($minum_obat) ?> class="lh-0" style="margin-left: 5px;"> minum obat <br>
                    <input type="checkbox" <?= compareC($mandi) ?> class="lh-0"> mandi
                    <input type="checkbox" <?= compareC($berpakaian) ?> class="lh-0" style="margin-left: 87px;"> berpakaian
                    <input type="checkbox" <?= compareC($transportasi) ?> class="lh-0"> transportasi
                    <input type="checkbox" <?= compareC($edukasi_kesehatan) ?> class="lh-0"> edukasi kesehatan
                    <input type="checkbox" <?= compareC($lainlain_bantuan) ?> class="lh-0"> <?= $lainlain_isi; ?>

                </td>
            </tr>
            <br style="line-height: 5px;">
            <tr>
                <td class="v-top">4. </td>
                <td>Adakah yang membantu keperluan diatas :</td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="checkbox" <?= compare($a4, 'Tidak') ?> class="lh-0"> Tidak <input type="checkbox" <?= compare($a4, 'Ya') ?> class="lh-0"> Ya, Jelaskan <?= $a4_ya; ?>
                </td>
            </tr>
            <br style="line-height: 5px;">
            <tr>
                <td class="v-top">5. </td>
                <td>Apakah pasien tinggal sendiri setelah keluar dari rumah sakit ?</td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="checkbox" <?= compare($a5, 'Tidak') ?> class="lh-0"> Tidak <input type="checkbox" <?= compare($a5, 'Ya') ?> class="lh-0"> Ya, Jelaskan <?= $a5_ya; ?>
                </td>
            </tr>
            <br style="line-height: 5px;">
            <tr>
                <td class="v-top">6. </td>
                <td>Apakah pasien menggunakan peralatan medis di rumah setelah keluar rumah sakit ? <br> (cateter, NGT, Double lumen, oksigen, dll)</td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="checkbox" <?= compare($a6, 'Tidak') ?> class="lh-0"> Tidak <input type="checkbox" <?= compare($a6, 'Ya') ?> class="lh-0"> Ya, Jelaskan <?= $a6_ya; ?>
                </td>
            </tr>
            <br style="line-height: 5px;">
            <tr>
                <td class="v-top">7. </td>
                <td>Apakah pasien memerlukan alat bantu setelah keluar dari rumah sakit ?<br> (tongkat, kursi roda, walker, dll)</td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="checkbox" <?= compare($a7, 'Tidak') ?> class="lh-0"> Tidak <input type="checkbox" <?= compare($a7, 'Ya') ?> class="lh-0"> Ya, Jelaskan <?= $a7_ya; ?>
                </td>
            </tr>
            <br style="line-height: 5px;">
            <tr>
                <td class="v-top">8. </td>
                <td>Apakah memerlukan bantuan / perawatan khusus dari rumah setelah keluar dari rumah sakit ? <br> (homecare, home visit)</td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="checkbox" <?= compare($a8, 'Tidak') ?> class="lh-0"> Tidak <input type="checkbox" <?= compare($a8, 'Ya') ?> class="lh-0"> Ya, Jelaskan <?= $a8_ya; ?>
                </td>
            </tr>
            <br style="line-height: 5px;">
            <tr>
                <td class="v-top">9. </td>
                <td>Apakah pasien bermasalah dalam memenuhi kebutuhan pribadinya setelah keluar dari rumah sakit ? <br> (makan, minum, BAB/BAK, dll)</td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="checkbox" <?= compare($a9, 'Tidak') ?> class="lh-0"> Tidak <input type="checkbox" <?= compare($a9, 'Ya') ?> class="lh-0"> Ya, Jelaskan <?= $a9_ya; ?>
                </td>
            </tr>
            <br style="line-height: 5px;">
            <tr>
                <td class="v-top">10. </td>
                <td>Apakah pasien memiliki nyeri kronis dan kelelahan setelah keluar dari rumah sakit ?</td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="checkbox" <?= compare($a10, 'Tidak') ?> class="lh-0"> Tidak <input type="checkbox" <?= compare($a10, 'Ya') ?> class="lh-0"> Ya, Jelaskan <?= $a10_ya; ?>
                </td>
            </tr>
            <br style="line-height: 5px;">
            <tr>
                <td class="v-top">11. </td>
                <td>Apakah pasien dan keluarga memerlukan edukasi kesehatan setelah keluar dari rumah sakit ? <br> (obat-obatan, efeksamping obat, nyeri, diit, mencari pertolongan, follow up, dll)</td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="checkbox" <?= compare($a11, 'Tidak') ?> class="lh-0"> Tidak <input type="checkbox" <?= compare($a11, 'Ya') ?> class="lh-0"> Ya, Jelaskan <?= $a11_ya; ?>
                </td>
            </tr>
            <br style="line-height: 5px;">
            <tr>
                <td class="v-top">12. </td>
                <td>Apakah Pasien dan keluarga memerlukan keterampilan khusus setelah keluar dari rumah sakit ? <br> (perawatan luka, injeksi, perawatan bayi, dll)</td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="checkbox" <?= compare($a12, 'Tidak') ?> class="lh-0"> Tidak <input type="checkbox" <?= compare($a12, 'Ya') ?> class="lh-0"> Ya, Jelaskan <?= $a12_ya; ?>
                </td>
            </tr>
            <tr>
                <td></td>
                <td style="text-align: right;">
                    <div class="text-center" style="padding-left: 450px;">
                        Jepara, <?= cekTgl($tgl_ttd) ?> Jam <?= $jam_ttd; ?> <br>Perawat <br> <br><br> (<?= $nama_perawat; ?>) <br>Tanda tangan & nama terang
                    </div>
                </td>
            </tr>
        </table>
    </table>
</body>

</html>