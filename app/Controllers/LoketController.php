<?php

namespace App\Controllers;

use App\Models\LoketModel;
use CodeIgniter\Controller;

class LoketController extends Controller
{
    public function index()
    {
        $model = new LoketModel();
        $data['loket'] = $model->findAll();
        return view('loket/index', $data);
    }

    public function create()
    {
        return view('loket/create');
    }

    public function store()
    {
        $model = new LoketModel();
        $model->save([
            'nama_loket' => $this->request->getPost('nama_loket')
        ]);
        return redirect()->to('/loket');
    }

    public function edit($id)
    {
        $model = new LoketModel();
        $data['loket'] = $model->find($id);
        return view('loket/edit', $data);
    }

    public function update($id)
    {
        $model = new LoketModel();
        $model->update($id, [
            'nama_loket' => $this->request->getPost('nama_loket')
        ]);
        return redirect()->to('/loket');
    }

    public function delete($id)
    {
        $model = new LoketModel();
        $model->delete($id);
        return redirect()->to('/loket');
    }
}