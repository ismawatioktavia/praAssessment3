<?php

namespace App\Controllers;

use \App\Models\PaketModel;
use \App\Models\PenghuniModel;
use \App\Models\KaryawanModel;

class Home extends BaseController
{
	public function index()
	{
		$paketModel = new PaketModel();
		$paket = $paketModel->findAll();

		$data = [
			'title' => 'Paket | Ismawati Oktavia',
			'paket' => $paket
		];

		return view('pages/home', $data);
	}

	public function penghuni()
	{
		$penghuniModel = new PenghuniModel();
		$penghuni = $penghuniModel->findAll();
		$data = [
			'title' => 'Penghuni | Ismawati Oktavia',
			'penghuni' => $penghuni
		];
		return view('pages/penghuni', $data);
	}

	public function karyawan()
	{
		$karyawanModel = new KaryawanModel();
		$karyawan = $karyawanModel->findAll();
		$data = [
			'title' => 'Karyawan | Ismawati Oktavia',
			'karyawan' => $karyawan
		];
		return view('pages/karyawan', $data);
	}

	public function createpaket()
	{
		$data = [
			'title' => 'Tambah Paket | Ismawati Oktavia'
		];
		return view('pages/createpaket', $data);
	}

	public function createpenghuni()
	{
		$data = [
			'title' => 'Tambah Penghuni | Ismawati Oktavia'
		];
		return view('pages/createpenghuni', $data);
	}

	public function savepaket()
	{
		$this->PaketModel->save([
			'tanggal_datang' => $this->request->getVar('tanggal_datang'),
			'id_penghuni' => $this->request->getVar('id_penghuni'),
			'NIP' => $this->request->getVar('NIP'),
			'isi_paket' => $this->request->getVar('isi_paket'),
			'tanggal_ambil' => $this->request->getVar('tanggal_ambil')
		]);

		return redirect()->to('/pages');
	}

	public function delete($id_penghuni)
	{
		$this->PenghuniModel->delete($id_penghuni);
		return redirect()->to('/pages');
	}

	public function savepenghuni()
	{
		$this->PenghuniModel->save([
			'nama' => $this->request->getVar('nama'),
			'unit' => $this->request->getVar('unit'),
			'no_ktp' => $this->request->getVar('no_ktp'),
			'foto' => $this->request->getVar('foto')
		]);

		return redirect()->to('/pages');
	}

	public function editpenghuni()
	{
		$data = [
			'title' => 'Edit Penghuni | Ismawati Oktavia',
			'penghuni' => $this->penghuniModel->getPenghuni()
		];
		return view('pages/editpenghuni', $data);
	}
}
