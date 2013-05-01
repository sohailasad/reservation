<?php
/* @var $this FareController */
/* @var $model Fare */
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
		<?php echo $form->label($model,'terminal_from_id'); ?>
		<?php echo $form->textField($model,'terminal_from_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'terminal_to_id'); ?>
		<?php echo $form->textField($model,'terminal_to_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fare_price'); ?>
		<?php echo $form->textField($model,'fare_price'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->