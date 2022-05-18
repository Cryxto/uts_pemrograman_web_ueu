<?php

namespace App\Controllers;

use App\Models\BeasiswaModel;

class Beasiswa extends BaseController
{
    protected $beasiswaModel;
    public function __construct()
    {
        $this->beasiswaModel = new BeasiswaModel();
    }
    public function index()
    {
        // $beasiswa = $this->beasiswaModel->findAll();
        $data = [
            'title' => 'Daftar Beasiswa',
            'beasiswa' => $this->beasiswaModel->getBeasiswa()
        ];
        //ini cara tanpa model
        // $db=\config\Database::connect();
        // $beasiswa = $db->query("SELECT * FROM table_beasiswa;");
        // foreach($beasiswa->getResultArray() as $row){
        //     d($row);
        // }

        //cara pakai model
        return view('beasiswa/index', $data);
    }
    public function detail($slug)
    {
        $data = [
            'title' => 'Detail beasiswa',
            'beasiswa' => $this->beasiswaModel->getbeasiswa($slug)
        ];
        if (empty($data['beasiswa'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Jenis beasiswa ' . $slug . ' tidak ditemukan!');
        }
        return view('beasiswa/detail', $data);
    }
    public function create()
    {
        // session();
        $data = [
            'title' => 'Form Tambah Data Beasiswa',
            'validation'=>\Config\Services::validation()
        ];
        return view('beasiswa/create', $data);
    }
    public function save()
    {
        //menyiapkan slug
        if (!$this->validate(
            [
                'jenis' => 'required|is_unique[beasiswa.jenis_beasiswa]',
                'tujuan' => 'required',
                'informasi' => 'required'
            ]
        )) {
            // $validation = \Config\Services::validation();
            // dd($validation);
            return redirect()->to(base_url() . '/beasiswa/create')->withInput();
        }
        $slug = url_title($this->request->getVar('jenis'), '-', true);
        //menyimpan newline di database
        // $informasi = nl2br($this->request->getVar('informasi'));
        $this->beasiswaModel->save([
            'jenis_beasiswa' => $this->request->getVar('jenis'),
            'slug' => $slug,
            'beasiswa_untuk' => $this->request->getVar('tujuan'),
            // 'informasi'=>$this->request->getVar('informasi')
            'informasi' => $this->request->getVar('informasi')
        ]);
        session()->setFlashdata('pesan', 'Data beasiswa berhasil ditambahkan');
        return redirect()->to(base_url() . '/beasiswa');
    }
    public function delete($id){
        $this->beasiswaModel->delete($id);
        session()->setFlashdata('pesan', 'Data beasiswa berhasil dihapus');
        return redirect()->to('/beasiswa');
    }
    public function edit($slug){
        $data = [
            'title' => 'Form Ubah Data Beasiswa',
            'validation'=>\Config\Services::validation(),
            'beasiswa'=> $this->beasiswaModel->getBeasiswa($slug)
        ];
        return view('beasiswa/edit', $data);
    }
    public function update($id){
        $beasiswaLama = $this->beasiswaModel->getBeasiswa($this->request->getVar('slug'));
        if($beasiswaLama['jenis_beasiswa']==$this->request->getVar('jenis')){
            $rule_jenis='required';
        }
        else{
            $rule_jenis='required|is_unique[beasiswa.jenis_beasiswa]';
        }
        if (!$this->validate(
            [
                'jenis' => $rule_jenis,
                'tujuan' => 'required',
                'informasi' => 'required'
            ]
        )) {
            // $validation = \Config\Services::validation();
            // dd($validation);
            return redirect()->to(base_url() . '/beasiswa/edit/'.$this->request->getVar('slug'))->withInput();
        }
        $slug = url_title($this->request->getVar('jenis'), '-', true);
        //menyimpan newline di database
        // $informasi = nl2br($this->request->getVar('informasi'));
        $this->beasiswaModel->save([
            'id'=>$id,
            'jenis_beasiswa' => $this->request->getVar('jenis'),
            'slug' => $slug,
            'beasiswa_untuk' => $this->request->getVar('tujuan'),
            // 'informasi'=>$this->request->getVar('informasi')
            'informasi' => $this->request->getVar('informasi')
        ]);
        session()->setFlashdata('pesan', 'Data beasiswa berhasil diubah');
        return redirect()->to(base_url() . '/beasiswa');
    }
}
