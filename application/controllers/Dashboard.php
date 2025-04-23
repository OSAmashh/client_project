<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
public function index(){
$this->load->model('Client_model');
$this->load->model('Project_model');
$data['total_clients']= $this->Client_model->countClients();

$data['total_projects']= $this->Project_model->countProjects();
$data['latest_clients']= $this->Client_model->getLatestClients(5);

$data['latest_projects']= $this->Project_model->getLatestProjects(5);

$this->load->view('client/dashboard_view', $data);
	}
}

?>
