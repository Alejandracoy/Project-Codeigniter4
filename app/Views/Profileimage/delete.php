<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?><?=lang('Profile.deletePP')?><?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1 class="title"><?=lang('Profile.deletePP')?></h1>

<p><?=lang('Profile.sure')?></p>

<div class="container">
<?= form_open("/profileimage/delete") ?>
</form>
</div>

    <div class="field is-grouped">
            <div class="control">
                <button class="button is-danger"><?=lang('Profile.affirm')?></button>
            </div>
        
            <div class="control">
                <a class="button is-primary" href="<?= site_url("/profile/show") ?>"><?=lang('Profile.cancel')?></a>
            </div>

    </div>

<?= $this->endSection() ?>