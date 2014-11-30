<div class="container">
  <div class="col-sm-12">
    <div class="text-left">
      <fieldset>
        <legend><?php echo __('Pesquiar Boleto'); ?></legend>
        <label for="clientcpf">Informe o cpf</label>
        <input type="text" name="clientcpf" id="clientcpf" maxlength="11" class="form-control" style=" width: 150;" />
        <br />
        <input type="button" id="clientPesquisar" class="btn btn-primary clientPesquisar" value="Pesquisar">
      </fieldset>
    </div>
  </div>
</div>
<div class="container">
  <div id="lista" class="hidden">
    <br />
  <fieldset>
      <legend><?php echo __('Listagem de Boletos'); ?></legend>  
      <div class="col-sm-12">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Boleto</th>
            <th>Data Cadastro</th>
            <th>Download</th>
          </tr>
        </thead>
        <tbody id="results">      
        </tbody>
      </table>        
    </div>
  </fieldset>  
  </div>
</div>




