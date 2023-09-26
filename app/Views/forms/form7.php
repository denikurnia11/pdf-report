<?= $this->extend("layout/template"); ?>

<?= $this->section('content'); ?>
<div class="card card-primary px-3">
    <div class="card-header">
        <h3 class="card-title">Quick Example</h3>
    </div>
    <form action="<?= base_url('form7'); ?>" method="POST">
        <div class="card-body">
            <hr>
            <h2 class="text-center">RENCANA PEMULANGAN PASIEN</h2>
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
            <hr>
            <h2 class="text-center">SAAT MASUK RUMAH SAKIT</h2>
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Tanggal Masuk Rumah Sakit</label>
                        <input type="date" name="tgl_masuk" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Jam Masuk Rumah Sakit</label>
                        <input type="time" name="jam_masuk" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Alasan Masuk Rumah Sakit</label>
                        <textarea name="alasan_masuk" id="alasan_masuk" cols="30" rows="5" class="form-control"></textarea>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Diagnosa Medis</label>
                        <textarea name="diagnosa_medis" id="diagnosa_medis" cols="30" rows="5" class="form-control"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Estimasi / Rencana Tanggal Pemulangan Pasien</label>
                        <input type="date" name="tgl_estimasi" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
            </div>


            <hr>
            <h2 class="text-center">KETERANGAN RENCANA PEMULANGAN</h2>
            <hr>
            <label>1. Pengaruh rawat inap terhadap :</label>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Pasien dan keluarga pasien</label>
                        <select name="pkp" id="pkp" class="form-control">
                            <option value="Tidak">Tidak</option>
                            <option value="Ya">Ya</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Ya, Jelaskan</label>
                        <input type="text" name="pkp_ya" id="pkp_ya" class="form-control" placeholder="Enter ..." disabled>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Pekerjaan / sekolah</label>
                        <select name="ps" id="ps" class="form-control">
                            <option value="Tidak">Tidak</option>
                            <option value="Ya">Ya</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Ya, Jelaskan</label>
                        <input type="text" name="ps_ya" id="ps_ya" class="form-control" placeholder="Enter ..." disabled>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Keuangan</label>
                        <select name="keuangan" id="keuangan" class="form-control">
                            <option value="Tidak">Tidak</option>
                            <option value="Ya">Ya</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Ya, Jelaskan</label>
                        <input type="text" name="keuangan_ya" id="keuangan_ya" class="form-control" placeholder="Enter ..." disabled>
                    </div>
                </div>
            </div>
            <!-- 2 -->
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>2. Antisipasi terhadap masalah saat pulang</label>
                        <select name="antisipasi" id="antisipasi" class="form-control">
                            <option value="Tidak">Tidak</option>
                            <option value="Ya">Ya</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Ya, Jelaskan</label>
                        <input type="text" name="antisipasi_ya" id="antisipasi_ya" class="form-control" placeholder="Enter ..." disabled>
                    </div>
                </div>
            </div>
            <!-- 3 -->
            <label>3. Bantuan diperlukan dalam hal</label>
            <div class="row text-center">
                <div class="col-sm-3">
                    <div class="form-group">
                        <input type="checkbox" name="menyiapkan_makanan" class="form-control">
                        <label>menyiapkan makanan</label>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <input type="checkbox" name="makanan" class="form-control">
                        <label>makanan</label>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <input type="checkbox" name="diet" class="form-control">
                        <label>diet</label>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <input type="checkbox" name="menyiapkan_obat" class="form-control">
                        <label>menyiapkan obat</label>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-sm-3">
                    <div class="form-group">
                        <input type="checkbox" name="minum_obat" class="form-control">
                        <label>minum obat</label>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <input type="checkbox" name="mandi" class="form-control">
                        <label>mandi</label>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <input type="checkbox" name="berpakaian" class="form-control">
                        <label>berpakaian</label>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <input type="checkbox" name="transportasi" class="form-control">
                        <label>transportasi</label>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-sm-4">
                    <div class="form-group">
                        <input type="checkbox" name="edukasi_kesehatan" class="form-control">
                        <label>edukasi kesehatan</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <input type="checkbox" id="lainlain_checkbox" name="lainlain_bantuan" class="form-control">
                        <label for="lainlain_checkbox">Lain-lain</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Sebutkan</label>
                        <input type="text" id="lainlain_input" name="lainlain_isi" class="form-control" disabled>
                    </div>
                </div>
            </div>
            <!-- 4 -->
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>4. Adakah yang membantu keperluan diatas</label>
                        <select name="a4" id="a4" class="form-control">
                            <option value="Tidak">Tidak</option>
                            <option value="Ya">Ya</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Ya, Jelaskan</label>
                        <input type="text" name="a4_ya" id="a4_ya" class="form-control" placeholder="Enter ..." disabled>
                    </div>
                </div>
            </div>
            <!-- 5 -->
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>5. Apakah pasien tinggal sendiri setelah keluar dari rumah sakit ?</label>
                        <select name="a5" id="a5" class="form-control">
                            <option value="Tidak">Tidak</option>
                            <option value="Ya">Ya</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Ya, Jelaskan</label>
                        <input type="text" name="a5_ya" id="a5_ya" class="form-control" placeholder="Enter ..." disabled>
                    </div>
                </div>
            </div>
            <!-- 6 -->
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>6. Apakah pasien menggunakan peralatan medis di rumah setelah keluar rumah sakit ?</label>
                        <select name="a6" id="a6" class="form-control">
                            <option value="Tidak">Tidak</option>
                            <option value="Ya">Ya</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Ya, Jelaskan</label>
                        <input type="text" name="a6_ya" id="a6_ya" class="form-control" placeholder="Enter ..." disabled>
                    </div>
                </div>
            </div>
            <!-- 7 -->
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>7. Apakah pasien memerlukan alat bantu setelah keluar dari rumah sakit ?</label>
                        <select name="a7" id="a7" class="form-control">
                            <option value="Tidak">Tidak</option>
                            <option value="Ya">Ya</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Ya, Jelaskan</label>
                        <input type="text" name="a7_ya" id="a7_ya" class="form-control" placeholder="Enter ..." disabled>
                    </div>
                </div>
            </div>
            <!-- 8 -->
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>8. Apakah memerlukan bantuan / perawatan khusus dari rumah setelah keluar dari rumah sakit ?</label>
                        <select name="a8" id="a8" class="form-control">
                            <option value="Tidak">Tidak</option>
                            <option value="Ya">Ya</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Ya, Jelaskan</label>
                        <input type="text" name="a8_ya" id="a8_ya" class="form-control" placeholder="Enter ..." disabled>
                    </div>
                </div>
            </div>
            <!-- 9 -->
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>9. Apakah pasien bermasalah dalam memenuhi kebutuhan pribadinya setelah keluar dari rumah sakit ?</label>
                        <select name="a9" id="a9" class="form-control">
                            <option value="Tidak">Tidak</option>
                            <option value="Ya">Ya</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Ya, Jelaskan</label>
                        <input type="text" name="a9_ya" id="a9_ya" class="form-control" placeholder="Enter ..." disabled>
                    </div>
                </div>
            </div>
            <!-- 10 -->
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>10. Apakah pasien memiliki nyeri kronis dan kelelahan setelah keluar dari rumah sakit ?</label>
                        <select name="a10" id="a10" class="form-control">
                            <option value="Tidak">Tidak</option>
                            <option value="Ya">Ya</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Ya, Jelaskan</label>
                        <input type="text" name="a10_ya" id="a10_ya" class="form-control" placeholder="Enter ..." disabled>
                    </div>
                </div>
            </div>
            <!-- 11 -->
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>11. Apakah pasien dan keluarga memerlukan edukasi kesehatan setelah keluar dari rumah sakit ?</label>
                        <select name="a11" id="a11" class="form-control">
                            <option value="Tidak">Tidak</option>
                            <option value="Ya">Ya</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Ya, Jelaskan</label>
                        <input type="text" name="a11_ya" id="a11_ya" class="form-control" placeholder="Enter ..." disabled>
                    </div>
                </div>
            </div>
            <!-- 12 -->
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>12. Apakah Pasien dan keluarga memerlukan keterampilan khusus setelah keluar dari rumah sakit ?</label>
                        <select name="a12" id="a12" class="form-control">
                            <option value="Tidak">Tidak</option>
                            <option value="Ya">Ya</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Ya, Jelaskan</label>
                        <input type="text" name="a12_ya" id="a12_ya" class="form-control" placeholder="Enter ..." disabled>
                    </div>
                </div>
            </div>
            <label for="">TTD</label>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Tanggal</label>
                        <input type="date" class="form-control" name="tgl_ttd">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Jam</label>
                        <input type="time" class="form-control" name="jam_ttd">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Nama Perawat</label>
                        <input type="text" class="form-control" name="nama_perawat">
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
    function toggleInput(element, target) {
        const select = document.getElementById(element);
        const input = document.getElementById(target);
        select.addEventListener("change", function() {
            if (select.value === "Ya") {
                input.removeAttribute("disabled");
            } else {
                input.setAttribute("disabled", "disabled");
                input.value = '';
            }
        });
    }

    toggleInput('pkp', 'pkp_ya');
    toggleInput('ps', 'ps_ya');
    toggleInput('keuangan', 'keuangan_ya');
    toggleInput('antisipasi', 'antisipasi_ya');
    toggleInput('a4', 'a4_ya');
    toggleInput('a5', 'a5_ya');
    toggleInput('a6', 'a6_ya');
    toggleInput('a7', 'a7_ya');
    toggleInput('a8', 'a8_ya');
    toggleInput('a9', 'a9_ya');
    toggleInput('a10', 'a10_ya');
    toggleInput('a11', 'a11_ya');
    toggleInput('a12', 'a12_ya');

    const checkbox = document.getElementById("lainlain_checkbox");
    const inputText = document.getElementById("lainlain_input");

    checkbox.addEventListener("change", function() {
        if (checkbox.checked) {
            inputText.removeAttribute("disabled");
        } else {
            inputText.setAttribute("disabled", "disabled");
            inputText.value = '';
        }
    });
</script>
<?= $this->endSection(); ?>