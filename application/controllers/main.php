<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class main extends CI_Controller{

		public function index()
		{
			$header['title'] = "Where Do We Stand";
			
			$header_script['scripts'] = array('jquery.min','main','modalEffects','classie','jquery.dotdotdot.min');
			
			$header_style['styles'] = array('wdws','component');

			$this->load->view('templates/site-head',$header_style);

			$this->load->view('templates/site-header');

			$this->load->view('front/landingpage');

			$this->load->view('templates/site-footer',$header_script);			
		}
	}