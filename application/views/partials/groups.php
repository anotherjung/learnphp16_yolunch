<div class="today">
	<h2> Start a group </h2>
	<form action="/main/lunch" method="post" class="form-signin">
		<input type="text" name="restaurant" class="form-control" placeholder="Restaurant" required autofocus>
		<input type="text" name="hour" placeholder="hh" class="form-control" id="together"><input type="text" name="min" placeholder="mm" class="form-control" id="together">
		<input type="submit" class="btn btn-lg btn-primary btn-block" value="Go!">
	</form>
</div>

<?php
if(!empty($groups)) {
	?>
	<h2> Or join a group </h2>
	<?php
	foreach($groups as $row) {
		?>
		<h3> <?= $row['restaurant'] ?> </h3>
		<p> <?= $row['leaveTime'] ?> </p>
		<div class="join">
			<form action="/main/goTogether" method="post" class="form-signin">
				<input type="text" name="person" class="form-control" placeholder="name" required autofocus>
				<input type="submit" value="Join" class="btn btn-lg btn-primary btn-block">
				<input type="hidden" name="id" value="<?= $row['id'] ?>">
			</form>
		</div>

		<?
	}
}

?>