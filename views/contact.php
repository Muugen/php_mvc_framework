<?php
/** @var $this \anthonyhuynh\PhpMvcFramework\View */
/** @var $model \app\models\ContactForm */

use anthonyhuynh\PhpMvcFramework\form\Form;
use anthonyhuynh\PhpMvcFramework\form\TextAreaField;

$this->title = 'Contact';
?>

<h1>Nous contacter</h1>
<?php $form = Form::begin('', 'post') ?>
<?php echo $form->field($model, 'name') ?>
<?php echo $form->field($model, 'email') ?>
<?php echo $form->field($model, 'subject') ?>
<?php echo new TextAreaField($model, 'body') ?>
<button type="submit" class="btn btn-primary">Envoyer</button>
<?php Form::end() ?>