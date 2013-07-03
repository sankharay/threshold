<?php

class homem extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
	
	
	
	function login()
	{
		if($this->session->userdata('logged_in') != TRUE)
		redirect(BASE_URL.'/logout');
	}
	
    function listdata()
    {
        $this->db->select("*");
        $this->db->from("thrashold16");
        $this->db->order_by("dept");
        $q = $this->db->get();
        if($q->num_rows() > 0 )
		{
			foreach ($q->result() as $row) {
                $data[] = $row;
            }
        	return $data;
		}
		else
		{
		return FALSE;	
		}
        
	}
	
    function listduplicatedata()
    {
        $query = $this->db->query("SELECT count(`dept`) as cnt FROM `thrashold16` GROUP BY `dept` HAVING cnt > 1");
        if($query->num_rows() > 0 )
		{
			return $query->num_rows();
		}
		else
		{
		return FALSE;	
		}
        
	}
	
    function listduplicate_data()
    {
        $query = $this->db->query("SELECT dept,count(`dept`) as cnt FROM `thrashold16` GROUP BY `dept` HAVING cnt > 1");
        if($query->num_rows() > 0 )
		{
			return $query->result();
		}
		else
		{
		return FALSE;	
		}
        
	}
	
	function editdata($id)
	{
        $query = $this->db->query("select * from thrashold16 where dept='$id'");
		return $query->row();
	}
	
	function checkduprecord($id)
	{
        $this->db->select("*");
        $this->db->from("thrashold16");
        $this->db->where("dept",$id);
        $q = $this->db->get();
        if($q->num_rows() > 0 )
		{
			return TRUE;
		}
		else
		{
			return FALSE;			
		}
	}
}
?>
