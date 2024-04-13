<?php
// Ensures that the script cannot be accessed directly via URL
defined('BASEPATH') OR exit('No direct script access allowed');

// Define the TestModel class, extending CI_Model
class TestModel extends CI_Model
{
    // Constructor function
    public function __construct()
    {
        // Call the parent class constructor
        parent::__construct();
    }

    // Function to retrieve records based on a search key
    public function set($key)
    {
        // Select all columns from the 'products' table
        $this->db->select('*');
        
        // Add a condition to the query to search for 'name' column that contains the search key
        $this->db->like('name', $key);
        
        // Add another condition to the query to search for 'description' column that contains the search key
        $this->db->or_like('description', $key);
        
        // Execute the query and return the result as an array of objects
        return $this->db->get('products')->result();
    }
}
