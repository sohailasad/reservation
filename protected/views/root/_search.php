<?php
/* @var $this RootController */
/* @var $model Root */
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
		<?php echo $form->textField($model,'terminal_from_id',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'terminal_to_id'); ?>
		<?php echo $form->textField($model,'terminal_to_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'journey_via'); ?>
		<?php echo $form->textField($model,'journey_via'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bus_id'); ?>
		<?php echo $form->textField($model,'bus_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->