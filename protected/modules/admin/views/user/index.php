<?php
$this->breadcrumbs=array(
	yii::t('AdminModule.admin','Users')
);
?>

<div class="btn-toolbar">
	<?php
	$this->widget('bootstrap.widgets.TbButtonGroup',array(
		'type'=>'',
		'buttons'=>array(
			array(
				'type'=>'primary',
				'label'=>Yii::t('AdminModule.admin',
					'Create {name}',
					array('{name}'=>$model->id)
				),
				'url'=>$this->createUrl('create'),
			),
		),
                
	));
	?>
</div>

<?php
$urlPrefix='Yii::app()->createUrl("admin/user/';
$this->widget('bootstrap.widgets.TbGridView',array(
			'id'=>'user-grid',
			'type'=>'striped bordered condensed',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'pager'=>array(
				'class'=>'bootstrap.widgets.TbPager',
				'displayFirstAndLast'=>true,
				'firstPageLabel'=>'&lang;&lang;',
				'prevPageLabel'=>'&lang;',
				'nextPageLabel'=>'&rang;',
				'lastPageLabel'=>'&rang;&rang;',
			),
			'columns'=>array(
                                'username',
                                array(
                                    'name'=>'active',
                                    'value'=>'($data->active==0)?"No":"Yes"',
                                    'filter'=>'<select name="User[active]"><option>Choose</option><option value="0">No</option><option value="1">yes</option></select>'
                                ),
                                'email',
                                'signUpDate',
                                'lastSignIn',
				array(
					'class'=>'bootstrap.widgets.TbButtonColumn',
					'updateButtonUrl'=>$urlPrefix.'update",array("id"=>$data->primaryKey))',
					'deleteButtonUrl'=>$urlPrefix.'delete",array("id"=>$data->primaryKey))',
					'viewButtonUrl'=>$urlPrefix.'view",array("id"=>$data->primaryKey))',
					'viewButtonOptions'=>array(
						'style'=>'display:none;',
					),
				),
                                
			),
		)); ?>
