<!-- Pushy Menu -->
<nav class="menu pushy pushy-left">
	<ul class="menu">
		<h2>Start A Group</h2>
			<form action="/main/create_group" method="post" class="form-signin">
			<select class="form-control" name='user_id' autofocus>
				<?php
				foreach ($users as $user) { 
					if($user['group_id'] == 9) {?>
					<option value='<?=$user['id']?>'><?=$user['firstname']?></option>
				<?  }
				}
				?>
			</select>
			<select  class="form-control" name='restaurant' required autofocus>
				<?php
				foreach ($restaurants as $restaurant) { ?>
					<option value='<?=$restaurant['id']?>'><?=$restaurant['name']?></option>
			<?  }

				?>
			</select>


			<!-- <input type="text" name="restaurant" class="form-control" placeholder="Restaurant" required autofocus> -->
			<input type="text" name="hour" placeholder="hh" class="form-control" id="together"><input type="text" name="min" placeholder="mm" class="form-control" id="together">
			<input type="submit" class="btn-lg btn-success" value="Create Group!">
		</form>
	</ul> <!-- ends ul-menu -->

<ul class="menu">
		<h2>Join A Group</h2>
		<form action="/main/join_group" method="post" class="form-signin">
			<select class="form-control" name='user_id' autofocus>
				<?php
				foreach ($users as $user) { 
					if($user['group_id'] == 1) { ?>
					<option value='<?=$user['id']?>'><?=$user['firstname']?> <?=$user['lastname']?></option>
					<?  }
				}
				?>
			</select>
			<select class="form-control" name='group_id' required autofocus style='width: 300px;'>
				<?php
				foreach ($groups as $group) { ?>
				<option value='<?=$group['id']?>'>Group #<?=$group['id']?>
					(<?=$group['restaurant_name']?>) <?=$group['driver_count']?> drivers and  
					<?=$group['non_driver_count']?> non-drivers! Leaving at: <?=$group['leavetime']?></option>
					<?  }

					?>
				</select>
				<input type="submit" class="btn-lg btn-primary" value="Go!">
			</form>
		</ul>
		<ul>
			<!-- <input type="text" name="restaurant" class="form-control" placeholder="Restaurant" required autofocus> -->
			<form action="/main/leave_now" method="post" class="form-signin">
				<select class="form-control" name="group_id" required autofocus style='width: 300px;'>
					<?php
					foreach($groups as $group) { 
						?>
						<option value='<?=$group['id']?>'>Group #<?=$group['id']?>
							(<?=$group['restaurant_name']?>) <?=$group['driver_count']?> drivers and  
							<?=$group['non_driver_count']?> non-drivers! Leaving at: <?=$group['leavetime']?></option>
							<? 
						}
						?>
					</select>
					<input type="submit" name = "leaving" class = "btn-lg btn-primary" value = "We're Leaving">

				</form>


			</ul>




</nav> <!-- ends nav-left -->



<nav class="menu pushy pushy-right">

			<!-- add-rest start -->
	<ul class="menu">
		<h2>Add A Resturant :D</h2>
		<form action='main/add_restaurants' method='post'>
		<input type='text' name='name' class="form-control" placeholder="Name" required autofocus> 
		<input type='text' name='address' class="form-control" placeholder="Address" required autofocus>
		<textarea  class="form-control"  name='description' style='color:black' cols='20' rows='3'></textarea>
		<li><input class="btn-group btn-lg btn-success" role="group" aria-label="Third group"  type="submit" name="Register" value='korean'>
		<input class="btn-group btn-lg btn-success" role="group" aria-label="Third group"  type="submit" name="cuisine" value='italian'>
		<input class="btn-group btn-lg btn-success" role="group" aria-label="Third group"  type="submit" name="cuisine" value='chinese'>
		<input class="btn-group btn-lg btn-success" role="group" aria-label="Third group"  type="submit" name="cuisine" value='mexican'>
		<input class="btn-group btn-lg btn-success" role="group" aria-label="Third group"  type="submit" name="cuisine" value='viet'>
		<input class="btn-group btn-lg btn-success" role="group" aria-label="Third group" type="submit" name="cuisine" value='japanese'></li>
		<input class="btn-group btn-lg btn-success" role="group" aria-label="Third group" type="submit" name="cuisine" value='american'></li>
		</form>
	</ul>
	<!-- ends add-rest -->




	<ul class="menu">
	<h2>Write a Review :) </h2>
		<form action='main/add_review' method='post'>
		<select class="form-control"  name='user_id' required autofocus>
			<?php foreach ($users as $user) { ?>
				<option value='<?=$user['id']?>'><?=$user['firstname']?> <?=$user['lastname']?></option>
		<?  } ?>
		</select>
		<select  class="form-control"  name='restaurant_id' required autofocus style='width: 300px;'>
			<?php foreach ($restaurants as $restaurant) { ?>
				<option value='<?=$restaurant['id']?>'><?=$restaurant['name']?></option>
		<?  }?>
		</select>
		<textarea  class="form-control"  name='review_content' style='color:black' cols='40' rows='3'></textarea>
		<!-- <input type="text" name="restaurant" class="form-control" placeholder="Restaurant" required autofocus> -->
		<input type="submit" class="btn-lg btn-primary" value="Post Review!" aria-describedby="sizing-addon1">
		</form>
	</ul>
</nav>





<!-- Site Overlay -->
<div class="site-overlay--left"></div>
<div class="site-overlay--right"></div>

<!-- Your Content -->
<div id="container">
<!-- Menu Button -->
<div class="menu-btn container">
<div class="col-md-3"></div>
<div class="col-md-3 menu-btn menu-btn--left">&#9776; Create/Join a Group</div>
<div class="col-md-3 menu-btn menu-btn--right">&#9776; Create/Post a Review</div>
<div class="col-md-3"></div>
</div>
</div>