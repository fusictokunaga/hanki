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
</head>
<body>

<div id="Header">
    <?= $this->element('header'); ?>
</div>

<div class="row">
    <div class="col-md-2">
        <?= $this->element('sidenav'); ?>
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
