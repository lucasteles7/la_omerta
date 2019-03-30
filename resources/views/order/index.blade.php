@extends('layouts.app')

@section('titulo', 'Produtos')

@section('breadcrumb')
 <!--   <a href="{{route('orders.index')}}" class="breadcrumb">Pedidos</a> -->
@endsection

@section('content')
    <form action="{{route('customer_payment.store')}}" method="POST">
        {{csrf_field()}}
            <div class="section">
                <div class="row">
                    <h4>Dados do Cliente</h4>
                    <div class="divider"></div>
                    <div class="section">
                        <div class="input-field col s12 m12 l12">
                            <i class="material-icons prefix">short_text</i>
                            <input required id="name" name="name" type="text" class="validate">
                            <label for="name">Nome</label>
                        </div>
                    </div>
                    <div class="section">
                        <div class="input-field col s12 m12 l12">
                            <i class="material-icons prefix">phone_iphone</i>
                            <input required id="phone" name="phone" type="text" class="validate">
                            <label for="phone">Telefone</label>
                        </div>
                    </div>
                    <div class="section">
                        <div class="input-field col s12 m12 l12">
                            <i class="material-icons prefix">attach_money</i>
                            <input required id="price" name="price" type="text" class="validate">
                            <label for="price">Preço</label>
                        </div>
                    </div>
                    <button class="btn green" type="submit">Enviar</button>
                </div>
            </div>
    </form>

@endsection

        @section('js')

            <script>
                $(function () {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-Token': $('meta[name="_token"]').attr('content')
                        }
                    });
                });

                $(document).ready(function () {
                    $.ajax({
                        dataType: 'json',
                        type: 'GET',
                        url: '/pedidos/get-all',
                    }).done(function (data) {
                        var options = {};
                        $(data).each(function (index) {
                            options[data[index].name] = null;
                        });
                        $('input.autocomplete').autocomplete({
                            data: options,
                        });
                    });
                });

                $("#autocomplete-input").on('change', function(e){
                    if($(this).val().length > 2){
                        $('#lista-de-produtos').append('<li class="collection-item">' + $(this).val() + '</li>');
                    }
                    return false;
                });
            </script>

@endsection