<?php
/* @var $this SiteController */
// $this->redirect($this->createUrl('Boi/admin'));
$this->pageTitle=Yii::app()->name;


?>
<div class="row ">
<h1  class="jumbotron">Welcome to GEEP<i><?php /*echo CHtml::encode(Yii::app()->name);*/ ?></i></h1>
<?php include 'my-slider.php'; ?>
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
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/myscript.js"></script>

<script >
//window.onload = function () {

  $('.body').css('background-image','url(/geep/marketmoni/images/2.jpg)');
  var gallery = $('.gallery').find('img');
  var  images = [ '/geep/marketmoni/images/cc.jpg',
	'/geep/marketmoni/images/1.jpg',
        '/geep/marketmoni/images/3.jpg'
  ];
  var i = 0;
  setInterval(function(){
  i = (i + 1) % images.length; //0,1,2,0,1,2,0...
  gallery.fadeOut(function() {
  $(this).attr('src', images[i]);
  $(this).fadeIn();
  });
  },2000);
}

</script>
