<?php

class Mymodel extends CI_Model
{
    public function my_insert($table,$data)
    {
        return $this->db->insert($table,$data);
    }
    public function my_select($table,$column="*",$where=NULL) 
    {
        $this->db->select($column);
        $this->db->from($table);
        
        if(isset($where))
        {
            $this->db->where($where);
        }
        $recordset=$this->db->get();
        return $recordset->result();
    }
    public function my_query($sql)
    {
        return $this->db->query($sql)->result();
    }
    public function my_delete($table,$where) 
    {
        return $this->db->delete($table,$where);
    }
    public function my_update($table,$data,$where) 
    {
        return $this->db->update($table,$data,$where);
    }
    public function my_truncate($table) {
        
        return $this->db->truncate($table);
    }
    public function limit($table) {
        
            
    }
}