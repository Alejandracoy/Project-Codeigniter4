<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?><?=lang('Password.forgotPass')?><?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1 class="title"><?=lang('Password.reset')?></h1>

<?= form_open("/password/processforgot") ?>

    <div class="field">
        <label class="label" for="email"><?=lang('Password.email')?></label>
        <input class="input" type="text" name="email" id="email" value="<?= old('email') ?>">
    </div>
    
    <button class="button is-primary"><?=lang('Password.send')?></button>

</form>

<?= $this->endSection() ?>