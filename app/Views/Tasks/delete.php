<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?><?=lang('Tasks.delete')?> task<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1 class="title"><?=lang('Tasks.delete')?> task</h1>

<p><?=lang('Tasks.sure')?></p>

<div class="field">
    <?= form_open("/tasks/delete/" . $task->id) ?>

    <div class="field is-grouped">
        <div class="control">
            <button class="button is-danger"><?=lang('Tasks.delete')?></button>
        </div>
    
        <div class="control">
            <a class="button" href="<?= site_url('/tasks/show/' . $task->id) ?>"><?=lang('Tasks.cancel')?></a>
        </div>
    </div>

    </form>
</div>

<?= $this->endSection() ?>