<?php
/* @var $this SalonlistController */
/* @var $model Salonlist */

$this->breadcrumbs=array(
	'Salonlists'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Salonlist', 'url'=>array('index')),
	array('label'=>'Manage Salonlist', 'url'=>array('admin')),
);
?>

<h1>Create Salonlist</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>