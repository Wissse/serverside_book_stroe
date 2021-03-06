<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('checkout');
	}
	public function loadInfo()
	{
		$username=$this->input->post('username');

		$this->load->model('CheckoutModel');
		$res=$this->CheckoutModel->loadInfo($username);
	}
	public function loadBookInfo()
	{
		$bookID=$this->input->post('bookID');

		$this->load->model('CheckoutModel');
		$res=$this->CheckoutModel->loadBookInfo($bookID);
	}


}
