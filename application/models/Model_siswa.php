<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_siswa extends CI_Model
{


	public function cariSiswa($nama_siswa)
	{
		$sql = "SELECT siswa.id_siswa,siswa.nis,siswa.nama_siswa,jurusan.jurusan,siswa.kelas FROM `siswa`
INNER JOIN jurusan
ON siswa.jurusan=jurusan.kode
WHERE siswa.nama_siswa LIKE '%$nama_siswa%'
GROUP BY nis;";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function cariSiswaNISHeader($nis)
	{
		$sql = "SELECT siswa.id_siswa,siswa.nis,siswa.nama_siswa,jurusan.jurusan,siswa.kelas FROM `siswa`
INNER JOIN jurusan
ON siswa.jurusan=jurusan.kode
WHERE siswa.nis LIKE '%$nis%'
GROUP BY siswa.nis;";
		$query = $this->db->query($sql);
		return $query->row_array();
	}

	public function cariSiswaNIS($nis)
	{
		$sql = "SELECT siswa.id_siswa,siswa.kelas,group_kelas.nama_group,jurusan.jurusan,tahun_ajaran.tahun_ajaran, concat(siswa.id_siswa,siswa.tahun_ajaran) AS siswa_tahun FROM `siswa`
INNER JOIN jurusan
ON siswa.jurusan=jurusan.kode
INNER join group_kelas
ON siswa.group_kelas=group_kelas.id_groupKelas
INNER JOIN tahun_ajaran
ON siswa.tahun_ajaran=tahun_ajaran.id_tahun_ajaran
WHERE siswa.nis = '$nis';";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function detailSiswaNISHeader($siswa_tahun)
	{
		$sql = "SELECT spp_siswa.id_siswa,siswa.nama_siswa, siswa.kelas ,siswa.nis,tahun_ajaran.tahun_ajaran FROM `spp_siswa`
INNER JOIN siswa
ON spp_siswa.id_siswa=concat(siswa.id_siswa,siswa.tahun_ajaran)
INNER JOIN tahun_ajaran
ON siswa.tahun_ajaran=tahun_ajaran.id_tahun_ajaran
WHERE spp_siswa.id_siswa = '$siswa_tahun' 
GROUP BY id_siswa;";
		$query = $this->db->query($sql);
		return $query->row_array();
	}


	public function detailSiswaNIS($siswa_tahun)
	{
		$sql = "SELECT *,count(*) AS jumlah_lunas FROM `spp_siswa`
WHERE spp_siswa.id_siswa='$siswa_tahun' AND spp_siswa.status='LUNAS'
GROUP BY spp_siswa.id_siswa
ORDER BY spp_siswa.date DESC;";
		$query = $this->db->query($sql);
		return $query->row_array();
	}

	public function detailTabelSiswaNIS($siswa_tahun)
	{
		$sql = "SELECT * FROM `spp_siswa`
WHERE spp_siswa.id_siswa='$siswa_tahun'
ORDER BY spp_siswa.kode_bulan;";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
}
