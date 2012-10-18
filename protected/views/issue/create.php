<?php
$this->breadcrumbs=array(
	'Issues'=>array('index'),
	'Create',
);

$this->menu=array(
	// array('label'=>'List Issue', 'url'=>array('index')),
    array('label'=>'List Issue', 'url'=>array('index', 'pid'=>$model->project->id)),
    
	// array('label'=>'Manage Issue', 'url'=>array('admin')),
   //  array('label'=>'Manage Issue', 'url'=>array('admin', 'pid'=>1)),
    array('label'=>'Manage Issue', 'url'=>array('admin', 'pid'=>$model->project->id)),
);
?>

<h1>Create Issue</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>