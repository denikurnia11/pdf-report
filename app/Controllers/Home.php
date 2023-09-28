<?php

namespace App\Controllers;

use App\Models\CrudModel;
use App\Models\Form2Model;
use App\Models\Form3Model;
use App\Models\Form3PersalinanModel;
use App\Models\Form4Model;
use App\Models\Form4TableModel;
use App\Models\Form6Model;
use App\Models\Form7Model;
use App\Models\Form8Model;
use App\Models\Form9Model;
use CodeIgniter\HTTP\RedirectResponse;
use Dompdf\Dompdf;

class Home extends BaseController
{
    protected $CrudModel, $Form2Model, $Form3Model, $Form3PersalinanModel, $Form4Model, $Form4TableModel, $Form6Model, $Form7Model, $Form8Model, $Form9Model;
    public function __construct()
    {
        $this->CrudModel = new CrudModel();
        $this->Form2Model = new Form2Model();
        $this->Form3Model = new Form3Model();
        $this->Form3PersalinanModel = new Form3PersalinanModel();
        $this->Form4Model = new Form4Model();
        $this->Form4TableModel = new Form4TableModel();
        $this->Form6Model = new Form6Model();
        $this->Form7Model = new Form7Model();
        $this->Form8Model = new Form8Model();
        $this->Form9Model = new Form9Model();
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
        $dompdf->stream('form2.pdf', array('Attachment' => 0));
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
        $dompdf->stream('form3.pdf', array('Attachment' => 0));
    }

    // ========================================================= FORM 4 =========================================================
    public function list_form4(): string
    {
        $data = [
            'form4data' => $this->Form4Model->orderBy('id', 'DESC')->findAll()
        ];
        return view('lists/form4', $data);
    }

    public function form4(): string
    {
        return view('forms/form4');
    }

    public function save_form4(): RedirectResponse
    {
        $data = $this->request->getVar();
        $dataTemp = $this->request->getVar();

        unset($data['jenis_tindakan']);
        unset($data['lokasi']);
        unset($data['tgl_mulai']);
        unset($data['tgl_selesai']);
        unset($data['total_hari']);
        unset($data['tgl_infeksi']);
        unset($data['tgl_infeksi2']);
        // dd($data);
        $this->Form4Model->insert($data);
        $id = $this->Form4Model->insertID();

        for ($i = 0; $i < count($dataTemp['jenis_tindakan']); $i++) {
            $this->Form4TableModel->insert([
                'jenis_tindakan' => $dataTemp['jenis_tindakan'][$i],
                'lokasi' => $dataTemp['lokasi'][$i],
                'tgl_mulai' => $dataTemp['tgl_mulai'][$i],
                'tgl_selesai' => $dataTemp['tgl_selesai'][$i],
                'total_hari' => $dataTemp['total_hari'][$i],
                'tgl_infeksi' => $dataTemp['tgl_infeksi'][$i],
                'tgl_infeksi2' => $dataTemp['tgl_infeksi2'][$i],
                'form4_id' => $id,
            ]);
        }


        return redirect()->to(base_url('list-form4'));
    }

    public function downloadForm4($id)
    {
        $data = $this->Form4Model->find($id);
        $data['tabel'] = $this->Form4TableModel->where('form4_id', $id)->findAll();
        // dd($data);
        // instantiate and use the dompdf class
        $dompdf = new Dompdf();
        $dompdf->loadHtml(view('pdf/form4', $data));

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'potrait');

        // Render the HTML as PDF
        $dompdf->render();
        $dompdf->stream('form4.pdf', array('Attachment' => 0));
    }


    // ========================================================= FORM 6 =========================================================
    public function list_form6(): string
    {
        $data = [
            'form6data' => $this->Form6Model->orderBy('id', 'DESC')->findAll()
        ];
        return view('lists/form6', $data);
    }
    public function form6(): string
    {
        return view('forms/form6');
    }
    public function save_form6(): RedirectResponse
    {
        $data = $this->request->getVar();
        // dd($data);
        $this->Form6Model->insert($data);
        $id = $this->Form6Model->insertID();

        return redirect()->to(base_url('list-form6'));
    }


    public function downloadForm6($id)
    {
        $data = $this->Form6Model->find($id);

        // instantiate and use the dompdf class
        $dompdf = new Dompdf();
        $dompdf->loadHtml(view('pdf/form6', $data));

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'potrait');

        // Render the HTML as PDF
        $dompdf->render();
        $dompdf->stream('form6.pdf', array('Attachment' => 0));
    }

    // ========================================================= FORM 7 =========================================================
    public function list_form7(): string
    {
        $data = [
            'form7data' => $this->Form7Model->orderBy('id', 'DESC')->findAll()
        ];
        return view('lists/form7', $data);
    }
    public function form7(): string
    {
        return view('forms/form7');
    }
    public function save_form7(): RedirectResponse
    {
        $data = $this->request->getVar();
        // dd($data);
        $this->Form7Model->insert($data);
        $id = $this->Form7Model->insertID();

        return redirect()->to(base_url('list-form7'));
    }


    public function downloadForm7($id)
    {
        $data = $this->Form7Model->find($id);

        // instantiate and use the dompdf class
        $dompdf = new Dompdf();
        $dompdf->loadHtml(view('pdf/form7', $data));

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'potrait');

        // Render the HTML as PDF
        $dompdf->render();
        $dompdf->stream('form7.pdf', array('Attachment' => 0));
    }
    // ========================================================= FORM 8 =========================================================
    public function list_form8(): string
    {
        $data = [
            'form8data' => $this->Form8Model->orderBy('id', 'DESC')->findAll()
        ];
        return view('lists/form8', $data);
    }
    public function form8(): string
    {
        return view('forms/form8');
    }
    public function save_form8(): RedirectResponse
    {
        $data = $this->request->getVar();
        // dd($data);
        $this->Form8Model->insert($data);
        $id = $this->Form8Model->insertID();

        return redirect()->to(base_url('list-form8'));
    }


    public function downloadForm8($id)
    {
        $data = $this->Form8Model->find($id);

        // instantiate and use the dompdf class
        $dompdf = new Dompdf();
        $dompdf->loadHtml(view('pdf/form8', $data));

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'potrait');

        // Render the HTML as PDF
        $dompdf->render();
        $dompdf->stream('form8.pdf', array('Attachment' => 0));
    }
    // ========================================================= FORM 9 =========================================================
    public function list_form9(): string
    {
        $data = [
            'form9data' => $this->Form9Model->orderBy('id', 'DESC')->findAll()
        ];
        return view('lists/form9', $data);
    }
    public function form9(): string
    {
        return view('forms/form9');
    }
    public function save_form9(): RedirectResponse
    {
        $data = $this->request->getVar();
        // dd($data);
        $this->Form9Model->insert($data);
        $id = $this->Form9Model->insertID();

        return redirect()->to(base_url('list-form9'));
    }


    public function downloadForm9($id)
    {
        // $data = $this->Form9Model->find($id);

        // instantiate and use the dompdf class
        $dompdf = new Dompdf();
        $dompdf->loadHtml(view('pdf/form9'));

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'potrait');

        // Render the HTML as PDF
        $dompdf->render();
        $dompdf->stream('form9.pdf', array('Attachment' => 0));
    }
}
