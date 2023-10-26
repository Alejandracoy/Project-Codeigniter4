<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?><?=lang('Profile.editPass')?><?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1 class="title"><?=lang('Profile.editPass')?></h1>

<?php if (session()->has('errors')): ?>
    <ul>
        <?php foreach(session('errors') as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>

<div class="container">
<?= form_open("/profile/updatepassword") ?>

        <div class="field">
                <div class="control">
                        <label class="label" for="current_password"> <?=lang('Profile.currPass')?> </label>
                </div>
                <div class="control">
                    <input class="input" type="password" name="current_password">
                </div>
        </div>

        <div class="field">
                <div class="control">
                        <label class="label" for="password"> <?=lang('Profile.newPass')?> </label>
                </div>
                <div class="control">
                    <input class="input" type="password" name="password">
                </div>
        </div>

        <div class="field">
                    <div class="control">
                <label class="label" for="password_confirmation"> <?=lang('Profile.repPass')?> </label>
                    </div>
                <div class="control">
                    <input class="input" type="password" name="password_confirmation">
                </div>
        </div>



<div class="field is-grouped">
        <div class="control">
            <button class="button is-primary"><?=lang('Profile.accept')?></button>
        </div>
            <div class="control">
                <a  class="button" href="<?= site_url("/profile/show") ?>"><?=lang('Profile.cancel')?></a>
            </div>
</div>

</form>
</div>

<?= $this->endSection() ?>