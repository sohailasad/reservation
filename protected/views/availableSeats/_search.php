<?php
/* @var $this AvailableSeatsController */
/* @var $model AvailableSeats */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bus_id'); ?>
		<?php echo $form->textField($model,'bus_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'terminal_from'); ?>
		<?php echo $form->textField($model,'terminal_from'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'terminal_to'); ?>
		<?php echo $form->textField($model,'terminal_to'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'root_id'); ?>
		<?php echo $form->textField($model,'root_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total_seats'); ?>
		<?php echo $form->textField($model,'total_seats'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reserve_seats'); ?>
		<?php echo $form->textField($model,'reserve_seats'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'available_seats'); ?>
		<?php echo $form->textField($model,'available_seats'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reserve_date'); ?>
		<?php echo $form->textField($model,'reserve_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reserve_time'); ?>
		<?php echo $form->textField($model,'reserve_time'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->