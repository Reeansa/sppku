<?php

namespace App\Controllers\Administrator\Tahun_Akademik;

use App\Controllers\BaseController;
use App\Models\TahunAkademikModel;

class TahunAkademik extends BaseController
{
    public function index(): string
    {
        $tahunAkademikModel = new TahunAkademikModel();
        $tahunAkademik = $this->request->getGet('tahun_akademik');

        $query = $tahunAkademikModel->select('*');

        if (!empty($tahunAkademik)) {
            $query->like('tahun_sekarang', $tahunAkademik);
        }

        if (!empty($tahunAkademik)) {
            $query->where('tahun_selanjutnya', $tahunAkademik);
        }

        $perPage = 10;  // Misalnya, Anda meng-set 10 sebagai jumlah item per halaman di sini atau mengambil dari konfigurasi

        $data = [
            'title' => 'Tahun Akademik',
            'tahunAkademik' => $query->paginate($perPage),
            'pager' => $tahunAkademikModel->pager,
            'perPage' => $perPage  // Tambahkan ini
        ];
        return view('administrator/pages/tahun_akademik/index', $data);
    }

    public function create()
    {
        $tahunAkademikModel = new TahunAkademikModel();

        if (!$this->request->is('post')) {
            return redirect()->to('/dashboard/data-master/tahun-akademik')->with('error', 'Metode request tidak diizinkan');
        }

        $rules = [
            'tahun_sekarang' => 'required',
            'tahun_selanjutnya' => 'required',
            'status_periode' => 'required',
        ];

        $data = $this->request->getPost(array_keys($rules));

        if (!$this->validateData($data, $rules)) {
            $errors = implode(', ', $this->validator->getErrors());
            return redirect()->to('/dashboard/data-master/tahun-akademik')->with('error', $errors);
        }

        $validData = $this->validator->getValidated();

        $tahunSekarang = date('Y', strtotime($validData['tahun_sekarang']));
        $tahunSelanjutnya = date('Y', strtotime($validData['tahun_selanjutnya']));

        $finishData = [
            'tahun_sekarang' => $tahunSekarang,
            'tahun_selanjutnya' => $tahunSelanjutnya,
            'status_periode' => $validData['status_periode'],
        ];

        $tahunAkademikModel->insert($finishData);

        return redirect()->to('/dashboard/data-master/tahun-akademik')->with('success', 'Tahun Akademik berhasil ditambahkan');
    }

    public function show()
    {
    }
}
