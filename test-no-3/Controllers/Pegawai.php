<?php namespace App\Controllers;

use App\Models\PegawaiModel;
use CodeIgniter\Controller;

class Pegawai extends Controller
{
    public function index()
    {
        $model = new PegawaiModel();
        $data['pegawai'] = $model->findAll();
        return view('pegawai/index', $data);
    }

    public function create()
    {
        return view('pegawai/create');
    }

    public function store()
    {
        helper(['form', 'url']);

        $model = new PegawaiModel();

        $data = [
            'pegawai_nama' => $this->request->getVar('pegawai_nama'),
            'pegawai_umur' => $this->request->getVar('pegawai_umur'),
            'pegawai_alamat' => $this->request->getVar('pegawai_alamat'),
            'foto' => $this->request->getVar('foto'),
        ];

        $model->insert($data);

        return redirect()->to('/pegawai');
    }

    public function edit($id = null)
    {
        $model = new PegawaiModel();

        $data['pegawai'] = $model->where('pegawai_id', $id)->first();

        return view('pegawai/edit', $data);
    }

    public function update()
    {
        helper(['form', 'url']);

        $model = new PegawaiModel();

        $id = $this->request->getVar('pegawai_id');

        $data = [
            'pegawai_nama' => $this->request->getVar('pegawai_nama'),
            'pegawai_umur' => $this->request->getVar('pegawai_umur'),
            'pegawai_alamat' => $this->request->getVar('pegawai_alamat'),
            'foto' => $this->request->getVar('foto'),
        ];

        $model->update($id, $data);

        return redirect()->to('/pegawai');
    }

    public function delete($id = null)
    {
        $model = new PegawaiModel();

        $model->delete($id);

        return redirect()->to('/pegawai');
    }
}
