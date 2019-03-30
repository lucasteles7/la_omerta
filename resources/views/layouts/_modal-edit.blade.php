<div id="modal3" class="modal">
    <form action="{{route('products.update', 'update')}}" method="POST">
        {{csrf_field()}}
        {{ method_field('PUT') }}
        <div class="modal-content">
            <div class="section">
                <div class="row">
                    <h4>Dados do Produto</h4>
                    <input class="validate" hidden name="id" type="number" id="id-edit">
                    <div class="divider"></div>
                    <div class="section">
                        <div class="input-field col s12 m12 l12">
                            <i class="material-icons prefix">short_text</i>
                            <input required id="name-edit" name="name" type="text" class="validate">
                            <label for="name-edit">Nome</label>
                        </div>
                    </div>
                    <div class="section">
                        <div class="input-field col s12 m12 l12">
                            <i class="material-icons prefix">confirmation_number</i>
                            <input required id="cod-edit" name="cod" type="text" class="validate">
                            <label for="cod-edit">Código</label>
                        </div>
                    </div>
                    <div class="section">
                        <div class="input-field col s12 m12 l12">
                            <i class="material-icons prefix">attach_money</i>
                            <input required id="price-edit" name="price" type="text" class="validate">
                            <label for="price-edit">Preço</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn yellow darken-4" type="submit">Editar</button>
        </div>
    </form>
</div>