<?php include('html/overall/header.php'); ?>

<div class="" id="add" role="dialog">

	<div class="">

		<div class="">

			<div id="_AJAX_LOGIN_"></div>

			<div class="">

				<div role="form" onkeypress="return runScriptAdd(event)">
					<div class="">
						<label for="pais">Pais</label>
						<input type="text" class="form-control" id="pais" placeholder="Introducir pais">
					</div>

					<div class="">
						<label for="psw"> grupo</label>
						<input type="text" class="form-control" id="grupo" placeholder="Introducir grupo">
					</div>

					<div class="">
						<label for="psw"> flag</label>
						<input type="text" class="form-control" id="flag" placeholder="Introducir Bandera">
					</div>

					<button type="button" class="" onclick="goAdd()">Add</button>
				</div>

			</div>

			<div class="">
				<button type="button" class="" data-dismiss="modal">Cancelar</button>
			</div>

		</div>

	</div>

</div>

<script src="views/app/js/add.js"></script>

<?php include('html/overall/footer.php'); ?>
</html>