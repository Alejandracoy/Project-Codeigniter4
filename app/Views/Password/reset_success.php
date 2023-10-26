<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Password reset<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1 class="title"><?=lang('Password.done')?>!</h1>

<p><?=lang('Password.succces')?></p>

<p><a  class="button is-primary" href="<?= site_url("/login") ?>"><?=lang('Password.login')?></a></p>

<?= $this->endSection() ?>