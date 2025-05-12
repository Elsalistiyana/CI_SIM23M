<?php

class user_model extends CI_Model{
    public function insert_user($data) {
        return $this->db->insert('users', $data);
    }
    public function delete_berita($idberita) {
        return $this->db->delete('berita',['idberita'=>$idberita]);
    }
    public function get_berita_by_id($idberita){
        return $this->db->get_where('berita',['idberita'=>$idberita])->row_array();
    }
    public function update_berita($id, $data) {
        $this->db->where('idberita',$id);
        return $this->db->update('berita',$data);
    }
    public function check_user($username, $password) {
		$this->db->where('username', $username);
		$user = $this->db->get('users')->row();
		
		if ($user && password_verify($password, $user->password)) {
			return $user;
		}
		return false;
	}
}