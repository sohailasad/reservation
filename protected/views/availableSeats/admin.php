<?php
/* @var $this AvailableSeatsController */
/* @var $model AvailableSeats */

$this->breadcrumbs=array(
	'Available Seats'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List AvailableSeats', 'url'=>array('index')),
	array('label'=>'Create AvailableSeats', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#available-seats-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Available Seats</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'available-seats-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'bus_id',
		'terminal_from',
		'terminal_to',
		'root_id',
		'total_seats',
		
		'reserve_seats',
		'available_seats',
		'reserve_date',
		'reserve_time',
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
