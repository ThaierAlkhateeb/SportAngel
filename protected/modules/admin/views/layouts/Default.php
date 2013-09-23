<?php
/* @var $this AdminController */
$cs=Yii::app()->clientScript;
$baseUrl=$this->getModule()->assetsUrl;;
$cs->registerCoreScript('jquery');
$cs->registerCssFile($baseUrl.'/css/styles.css');
?>
<!DOCTYPE html>
<html lang="<?php echo Yii::app()->language; ?>">
<head>
	<meta charset="utf-8">
	<meta name="robots" content="NONE,NOARCHIVE" />
	<title><?php echo $this->pageTitle; ?></title>
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
<?php
$this->widget('bootstrap.widgets.TbNavbar',array(
	'type'=>'inverse', // null or 'inverse'
	'brand'=>'Akfali Group <sub>CMS</sub>',
	'brandUrl'=>'http://akfaligroup.com',
	'collapse'=>true, // requires bootstrap-responsive.css
	'items'=>array(
                /*
		array(
			'class'=>'bootstrap.widgets.TbMenu',
			'items'=>array(
				array(
					'label'=>Yii::t('AdminModule.admin','Statistics'),
					'url'=>array(yii::app()->baseUrl.'/admin/ycm/default/stats'),
					'visible'=>!Yii::app()->user->isGuest,
				),
			),
		),*/
                array(
			'class'=>'bootstrap.widgets.TbMenu',
			'items'=>array(
				array(
					'label'=>Yii::t('AdminModule.admin','Content Management'),
					'url'=>yii::app()->createUrl('/admin/ycm/'),//array(yii::app()->baseUrl.'/admin/ycm/'),
					'visible'=>!Yii::app()->user->isGuest,
				),
			),
		),
                array(
			'class'=>'bootstrap.widgets.TbMenu',
			'items'=>array(
				array(
					'label'=>Yii::t('AdminModule.admin','Users Management'),
					'url'=>yii::app()->createUrl('/admin/user/'),//array(yii::app()->baseUrl.'/admin/ycm/'),
					'visible'=>!Yii::app()->user->isGuest,
				),
			),
		),
		array(
			'class'=>'bootstrap.widgets.TbMenu',
			'htmlOptions'=>array('class'=>'pull-right'),
			'items'=>array(
				array(
					'label'=>Yii::t('AdminModule.admin','Login'),
					'url'=>yii::app()->createUrl('/admin/ycm/default/login'),//array(yii::app()->baseUrl.'/admin/ycm/default/login'),
					'visible'=>Yii::app()->user->isGuest,
				),
				array(
					'label'=>Yii::t('AdminModule.admin','Logout'),
					'url'=>yii::app()->createUrl('/admin/ycm/default/logout'),//array('/admin/ycm/default/logout'),
					'visible'=>!Yii::app()->user->isGuest,
				),
			),
		),
	),
));
?>

<?php if (!empty($this->breadcrumbs)):?>
<div class="container-fluid">
	<?php $this->widget('bootstrap.widgets.TbBreadcrumbs',array(
		'links'=>$this->breadcrumbs,
		'separator'=>'/',
		'homeLink'=>CHtml::link(Yii::t('AdminModule.admin','Home'),Yii::app()->createUrl('/admin')),
	)); ?>
</div>
<?php endif?>

<div class="container-fluid">
	<?php $this->widget('bootstrap.widgets.TbAlert',array(
		'block'=>true,
		'fade'=>true,
		'closeText'=>'&times;',
	)); ?>

	<?php echo $content; ?>

</div>
</body>
</html>