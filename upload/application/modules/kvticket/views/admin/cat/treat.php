<h1><?=($this->get('cat') != '') ? $this->getTrans('edit') : $this->getTrans('add') ?></h1>
<form class="form-horizontal" method="POST" action="" enctype="multipart/form-data">
    <?=$this->getTokenField() ?>

    <div class="row mb-3 <?=$this->validation()->hasError('title') ? 'has-error' : '' ?>">
        <label for="title" class="col-xl-2 control-label">
            <?=$this->getTrans('title') ?>
        </label>
        <div class="col-xl-4">
            <input type="text"
                   class="form-control"
                   id="title"
                   name="title"
                   value="<?=($this->get('cat') != '') ? $this->escape($this->get('cat')->getTitle()) : $this->originalInput('title') ?>" />
        </div>
    </div>

    <?=($this->get('cat') != '') ? $this->getSaveBar('edit') : $this->getSaveBar('add') ?>
</form>
