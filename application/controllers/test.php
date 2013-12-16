<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct() {

        parent::__construct();
    }

	public function index()
	{
		$this->load->view('test');
	}

	public function testInput($i, $j)
	{
		$data = array( 'i' => $i, 'j' => $j );
		$this->load->view('test', $data);
	}

	public function show()
	{
//		$this->load->library('mongo_db');
		$data = $this->mongo_db->where_in('author',array('Pisit', 'pisit'))->get('cartoons');
		var_dump($data);
//		$this->mongo_db->where(array('author'=>'Pisit'))->set(array('title' => 'Drame'))->update('cartoons');

	}



}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */