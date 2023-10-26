<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>Tasks<?= $this->endSection() ?>

<?= $this->section("content") ?>

    <h1 class="title">Tasks</h1>
    
    <a class="button is-primary" href="<?= site_url("/tasks/new") ?>"><?=lang('Tasks.new')?> task</a>

    <div>
        <div class="field">
            <label class="label" for="query"><?=lang('Tasks.search')?></label>
        </div>
        
        <div class="control">
            <input class="input" name="query" id="query">
        </div>
    </div>

    <div class="field">
        <?php if ($tasks): ?>
    
        <ul>
            <?php foreach($tasks as $task): ?>
        
                <li class="table content">
                    <a href="<?= site_url("/tasks/show/" . $task->id) ?>">
                        <?= esc($task->description) ?>
                    </a>
            </li>
            
        <?php endforeach; ?>
    </ul>

    <?= $pager->simpleLinks() ?>
    
<?php else: ?>
    
    <p><?=lang('Tasks.notFound')?></p>
    
<?php endif; ?>

    </div>

    <script src="<?= site_url('/js/auto-complete.min.js') ?>"></script>
    
    <script>
        var searchUrl = "<?= site_url('/tasks/search?q=') ?>";
        var showUrl = "<?= site_url('/tasks/show/') ?>";
        var data;
        var i;
                
        var searchAutoComplete = new autoComplete({
            selector: 'input[name="query"]',
            cache: false,
            source: function(term, response) {

                var request = new XMLHttpRequest();

                request.open('GET', searchUrl + term, true);

                request.onload = function() {
                    
                    data = JSON.parse(this.response);

                    i = 0;

                    var suggestions = data.map(task => task.description);
                    
                    response(suggestions);
                };

                request.send();                
            },
            renderItem: function (item, search) {
                
                var id = data[i].id;
                
                i++;
                
                return '<div class="autocomplete-suggestion" data-id="' + id + '">' + item + '</div>';
            },
            onSelect: function(e, term, item){
                
                window.location.href = showUrl + item.getAttribute('data-id');
                
            }
        });
        
    </script>
    
<?= $this->endSection() ?>

