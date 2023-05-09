<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pencarian_siswa extends CI_Controller
{
	public function tabel($nama_siswa)
	{
		$isi['siswa'] = $this->Model_siswa->cariSiswa($nama_siswa);
		$this->load->view('templates/header');
		$this->load->view('tampilan_pencarian', $isi);
		$this->load->view('templates/footer');
	}

	public function adm_siswa($nis)
	{
		$isi['header'] = $this->Model_siswa->cariSiswaNISHeader($nis);
		$isi['siswa'] = $this->Model_siswa->cariSiswaNIS($nis);
		$this->load->view('templates/header');
		$this->load->view('tampilan_cari_adm_siswa', $isi);
		$this->load->view('templates/footer');
	}

	public function detail($siswa_tahun)
	{
		$isi['header'] = $this->Model_siswa->detailSiswaNISHeader($siswa_tahun);
		$isi['siswa'] = $this->Model_siswa->detailSiswaNIS($siswa_tahun);
		$isi['spp'] = $this->Model_siswa->detailTabelSiswaNIS($siswa_tahun);
		$this->load->view('templates/header');
		$this->load->view('tampilan_detail_adm_siswa', $isi);
		$this->load->view('templates/footer');
	}
}
