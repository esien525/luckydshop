<?php include("js/side_opening.php");?>
<div style="float:right"><?php echo CHtml::link('<button class="btn btn--wd btn--with-icon btn--sm wave">+ Create New Banner</button>',  array('create')); ?></div>

<h4 class="pagestitle">Banner Management</h4>

<br/>




<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'banner-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'banner_id',
		array( 'name'=>'banner_photo', 'type' => 'raw', 'value' => 'CHtml::image("../$data->banner_photo","",array("style"=>"height:100px;"))'),
		'banner_title',
		//'banner_description',
		//'banner_link',
		'banner_location',
		array(
            'name' => 'banner_order',
			'htmlOptions'=>array(
                'width'=>'80',
                'style'=>'text-align:center',
             ),
        ),

		/*
		'banner_language',
		*/
		array(
			'class'=>'CButtonColumn',
			'htmlOptions'=>array(
                'width'=>'80',
                'style'=>'text-align:center',
             ),
		),
	),
)); ?>





<?php include("js/side_closing.php");?>