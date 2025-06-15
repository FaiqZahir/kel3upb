<?php

namespace App\Controllers;

use App\Models\AntrianModel;
use App\Models\PelayananModel;
use App\Models\LoketModel;

class AntrianController extends BaseController
{
    public function index()
    {
        $model = new AntrianModel();
        $data['antrian'] = $model->select('antrian.*, pelayanan.nama_pelayanan, loket.nama_loket')
            ->join('pelayanan', 'pelayanan.id = antrian.id_pelayanan')
            ->join('loket', 'loket.id = antrian.id_loket')
            ->orderBy('waktu', 'DESC')
            ->findAll();

        return view('antrian/index', $data);
    }

    public function create()
    {
        $data['pelayanan'] = (new PelayananModel())->findAll();
        $data['loket'] = (new LoketModel())->findAll();
        return view('antrian/create', $data);
    }

    public function store()
    {
        $model = new AntrianModel();
        $model->insert([
            'nomor_antrian' => $this->request->getPost('nomor_antrian'),
            'nama_pengunjung' => $this->request->getPost('nama_pengunjung'),
            'id_pelayanan' => $this->request->getPost('id_pelayanan'),
            'id_loket' => $this->request->getPost('id_loket'),
            'waktu' => $this->request->getPost('waktu')
        ]);

        return redirect()->to('/antrian');
    }

    public function edit($id)
    {
        $model = new AntrianModel();
        $data['antrian'] = $model->find($id);
        $data['pelayanan'] = (new PelayananModel())->findAll();
        $data['loket'] = (new LoketModel())->findAll();
        return view('antrian/edit', $data);
    }

    public function update($id)
    {
        $model = new AntrianModel();
        $model->update($id, [
            'nomor_antrian' => $this->request->getPost('nomor_antrian'),
            'nama_pengunjung' => $this->request->getPost('nama_pengunjung'),
            'id_pelayanan' => $this->request->getPost('id_pelayanan'),
            'id_loket' => $this->request->getPost('id_loket'),
            'waktu' => $this->request->getPost('waktu')
        ]);

        return redirect()->to('/antrian');
    }

    public function delete($id)
    {
        (new AntrianModel())->delete($id);
        return redirect()->to('/antrian');
    }

    public function invoice($id)
    {
        $antrianModel = new \App\Models\AntrianModel();
        $data['antrian'] = $antrianModel
            ->select('antrian.*, pelayanan.nama_pelayanan, loket.nama_loket')
            ->join('pelayanan', 'pelayanan.id = antrian.id_pelayanan')
            ->join('loket', 'loket.id = antrian.id_loket')
            ->find($id);

        return view('antrian/invoice', $data);
    }
}