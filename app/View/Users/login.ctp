<div class="container">
	<div class="users form">
	<?php echo $this->Session->flash('auth'); ?>
	<?php echo $this->Form->create('User');?>
	    <fieldset>
	    	<div class="text-center">
		        <legend><?php echo __('Acesso restrito.'); ?></legend>
		        <p>Você esta tentando acessar uma área restrita. Favor efetue o login</p>
		        	<?php echo $this->Form->input('username', array('label' => 'Usuário', 'class' => 'form-control', 'style' => 'width:200px; margin: auto;', 'autocomplete' => 'off'));?>
		        	<?php echo $this->Form->input('password', array('label' => 'Senha', 'class' => 'form-control', 'style' => 'width:200px; margin: auto;', 'autocomplete' => 'off')); ?>
		        	<br />
		        	<?php 
						$options = array('label' => 'Entrar', 'class' => 'btn btn-primary min-wide', 'div' => false);
						echo $this->Form->end($options);
					?>
			</div>
	    </fieldset>
		

		</div>	
	</div>
</div>	