<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Home extends CI_Controller
{
	public function index()
	{
		$data=$this;
		dd($data);
		return $this->view('index',['data'=>$data]);
	}


}
