<?php 
//Security bảo vệ file
if (!defined('BASEPATH'))
exit('No direct script access allowed');
class News extends CI_Controller
{
	//load model
	//m_news là tên khác của new_model
	$this->load->view('new_model','m_news');

	//Gọi function trong model
	$new_list = $this->m_news->getlist();
}




 ?>