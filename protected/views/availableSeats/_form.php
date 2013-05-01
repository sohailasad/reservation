<script type="text/javascript">
       
                $(document).ready(function(){
                        $("#ff").blur(function(){
                               alert('dd');
                            
                });
        });
</script>

<?php
/* @var $this AvailableSeatsController */
/* @var $model AvailableSeats */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'available-seats-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'bus_id'); ?>
		<?php echo $form->textField($model,'bus_id'); ?>
		<?php echo $form->error($model,'bus_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'terminal_from'); ?>
		<?php //echo $form->textField($model,'terminal_from'); ?>
            <?php echo $form->dropDownList($model,'terminal_from', CHtml::listData(Terminal::model()->findAll(), 'id', 'terminal_name'), array('empty'=>'Select City From'))?>
		<?php echo $form->error($model,'terminal_from'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'terminal_to'); ?>
		<?php //echo $form->textField($model,'terminal_to'); ?>
            <?php echo $form->dropDownList($model,'terminal_to', CHtml::listData(Terminal::model()->findAll(), 'id', 'terminal_name'), array('empty'=>'Select City TO'))?>
		<?php echo $form->error($model,'terminal_to'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'root_id'); ?>
		<?php //echo $form->textField($model,'root_id'); ?>
            <?php echo $form->dropDownList($model,'root_id', CHtml::listData(Terminal::model()->findAll(), 'id', 'terminal_name'), array('empty'=>'Select Journey Via'))?>
		<?php echo $form->error($model,'root_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_seats'); ?>
		<?php echo $form->textField($model,'total_seats'); ?>
		<?php echo $form->error($model,'total_seats'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reserve_seats'); ?>
		<?php echo $form->textField($model,'reserve_seats',array('id'=>'ff')); ?>
            
		<?php echo $form->error($model,'reserve_seats'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'available_seats'); ?>
		<?php echo $form->textField($model,'available_seats'); ?>
		<?php echo $form->error($model,'available_seats'); ?>
	</div>

<!--	<div class="row">
		//<?php //echo $form->labelEx($model,'reserve_date'); ?>
		//<?php
//                $this->widget('zii.widgets.jui.CJuiDatePicker',
//      array(
//            'attribute'=>'reserve_date',
//            'model'=>$model,
//            'options' => array(
//                              'mode'=>'focus',
//                               'dateFormat'=>'yy/mm/dd',
//                              'showAnim' => 'slideDown',
//                              ),
//    'htmlOptions'=>array('size'=>30,'class'=>'date'),
//          )
//    ); ?>
		//<?php //echo $form->error($model,'reserve_date'); ?>
	</div>-->

        <div class="row">
        <?php echo $form->labelEx($model,'reserve_date'); ?>
        <?php
            $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'model'=>$model,
                'attribute'=>'reserve_date',
                // additional javascript options for the date picker plugin
                'options' => array(
                                            'mode' => 'date',
                                            'changeYear' => FALSE,
                                            'changeMonth' => FALSE,
                                           // 'yearRange' => '1900:2200',
                                            'dateFormat' => 'yy-mm-dd',
                    //'dateFormat'=>'yy/mm/dd',
                                            
                                    ),
                'htmlOptions'=>array(
                    'style'=>'height:20px;'
                ),
            ));
        ?>
        <?php echo $form->error($model,'reserve_date'); ?>

    </div>

	<div class="row">
		<?php echo $form->labelEx($model,'reserve_time'); ?>
		<?php
                 $this->widget('application.extensions.jui_timepicker.JTimePicker', array(
                    'model'=>$model,
                     'attribute'=>'reserve_time',
                     // additional javascript options for the date picker plugin
                     'options'=>array(
                         'showPeriod'=>true,
                        // 'timeFormat'=>'hh:mm'
                         ),
                     'htmlOptions'=>array('size'=>8,'maxlength'=>8 ),
                 ));
                ?>
		<?php echo $form->error($model,'reserve_time'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->