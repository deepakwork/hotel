<div class="hotelsHotelCancellationPolicies index">
     <div class="um_box_mid_content_top"><span class="umstyle1"><?php echo __('Hotels Hotel Cancellation Policies'); ?></span></div>
        <div class="content_mid">
	<!--<h2><?php // echo __('Hotels Hotel Cancellation Policies'); ?></h2>-->
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('hotel_id'); ?></th>
			<th><?php echo $this->Paginator->sort('hotel_cancellation_policy_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($hotelsHotelCancellationPolicies as $hotelsHotelCancellationPolicy): ?>
	<tr>
		<td><?php echo h($hotelsHotelCancellationPolicy['HotelsHotelCancellationPolicy']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($hotelsHotelCancellationPolicy['Hotel']['name'], array('controller' => 'hotels', 'action' => 'view', $hotelsHotelCancellationPolicy['Hotel']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($hotelsHotelCancellationPolicy['HotelCancellationPolicy']['name'], array('controller' => 'hotel_cancellation_policies', 'action' => 'view', $hotelsHotelCancellationPolicy['HotelCancellationPolicy']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $hotelsHotelCancellationPolicy['HotelsHotelCancellationPolicy']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $hotelsHotelCancellationPolicy['HotelsHotelCancellationPolicy']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $hotelsHotelCancellationPolicy['HotelsHotelCancellationPolicy']['id']), null, __('Are you sure you want to delete # %s?', $hotelsHotelCancellationPolicy['HotelsHotelCancellationPolicy']['id'])); ?>
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