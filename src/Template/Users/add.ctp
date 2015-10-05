<div class="col-lg-4">

  <div class="users form large-9 medium-8 columns content">
      <?= $this->Form->create($user) ?>
      <fieldset>
          <legend><?= __('Sign Up') ?></legend>
          <?php
              echo $this->Form->input('username', ['class' => 'form-control']);
              echo $this->Form->input('password', ['class' => 'form-control']);
          ?>
          <br />
      </fieldset>
      <?= $this->Form->button(__('Submit')) ?>
      <?= $this->Form->end() ?>
  </div>

</div>
