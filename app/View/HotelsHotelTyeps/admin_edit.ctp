<div class="hotelsHotelTyeps form">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Edit Hotels Hotel Tyep'); ?></span></div>
        <div class="content_mid">
<?php echo $this->Form->create('HotelsHotelTyep'); ?>
	<fieldset>
		<!--<legend><?php // echo __('Edit Hotels Hotel Tyep'); ?></legend>-->
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('hotel_id');
		echo $this->Form->input('hotel_type_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>
<?php echo $this->element('left_nav');?>
