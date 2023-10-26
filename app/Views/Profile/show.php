<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?><?=lang('Profile.profile')?><?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1 class="title"><?=lang('Profile.profile')?></h1>

<?php if ($user->profile_image): ?>

    <img src="<?= site_url('/profile/image') ?>" width="200" height="200" alt="profile image">


    <div>
    <a class="button is-danger is-light"  href="<?= site_url("/profileimage/delete/") ?>"><?=lang('Profile.deletePP')?></a>

    </div>

<?php else: ?>

    <img src="<?= site_url('/images/blank_profile.png') ?>" width="200" height="200" alt="profile image">

<?php endif; ?>


<div class="content">
    <dl>
        <dt class="has-text-weight-bold"><?=lang('Profile.name')?></dt>
            <dd><?= esc($user->name) ?></dd>
    
        <dt class="has-text-weight-bold"><?=lang('Profile.email')?></dt>
            <dd><?= esc($user->email) ?></dd>
    </dl>
</div>

<a class="button is-link" href="<?= site_url("/profile/edit/") ?>"><?=lang('Profile.edit')?></a>

<a class="button is-link" href="<?= site_url("/profile/editpassword") ?>"> <?=lang('Profile.editPass')?> </a>

<a class="button is-link" href="<?= site_url("/profileimage/edit") ?>"> <?=lang('Profile.changePP')?> </a>


<?= $this->endSection() ?>