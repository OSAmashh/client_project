<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project_model extends CI_Model { 
	public function getProjectsByClient($client_id) {
return $this->db->select('projects.*, clients.name as client_name')->from('projects')
			->join('clients', 'clients.id = projects.client_id')
			->where('projects.client_id', $client_id)
			->get()->result();
	}
    public function addProject($data) {
        return $this->db->insert('projects', $data);
    }       //koajdlasmcla
    public function deleteProject($id) {
        return $this->db->delete('projects', ['id' => $id]);
    }
    public function deleteProjectByClient($client_id) {
        return $this->db->where('client_id', $client_id)->delete('projects'); 
    }
    public function insertProjects($projects, $client_id) {
        foreach ($projects as $project) {
            $this->db->insert('projects', [ 
                'project_name' => $project,
                'client_id' => $client_id
            ]);
        }
    } 
 // public function countProjects() {
    //    return $this->db->count_all('projects'); 
    //    public function getLatestProjects($limit = 5) {
   //     return $this->db
     //               ->limit($limit)
       //             ->order_by('id', 'DESC')
         //           ->get('projects')
           //         ->result();
public function getLastProjectByClient($client_id) {
return $this->db->where('client_id', $client_id)->order_by('id', 'DESC')->limit(1)
->get('projects')->row();
}
}
?>
