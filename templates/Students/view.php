<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Student $student
 */
?>
<div class="row">
    <div class="column-responsive column-80">
        <div class="students view content">
            <h3>Student Profile: <?= h($student->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Full Name') ?></th>
                    <td><?= h($student->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Matric Number') ?></th>
                    <td><?= h($student->matric_no) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($student->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Course') ?></th>
                    <td><?= h($student->course) ?></td>
                </tr>
                <tr>
                    <th><?= __('GPA') ?></th>
                    <td><?= $this->Number->format($student->gpa) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Joined') ?></th>
                    <td><?= h($student->created) ?></td>
                </tr>
            </table>
            
            <div style="margin-top: 20px;">
                <?= $this->Html->link(__('Edit Student'), ['action' => 'edit', $student->id], ['class' => 'button']) ?>
                <?= $this->Html->link(__('Back to List'), ['action' => 'index'], ['class' => 'button button-outline']) ?>
            </div>
        </div>
    </div>
</div>