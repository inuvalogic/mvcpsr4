<?php

namespace Mvc\Controller;

class PageController extends \Mvc\Core\App
{
	public function indexAction()
	{
		$data = array(
			'nama_lengkap' => 'Wisnu Hafid',
			'alamat' => 'Margahayu Raya',
		);

		$isi_halaman = $this->loadView('home', $data);

		echo $this->loadView('layout', array(
			'content' => $isi_halaman
		));
	}

	public function aboutAction()
	{
		echo 'ini halaman about us';
	}

	public function alternatifAction()
	{
		echo $this->loadView('layout', array(
			'content' => $this->loadView('home', array(
				'nama_lengkap' => 'Wisnu Hafid',
				'alamat' => 'Margahayu Raya',
		))));
	}
}