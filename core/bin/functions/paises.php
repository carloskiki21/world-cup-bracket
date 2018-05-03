<?php

	function Paises(){

		$db = new Conexion();

		$sql = $db->query("SELECT * FROM paises");

		if($db->rows($sql) > 0) {
			while($d = $db->recorrer($sql)) {
				$paises[$d['id']] = array(
					'id' => $d['id'],
					'pais' => $d['pais'],
					'grupo' => $d['grupo'],
					'flag' => $d['flag']
				);
			}
			
		} else {
			$paises = false;
		}

		$db->liberar($sql);
		$db->close();

		return $paises;

	}

?>