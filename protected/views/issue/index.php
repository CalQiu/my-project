<?php
$this->breadcrumbs=array(
	'Issues',
);

$this->menu=array(
	array('label'=>'Create Issue', 'url'=>array('create','pid'=>1)),
    // array('label'=>'Create Issue', 'url'=>array('create')),
	// array('label'=>'Manage Issue', 'url'=>array('admin')),
    array('label'=>'Manage Issue', 'url'=>array('admin', 'pid'=>1)),
   // array('label'=>'Manage Issue', 'url'=>array('admin', 'pid'=>$model->project->id)),
);







?>

<h1>Issues</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
