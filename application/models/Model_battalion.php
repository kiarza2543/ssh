<?php 

class Model_battalion extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	/* get the brand data */
	public function getBattalionData($id = null)
	{
		if($id) {
			$sql = "SELECT * FROM battalion WHERE id = ?";
			$query = $this->db->query($sql, array($id));
			return $query->row_array();
		}
	}

	public function update($data, $id)
	{
		if($data && $id) {
			$this->db->where('id', $id);
			$update = $this->db->update('battalion', $data);
			return ($update == true) ? true : false;
		}
	}


}