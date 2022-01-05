<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserDetails extends CI_Controller {
 
 function index()
 {
  $this->load->library('user_agent');
  $userdata['browser'] = $this->agent->browser();
  $userdata['browser_version'] = $this->agent->version();
  $userdata['os'] = $this->agent->platform();
  $userdata['ip_address'] = $this->input->ip_address();
  $this->load->view('user_details', $userdata);
 }
}
?>