<?php
    use dosamigos\ckeditor\CKEditor;

    echo $form->field($node, "content")->widget(CKEditor::className(), [
        'options' => ['rows' => 2],
        'preset' => 'basic'
    ]);
