<?php
// Ensures that the script cannot be accessed directly via URL
defined('BASEPATH') OR exit('No direct script access allowed');

// Define the TestController class, extending CI_Controller
class TestController extends CI_Controller {
    
    // Constructor function
    public function __construct()
    {
        // Call the parent class constructor
        parent::__construct();
        
        // Load the TestModel model
        $this->load->model('TestModel');
    }
    
    // Index method
    public function index()
    {
        // Retrieve the search key from the POST data
        $key = $this->input->post('key', true);
        
        // Call the set() method of the TestModel and pass the search key
        $data['store'] = $this->TestModel->set($key);
        
        // Load the TestView.php view and pass the data
        $this->load->view('TestView.php', $data);
    }
}
