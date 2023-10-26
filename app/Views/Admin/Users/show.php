<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?><?=lang('Users.user')?><?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1 class="title"><?=lang('Users.user')?></h1>

<a href="<?= site_url("/admin/users") ?>">&laquo; <?=lang('Users.backIn')?></a>

    <div class="content">
        <dl>
            <dt class="has-text-weight-bold"><?=lang('Users.name')?></dt>
                <dd><?= esc($user->name) ?></dd>

            <dt class="has-text-weight-bold"><?=lang('Users.email')?></dt>
                <dd><?= esc($user->email) ?></dd>

            <dt class="has-text-weight-bold"> <?=lang('Users.userAc')?></dt>
                <dd><?= $user->is_active ? 'yes' : 'no' ?></dd>

            <dt class="has-text-weight-bold"><?=lang('Users.admin')?></dt>
                <dd><?= $user->is_admin ? 'yes' : 'no' ?></dd>
            
            <dt class="has-text-weight-bold"><?=lang('Users.creatAt')?></dt>
                <dd><?= $user->created_at->humanize() ?></dd>
            
            <dt class="has-text-weight-bold"> <?=lang('Users.updAt')?></dt>
                <dd><?= $user->updated_at->humanize()?></dd>
        </dl>
    </div>

<a class="button is-primary" href="<?= site_url('/admin/users/edit/' . $user->id) ?>"><?= lang('Users.ediUser')?></a>


<?php if($user->id != current_user()->id): ?>
    <a class="button is-danger" href="<?= site_url('/admin/users/delete/' . $user->id) ?>"><?= lang('Users.delete') ?></a>

<?php endif; ?>
    

<?= $this->endSection() ?>