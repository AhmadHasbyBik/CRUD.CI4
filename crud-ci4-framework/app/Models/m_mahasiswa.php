<?php
namespace App\Models;

use CodeIgniter\Model;

class m_mahasiswa extends Model
{
	function __construct()
	{
		$this->db = db_connect();
	}

	function tampildata()
	{
		return $this->db->table('mahsiswa')->get();
	}

	function simpandata($data)
	{
		return $this->db->table('mahsiswa')->insert($data);
	}

	function hapusdata($npm)
	{
		return $this->db->table('mahsiswa')->delete(['npm' => $npm]);
	}

	function ambildata($npm)
	{
		return $this->db->table('mahsiswa')->getWhere(['npm' => $npm]);
	}

	function editdata($data, $npm)
	{
		return $this->db->table('mahsiswa')->update($data, ['npm' => $npm]);
	}
}