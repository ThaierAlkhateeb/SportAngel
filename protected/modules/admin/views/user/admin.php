<?php
$this->breadcrumbs=array(
	'المستخدمون'=>array('index'),
	'إدارة المستخدمين',
);

$this->menu=array(
	array('label'=>'عرض المستخدمين', 'url'=>array('index')),
	array('label'=>'إضافة مستخدم', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('users-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>إدارة المستخدمين</h1>



<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'user-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'username',
		'email',
                
               
		/*
		'lostPasswordRequest',
		'active',
		'signUpDate',
		'lastSignIn',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
