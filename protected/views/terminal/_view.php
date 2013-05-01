<?php
/* @var $this TerminalController */
/* @var $data Terminal */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('terminal_name')); ?>:</b>
	<?php echo CHtml::encode($data->terminal_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('terminal_detail')); ?>:</b>
	<?php echo CHtml::encode($data->terminal_detail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('terminal_photo')); ?>:</b>
	<?php echo CHtml::encode($data->terminal_photo); ?>
	<br />


</div>