<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?><?= lang('Users.h1') ?><?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1 class="title">  <?= lang('Users.h1') ?> </h1>

<p> <?= lang('Users.sure')?> </p>

<?= form_open("/admin/users/delete/" . $user->id) ?>

    <div class="field is-grouped">
        <div class="control">
            <button class="button is-primary"><?= lang('Users.confirmation') ?></button>
        </div>

        <div class="control">
            <a class="button is-danger" href="<?= site_url('/admin/users/show/' . $user->id) ?>"><?= lang('Users.negation') ?></a>
        </div>
    </div>
    
</form>

<?= $this->endSection() ?>