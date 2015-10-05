<h1>Edit Job</h1>
<?php
    echo $this->Form->create($job);
    echo $this->Form->input('title',['class' => 'form-control']);
    echo $this->Form->input('company',['class' => 'form-control']);
    echo $this->Form->input('location',['class' => 'form-control']);
    echo $this->Form->input('body', ['rows' => '3', 'class' => 'form-control']);
    echo $this->Form->button(__('Update Job', ['class' => 'btn btn-default']));
    echo $this->Form->end();
?>
