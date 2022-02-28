<?php
/** @var $this \app\core\View */

$this->title = 'Contact';
?>

<h1>Nous contacter</h1>

<form action="" method="post">
    <div class="mb-3">
        <label class="form-label">Sujet</label>
        <input type="text" name="subject" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control">
    </div>
    <div class="mb-3">
        <label  class="form-label">Text</label>
        <textarea name="body" class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Envoyer</button>
</form>