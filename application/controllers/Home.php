<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
	public function index() {
$this->load->model('Client_model');
$this->load->model('Project_model');
$clients = $this->Client_model->getClients();
foreach ($clients as $client) {
$lastProject = $this->Project_model->getLastProjectByClient($client->id);
$client->last_project = $lastProject ? $lastProject->project_name : 'No Project';}  // from google 
	$data['clients'] = $clients;
$this->load->view('home_view', $data);
	} 
public function add(){
$this->load->model('Client_model');
if ($this->input->post()) {
$data = [
'name' => $this->input->post('name'),
'email' => $this->input->post('email')];
$this->Client_model->insertClient($data);
redirect('home');
        }
$this->load->view('client/add_view');}
	    public function edit($id){
    $this->load->model('Client_model');
  		$this->load->model('Project_model');
       $data['client'] = $this->Client_model->getClientById($id);
   $data['projects'] = $this->Project_model->getProjectsByClient($id); 
        $this->load->view('client/edit_view', $data);}
	public function update(): void {
		$id = $this->input->post('id');
		$data = [                                                 
	'name' => $this->input->post('name'),
		'email' => $this->input->post('email')
		];
	$projects = $this->input->post('projects'); 
	
		$this->load->model('Client_model');
		$this->Client_model->updateClient($id, $data);
		$this->load->model('Project_model');
	
	$this->Project_model->deleteProjectByClient($id);    // عشان اتاكد ان الكل انحذف تاقديم 

	if (!empty($projects)) {
			foreach ($projects as $project_name) {
				$this->Project_model->addProject([
					'client_id' => $id,
					'project_name' => $project_name
				]);}}
		redirect('home/edit/' . $id);	}  

public function project_list($client_id)
{ $this->load->model('Project_model');
	$this->load->model('client_model');
 $data['projects'] = $this->Project_model->getProjectsByClient($client_id);
 $data['client'] = $this->client_model->getClientById($client_id);
  $this->load->view('client/project_list_view', $data);
}
	public function delete($id){

 $this->load->model('client_model');
		$this->load->model('project_model');

$this->project_model->deleteProjectByClient($id);

  $this->client_model->deleteClient($id);	

  redirect('home'); 	} 
  public function delete_project($project_id, $client_id)
  {
	  $this->load->model('Project_model');
	  $this->Project_model->deleteProject($project_id);
  
	  redirect('home/edit/' . $client_id);
  }
}
