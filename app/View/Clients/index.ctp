<br />
<div class="container">
      <h3>Usuários do sistema</h3>    
      
      <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Usuário</th>
            <th>Cpf</th>
            <th>Data Cadastro</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach ($clients as $client): ?>
            <tr>
                <td><?php echo $client['Client']['id']; ?></td>
                <td><?php echo $client['Client']['name']; ?></td>
                <td><?php echo $client['Client']['cpf']; ?></td>
                <td><?php echo CakeTime::format( $client['Client']['created'], '%d/%m/%Y' ); ?></td>
                <td>
                <?php echo $this->Form->postLink(
                    'Excluir',
                    array('action' => 'delete', $client['Client']['id']),
                    array('confirm' => 'Tem certeza?')
                  );
                ?>
                </td>
            </tr>
        <?php endforeach; ?>        
        </tbody>
    </table>
</div>

<?php if($this->Paginator->numbers()):?>
  <div class="container">
      <nav class="pagination">
        <ul class="">
          <li><?php echo $this->Paginator->prev('« Mais novas', null, null, array('class' => ''));?></li>
          <li><?php echo $this->Paginator->numbers(); ?></li>
          <li><?php echo $this->Paginator->next('Mais antigas »', null, null, array('class' => ''));?></li>    
        </ul>
      </nav>    
  </div>
<?php endif; ?>