@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12" style="margin-top: 10%;margin-left: 5%;">
		<div class="media v-middle" style="margin-top: 5px !important; margin-bottom: 5px !important;">
			<div class="media-body">
				<h1>Gerenciamento de Produtos</h1>
			</div>
			<div class="media-right">
				
			</div>
			<div class="media-right">
			
			</div>
		</div>
	</div>
    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        </div>
        <div class="modal-body">
            <h4>Nome do Produto:</h4> 
            <input class="form-control" type="text" id="nome">

            <h4>Código do Produto:</h4> 
            <input class="form-control" type="text" id="codigo">

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Enviar</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Sair</button>
        </div>
      </div>
      
    </div>
  </div>
    <div class="col-md-12">
		<!-- Progress table -->
		<div class="panel panel-default"   style="margin: 5%;">
			<div class="table-responsive">
            <table class="table v-middle">
			    <thead>
			        <tr>
				        <th><h2>Nome do Produto</h2></th>
				        <th><h2>Código do Produto</h2></th>
                        <th><h2>Ações</h2></th>
			        </tr>
			    </thead>
                <tbody>
                    <tr>
                        <td><h3>Nome do Produto</h3></td>
				        <td><h3>Código do Produto</h3></td>
                        <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">EDITAR</button>
                            <button style="margin-left: 10px; background-color: #c51e1e; border-color: #c51e1e;" type="button" class="btn btn-primary">EXCLUIR</button>
                        </td>
                    </tr>
                    <tr>
                        <td><h3>Nome do Produto</h3></td>
				        <td><h3>Código do Produto</h3></td>
                        <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">EDITAR</button>
                            <button style="margin-left: 10px; background-color: #c51e1e; border-color: #c51e1e;" type="button" class="btn btn-primary">EXCLUIR</button>
                        </td>
                    </tr>
                    <tr>
                        <td><h3>Nome do Produto</h3></td>
				        <td><h3>Código do Produto</h3></td>
                        <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">EDITAR</button>
                            <button style="margin-left: 10px; background-color: #c51e1e; border-color: #c51e1e;" type="button" class="btn btn-primary">EXCLUIR</button>
                        </td>
                    </tr>
                    <tr>
                        <td><h3>Nome do Produto</h3></td>
				        <td><h3>Código do Produto</h3></td>
                        <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">EDITAR</button>
                            <button style="margin-left: 10px; background-color: #c51e1e; border-color: #c51e1e;" type="button" class="btn btn-primary">EXCLUIR</button>
                        </td>
                    </tr>
                </tbody>
            </table>    
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="panel panel-default" style="float: right; margin-right: 8%;">
            <button style="height: 50px; width: 100px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Adicionar</button>
        </div>
        <div class="panel panel-default" style="float: right; margin-right: 2%;">
            <button style="height: 50px; width: 100px; background-color: #0d9040;border-color: #0d9040;" type="button" class="btn btn-primary" data-dismiss="modal">Salvar</button>
        </div>
    </div>
</div>
	
@endsection
