<div class="tourPackagesActivityTypes form">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Edit Tour Packages Activity Type'); ?></span></div>
    <div class="content_mid">
<?php echo $this->Form->create('TourPackagesActivityType'); ?>
	<fieldset>
		<legend><?php echo __('Edit Tour Packages Activity Type'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('tour_package_id');
		echo $this->Form->input('activity_type_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>
<?php echo $this->element('left_nav');?>
