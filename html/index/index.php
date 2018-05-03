<?php include('html/overall/header.php'); ?>

<body>

	<div class="container">
		<div class="col">
			<div class="item-1">
				<h4>Grupo A</h4>
				<div class="pais">
					<?php
						foreach($_paises as $pais => $array){
							if ($_paises[$pais]['grupo'] == 'a') {
								# code...

								$HTML = '<p>';
								$HTML .= '<span class="flag-icon flag-icon-'. $_paises[$pais]['flag'] .'"></span>';
								$HTML .= '<a href="?view=pais='.$_paises[$pais]['id'].'">';
								$HTML .= strtoupper($_paises[$pais]['pais']);
								$HTML .= '</a>';
								
								echo  $HTML;
							}		
						}
					?>
				</div>
			</div>
			<div class="item-1">
				<h4>Grupo B</h4>
				<div class="pais">
					<?php
						foreach($_paises as $pais => $array){
							if ($_paises[$pais]['grupo'] == 'b') {
								# code...

								$HTML = '<p>';
								$HTML .= '<span class="flag-icon flag-icon-'. $_paises[$pais]['flag'] .'"></span>';
								$HTML .= '<a href="?view=pais='.$_paises[$pais]['id'].'">';
								$HTML .= strtoupper($_paises[$pais]['pais']);
								$HTML .= '</a>';
								
								echo  $HTML;
							}		
						}
					?>
				</div>
			</div>
			<div class="item-1">
				<h4>Grupo C</h4>
				<div class="pais">
					<?php
						foreach($_paises as $pais => $array){
							if ($_paises[$pais]['grupo'] == 'c') {
								# code...

								$HTML = '<p>';
								$HTML .= '<span class="flag-icon flag-icon-'. $_paises[$pais]['flag'] .'"></span>';
								$HTML .= '<a href="?view=pais='.$_paises[$pais]['id'].'">';
								$HTML .= strtoupper($_paises[$pais]['pais']);
								$HTML .= '</a>';
								
								echo  $HTML;
							}		
						}
					?>
				</div>
			</div>
			<div class="item-1">
				<h4>Grupo D</h4>
				<div class="pais">
					<?php
						foreach($_paises as $pais => $array){
							if ($_paises[$pais]['grupo'] == 'd') {
								# code...

								$HTML = '<p>';
								$HTML .= '<span class="flag-icon flag-icon-'. $_paises[$pais]['flag'] .'"></span>';
								$HTML .= '<a href="?view=pais='.$_paises[$pais]['id'].'">';
								$HTML .= strtoupper($_paises[$pais]['pais']);
								$HTML .= '</a>';
								
								echo  $HTML;
							}		
						}
					?>
				</div>
			</div>		
		</div>

		<div class="col right">
			<div class="item-1">
				<h4>Grupo E</h4>
				<div class="pais">
					<?php
						foreach($_paises as $pais => $array){
							if ($_paises[$pais]['grupo'] == 'e') {
								# code...

								$HTML = '<p>';
								$HTML .= '<span class="flag-icon flag-icon-'. $_paises[$pais]['flag'] .'"></span>';
								$HTML .= '<a href="?view=pais='.$_paises[$pais]['id'].'">';
								$HTML .= strtoupper($_paises[$pais]['pais']);
								$HTML .= '</a>';
								
								echo  $HTML;
							}		
						}
					?>
				</div>
			</div>
			<div class="item-1">
				<h4>Grupo F</h4>
				<div class="pais">
					<?php
						foreach($_paises as $pais => $array){
							if ($_paises[$pais]['grupo'] == 'f') {
								# code...

								$HTML = '<p>';
								$HTML .= '<span class="flag-icon flag-icon-'. $_paises[$pais]['flag'] .'"></span>';
								$HTML .= '<a href="?view=pais='.$_paises[$pais]['id'].'">';
								$HTML .= strtoupper($_paises[$pais]['pais']);
								$HTML .= '</a>';
								
								echo  $HTML;
							}		
						}
					?>
				</div>
			</div>
			<div class="item-1">
				<h4>Grupo G</h4>
				<div class="pais">
					<?php
						foreach($_paises as $pais => $array){
							if ($_paises[$pais]['grupo'] == 'g') {
								# code...

								$HTML = '<p>';
								$HTML .= '<span class="flag-icon flag-icon-'. $_paises[$pais]['flag'] .'"></span>';
								$HTML .= '<a href="?view=pais='.$_paises[$pais]['id'].'">';
								$HTML .= strtoupper($_paises[$pais]['pais']);
								$HTML .= '</a>';
								
								echo  $HTML;
							}		
						}
					?>
				</div>
			</div>
			<div class="item-1">
				<h4>Grupo H</h4>
				<div class="pais">
					<?php
						foreach($_paises as $pais => $array){
							if ($_paises[$pais]['grupo'] == 'h') {
								# code...

								$HTML = '<p>';
								$HTML .= '<span class="flag-icon flag-icon-'. $_paises[$pais]['flag'] .'"></span>';
								$HTML .= '<a href="?view=pais='.$_paises[$pais]['id'].'">';
								$HTML .= strtoupper($_paises[$pais]['pais']);
								$HTML .= '</a>';
								
								echo  $HTML;
							}		
						}
					?>
				</div>
			</div>		
		</div>

	</div>
</body>

<?php include('html/overall/footer.php'); ?>
</html>