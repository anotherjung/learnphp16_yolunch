

 <div id="save-widget">


<div class="form-control">


<?php if(!empty($resturant)) { ?>
	<h2> Or join a group </h2>
	
	<?php foreach($resturant as $row) { ?>
		<h3> <?= $row['restaurant'] ?> </h3>
		<p> <?= $row['leaveTime'] ?> </p>
		<div class="join">
			<form action="/main/goTogether" method="post" class="form-signin">
				<input type="text" name="person" class="form-control" placeholder="name" required autofocus>
				<input type="submit" value="Join" class="btn btn-lg btn-primary btn-block">
				<input type="hidden" name="id" value="<?= $row['id'] ?>">
			</form>
		</div>
<?	} } ?>
      </div>
  </div>




