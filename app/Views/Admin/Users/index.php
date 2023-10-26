<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?> <?=lang('Users.title')?> <?= $this->endSection() ?>

<?= $this->section("content") ?>

    <h1 class="title"> <?=lang('Users.user')?> </h1>
    
    <a class="button is-primary" href="<?= site_url("/admin/users/new") ?>"> <?=lang('Users.title')?> </a>
    
    <?php if ($users): ?>
    
        <table class="table">
            <thead>
                <tr>
                    <th> <?=lang('Users.name')?> </th>
                    <th> <?=lang('Users.email')?> </th>
                    <th> <?=lang('Users.active')?> </th>
                    <th> <?=lang('Users.admin')?> </th>
                    <th><?=lang('Users.creatAt')?></th>
                    
                </tr>
            </thead>
            <tbody>
                <?php foreach($users as $user): ?>
                
                    <tr>
                        <td>
                            <a href="<?= site_url("/admin/users/show/" . $user->id) ?>">
                                <?= esc($user->name) ?>
                            </a>
                        </td>
                        <td><?= esc($user->email) ?></td>
                        <td><?= $user->is_active ? 'yes' : 'no' ?></td>
                        <td><?= $user->is_admin ? 'yes' : 'no' ?></td>
                        <td><?= $user->created_at ?></td>
                    </tr>
                    
                <?php endforeach; ?>
            </tbody>
        </table>

        <?= $pager->simpleLinks() ?>
        
    <?php else: ?>
        
        <p><?=lang('Users.notFound')?></p>
        
    <?php endif; ?>

<?= $this->endSection() ?>
