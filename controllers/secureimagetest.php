<?php 

class Secureimagetest extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();

		$this->load->library('form_validation');
	}
	
	public function _check_captcha()
	{
		$this->load->library('securimage/securimage');
		$securimage = new Securimage();	

		if( ! $securimage->check($this->input->post('captcha')))
		{
			$this->form_validation->set_message('_check_captcha', 'The code you entered is invalid');
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}
	
	public function index()
	{
		if($this->input->post())
		{
			$val = $this->form_validation;
			$val->set_rules('captcha', 'captcha', 'trim|required|callback__check_captcha');
			$val->set_error_delimiters('<div class="error">','</div>');
		
			if($val->run())
			{
				echo 'Captcha OK';
			}
		}			

		$this->load->view('simagetest');
	}	

	public function securimage()
	{
		$this->load->config('csecurimage');
		$active = $this->config->item('si_active');		
		$allsettings = array_merge($this->config->item($active), $this->config->item('si_general'));

		$this->load->library('securimage/securimage');
		$img = new Securimage($allsettings);
		
		//$img->captcha_type = Securimage::SI_CAPTCHA_MATHEMATIC;
		
		$img->show(APPPATH . 'libraries/securimage/backgrounds/bg6.png');
	}
}