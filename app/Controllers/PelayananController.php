<?php

namespace App\Controllers;

use App\Models\PelayananModel;
use CodeIgniter\Controller;

class PelayananController extends Controller
{
    public function index()
    {
        $model = new PelayananModel();
        $data['pelayanan'] = $model->findAll();
        return view('pelayanan/index', $data);
    }

    public function create()
    {
        return view('pelayanan/create');
    }

    public function store()
    {
        $model = new PelayananModel();
        $model->save([
            'nama_pelayanan' => $this->request->getPost('nama_pelayanan')
        ]);
        return redirect()->to('/pelayanan');
    }

    public function edit($id)
    {
        $model = new PelayananModel();
        $data['pelayanan'] = $model->find($id);
        return view('pelayanan/edit', $data);
    }

    public function update($id)
    {
        $model = new PelayananModel();
        $model->update($id, [
            'nama_pelayanan' => $this->request->getPost('nama_pelayanan')
        ]);
        return redirect()->to('/pelayanan');
    }

    public function delete($id)
    {
        $model = new PelayananModel();
        $model->delete($id);
        return redirect()->to('/pelayanan');
    }
}