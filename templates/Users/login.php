<div class="row justify-content-center">
<div class="users form content">
    <h3>Login</h3>
    <?= $this->Form->create() ?>
    <fieldset>
        <?= $this->Form->control('email') ?>
        <?= $this->Form->control('password') ?>
    </fieldset>
    <?= $this->Form->button(__('Login')); ?>
    <?= $this->Form->end() ?>
    
    <?= $this->Html->link("Register new account", ['action' => 'add']) ?>
</div>