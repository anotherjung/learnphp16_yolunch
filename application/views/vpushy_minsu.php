<!-- Pushy Menu -->
<nav class="pushy pushy-left">
<ul class="menu">
<h2>Start A Group</h2>
<form action="/main/create_group" method="post" class="form-signin">
<select name='restaurant' required autofocus>
	<?php
	foreach ($restaurants as $restaurant) { ?>
		<option value='<?=$restaurant['id']?>'><?=$restaurant['name']?></option>
<?  }

	?>
</select>
<!-- <input type="text" name="restaurant" class="form-control" placeholder="Restaurant" required autofocus> -->
<input type="text" name="hour" placeholder="hh" class="form-control" id="together"><input type="text" name="min" placeholder="mm" class="form-control" id="together">
<input type="submit" class="btn btn-lg btn-primary btn-block" value="Go!">
</form>
</ul>

<ul class="menu">
<h2>Join A Group</h2>
<form action="/main/join_group" method="post" class="form-signin">
<select name='user_id' required autofocus>
	<?php
	foreach ($users as $user) { ?>
		<option value='<?=$user['id']?>'><?=$user['firstname']?> <?=$user['lastname']?></option>
<?  }

	?>
</select>
<select name='group_id' required autofocus style='width: 300px;'>
	<?php
	foreach ($groups as $group) { ?>
		<option value='<?=$group['id']?>'>Group #<?=$group['id']?> (<?=$group['restaurant_name']?>) <?=$group['count']?> ppl currently</option>
<?  }

	?>
</select>
<!-- <input type="text" name="restaurant" class="form-control" placeholder="Restaurant" required autofocus> -->
<input type="submit" class="btn btn-lg btn-primary btn-block" value="Go!">
</form>
</ul>

<ul class="menu">
<h2>Add A Resturant</h2>
<form action='main/add_restaurants' method='post'>
<input type='text' name='name' class="form-control" placeholder="Name" required autofocus> 
<input type='text' name='address' class="form-control" placeholder="Address" required autofocus>

<li><input class="btn-group btn-lg btn-success" role="group" aria-label="Third group"  type="submit" name="Register" value='korean'>
<input class="btn-group btn-lg btn-success" role="group" aria-label="Third group"  type="submit" name="cuisine" value='italian'>
<input class="btn-group btn-lg btn-success" role="group" aria-label="Third group"  type="submit" name="cuisine" value='chinese'>
<input class="btn-group btn-lg btn-success" role="group" aria-label="Third group"  type="submit" name="cuisine" value='mexican'>
<input class="btn-group btn-lg btn-success" role="group" aria-label="Third group"  type="submit" name="cuisine" value='viet'>
<input class="btn-group btn-lg btn-success" role="group" aria-label="Third group" type="submit" name="cuisine" value='japanese'></li>
<input class="btn-group btn-lg btn-success" role="group" aria-label="Third group" type="submit" name="cuisine" value='american'></li>
</form>
<ul>
</nav> <!-- ends nav-left -->

<nav class="menu pushy pushy-right">
<form>
<ul class="menu">
<li><h1>do you want to eat with the group?</h1></li>
<li><input class="button-primary btn-lg btn-success" type="submit" name="eat" value=" Yes">
<input class="button-primary btn-lg btn-danger" type="submit" name="eat" value=" No "></li>
<li><h1>do you have a car?</h1></li>
<li><input class="button-primary btn-lg btn-success" type="submit" name="car" value=" Yes">
<input class="button-primary btn-lg btn-danger" type="submit" name="car" value=" No "></li>
<li><h1>How many seats do you have available?</h1></li>
<li><input class="btn-group btn-lg btn-success" role="group" aria-label="Third group"  type="submit" name="car" value=" 1 ">
<input class="btn-group btn-lg btn-success" role="group" aria-label="Third group"  type="submit" name="car" value=" 2 ">
<input class="btn-group btn-lg btn-success" role="group" aria-label="Third group"  type="submit" name="car" value=" 3 ">
<input class="btn-group btn-lg btn-success" role="group" aria-label="Third group" type="submit" name="car" value=" 4 "></li>
</ul>
</form>
</nav>

<!-- Site Overlay -->
<div class="site-overlay--left"></div>
<div class="site-overlay--right"></div>

<!-- Your Content -->
<div id="container">
<!-- Menu Button -->
<div class="menu-btn__container">
<div class="col-md-3"></div>
<div class="col-md-3 menu-btn menu-btn--left">&#9776; Left</div>
<div class="col-md-3 menu-btn menu-btn--right">&#9776; Right</div>
<div class="col-md-3"></div>
</div>
</div>