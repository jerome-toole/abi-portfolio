<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <link rel="icon" type="image/png" href="./favi.png" />

  <title><?= $site->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">

  <?= css('dist/styles/main.css') ?>
  <?= js('dist/scripts/jquery.js') ?>
  <?= js('dist/scripts/vendor.js') ?>
  <?= js('dist/scripts/main.js') ?>


</head>
<body class="<?php echo $page->template(); ?> <?php echo $page->uid() ?>">
