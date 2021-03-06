<?php
/** @var $model \app\models\User */
/** @var $this \anthonyhuynh\PhpMvcFramework\View */
$this->title = 'Inscriptiçon';
?>

<h1>S'inscrire</h1>

<?php $form = \anthonyhuynh\PhpMvcFramework\form\Form::begin('', 'post') ?>
    <div class="row">
        <div class="col">
            <?php echo $form->field($model, 'firstname') ?>
        </div>
        <div class="col">
            <?php echo $form->field($model, 'lastname') ?>
        </div>
    </div>
    <?php echo $form->field($model, 'email') ?>
    <?php echo $form->field($model, 'password')->passwordField() ?>
    <?php echo $form->field($model, 'confirmPassword')->passwordField() ?>
    <button type="submit" class="btn btn-primary">INSCRIPTION</button>
<?php \anthonyhuynh\PhpMvcFramework\form\Form::end() ?>