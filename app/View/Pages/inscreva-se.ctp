<h3>Login</h3>
<?php echo $this->Form->create('Usuario', array('action' => 'login')) ?>
<?php echo $this->Form->input('login') ?>
<?php echo $this->Form->input('senha', array('type' => 'password')) ?>
<?php echo $this->Form->submit('Entrar') ?>
<?php echo $this->Form->end() ?>