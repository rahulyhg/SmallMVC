<?php

class Controller {
	public $load;
	public $model;
	
	function __construct()
	{
		$this->load = new Load();
		$this->model = new Model();

		// determine which page
		if (isset($_GET['page']))
		{
			$page = $_GET['page'];
		}
		else
		{
			$page = 'home';
		}
		switch ($page)
		{
			case 'contact': 
				$this->contact();
				break;
			case 'login':
				$this->login();
				break;
			case 'validate':
				$this->validate();
				break;
			default:			
				$this->home();
				break;
		}
	}
	
	function home()
	{
		$data = $this->model->user_info();
		$this->load->view('home.php',$data);
	}
	
	function contact()
	{
		$this->load->view('contact.php');
	}
	
	function login()
	{
		$this->load->view('login.php');
	}
	
	function validate()
	{
		$data = $this->model->user_info();
		$data['userid'] = $_POST['userid'];
		$data['password'] = $_POST['password'];
		$this->load->view('home.php', $data);
	}
}