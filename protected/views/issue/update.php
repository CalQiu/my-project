<?php
$this->breadcrumbs=array(
	'Issues'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);
/*
$this->menu=array(
	array('label'=>'List Issue', 'url'=>array('index')),
	array('label'=>'Create Issue', 'url'=>array('create')),
	array('label'=>'View Issue', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Issue', 'url'=>array('admin')),
);
*/

$this->menu=array(
array('label'=>'List Issue', 'url'=>array('index', 'pid'=>$model->project->id)),
array('label'=>'Create Issue', 'url'=>array('create','pid'=>$model->project->id)),
array('label'=>'View Issue', 'url'=>array('view', 'id'=>$model->id)),
// array('label'=>'Delete Issue', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Issue', 'url'=>array('admin', 'pid'=>$model->project->id)),
);




?>






<h1>Update Issue <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>