<div class="container">
	<div class="form-contact">
		<div class="col-sm-12">
			<?php echo $this->Form->create('User');?>
			    <fieldset>
			    	<div class="text-left">
				        <legend><?php echo __('Adicionar Usuário'); ?></legend>
				        	<?php echo $this->Form->input('username', array('label' => 'Usuário', 'class' => 'form-control', 'style' => 'width:200px;')); ?>
				           	<?php echo $this->Form->input('password', array('label' => 'Senha', 'class' => 'form-control', 'style' => 'width:200px;'));?>
							<?php
				        		echo $this->Form->input('role', array(
				        			'label' => 'Perfil',
				            		'class' => 'form-control',
				            		'style' => 'width:250px;',	
				            		'options' => array('admin' => 'Administrador do sistema', 'usuario' => 'Usuário da TI')
				        		));
				    		?>
				    		<br />
							<?php 
								$options = array('label' => 'Adicionar Usuário', 'class' => 'btn btn-primary min-wide', 'div' => false);
								echo $this->Form->end($options);
							?>
					</div>
				 </fieldset>
			</div>
	</div>
</div>	