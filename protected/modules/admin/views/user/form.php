<?php
/* @var $form TbActiveForm */
?>
<div class="row-fluid">
	<div class="span10">
		<?php
		$form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
			'id'=>'user-form',
			'type'=>'horizontal',
			'inlineErrors'=>true,
		));
		echo $form->errorSummary($model);
		
                $options=array(
                        'class'=>'span5',
                );
                //$options=$this->getAttributeOptions($attribute,$options);
                if($model->isNewRecord)
                {
                    echo $form->textFieldRow($model,'username',$options);
                    echo $form->textFieldRow($model,'password',$options);
                    echo $form->textFieldRow($model,'email',$options);
                    echo $form->checkBoxRow($model,'active');
                }
                else
                {
                    echo $form->textFieldRow($model,'username',array('class'=>'span5','disabled'=>'disabled'));
                    echo $form->textFieldRow($model,'password',$options);
                    echo $form->textFieldRow($model,'email',array('class'=>'span5','disabled'=>'disabled'));
                    echo $form->checkBoxRow($model,'active');
                }
                
		?>
		<div class="form-actions">
			<?php
			$buttons=array(
				array(
					'buttonType'=>'submit',
					'type'=>'primary',
					'label'=>Yii::t('AdminModule.admin','Save'),
					'htmlOptions'=>array('name'=>'_save')
				),
				array(
					'buttonType'=>'submit',
					'label'=>Yii::t('AdminModule.admin','Save and add another'),
					'htmlOptions'=>array('name'=>'_addanother')
				),
				array(
					'buttonType'=>'submit',
					'label'=>Yii::t('AdminModule.admin','Save and continue editing'),
					'htmlOptions'=>array('name'=>'_continue')
				),
			);
			if (!$model->isNewRecord) {
				array_push($buttons,array(
					'buttonType'=>'link',
					'type'=>'danger',
					'url'=>'#',
					'label'=>Yii::t('AdminModule.admin','Delete'),
					'htmlOptions'=>array(
						'submit'=>array(
							'user/delete',
							'name'=>get_class($model),
							'id'=>$model->id,
						),
						'confirm'=>Yii::t('AdminModule.admin','Are you sure you want to delete this item?'),
					)
				));
			}
			$this->widget('bootstrap.widgets.TbButtonGroup',array(
				'type'=>'',
				'buttons'=>$buttons,
			));
			?>
		</div>
		<?php $this->endWidget(); ?>
	</div>
</div>