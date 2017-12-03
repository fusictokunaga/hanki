<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset(); ?>
    <title>
        <?= $this->fetch('title'); ?>
    </title>
    <?= $this->Html->meta('icon'); ?>
    <?= $this->element('css'); ?>

    <?= $this->fetch('meta'); ?>
    <?= $this->fetch('css'); ?>

    <script type="text/javascript" src="http://code.jquery.com/jquery-3.1.0.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
</head>
<body>

<div id="Header">
    <?= $this->element('header'); ?>
</div>

<div class="row">
    <div class="col-md-2">

    </div>
    <div class="col-md-8" id="content">
        <?= $this->Flash->render(); ?>
        <?= $this->fetch('content'); ?>
    </div>
    <div class="col-md-2"></div>
</div>


<?= $this->element('js'); ?>
<?= $this->fetch('script'); ?>

</body>
</html>
