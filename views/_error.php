<?php
/**
 * @var $exception \Exception
 */
$this->title = (strval($exception->getCode()) . ' - ' . $exception->getMessage());
?>

<h2><?php echo $exception->getCode() ?> - <?php echo $exception->getMessage() ?></h2>
<h3>¯\_(ツ)_/¯</h3>