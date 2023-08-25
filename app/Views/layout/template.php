<?= $this->include('layout/head'); ?>

<body>
  <?= $this->include('layout/header'); ?>

  <?= $this->renderSection('content'); ?>

  <?= $this->include('layout/footer'); ?>

  <?= $this->include('layout/foot'); ?>
</body>

</html>