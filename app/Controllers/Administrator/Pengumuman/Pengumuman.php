<?php

namespace App\Controllers\Administrator\Pengumuman;

use App\Controllers\BaseController;
use App\Models\PengumumanModel;

class Pengumuman extends BaseController
{
    public function __construct()
    {
        helper('form');
    }
    public function index(): string
    {
        $pengumumanModel = new PengumumanModel();
        $judul = $this->request->getGet('judul');
        $tanggal = $this->request->getGet('tanggal');

        $query = $pengumumanModel->select('*');

        if (!empty($judul)) {
            $query->like('judul', $judul);
        }

        if (!empty($tanggal)) {
            $query->where('DATE(created_at)', $tanggal);
        }

        $perPage = 10;  // Misalnya, Anda meng-set 10 sebagai jumlah item per halaman di sini atau mengambil dari konfigurasi

        $data = [
            'title' => 'Pengumuman',
            'pengumuman' => $query->paginate($perPage),
            'pager' => $pengumumanModel->pager,
            'perPage' => $perPage  // Tambahkan ini
        ];
        return view('administrator/pages/pengumuman/index', $data);
    }

    public function create()
    {
        $pengumumanModel = new PengumumanModel();

        if (!$this->request->is('post')) {
            return redirect()->to('/dashboard/pengumuman')->with('error', 'Metode request tidak diizinkan');
        }

        $rules = [
            'judul' => 'required',
            'deskripsi' => 'required',
        ];

        $data = $this->request->getPost(array_keys($rules));

        if (!$this->validateData($data, $rules)) {
            $errors = implode(', ', $this->validator->getErrors());
            return redirect()->to('/dashboard/pengumuman')->with('error', $errors);
        }

        $validData = $this->validator->getValidated();
        $pengumumanModel->insert($validData);

        return redirect()->to('/dashboard/pengumuman')->with('success', 'Pengumuman berhasil ditambahkan');
    }

    public function update()
    {
        $pengumumanModel = new PengumumanModel();

        if (!$this->request->is('PUT')) {
            return redirect()->to('/dashboard/pengumuman')->with('error', 'Metode request tidak diizinkan');
        }

        $rules = [
            'judul' => 'required',
            'deskripsi' => 'required',
        ];

        $data = $this->request->getPost(array_keys($rules));

        if (!$this->validateData($data, $rules)) {
            $errors = implode(', ', $this->validator->getErrors());
            return redirect()->to('/dashboard/pengumuman')->with('error', $errors);
        }

        $validData = $this->validator->getValidated();
        $pengumumanModel->update($this->request->getPost('id'), $validData);

        return redirect()->to('/dashboard/pengumuman')->with('success', 'Pengumuman berhasil diubah');
    }

    public function delete($id)
    {
        $pengumumanModel = new PengumumanModel();
        if (!$this->request->is('DELETE')) {
            return redirect()->to('/dashboard/pengumuman')->with('error', 'Metode request tidak diizinkan');
        }
        $pengumumanModel->delete($id);
        return redirect()->to('/dashboard/pengumuman')->with('success', 'Pengumuman berhasil dihapus');
    }
}
