<?php
/* @var $this SiteController */
$this->redirect($this->createUrl('boi/admin'));
$this->pageTitle=Yii::app()->name;
?>

<h1>Welcome to GEEP<i><?php /*echo CHtml::encode(Yii::app()->name);*/ ?></i></h1>
<br><br>
<a href="?r=boi/index"><button>Registered Customers</button></a>
<br/><br/>
<a href="?r=boi/admin"><button> Loans & Reconciliation</button></a> <span>    -    </span>
<!--<a href="?r=casetwo/create"><button> MarketMoni Registration </button></a><span>    -    </span>  -->
<a href="?r=casetwo/create"><button> DTA Registration </button></a><span>    -    </span>
<a href="?r=enquiry/create"><button> Enquiries </button></a>

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
