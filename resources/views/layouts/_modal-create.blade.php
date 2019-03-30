<div id="modal2" class="modal">
    <form action="{{route('products.store')}}" method="POST">
        {{csrf_field()}}
        <div class="modal-content">
            <div class="section">
                <div class="row">
                    <h4>Dados do Produto</h4>
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
                            <i class="material-icons prefix">confirmation_number</i>
                            <input required id="cod" name="cod" type="text" class="validate">
                            <label for="cod">Código</label>
                        </div>
                    </div>
                    <div class="section">
                        <div class="input-field col s12 m12 l12">
                            <i class="material-icons prefix">attach_money</i>
                            <input required id="price" name="price" type="text" class="validate">
                            <label for="price">Preço</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn green" type="submit">Cadastrar</button>
        </div>
    </form>
</div>