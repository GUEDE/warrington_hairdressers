<?php
/* @var $this SalonlistController */
/* @var $model Salonlist */

$this->breadcrumbs=array(
	'Salonlists'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Salonlist', 'url'=>array('index')),
	array('label'=>'Create Salonlist', 'url'=>array('create')),
	array('label'=>'View Salonlist', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Salonlist', 'url'=>array('admin')),
);
?>

<h1>Update Salonlist <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>