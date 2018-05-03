<?php

if($_POST){
	require('core/core.php');
	switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
	    case 'add':
	      require('core/bin/ajax/goAdd.php');
	    break;
		
		default:
			# code...
		break;
	}
}else{
  header('location: index.php');
}


?>
