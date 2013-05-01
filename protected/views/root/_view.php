<?php
/* @var $this RootController */
/* @var $data Root */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('terminal_from_id')); ?>:</b>
	<?php echo CHtml::encode($data->terminal_from_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('terminal_to_id')); ?>:</b>
	<?php echo CHtml::encode($data->terminal_to_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('journey_via')); ?>:</b>
	<?php echo CHtml::encode($data->journey_via); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bus_id')); ?>:</b>
	<?php echo CHtml::encode($data->bus_id); ?>
	<br />


</div>