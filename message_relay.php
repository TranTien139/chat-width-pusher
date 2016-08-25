<?php 
require('lib/Pusher.php');

// Change the following with your app details:
// Create your own pusher account @ www.pusher.com
require('config_pusher.php');

// Check the receive message
if(isset($_POST['message']) && !empty($_POST['message'])) {     
    $data['message'] = $_POST['message'];   
    
    // Return the received message
    if($pusher->trigger('test_channel', 'my_event', $data)) {               
        echo 'success';         
    } else {        
        echo 'error';   
    }
}