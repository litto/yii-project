<?php $this->beginContent('@app/views/layouts/admin_login.php'); ?>


<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;


?>




<div id="main" role="main">
    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'horizontal'
    ]); ?>
      <!-- MAIN CONTENT -->
<div class="lockscreen animated flipInY">

     <!--  <form class="lockscreen animated flipInY" method="post" enctype="multipart/form-data" action=""> -->
      
        <div class="logo">
          <h1 class="semi-bold"><!-- <img src="oldimg/logo-o.png" alt="" />  --><span style="color:#4FACE5">Admin</span>Panel</h1>
        </div>
        <div>

          <img src="<?php echo Url::base(); ?>/admin_theme/oldimg/avatars/logo1.png" height="120px" width="120px"/>
          <div>
            <h1><i class="fa fa-user fa-3x text-muted air air-top-right hidden-mobile"></i>Admin Login </h1>
                <div class="input-group">
        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
              <div class="input-group-btn">
                <a class="btn btn-primary" type="submit">
                  <i class="fa fa-user"></i>
                </a>
              </div>
            </div>
</br>
            <div class="input-group">
        <?= $form->field($model, 'password')->passwordInput() ?>
              <div class="input-group-btn">
                <a class="btn btn-primary" type="submit">
                  <i class="fa fa-key"></i>
                </a>
              </div>
            </div>
            </br>

<div class="input-group">
            <input type="checkbox" class="ace" name="rememberMe" value="1"   checked="checked" />

                                <span class="lbl"> Remember Me | <a href=""/> Forget Password? </a></span>
            </div>
            </br>


            <div class="input-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>

            </div>
          
          </div>

        </div>
        <p class="font-xs margin-top-5">
        Version: V.2.0.1  Copyright &copy;  2020

        </p>
    </div>
    <?php ActiveForm::end(); ?>
    </div>
<?php $this->endContent(); ?>
