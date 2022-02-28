<?php
/** @var $model \app\models\User */
/** @var $this \anthonyhuynh\PhpMvcFramework\View */
$this->title = 'Login';
?>

<h1>Connexion</h1>

<?php $form = \anthonyhuynh\PhpMvcFramework\form\Form::begin('', 'post') ?>
    <?php echo $form->field($model, 'email') ?>
    <?php echo $form->field($model, 'password')->passwordField() ?>
    <button type="submit" class="btn btn-primary">Connexion</button>
<?php \anthonyhuynh\PhpMvcFramework\form\Form::end() ?>