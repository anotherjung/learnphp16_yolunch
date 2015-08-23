<!-- Pushy Menu start -->
<nav class="pushy pushy-left">



    <script src="js/selectize.js"></script>


<ul class="menu">



 <script type="text/javascript" src="js/selectize.js"></script>
<link rel="stylesheet" type="text/css" href="css/selectize.css" />
<script>
$(function() {
    $('select').selectize(options);
    valueField: 'id',
                    labelField: 'title',
                    searchField: 'title',
                    options: [
                        {id: 1, title: 'Spectrometer', url: 'http://en.wikipedia.org/wiki/Spectrometers'},
                        {id: 2, title: 'Star Chart', url: 'http://en.wikipedia.org/wiki/Star_chart'},
                        {id: 3, title: 'Electrical Tape', url: 'http://en.wikipedia.org/wiki/Electrical_tape'}
                    ],
                    create: false



});
</script>


<!-- <h2>Start A Group</h2>
<form action="/main/create_group" method="post" class="form-signin">
<select name='user_id' required autofocus>
<?php
foreach ($users as $user) { 
if($user['group_id'] == 1) {?>
<option value='<?=$user['id']?>'><?=$user['firstname']?> <?=$user['lastname']?></option>
<?  }
}
?>
</select>
<select name='restaurant' required autofocus>
<?php
foreach ($restaurants as $restaurant) { ?>
<option value='<?=$restaurant['id']?>'><?=$restaurant['name']?></option>
<?  }

?>
</select>



<input type="text" name="hour" placeholder="hh" class="form-control" id="together"><input type="text" name="min" placeholder="mm" class="form-control" id="together">
<input type="submit" class="btn btn-lg btn-primary btn-block" value="Go!">
</form> -->
</ul>

</nav>
<!--  ends pushyleft -->


        <!-- Pushy Menu -->
        <nav class="pushy pushy-right">
            <ul>
                <li><a href="#">Item 1</a></li>
                <li><a href="#">Item 2</a></li>
                <li><a href="#">Item 3</a></li>
                <li><a href="#">Item 4</a></li>
                <li><a href="#">Item 5</a></li>
                <li><a href="#">Item 6</a></li>
            </ul>
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