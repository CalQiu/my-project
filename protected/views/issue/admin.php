<?php
$this->breadcrumbs=array(
	'Issues'=>array('index'),
	'Manage',
);

/*
$this->menu=array(
	array('label'=>'List Issue', 'url'=>array('index')),
	array('label'=>'Create Issue', 'url'=>array('create')),
);
*/

$this->menu=array(
array('label'=>'List Issue', 'url'=>array('index', 'pid'=>$model->project->id)),
array('label'=>'Create Issue', 'url'=>array('create','pid'=>$model->project->id)),
//array('label'=>'Update Issue', 'url'=>array('update', 'id'=>$model->id)),
//array('label'=>'Delete Issue', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
//array('label'=>'Manage Issue', 'url'=>array('admin', 'pid'=>$model->project->id)),
);



Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('issue-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Issues</h1>

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
	'id'=>'issue-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'description',
		'project_id',
		'type_id',
		'status_id',
		/*
		'owner_id',
		'requester_id',
		'create_time',
		'create_user_id',
		'update_time',
		'update_user_id',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>