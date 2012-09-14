<?php
$this->breadcrumbs=array(
	'Message'=>array('message/index'),
	'HelloWorld',
);?>

<h1>Hello, World!<?php  echo $this->id . '/' . $this->action->id; ?></h1>
<h3><?php  echo $time; ?></h3>


<p><?php echo CHtml::link("Goodbye",array('message/goodbye')); ?></p>

<a href="/bottlemate/index.php?r=message/goodbye">Goodbye!</a>



<div class="btn-toolbar">
    <?php $this->widget('bootstrap.widgets.TbButtonGroup', array(
        'type'=>'primary', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
        'buttons'=>array(
            array('label'=>'Action', 'items'=>array(
                array('label'=>'Action', 'url'=>'#'),
                array('label'=>'Another action', 'url'=>'#'),
                array('label'=>'Something else', 'url'=>'#'),
                '---',
                array('label'=>'Separate link', 'url'=>'#'),
            )),
        ),
    )); ?>
</div>




<p>You may change the content of this page by modifying the file <tt><?php echo __FILE__; ?></tt>.</p>
