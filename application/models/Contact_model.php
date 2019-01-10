<?php
class Contact_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function getContacts()
    {
        $query = $this->db->get('contacts');
        return $query->result();
    }   

    public function getContactById($id)
    {
    	$query = $this->db->get_where('contacts', array('id' => $id));
    	return $query->result()[0];
    }

    public function addContact($data = array())
	{
	    $insert = $this->db->insert('contacts', $data);
	    if ($insert) {
	        return $this->db->insert_id(); 
	    }
	    else {
	        return false;
	    }
	}

	public function updateContact($data = array(), $id)
	{
	    $update = $this->db->update('contacts', $data, array('id'=>$id));
	    return $update ? true : false;
	}

	public function deleteContact($id)
	{
	    $delete = $this->db->delete('contacts', array('id'=>$id));
	    return $delete ? true : false;
	}
}