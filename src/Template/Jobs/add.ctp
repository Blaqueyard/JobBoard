<h1>Post Job</h1>
<?php
    echo $this->Form->create($job);
    echo $this->Form->input('category_id', ['class' => 'form-control']);
    echo $this->Form->input('title',['class' => 'form-control']);
    echo $this->Form->input('company',['class' => 'form-control']);
    echo $this->Form->input('location',['class' => 'form-control']);
    echo $this->Form->input('body', ['rows' => '3', 'class' => 'form-control']);
    echo $this->Form->button(__('Post Job'));
    echo $this->Form->end();
?>
