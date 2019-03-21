<?php 

class Model_fuel extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function countTotalDiesel()
	{
		$sql = "SELECT SUM(qty) AS value_sum FROM products WHERE attribute_value_id LIKE '%152%'";
		$query = $this->db->query($sql);
		return $query->row()->value_sum;
	}
	public function countTotalSohol()
	{
		$sql = "SELECT SUM(qty) AS value_sum FROM products WHERE attribute_value_id LIKE '%142%'";
		$query = $this->db->query($sql);
		return $query->row()->value_sum;
	}

	public function countTotalCapacityDiesel()
	{
		$sql = "SELECT SUM(qty) AS value_sum FROM products WHERE attribute_value_id LIKE '%152%' and category_id LIKE '%22%'";
		$query = $this->db->query($sql);
		return $query->row()->value_sum;
	}

	public function countTotalCapacitySohol()
	{
		$sql = "SELECT SUM(qty) AS value_sum FROM products WHERE attribute_value_id LIKE '%142%' and category_id LIKE '%22%'";
		$query = $this->db->query($sql);
		return $query->row()->value_sum;
	}

	public function countTotalCreditDiesel()
	{
		$sql = "SELECT SUM(qty) AS value_sum FROM products WHERE attribute_value_id LIKE '%152%' and category_id LIKE '%12%'";
		$query = $this->db->query($sql);
		return $query->row()->value_sum;
	}

	public function countTotalCreditSohol()
	{
		$sql = "SELECT SUM(qty) AS value_sum FROM products WHERE attribute_value_id LIKE '%142%' and category_id LIKE '%12%'";
		$query = $this->db->query($sql);
		return $query->row()->value_sum;
	}

	public function countTotal_job_Diesel()
	{
		$sql = "SELECT SUM(qty) AS value_sum FROM products WHERE attribute_value_id LIKE '%\"42\",\"152\"%' and category_id LIKE '%12%'";

		$query = $this->db->query($sql);
		return $query->row()->value_sum;
	}

	public function countTotal_job_Sohol()
	{
		$sql = "SELECT SUM(qty) AS value_sum FROM products WHERE attribute_value_id LIKE '%\"42\",\"142\"%' and category_id LIKE '%12%'";

		$query = $this->db->query($sql);
		return $query->row()->value_sum;
	}

	public function countTotal_engine_Diesel()
	{
		$sql = "SELECT SUM(qty) AS value_sum FROM products WHERE attribute_value_id LIKE '%\"52\",\"152\"%' and category_id LIKE '%12%'";

		$query = $this->db->query($sql);
		return $query->row()->value_sum;
	}

	public function countTotal_engine_Sohol()
	{
		$sql = "SELECT SUM(qty) AS value_sum FROM products WHERE attribute_value_id LIKE '%\"52\",\"142\"%' and category_id LIKE '%12%'";

		$query = $this->db->query($sql);
		return $query->row()->value_sum;
	}

	public function countTotal_school_Diesel()
	{
		$sql = "SELECT SUM(qty) AS value_sum FROM products WHERE attribute_value_id LIKE '%\"62\",\"152\"%' and category_id LIKE '%12%'";

		$query = $this->db->query($sql);
		return $query->row()->value_sum;
	}

	public function countTotal_school_Sohol()
	{
		$sql = "SELECT SUM(qty) AS value_sum FROM products WHERE attribute_value_id LIKE '%\"62\",\"142\"%' and category_id LIKE '%12%'";

		$query = $this->db->query($sql);
		return $query->row()->value_sum;
	}

	public function countTotal_train_Diesel()
	{
		$sql = "SELECT SUM(qty) AS value_sum FROM products WHERE attribute_value_id LIKE '%\"72\",\"152\"%' and category_id LIKE '%12%'";

		$query = $this->db->query($sql);
		return $query->row()->value_sum;
	}

	public function countTotal_train_Sohol()
	{
		$sql = "SELECT SUM(qty) AS value_sum FROM products WHERE attribute_value_id LIKE '%\"72\",\"142\"%' and category_id LIKE '%12%'";

		$query = $this->db->query($sql);
		return $query->row()->value_sum;
	}
}