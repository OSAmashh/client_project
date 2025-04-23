<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client_model extends CI_Model {
    public function getClients() {  
        return $this->db->get('clients')->result();
    }
    public function insertClient($data){
        return $this->db->insert('clients', $data); // insert anto cli	
    }  
    public function updateClient($id, $data) {
        return $this->db->where('id', $id)->update('clients', $data);    }

public function getClientById($id){
       return $this->db->get_where('clients', ['id'=> $id]) ->row(); 
    }  

public function insertProjects($project , $client_id){
	foreach ($project as $project_name){
if (!empty(trim($project_name))){
	$this->db->insert('projects', [
		'project_name' => $project_name ,  'client_id' => $client_id ] ) ;
	
}		
	}
}
 //public function countClients(){
//	return $this->db->count_all('clients')  ;
 

// public function getlatestClients($limit){

//	return $this->db->order_by('id', 'DESC')->limit($limit)->get('clients')->result();
 
 public function deleteClient($id) {
return $this->db->delete('clients', ['id' => $id]) ;

 }
public function getLastProjectByClient($client_id){
return $this->db->order_by('id', 'DESC')->get_where('projects', ['client_id'=> $client_id])->row();
}

 }

 