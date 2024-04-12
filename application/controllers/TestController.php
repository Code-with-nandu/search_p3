<?php 
defined ('BASEPATH') OR exit ('No Direct Script access allowed');
class TestController extends CI_Controller
{
    public function index()
    {
        $this->load->view('testView.php');
    }
}



?>
