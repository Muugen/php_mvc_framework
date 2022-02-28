<?php
/** @var $model \app\models\User */
/** @var $this \app\core\View */
$this->title = 'Login';
?>

<h1>Connexion</h1>

<?php $form = \app\core\form\Form::begin('', 'post') ?>
    <?php echo $form->field($model, 'email') ?>
    <?php echo $form->field($model, 'password')->passwordField() ?>
    <button type="submit" class="btn btn-primary">Connexion</button>
<?php \app\core\form\Form::end() ?>