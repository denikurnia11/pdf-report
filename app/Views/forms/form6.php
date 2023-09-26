<?= $this->extend("layout/template"); ?>

<?= $this->section('content'); ?>
<div class="card card-primary px-3">
    <div class="card-header">
        <h3 class="card-title">Quick Example</h3>
    </div>
    <form action="<?= base_url('form6'); ?>" method="POST">
        <div class="card-body">
            <hr>
            <h2 class="text-center">ASSEMEN PRA ANESTESI</h2>
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>No. RM</label>
                        <input type="text" name="norm" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" name="tgllahir" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>NIK</label>
                        <input type="text" name="nik" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
            </div>
            <h5>Alergi Obat</h5>
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Alergi Obat 1</label>
                        <input type="text" name="alergi_obat1" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Alergi Obat 2</label>
                        <input type="text" name="alergi_obat2" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Alergi Obat 3</label>
                        <input type="text" name="alergi_obat3" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Alergi Obat 4</label>
                        <input type="text" name="alergi_obat4" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Tanggal/Jam Pemeriksaan</label>
                        <input type="datetime-local" name="tgl_pemeriksaan" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Rencana Tindakan</label>
                        <input type="text" name="rencana_tindakan" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
            </div>

            <h5>Tanda - tanda Vital Sebelum Tindakan</h5>
            <div class="row">
                <div class="col-sm-2">
                    <div class="form-group">
                        <label>TD</label>
                        <input type="text" name="td" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label>BB (Kg)</label>
                        <input type="number" name="bb" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label>TB (cm)</label>
                        <input type="number" name="tb" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label>Nadi</label>
                        <input type="text" name="nadi" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label>RR</label>
                        <input type="text" name="rr" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label>Suhu (C°)</label>
                        <input type="text" name="suhu" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Tanggal Tindakan</label>
                        <input type="date" name="tgl_tindakan" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Operator</label>
                        <input type="text" name="operator" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Spesialis Anestesi</label>
                        <input type="text" name="sa" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Jenis</label>
                        <select name="jenis_tindakan" class="form-control">
                            <option value="ODC">ODC</option>
                            <option value="Rawat Inap">Rawat Inap</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Obat Yang Sedang Dikonsumsi</label>
                        <select name="obat_konsumsi" id="obat_konsumsi" class="form-control">
                            <option value="Tidak">Tidak</option>
                            <option value="Ada">Ada</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Nama Obat</label>
                        <input type="text" name="nama_obat" id="nama_obat" class="form-control" placeholder="Enter ..." disabled>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Riwayat Anestesi</label>
                        <input type="text" name="riwayat_anestesi" id="riwayat_anestesi" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Jalan nafas/ Gigi- geligi / Leher</label>
                        <select name="jgl" id="jgl" class="form-control">
                            <option value="Jalan nafas">Jalan nafas</option>
                            <option value="Gigi- geligi">Gigi- geligi</option>
                            <option value="Leher">Leher</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Keterangan</label>
                        <input type="text" name="keterangan_jgl" id="keterangan_jgl" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Anamnesa dari</label>
                        <select name="anamnesa" id="anamnesa" class="form-control">
                            <option value="Pasien">Pasien</option>
                            <option value="Keluarga">Keluarga</option>
                            <option value="Wali / Orang tua">Wali / Orang tua</option>
                        </select>
                    </div>
                </div>
            </div>

            <h5>Respirasi</h5>
            <div class="row">
                <div class="col-sm-2">
                    <div class="form-group text-center">
                        <input type="checkbox" name="asma" class="form-control">
                        <label class="">Asma</label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group text-center">
                        <input type="checkbox" name="bronkitis" class="form-control">
                        <label class="">Bronkitis</label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group text-center">
                        <input type="checkbox" name="pnemonia" class="form-control">
                        <label class="">Pnemonia</label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group text-center">
                        <input type="checkbox" name="tuberkolosis" class="form-control">
                        <label class="">Tuberkolosis</label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group text-center">
                        <input type="checkbox" name="respirasi_dbn" class="form-control">
                        <label class="">Respirasi DBN</label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Keterangan</label>
                        <textarea name="keterangan_respirasi" class="form-control" cols="30" rows="5"></textarea>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Echocardiogram</label>
                        <textarea name="echocardiogram" class="form-control" cols="30" rows="5"></textarea>
                    </div>
                </div>

            </div>

            <h5>Cardlovascular</h5>
            <div class="row">
                <div class="col-sm-1">
                    <div class="form-group text-center">
                        <input type="checkbox" name="ekg_abnormal" class="form-control">
                        <label class="">EKG Abnormal</label>
                    </div>
                </div>
                <div class="col-sm-1">
                    <div class="form-group text-center">
                        <input type="checkbox" name="angina" class="form-control">
                        <label class="">Angina</label>
                    </div>
                </div>
                <div class="col-sm-1">
                    <div class="form-group text-center">
                        <input type="checkbox" name="chf" class="form-control">
                        <label class="">chf</label>
                    </div>
                </div>
                <div class="col-sm-1">
                    <div class="form-group text-center">
                        <input type="checkbox" name="disritmia" class="form-control">
                        <label class="">Disritmia</label>
                    </div>
                </div>
                <div class="col-sm-1">
                    <div class="form-group text-center">
                        <input type="checkbox" name="hipertensi" class="form-control">
                        <label class="">Hipertensi</label>
                    </div>
                </div>
                <div class="col-sm-1">
                    <div class="form-group text-center">
                        <input type="checkbox" name="murmur" class="form-control">
                        <label class="">Murmur</label>
                    </div>
                </div>
                <div class="col-sm-1">
                    <div class="form-group text-center">
                        <input type="checkbox" name="pacemaker" class="form-control">
                        <label class="">Pacemaker</label>
                    </div>
                </div>
                <div class="col-sm-1">
                    <div class="form-group text-center">
                        <input type="checkbox" name="penyakit_katup" class="form-control">
                        <label class="">Penyakit Katup</label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group text-center">
                        <input type="checkbox" name="card_dbn" class="form-control">
                        <label class="">Cardlovascular DBN</label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Keterangan</label>
                        <textarea name="keterangan_card" class="form-control" cols="30" rows="5"></textarea>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>EKG</label>
                        <textarea name="ekg" class="form-control" cols="30" rows="5"></textarea>
                    </div>
                </div>

            </div>


            <h5>Hepato / Gastrointestinal</h5>
            <div class="row">
                <div class="col-sm-2">
                    <div class="form-group text-center">
                        <input type="checkbox" name="bowel_obstruction" class="form-control">
                        <label class="">Bowel Obstruction</label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group text-center">
                        <input type="checkbox" name="sirosis" class="form-control">
                        <label class="">Sirosis</label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group text-center">
                        <input type="checkbox" name="jaundice" class="form-control">
                        <label class="">Jaundice</label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group text-center">
                        <input type="checkbox" name="nv" class="form-control">
                        <label class="">Nausea & Vomiting</label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group text-center">
                        <input type="checkbox" name="hg_dbn" class="form-control">
                        <label class="">Hepato / Gastrointestinal DBN</label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Keterangan</label>
                        <textarea name="keterangan_hg" class="form-control" cols="30" rows="5"></textarea>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Pemeriksaan Radiologi</label>
                        <textarea name="pr" class="form-control" cols="30" rows="5"></textarea>
                    </div>
                </div>

            </div>


            <h5>Neuro / Muscoluskeletal</h5>
            <div class="row">
                <div class="col-sm-2">
                    <div class="form-group text-center">
                        <input type="checkbox" name="cva" class="form-control">
                        <label class="">CVA/Stroke/TIA</label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group text-center">
                        <input type="checkbox" name="sakit_kepala" class="form-control">
                        <label class="">Sakit Kepala</label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group text-center">
                        <input type="checkbox" name="penurunan_kesadaran" class="form-control">
                        <label class="">Penurunan Kesadaran</label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group text-center">
                        <input type="checkbox" name="paralis" class="form-control">
                        <label class="">Paralis</label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group text-center">
                        <input type="checkbox" name="parastesia" class="form-control">
                        <label class="">Parastesia</label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group text-center">
                        <input type="checkbox" name="hp" class="form-control">
                        <label class="">Hemiparesa/Plegi</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group text-center">
                        <input type="checkbox" name="pp" class="form-control">
                        <label class="">Paraparese/Plegi</label>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group text-center">
                        <input type="checkbox" name="kejang" class="form-control">
                        <label class="">Kejang</label>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group text-center">
                        <input type="checkbox" name="nd" class="form-control">
                        <label class="">Neuromuscular Distroft</label>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group text-center">
                        <input type="checkbox" name="nm_dbn" class="form-control">
                        <label class="">Neuro / Muscoluskeletal DBN</label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Keterangan</label>
                        <textarea name="keterangan_nm" class="form-control" cols="30" rows="5"></textarea>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Spirometri / Bronkoskopi</label>
                        <textarea name="sb" class="form-control" cols="30" rows="5"></textarea>
                    </div>
                </div>

            </div>


            <h5>Renal / Endokrin</h5>
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group text-center">
                        <input type="checkbox" name="dm" class="form-control">
                        <label class="">DM</label>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group text-center">
                        <input type="checkbox" name="gg" class="form-control">
                        <label class="">Gagal ginjal / Dialisis</label>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group text-center">
                        <input type="checkbox" name="thyroid" class="form-control">
                        <label class="">Thyroid</label>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group text-center">
                        <input type="checkbox" name="re_dbn" class="form-control">
                        <label class="">Renal / Endokrin DBN</label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Keterangan</label>
                        <textarea name="keterangan_re" class="form-control" cols="30" rows="5"></textarea>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Lain - lain</label>
                        <textarea name="pp_lain" class="form-control" cols="30" rows="5"></textarea>
                    </div>
                </div>
            </div>

            <h5>Other</h5>
            <div class="row">
                <div class="col-sm-2">
                    <div class="form-group text-center">
                        <input type="checkbox" name="anemia" class="form-control">
                        <label class="">Anemia</label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group text-center">
                        <input type="checkbox" name="kanker" class="form-control">
                        <label class="">Kanker</label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group text-center">
                        <input type="checkbox" name="kemoterapi" class="form-control">
                        <label class="">Kemoterapi</label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group text-center">
                        <input type="checkbox" name="dehidrasi" class="form-control">
                        <label class="">Dehidrasi</label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group text-center">
                        <input type="checkbox" name="hemofilia" class="form-control">
                        <label class="">Hemofilia</label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group text-center">
                        <input type="checkbox" name="hamil" class="form-control">
                        <label class="">Hamil</label>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group text-center">
                        <input type="checkbox" name="o_dbn" class="form-control">
                        <label class="">Other DBN</label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Keterangan</label>
                        <textarea name="keterangan_o" class="form-control" cols="30" rows="5"></textarea>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>ASA</label>
                        <select name="asa" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="E">E</option>
                        </select>
                    </div>
                </div>
            </div>


            <h5>Pemeriksaan Lab.</h5>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Hb/Hct</label>
                        <input type="text" name="hbhct" id="hbhct" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Fungsi Ginjal : Ureum</label>
                        <input type="text" name="ureum" id="ureum" class="form-control" placeholder="Enter ...">
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Fungsi Ginjal : Creatinin</label>
                        <input type="text" name="creatinin" id="creatinin" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Fungsi Hati : SGOT</label>
                        <input type="text" name="sgot" id="sgot" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Fungsi Hati : SGPT</label>
                        <input type="text" name="sgpt" id="sgpt" class="form-control" placeholder="Enter ...">
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Fungsi Hati : Albumin</label>
                        <input type="text" name="albumin" id="albumin" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Fungsi Hati : Globulin</label>
                        <input type="text" name="globulin" id="globulin" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Fungsi Hati : Bilirubin</label>
                        <select name="bilirubin" id="bilirubin" class="form-control">
                            <option value="Direct">Direct</option>
                            <option value="Indirect">Indirect</option>
                        </select>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Direct</label>
                        <input type="text" name="direct" id="direct" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Indirect</label>
                        <input type="text" name="indirect" id="indirect" class="form-control" placeholder="Enter ..." disabled>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Elektrolit (NA)</label>
                        <input type="text" name="na" id="na" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Elektrolit (K)</label>
                        <input type="text" name="k" id="k" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Elektrolit (CI)</label>
                        <input type="text" name="ci" id="ci" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Elektrolit (Ca)</label>
                        <input type="text" name="ca" id="ca" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Elektrolit (Mg)</label>
                        <input type="text" name="mg" id="mg" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Lain - lain</label>
                        <input type="text" name="lab_lain" id="lab_lain" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Kesimpulan Pra Anestesi</label>
                        <textarea name="kesimpulan" class="form-control" cols="30" rows="5"></textarea>
                    </div>
                </div>
            </div>


            <h5>INSTRUKSI PRA ANESTESI</h5>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Puasa</label>
                        <input type="text" name="puasa" class="form-control">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Makanan Padat</label>
                        <input type="text" name="makanan_padat" id="makanan_padat" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Makanan Cair</label>
                        <input type="text" name="makanan_cair" id="makanan_cair" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Obat - obat Diberikan tertulis</label>
                        <select name="obat_diberikan" class="form-control">
                            <option value="Tidak">Tidak</option>
                            <option value="Ya">Ya</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Obat yang dihentikan</label>
                        <input type="text" name="obat_dihentikan" id="obat_dihentikan" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Rencana Anestesi</label>
                        <textarea name="rencana" class="form-control" cols="30" rows="5"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Dokter Anestesi</label>
                        <input type="text" name="dokter" id="dokter" class="form-control" placeholder="Enter ...">
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
    const obatKonsumsi = document.getElementById("obat_konsumsi");
    const namaObat = document.getElementById("nama_obat");

    obatKonsumsi.addEventListener("change", function() {
        if (obatKonsumsi.value === "Ada") {
            namaObat.removeAttribute("disabled");
        } else {
            namaObat.setAttribute("disabled", "disabled");
            namaObat.value = ''
        }
    });


    const bilirubinSelect = document.getElementById("bilirubin");
    const directInput = document.getElementById("direct");
    const indirectInput = document.getElementById("indirect");

    bilirubinSelect.addEventListener("change", function() {
        const selectedValue = bilirubinSelect.value;

        // Menonaktifkan semua input terlebih dahulu
        directInput.setAttribute("disabled", "disabled");
        indirectInput.setAttribute("disabled", "disabled");
        directInput.value = ''
        indirectInput.value = ''

        // Mengaktifkan input sesuai dengan pilihan yang dipilih
        if (selectedValue === "Direct") {
            directInput.removeAttribute("disabled");
        } else if (selectedValue === "Indirect") {
            indirectInput.removeAttribute("disabled");
        }
    });
</script>
<?= $this->endSection(); ?>