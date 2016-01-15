<?php 

class Test_model extends CI_Model
{
    
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function findAll()
    {
        return $this->db->query("SELECT * FROM test");
        // Active Record Mode:
        // return $this->db->get("test");
    }

    public function find( $pk )
    {
        $pk = $this->db->escape($pk);
        $sql = "SELECT * FROM test WHERE id = " . $pk;
        return $this->db->query($sql);
        // Active Record Mode:
        // return $this->db->where('id', $pk)->get("test");
    }

    public function update( $pk, $data )
    {
        $pk = $this->db->escape($pk);
        foreach ($data as $key => $value) {
            $data[$key] = $this->db->escape($value);
        }
        
        $sql = "UPDATE test 
        SET full_name = {$data['full_name']}, phone ={$data['phone']}
        WHERE id = {$pk}";

        return $this->db->simple_query($sql);
        // Active Record Mode:
        // return $this->db->where('id', $pk)->update("test", $data);
        // all the escaping is done by CI.
    }

    public function create($data)
    {
        foreach ($data as $key => $value) {
            $data[$key] = $this->db->escape($value);
        }
        $sql = "INSERT INTO test (full_name, phone) VALUES ({$data['full_name']}, {$data['phone']})"; 
        return $this->db->simple_query($sql);
        // Active Record Mode:
        // return $this->db->insert("test", $data);
        // all the escaping is done by CI.
    }
    public function delete($pk)
    {
        $pk = $this->db->escape($pk);
        $sql = "DELETE FROM test WHERE id = {$pk}";
        return $this->db->simple_query($sql);
        // Active Record Mode:
        // return $this->db->where('id', $pk)->delete("test");
    }
}