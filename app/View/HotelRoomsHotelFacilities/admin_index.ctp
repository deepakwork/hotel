<div class="hotelRoomsHotelFacilities index">
    <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Hotel Rooms Hotel Facilities'); ?></span></div>
    <div class="content_mid">
	<!--<h2><?php // echo __('Hotel Rooms Hotel Facilities'); ?></h2>-->
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('hotel_room_id'); ?></th>
			<th><?php echo $this->Paginator->sort('hotel_facility_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($hotelRoomsHotelFacilities as $hotelRoomsHotelFacility): ?>
	<tr>
		<td><?php echo h($hotelRoomsHotelFacility['HotelRoomsHotelFacility']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($hotelRoomsHotelFacility['HotelRoom']['name'], array('controller' => 'hotel_rooms', 'action' => 'view', $hotelRoomsHotelFacility['HotelRoom']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($hotelRoomsHotelFacility['HotelFacility']['name'], array('controller' => 'hotel_facilities', 'action' => 'view', $hotelRoomsHotelFacility['HotelFacility']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $hotelRoomsHotelFacility['HotelRoomsHotelFacility']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $hotelRoomsHotelFacility['HotelRoomsHotelFacility']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $hotelRoomsHotelFacility['HotelRoomsHotelFacility']['id']), null, __('Are you sure you want to delete # %s?', $hotelRoomsHotelFacility['HotelRoomsHotelFacility']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
</div>
<?php echo $this->element('left_nav');?>
