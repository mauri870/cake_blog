<div class="row">
    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
        <h1>Login</h1><br>
        <?= $this->Form->create() ?>
        <?= $this->Form->input('email') ?><br>
        <?= $this->Form->input('password') ?><br>
        <?= $this->Form->button('Login') ?>
        <?= $this->Form->end() ?>
    </div>
</div>
