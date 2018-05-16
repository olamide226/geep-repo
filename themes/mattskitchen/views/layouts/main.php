<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="language" content="en" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="shortcut icon" href="<?php echo Yii::app()->theme->baseUrl; ?>/favicon.ico" type="image/x-icon" >

  <!-- blueprint CSS framework -->
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/screen.css" media="screen, projection" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/bootstrap/bootstrap.min.css" />


    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/print.css" media="print" />

  <!--[if lt IE 8]>
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/ie.css" media="screen, projection" />
  <![endif]-->
<?php
  Yii::app()->clientScript->registerCoreScript('jquery');
  Yii::app()->clientScript->registerCoreScript('jquery.ui');
 ?>
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/main.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/form.css" />

 <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-3.3.1.min.js"></script>
  <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/modernizr-2.0.6.min.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/bootstrap/bootstrap.js"> </script>
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/myscript.js"></script>


  <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container fluid" id="wrapper">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <header id="header">

                <div id="logo">
                <a href='index.php?r=site'><img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/ebislogo1.jpg" class="img-thumbnail" alt='EBIS' >G.E.E.P</a>
                <?php //echo CHtml::link(CHtml::encode(Yii::app()->name),'index.php?r=boi/admin') ; ?>
                </div>

                <!-- <div id="logo"><?php //echo CHtml::image(Yii::app()->request->baseUrl.'/img/ebislogo1.jpg' ; ?></div> -->

                    <?php //echo CHtml::link('Generate Ticket','index.php?r=tickets/create', array('target'=>'_blank')); ?>

                <nav id="mainmenu">



                    <?php
                    if(strtolower(Yii::app()->user->id)=='admin' ) {

                        $menuItems = array(
                            array('label' => 'Home', 'url' => array('/boi/admin')),
                            //array('label' => 'Reports', 'url' => array('/report/index')),
                            //array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
                            array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                            array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest),
                        );
                    }
                    else{
                        $menuItems = array(
                            array('label' => 'Home', 'url' => array('/boi/admin')),

                            //array('label' => 'Reports', 'url' => array('/report/index')),
                            //array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
                            array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                            array('label' => 'Logout (' . strtolower(Yii::app()->user->name) . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest),
                        );
                    }





                    ?>
                    <?php $this->widget('zii.widgets.CMenu',array(
                        'items'=>$menuItems,
                        'firstItemCssClass'=>'first',
                        'lastItemCssClass'=>'last',
                    )); ?>
                </nav><!-- mainmenu -->
            </header><!-- header -->

        </div>
    </div>

    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div id="main-wrapper"><div id="main" role="main">
                    <?php echo $content; ?>
                </div></div><!-- main -->



            <footer id="footer">
                <nav id="footermenu">


                    <div class="ui-selectmenu-button">
                        <?php //echo CHtml::link('Generate Ticket','index.php?r=tickets/create', array('target'=>'_blank')); ?>
                    </div>
                     <?php $this->widget('zii.widgets.CMenu',array('items'=>$menuItems)); ?>



                </nav>
                <div class="content">
                    Copyright &copy; <?php echo date('Y'); ?> by EBIS Solutions.<br/>
                    All Rights Reserved.<br/>
                </div>
            </footer><!-- footer -->
        </div>
    </div>




</div><!-- wrapper -->

</body>
</html>
