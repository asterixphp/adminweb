<?php

require_once('base_controller.php');

class cel extends BASE_Controller
{
    var $menuList;
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('cel_db');

    }
    public function index()
    {
        $omList   = $this->cel_db->get_list(); // all user ,
        $B = $this->load->view('cel', array('omList' => $omList), TRUE );
        $this->_O( $B );
    }
}
?>
