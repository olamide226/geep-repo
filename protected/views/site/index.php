<?php
/* @var $this SiteController */
// $this->redirect($this->createUrl('Boi/admin'));
$this->pageTitle=Yii::app()->name;


?>
<div class="row ">
<h1  class="well" 
style="text-align: center;background-color: rgba(0,0,0,0.75); color: white;">Welcome to <?php echo CHtml::encode(Yii::app()->name); ?></h1>
<?php include 'my-slider.php'; ?>
</div>
<div class="row">
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">GEEP</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav>
</div>

<!-- <p>Congratulations! You have successfully created your Yii application.</p>

<p>You may change the content of this page by modifying the following two files:</p>
<ul>
	<li>View file: <code><?php echo __FILE__; ?></code></li>
	<li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>
w

<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p> -->

