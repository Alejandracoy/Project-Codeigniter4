<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?> <?= lang('Users.title')?><?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1 class="title"> <?= lang('Users.title')?> </h1>

<?php if (session()->has('errors')): ?>
    <ul>
        <?php foreach(session('errors') as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>



<?= form_open("/admin/users/create") ?>

    <?= $this->include('Admin/Users/form')?>
    
    <div class="field is-grouped">
            <div class="control">
                <button class="button is-primary"> <?=lang('Users.save')?> </button>
            </div>
            
            <div class="control">
                <a class="button" href="<?= site_url("/admin/users") ?>"><?=lang('Users.negation')?></a>
            </div>
    </div>

</form>

<?= $this->endSection() ?>