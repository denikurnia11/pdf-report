<?php

namespace App\Controllers;

use App\Models\CrudModel;
use App\Models\Form2Model;
use App\Models\Form3Model;
use App\Models\Form3PersalinanModel;
use CodeIgniter\HTTP\RedirectResponse;
use Dompdf\Dompdf;

class Home extends BaseController
{
    protected $CrudModel, $Form2Model, $Form3Model, $Form3PersalinanModel;
    public function __construct()
    {
        $this->CrudModel = new CrudModel();
        $this->Form2Model = new Form2Model();
        $this->Form3Model = new Form3Model();
        $this->Form3PersalinanModel = new Form3PersalinanModel();
    }

    public function index(): string
    {
        $data['list'] = $this->CrudModel->getAll('data', 'id')->getResult();
        return view('welcome_message', $data);
    }

    // ========================================================= FORM 2 =========================================================
    public function list_form2(): string
    {
        $data = [
            'form2data' => $this->Form2Model->orderBy('id', 'DESC')->findAll()
        ];
        return view('lists/form2', $data);
    }

    public function form2(): string
    {
        return view('forms/form2');
    }

    public function save_form2(): RedirectResponse
    {
        function cekNull($data)
        {
            if (is_null($data)) {
                return 'off';
            } else {
                return 'on';
            }
        }

        function formatWaktu($waktu)
        {
            return date("Y-m-d H:i:s", strtotime($waktu));
        }
        // dd($this->request->getVar());
        $data = [
            'nama' => $this->request->getVar('nama'),
            'norm' => $this->request->getVar('norm'),
            'tgllahir' => $this->request->getVar('tgllahir'),
            'nik' => $this->request->getVar('nik'),
            'jenis_bahasa' => $this->request->getVar('bahasa'),
            'bahasa' => $this->request->getVar('bahasa') == 'lainlain' || $this->request->getVar('bahasa') == 'daerah' ? $this->request->getVar('bahasalain') : $this->request->getVar('bahasa'),
            'penerjemah' => $this->request->getVar('penerjemah') == 'Ya' ? $this->request->getVar('penerjemah-bahasa') : $this->request->getVar('penerjemah'),
            'keterbatasan' => $this->request->getVar('keterbatasan'),
            'cara_belajar' => $this->request->getVar('cara-belajar'),
            'tingkat_pendidikan' => $this->request->getVar('tingkat-pendidikan'),
            'kemampuan_membaca' => $this->request->getVar('kemampuan-membaca'),
            'hambatan' => $this->request->getVar('hambatan'),
            'kesediaan' => $this->request->getVar('kesediaan'),
            'kebutuhan_pendidikan' => $this->request->getVar('kebutuhan-pendidikan') == 'lainlain' ? $this->request->getVar('kebutuhan-pendidikan-lain') : $this->request->getVar('kebutuhan-pendidikan'),
            'pemberi_pendidikan' => $this->request->getVar('pemberi-pendidikan') == 'lainlain' ? $this->request->getVar('pemberi-pendidikan-lain') : $this->request->getVar('pemberi-pendidikan'),
            'waktu_pemberian' => $this->request->getVar('waktu_pemberian'),
            'sasaran' => $this->request->getVar('sasaran'),
            'cara_edukasi' => $this->request->getVar('cara-edukasi'),
            // Pemberi Asuhan
            'nama_pa' => $this->request->getVar('nama_pa'),
            'norm_pa' => $this->request->getVar('norm_pa'),
            'tgllahir_pa' => $this->request->getVar('tgllahir_pa'),
            'nik_pa' => $this->request->getVar('nik_pa'),
            // Medis
            'm_a' => cekNull($this->request->getVar('m_a')),
            'm_b' => cekNull($this->request->getVar('m_b')),
            'm_c' => cekNull($this->request->getVar('m_c')),
            'm_d' => cekNull($this->request->getVar('m_d')),
            'm_e' => cekNull($this->request->getVar('m_e')),
            'm_f' => cekNull($this->request->getVar('m_f')),
            'm_waktu' => ($this->request->getVar('m_waktu')),
            'm_pasien' => ($this->request->getVar('m_pasien')),
            'm_edukator' => ($this->request->getVar('m_edukator')),
            // Keperawatan
            'k_a' => cekNull($this->request->getVar('k_a')),
            'k_b' => cekNull($this->request->getVar('k_b')),
            'k_c' => cekNull($this->request->getVar('k_c')),
            'k_d' => cekNull($this->request->getVar('k_d')),
            'k_e' => cekNull($this->request->getVar('k_e')),
            'k_f' => cekNull($this->request->getVar('k_f')),
            'k_g' => cekNull($this->request->getVar('k_g')),
            'k_h' => cekNull($this->request->getVar('k_h')),
            'k_waktu' => ($this->request->getVar('k_waktu')),
            'k_pasien' => ($this->request->getVar('k_pasien')),
            'k_edukator' => ($this->request->getVar('k_edukator')),
            // Farmasi
            'f_a' => cekNull($this->request->getVar('f_a')),
            'f_b' => cekNull($this->request->getVar('f_b')),
            'f_c' => cekNull($this->request->getVar('f_c')),
            'f_d' => cekNull($this->request->getVar('f_d')),
            'f_e' => cekNull($this->request->getVar('f_e')),
            'f_f' => cekNull($this->request->getVar('f_f')),
            'f_waktu' => ($this->request->getVar('f_waktu')),
            'f_pasien' => ($this->request->getVar('f_pasien')),
            'f_edukator' => ($this->request->getVar('f_edukator')),
            // Diet & Nutrisi
            'dn_a' => cekNull($this->request->getVar('dn_a')),
            'dn_b' => cekNull($this->request->getVar('dn_b')),
            'dn_c' => cekNull($this->request->getVar('dn_c')),
            'dn_d' => cekNull($this->request->getVar('dn_d')),
            'dn_waktu' => ($this->request->getVar('dn_waktu')),
            'dn_pasien' => ($this->request->getVar('dn_pasien')),
            'dn_edukator' => ($this->request->getVar('dn_edukator')),
            // Rehabilitasi Medik
            'rm_a' => cekNull($this->request->getVar('rm_a')),
            'rm_waktu' => ($this->request->getVar('rm_waktu')),
            'rm_pasien' => ($this->request->getVar('rm_pasien')),
            'rm_edukator' => ($this->request->getVar('rm_edukator')),
            // Manajemen Nyeri
            'mn_a' => cekNull($this->request->getVar('mn_a')),
            'mn_b' => cekNull($this->request->getVar('mn_b')),
            'mn_waktu' => ($this->request->getVar('mn_waktu')),
            'mn_pasien' => ($this->request->getVar('mn_pasien')),
            'mn_edukator' => ($this->request->getVar('mn_edukator')),

        ];
        $this->Form2Model->insert($data);
        return redirect()->to(base_url('list-form2'));
    }

    public function downloadForm2($id)
    {
        $data = $this->Form2Model->find($id);
        // instantiate and use the dompdf class
        $dompdf = new Dompdf();
        $dompdf->loadHtml(view('pdf/form2', $data));

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'potrait');

        // Render the HTML as PDF
        $dompdf->render();
        $dompdf->stream('my.pdf', array('Attachment' => 0));
    }

    // ========================================================= FORM 3 =========================================================
    public function list_form3(): string
    {
        $data = [
            'form3data' => $this->Form3Model->orderBy('id', 'DESC')->findAll()
        ];
        return view('lists/form3', $data);
    }

    public function form3(): string
    {
        return view('forms/form3');
    }
    public function save_form3(): RedirectResponse
    {
        $data = $this->request->getVar();
        $dataTemp = $this->request->getVar();

        unset($data['tgl_partus']);
        unset($data['tempat_partus']);
        unset($data['umur_hamil']);
        unset($data['jenis_persalinan']);
        unset($data['penolong_persalinan']);
        unset($data['penyulit']);
        unset($data['jkbb']);
        unset($data['keadaan_anak']);
        // dd($data);
        $this->Form3Model->insert($data);
        $id = $this->Form3Model->insertID();

        for ($i = 0; $i < count($dataTemp['tgl_partus']); $i++) {
            $this->Form3PersalinanModel->insert([
                'tgl_partus' => $dataTemp['tgl_partus'][$i],
                'tempat_partus' => $dataTemp['tempat_partus'][$i],
                'umur_hamil' => $dataTemp['umur_hamil'][$i],
                'jenis_persalinan' => $dataTemp['jenis_persalinan'][$i],
                'penolong_persalinan' => $dataTemp['penolong_persalinan'][$i],
                'penyulit' => $dataTemp['penyulit'][$i],
                'jkbb' => $dataTemp['jkbb'][$i],
                'keadaan_anak' => $dataTemp['keadaan_anak'][$i],
                'form3_id' => $id,
            ]);
        }

        return redirect()->to(base_url('list-form3'));
    }


    public function downloadForm3($id)
    {
        $data = $this->Form3Model->find($id);
        $data['tabel'] = $this->Form3PersalinanModel->where('form3_id ', $id)->findAll();

        // instantiate and use the dompdf class
        $dompdf = new Dompdf();
        $dompdf->loadHtml(view('pdf/form3', $data));

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'potrait');

        // Render the HTML as PDF
        $dompdf->render();
        $dompdf->stream('my.pdf', array('Attachment' => 0));
    }
}
