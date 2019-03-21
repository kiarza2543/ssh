<?php 

class Dashboard extends Admin_Controller 
{
	public function __construct()
	{
		parent::__construct();

		$this->not_logged_in();

		$this->data['page_title'] = 'แผงควบคุม';
		
		$this->load->model('model_fuel');
		
	}

	/* 
	* It only redirects to the manage category page
	* It passes the total product, total paid orders, total users, and total stores information
	into the frontend.
	*/
	public function index()
	{
		$this->data['total_diesel'] = $this->model_fuel->countTotalDiesel();
		$this->data['total_sohol'] = $this->model_fuel->countTotalSohol();
		$this->data['total_capacity_diesel'] = $this->model_fuel->countTotalCapacityDiesel();
		$this->data['total_capacity_sohol'] = $this->model_fuel->countTotalCapacitySohol();
		$this->data['total_credit_diesel'] = $this->model_fuel->countTotalCreditDiesel();
		$this->data['total_credit_sohol'] = $this->model_fuel->countTotalCreditSohol();
		$this->data['total_job_diesel'] = $this->model_fuel->countTotal_job_Diesel();
		$this->data['total_job_sohol'] = $this->model_fuel->countTotal_job_Sohol();
		$this->data['total_engine_diesel'] = $this->model_fuel->countTotal_engine_Diesel();
		$this->data['total_engine_sohol'] = $this->model_fuel->countTotal_engine_Sohol();
		$this->data['total_school_diesel'] = $this->model_fuel->countTotal_school_Diesel();
		$this->data['total_school_sohol'] = $this->model_fuel->countTotal_school_Sohol();
		$this->data['total_train_diesel'] = $this->model_fuel->countTotal_train_Diesel();
		$this->data['total_train_sohol'] = $this->model_fuel->countTotal_train_Sohol();
		$user_id = $this->session->userdata('id');
		$is_admin = ($user_id == 1) ? true :false;

		$this->data['is_admin'] = $is_admin;
		$this->render_template('dashboard', $this->data);
	}
}