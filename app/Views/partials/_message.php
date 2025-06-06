<?php if ($this->errors->hasError()): ?>
	<div class="notification is-danger">
	  <div class="content">
	  	<ul>
	  		<?php foreach ($this->errors->all() as $e): ?>
		  		<li><?= $e ?></li>
		  	<?php endforeach; ?>
	  	</ul>
	  </div>
	</div>
<?php endif; ?>
<?php if (Fantom\Session::hasFlash('error')): ?>
	<div class="notification is-danger">
		<?= Fantom\Session::flash('error') ?>
	</div>
<?php endif; ?>
<?php if (Fantom\Session::hasFlash('success')): ?>
    <div class="header-notification is-success">
        <button class="close-btn"> </button>
        <a href="" class="close-btn">&times;</a>
		<?= Fantom\Session::flash('success') ?>
    </div>
<?php endif; ?>