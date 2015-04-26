<?php
use dosamigos\ckeditor\CKEditor;
use common\models\Articles;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/** @var  $model Articles */
/** @var  $title  String */

$this->title = $title;
?>

<div class="site-article">
    <?php
        $form = ActiveForm::begin(['id' => 'article-form']);
        echo $form->field($model, 'title');
        echo $form->field($model, 'article')->widget(CKEditor::className(), [
          'options' => ['rows' => 6],
          'preset' => 'standart',
          'clientOptions' => ['extraAllowedContent' => '*(*)',]
        ]);
    ?>
    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary', 'name' => 'article-button']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div>





