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
    </style>
</head>

<body>
    <table class="border" style="width: 100%;">
        <!-- Header -->
        <tr class="border">
            <td style="height: 60px;">
                <h2 class="text-center">ASSESMEN KEPERAWATAN SPF MATERNITAS</h2>
            </td>
        </tr>
        <!-- Biodata -->
        <tr class="border">
            <td style="padding-top: 10px;padding-bottom: 10px;">
                <table style="margin-left: 40px;">
                    <tr>
                        <td>Nama</td>
                        <td class="pl-10">: </td>
                    </tr>
                    <tr>
                        <td>No. RM</td>
                        <td class="pl-10">: </td>
                    </tr>
                    <tr>
                        <td>Tgl. Lahir</td>
                        <td class="pl-10">: </td>
                    </tr>

                </table>
            </td>
        </tr>
        <tr>
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
                        <input type="checkbox" class="v-bottom pl-10"> beli obat warung
                        <input type="checkbox" class="v-bottom pl-10"> periksa ke fasilitas kesehatan <br>
                        <input type="checkbox" class="v-bottom" style="margin-left: 201.5px;"> tidak / jarang diobati karena sembuh sendiri
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td class="pl-10">
                        Presepsi mengenai sakitnya :
                        <input type="checkbox" class="v-bottom" style="padding-left: 12px;"> tidak tahu
                        <input type="checkbox" class="v-bottom pl-10"> tahu sedikit
                        <input type="checkbox" class="v-bottom pl-10"> mengerti dan paham mengenal sakitnya
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
                                            <td class="pl-10">10 gr%</td>
                                            <td class="pl-20">tgl 10-10-2022</td>
                                        </tr>
                                        <tr>
                                            <td>Albumin</td>
                                            <td class="pl-10">:</td>
                                            <td class="pl-10">100 gr/dl</td>
                                            <td class="pl-20">tgl 10-10-2022</td>
                                        </tr>
                                        <tr>
                                            <td>Protein</td>
                                            <td class="pl-10">:</td>
                                            <td class="pl-10">10 gr/dl</td>
                                            <td class="pl-20">tgl 10-10-2022</td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td class="v-top">b. </td>
                                <td class="pl-10">
                                    Tanda-tanda klinis :
                                    <input type="checkbox" class="v-bottom" style="padding-left: 12px;"> pucat
                                    <input type="checkbox" class="v-bottom pl-10" style="margin-left: 89px;"> membrane mukosa kering <br>
                                    <input type="checkbox" class="v-bottom pl-10" style="margin-left: 134px;"> conjunctiva anemis
                                    <input type="checkbox" class="v-bottom pl-10"> kulit :
                                    <input type="checkbox" class="v-bottom pl-10"> kering <br>
                                    <input type="checkbox" class="v-bottom pl-10" style="margin-left: 364px;"> turgor :
                                    <input type="checkbox" class="v-bottom pl-5"> baik
                                    <input type="checkbox" class="v-bottom pl-5"> kurang
                                    <input type="checkbox" class="v-bottom pl-5"> jelek
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
                                                <input type="checkbox" class="v-bottom pl-5"> anoreksia
                                                <input type="checkbox" class="v-bottom pl-5"> mual
                                                <input type="checkbox" class="v-bottom pl-5"> muntah
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Porsi Makan
                                            </td>
                                            <td class="pl-10">:</td>
                                            <td>
                                                <input type="checkbox" class="v-bottom pl-5"> cukup
                                                <input type="checkbox" class="v-bottom pl-5"> kurang
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Diet
                                            </td>
                                            <td class="pl-10">:</td>
                                            <td>
                                                <input type="checkbox" class="v-bottom pl-5"> nasi
                                                <input type="checkbox" class="v-bottom pl-5"> bubur kasar
                                                <input type="checkbox" class="v-bottom pl-5"> bubur saring
                                                <input type="checkbox" class="v-bottom pl-5"> sonde
                                                <input type="checkbox" class="v-bottom pl-5"> puasa
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Jenis Diet
                                            </td>
                                            <td class="pl-10">:</td>
                                            <td>
                                                <input type="checkbox" class="v-bottom pl-5"> DM
                                                <input type="checkbox" class="v-bottom pl-5"> DH
                                                <input type="checkbox" class="v-bottom pl-5"> RGRP
                                                <input type="checkbox" class="v-bottom pl-5"> lain-lain : .........
                                                <span class="pl-20">kalori : 100gram</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td class="pl-10"></td>
                                            <td>
                                                <input type="checkbox" class="v-bottom pl-5"> ASI, Frekuensi 10 X perhari
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td class="pl-10"></td>
                                            <td>
                                                <input type="checkbox" class="v-bottom pl-5"> ASB, Frekuensi 10 X perhari ml
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Terpasang NGT
                                            </td>
                                            <td class="pl-10">:</td>
                                            <td>
                                                <input type="checkbox" class="v-bottom pl-5"> ya
                                                <input type="checkbox" class="v-bottom pl-5"> tidak
                                                <span class="pl-10">Terpasang hari ke :</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Tujuan pemasangan NGT
                                            </td>
                                            <td class="pl-10">:</td>
                                            <td>
                                                <input type="checkbox" class="v-bottom pl-5"> Pemenuhan nutrisi
                                                <input type="checkbox" class="v-bottom pl-5"> cuci lambung
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Jumlah minum
                                            </td>
                                            <td class="pl-10">:</td>
                                            <td>
                                                <span class="pl-5">1000 ml/hari</span>
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
                    <td class="bold">4.</td>
                    <td class="pl-10 bold">Pola Istirahat Tidur</td>
                </tr>
                <tr>
                    <td class="bold">5.</td>
                    <td class="pl-10 bold">Pola Toleransi Koping Stres</td>
                </tr>
                <tr>
                    <td class="bold">6.</td>
                    <td class="pl-10 bold">Pola Hubungan dan Peran</td>
                </tr>
                <tr>
                    <td class="bold">7.</td>
                    <td class="pl-10 bold">Pola Seksual dan Reproduksi</td>
                </tr>
                <tr>
                    <td class="bold">8.</td>
                    <td class="pl-10 bold">
                        Pola Nilai dan Kepercayaan : Kebiasaan menjalankan ibadah :
                        <input type="checkbox" class="v-bottom pl-10"> teratur
                        <input type="checkbox" class="v-bottom pl-10"> tidak teratur
                    </td>
                </tr>
            </table>

        </tr>
    </table>
</body>

</html>