<?php $this->beginContent('//layouts/main'); ?>
<div class="container">
	<img src="/files/img/slider_1.jpg" style="width: 1155px;" alt="">
</div>
<div class="container">
	<div class="row">
		<div class="col-md-3">
			<?php $this->widget('application.extensions.widgets.Category.Category', array('title' => 'test'));?>
		</div>
		<div class="col-md-9">
			<?=$content;?>
		</div>
	</div>
</div>
<?php $this->endContent(); ?>