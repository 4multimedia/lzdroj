<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="row">
	<div class="col-md-3">
		<?php
			if ($this -> layouts["widgets"]["left"])
			{
				foreach ($this -> layouts["widgets"]["left"] as $key => $widget)
				{
					$this -> widget('application.extensions.widgets.'.$widget.'.'.$widget, array('title' => 'test'));
				}
			}
		?>
		<!-- $this->widget('application.extensions.widgets.Category', array());-->
	</div>
	<div class="col-md-9">
		<?php echo $content; ?>
	</div>
</div><!-- content -->
<?php $this->endContent(); ?>