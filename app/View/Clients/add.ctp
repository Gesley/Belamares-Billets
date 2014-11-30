<div class="container">
	<div class="form-contact">
		<div class="col-sm-12">
			<?php echo $this->Form->create('Client');?>
			    <fieldset>
			    	<div class="text-left">
				        <legend><?php echo __('Adicionar Novo Cliente'); ?></legend>
				        	<?php echo $this->Form->input('name', array('label' => 'Nome do Cliente', 'class' => 'form-control', 'style' => 'width:400px;')); ?>
				           	<?php echo $this->Form->input('cpf', array('label' => 'Cpf do Cliente', 'class' => 'form-control', 'style' => 'width:200px;'));?>
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