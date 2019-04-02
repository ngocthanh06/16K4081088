<?php 
//Security bảo vệ file
if (!defined('BASEPATH'))
exit('No direct script access allowed');

class login extends CI_Controller
{
	//Load dữ liệu qua view
	public function load_form()
	{
		$this->load->view('login_view');
	}

	//truyền dl qua view
	public function load_form2()
	{
		//Khởi tạo 1 mảng
		$data = array(
			'title' => 'Đây là trang login',
			'message' => 'Nhập thông tin'
		);

		//Load và truyền dữ liệu vào view
		$this->load->view('login/index',$data);

	}
}


 ?>