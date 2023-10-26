<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Password reset<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1 class="title"><?=lang('Password.resetPass')?></h1>

<?php if (session()->has('errors')) : ?>
    <ul>
        <?php foreach(session('errors') as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach ?>
    </ul>
<?php endif ?>

<div class="container">
    <?= form_open("/password/processreset/$token") ?>

        <div class="field">
            <div class="control">
                <label class="label" for="password"> <?=lang('Password.newPass')?></label>
            </div>

            <div class="control">
                <input class="input" type="password" name="password">
            </div>
        </div>

        <div class="field">
                <div class="control">
                    <label class="label" for="password_confirmation"><?=lang('Password.reset')?></label>
                </div>
                
                <div class="control">
                    <input class="input" type="password" name="password_confirmation">
                </div>
        </div>

            <button class="button is-primary"><?=lang('Password.resetPass')?></button>

</form>
</div>

<?= $this->endSection() ?> 