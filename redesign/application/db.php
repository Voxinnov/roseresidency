<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
// Legacy / external database connection (unreferenced in CodeIgniter)
$conn = new mysqli('localhost', 'imprint_vox', ';Xc&?NR8dA3y', 'imprint_vox');
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>