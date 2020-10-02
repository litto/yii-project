<?php
use yii\helpers\Html;
use yii\helpers\Url;

?>
<!DOCTYPE html>
<html lang="en-us" id="lock-page">
	<head>
		<meta charset="utf-8">
		<title>  Administrator</title>
		<meta name="description" content="">
		<meta name="author" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	

<link rel="stylesheet" type="text/css" href="<?php echo Url::base(); ?>/admin_theme/oldcss/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Url::base(); ?>/admin_theme/oldcss/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Url::base(); ?>/admin_theme/oldcss/smartadmin-production.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Url::base(); ?>/admin_theme/oldcss/smartadmin-skins.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Url::base(); ?>/admin_theme/oldcss/demo.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Url::base(); ?>/admin_theme/oldcss/lockscreen.min.css" />

		<!-- #GOOGLE FONT -->
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">

	</head>
	<body>

		<div id="main" role="main">


        <?= $content ?>

	
<script src="<?php echo Url::base(); ?>/admin_theme/oldjs/plugin/pace/pace.min.js"></script>
<script src="<?php echo Url::base(); ?>/admin_theme/oldjs/libs/jquery-2.0.2.min.js"></script>
<script src="<?php echo Url::base(); ?>/admin_theme/oldjs/libs/jquery-ui-1.10.3.min.js"></script>
<script src="<?php echo Url::base(); ?>/admin_theme/oldjs/bootstrap/bootstrap.min.js"></script>
<script src="<?php echo Url::base(); ?>/admin_theme/oldjs/plugin/jquery-validate/jquery.validate.min.js"></script>
<script src="<?php echo Url::base(); ?>/admin_theme/oldjs/plugin/masked-input/jquery.maskedinput.min.js"></script>
<script src="<?php echo Url::base(); ?>/admin_theme/oldjs/app.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>


	</body>
</html>
