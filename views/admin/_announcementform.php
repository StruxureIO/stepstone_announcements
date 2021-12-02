<?php
//use Yii;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\VendorAreas */
/* @var $form yii\widgets\ActiveForm */


?>
  <div class="panel panel-default">
    <div class="panel-heading"><strong><?= Html::encode($this->title) ?></strong></div>
      <div id="announcement-form">
    
      <?php $form = ActiveForm::begin(); ?>
    
          <input type="hidden" name="SsAnnouncements[id]" value="<?php echo $model->id ?>">
          
          <?= $form->field($model, 'announcment_title')->textInput(['maxlength' => true]) ?>
          
          <?= $form->field($model, 'announcment')->textarea(['rows' => '3']) ?>
          
          <?= $form->field($model, 'button_label')->textInput() ?>          
          
          <?= $form->field($model, 'button')->textInput(['maxlength' => true]) ?>
                              
          <?= $form->field($model, 'display')->checkbox() ?>
                                            
      <div class="form-group">
          <?= Html::submitButton('Save', ['class' => 'btn btn-default']) ?>
      </div>

      <!--display validation errors-->
      <?= $form->errorSummary($model); ?>    

      <?php ActiveForm::end(); ?>
      
    </div>
    
    
  </div>

