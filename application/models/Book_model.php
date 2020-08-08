<?php
class Book_model extends CI_Model
{
	 protected $table = 'book';
	public function insert($data)
    {
    	$this->db->insert('book',$data);
        return $this->db->insert_id();

    }
    public function get_all() {
        return $this->db->get($this->table)
                        ->result();
    }
    public function get_by_id($id) {
        return $this->db->get_where($this->table, array('bookid' => $id))
                        ->result();
    }
    public function delete_book($id) {
    	$this->db->where('bookid', $id);
        return $this->db->delete($this->table);
    }
    public function update_book($id,$data) {
    	$this->db->where('bookid', $id);
        $this->db->update($this->table, $data);
    }
}