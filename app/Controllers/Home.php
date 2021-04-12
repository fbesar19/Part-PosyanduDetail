<?php

namespace App\Controllers;


use App\Models\ImunisasiModel;
use App\Models\DetailImunisasiModel;
use App\Models\BayiModel;

class Home extends BaseController
{
	protected $imunisasimodel;
	protected $detailmodel;
	protected $bayimodel;

	public function __construct()
	{
		$this->imunisasimodel = new ImunisasiModel();
		$this->detailmodel = new DetailImunisasiModel();
		$this->bayimodel = new BayiModel();
	}

	public function index()
	{
		$imunisasi = $this->imunisasimodel->findAll();
		$data = [
			'title' => "Imunisasi",
			'imunisasi' => $imunisasi
		];
		return view('home', $data);
	}

	public function detail_imunisasi($kategori)
	{
		$detail = $this->detailmodel->where('jadwal_imunisasi', $kategori)->findAll();
		$data = [
			'title' => "Imunisasi",
			'detail' => $detail
		];
		return view('detail_imunisasi', $data);
	}

	public function tambah_imunisasi()
	{
		$data = array(
			'tanggal' => $this->request->getPost('tanggal'),
			'judul' => $this->request->getPost('judul')
		);

		$this->imunisasimodel->save($data);
		$bayi = $this->bayimodel->findAll();
		foreach ($bayi as $d) {
			$this->detailmodel->save([
				'nama' => $d['nama'],
				'ket_hadir' => 'tidak hadir',
				'catatan' => '',
				'jadwal_imunisasi' => $this->request->getPost('judul')
			]);
		}
		return redirect()->to(base_url('Home'));
	}
}
