<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Student $student
 */
?>
<div class="row">
    <div class="column-responsive column-80">
        <div class="students form content">
            <?= $this->Form->create($student) ?>
            <fieldset>
                <legend><?= __('Edit Student') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('matric_no');
                    echo $this->Form->control('email');
                    echo $this->Form->control('course');
                    echo $this->Form->control('gpa');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Save Changes')) ?>
            <?= $this->Form->end() ?>
            
            <?= $this->Html->link('Cancel', ['action' => 'index'], ['class' => 'button button-outline']) ?>
        </div>
    </div>
</div>