<?php
/* 
 *
 */

require('core/core.php'); //this include all var needed

if (isset($_GET['view'])) {

	if (file_exists('core/controllers/' . strtolower($_GET['view']) . 'Controller.php')) {

		include('core/controllers/' . strtolower($_GET['view']) . 'Controller.php');

	} else {

		include('core/controllers/errorController.php');

	}
} else {

	include('core/controllers/indexController.php');

}

?>
