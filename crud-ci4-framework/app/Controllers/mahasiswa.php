<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\m_mahasiswa;

class mahasiswa extends Controller
{
	
	public function index()
	{
		$mhs = new m_mahasiswa();
		$data = [
			'tampildata' => $mhs->tampildata()->getResult()
		];
		echo view('v_mahasiswa', $data);
	}

	public function tambahdata()
	{
		helper('form');
		echo view('v_tambahdata');
	}

	public function simpandata()
	{
		$data = [
			'npm' => $this->request->getpost('npm'),
			'nama' => $this->request->getpost('nama'),
			'prodi' => $this->request->getpost('prodi'),
			'angkatan' => $this->request->getpost('angkatan'),
		];

		$mhs = new m_mahasiswa();
		$simpan = $mhs->simpandata($data);

		if($simpan){
			return redirect()->to('mahasiswa/index');
		}
	}

	function hapus()
	{
		$uri = service('uri');
		$npm = $uri->getSegment('3');

		$mhs = new m_mahasiswa();
		$mhs->hapusdata($npm);

		return redirect()->to('mahasiswa/index');
	}

	function updatedata()
	{
		helper('form');
		$uri = service('uri');
		$npm = $uri->getSegment('3');

		$mhs = new m_mahasiswa();
		
		$ambildata = $mhs->ambildata($npm);

		if(count($ambildata->getResult()) > 0){
			$row = $ambildata->getRow();
			$data = [
				'npm' => $npm,
				'nama' => $row->nama,
				'prodi' => $row->prodi,
				'angkatan' => $row->angkatan,
			];
		}

		echo view('v_updatedata', $data);
	}

	public function simpanupdatedata()
	{
		$npm = $this->request->getpost('npm');
		$data = [
			'nama' => $this->request->getpost('nama'),
			'prodi' => $this->request->getpost('prodi'),
			'angkatan' => $this->request->getpost('angkatan'),
		];

		$mhs = new m_mahasiswa();
		$simpan = $mhs->editdata($data, $npm);

		if($simpan){
			return redirect()->to('mahasiswa/index');
		}
	}

}