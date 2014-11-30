<br />
<div class="container">
      <h3>Usuários do sistema</h3>    
      
      <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Usuário</th>
            <th>Data Cadastro</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo $user['User']['id']; ?></td>
                <td><?php echo $user['User']['username']; ?></td>
                <td><?php echo CakeTime::format( $user['User']['created'], '%d-%m-%Y as %H:%M:%S' ); ?></td>
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