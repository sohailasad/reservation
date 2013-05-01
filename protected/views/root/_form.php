<?php
/* @var $this RootController */
/* @var $model Root */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'root-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'terminal_from_id'); ?>
		<?php //echo $form->textField($model,'terminal_from_id',array('size'=>20,'maxlength'=>20)); ?>
                <?php echo $form->dropDownList($model,'terminal_from_id', CHtml::listData(Terminal::model()->findAll(), 'id', 'terminal_name'), array('empty'=>'Select City From'))?>
		<?php echo $form->error($model,'terminal_from_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'terminal_to_id'); ?>
		<?php //echo $form->textField($model,'terminal_to_id'); ?>
            <?php echo $form->dropDownList($model,'terminal_to_id', CHtml::listData(Terminal::model()->findAll(), 'id', 'terminal_name'), array('empty'=>'Select City To'))?>
		<?php echo $form->error($model,'terminal_to_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'journey_via'); ?>
		<?php //echo $form->textField($model,'journey_via'); ?>
            <?php echo $form->dropDownList($model,'journey_via', CHtml::listData(Terminal::model()->findAll(), 'id', 'terminal_name'), array('empty'=>'Select Journey Via'))?>
		<?php echo $form->error($model,'journey_via'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bus_id'); ?>
		<?php echo $form->textField($model,'bus_id'); ?>
		<?php echo $form->error($model,'bus_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->