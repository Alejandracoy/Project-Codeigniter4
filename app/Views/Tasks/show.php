<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>Task<?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1 class="title">Task</h1>

<a href="<?= site_url("/tasks") ?>">&laquo; <?=lang('Tasks.back')?></a>

<div class="content">
        <dl>
            <dt class="has-text-weight-bold">ID</dt>
                <dd><?= $task->id ?></dd>
    
            <dt class="has-text-weight-bold"><?=lang('Tasks.desc')?></dt>
                <dd><?= esc($task->description) ?></dd>
    
            <dt class="has-text-weight-bold"><?=lang('Tasks.created')?></dt>
                <dd><?= $task->created_at->humanize() ?></dd>
    
            <dt class="has-text-weight-bold"><?=lang('Tasks.updated')?></dt>
                <dd><?= $task->updated_at->humanize() ?></dd>
        </dl>
</div>

<div class="field is-grouped">
        <div class="control">
            <a class="button is-primary" href="<?= site_url('/tasks/edit/' . $task->id) ?>"><?=lang('Tasks.edit')?></a>
        </div>
    
        <div class="control">
            <a class="button is-danger" href="<?= site_url('/tasks/delete/' . $task->id) ?>"><?=lang('Tasks.delete')?></a>
        </div>
</div>

<?= $this->endSection() ?>