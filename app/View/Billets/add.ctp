<div class="container">
    <div class="form-contact">
      <div class="col-sm-12">
        <?php echo $this->Form->create('Billet', array('type' => 'file', 'action' => 'add'));?>
            <fieldset>
              <div class="text-left">
                  <legend><?php echo __('Adicionar Boleto'); ?></legend>
                    <?php echo $this->Form->input('archivename', array('label' => 'Nome do Cliente', 'class' => 'form-control', 'style' => 'width:400px;')); ?>
                <br />
                <?php echo $this->Form->input('archivepdf', array('label' => 'Boleto PDF', 'type' => 'file')); ?>
				<br />
                <?php echo $this->Form->input('clientcod', array('type' => 'hidden', 'value' => '')); ?>
                <?php 
                  $options = array('label' => 'Adicionar Boleto', 'class' => 'btn btn-primary min-wide', 'div' => false);
                  echo $this->Form->end($options);
                ?>
            </div>
           </fieldset>
        </div>
    </div>
</div>  