@extends('layouts.app')

@section('titulo', 'Produtos')

@section('breadcrumb')
    <a href="{{route('customers.index')}}" class="breadcrumb">Produtos</a>
@endsection

@section('content')

    <div class="section">
        <table class="highlight centered">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Ações</th>
                <th>WhatsApp</th>
            </tr>
            </thead>

            <tbody>
            @forelse($data as $product)
                <tr>
                    <td>{{$product->name}}</td>
                    <td>{{$product->phone}}</td>
                    <td>
                        <a data-target="modal3" class="modal-trigger tooltipped" data-position="top"
                           data-delay="50"
                           data-tooltip="Editar" data-id="{{$product->id}}" href=""
                           data-name="{{$product->name}}" data-name="{{$product->phone}}"><i
                                    class="small material-icons">edit</i></a>
                        <a data-target="modal1" class="modal-trigger tooltipped" data-position="top"
                           data-delay="50" href=""
                           data-tooltip="Deletar" data-id="{{$product->id}}"
                           data-name="{{$product->name}}"><i
                                    class="small material-icons">delete</i></a></td>
                    <td><a class="waves-effect waves-light btn" href="https://api.whatsapp.com/send?l=pt_BR&phone={{$product->phone}}">button</a></td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">Nenhum produto cadastrado</td>
                </tr>
            @endforelse
            </tbody>
        </table>
        {{$data->links()}}
    </div>

    <div class="fixed-action-btn">
        <a data-target="modal2" class="modal-trigger tooltipped btn-floating btn-large blue"
           data-position="top" data-delay="50" data-tooltip="Cadastrar novo produto">
            <i class="large material-icons">add</i>
        </a>
    </div>

@includeIf('layouts._modal-create')

@includeIf('layouts._modal-edit')

@includeIf('layouts._modal-delete')

@endsection