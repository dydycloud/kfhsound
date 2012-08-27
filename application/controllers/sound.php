<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Sound extends CI_Controller {
 
    function __construct()
    {
        parent::__construct();
    }
 
    public function index()
    {
        $this->grocery_crud->set_table('son');
        $output = $this->grocery_crud->render();
 
        $this->_sound_output($output);                
    }
 
    function _sound_output($output = null)
 
    {
        $this->load->view('sound.php',$output);    
    }
}
 
/* End of file main.php */
/* Location: ./application/controllers/main.php */
 