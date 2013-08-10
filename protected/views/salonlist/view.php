<?php
/* @var $this SalonlistController */
/* @var $model Salonlist */

$this->breadcrumbs=array(
	'Salonlists'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Salonlist', 'url'=>array('index')),
	array('label'=>'Create Salonlist', 'url'=>array('create')),
	array('label'=>'Update Salonlist', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Salonlist', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Salonlist', 'url'=>array('admin')),
);
?>

<h1>View Salonlist #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'address1',
		'address2',
		'phone',
	),
)); ?>
