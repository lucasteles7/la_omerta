<div id="modal1" class="modal">
    <form action="{{route('products.destroy', 'delete')}}" method="POST">
        {{ method_field('DELETE') }}
        {{csrf_field()}}
        <div class="modal-content">
            <h4>Deletar</h4>
            <p>Você tem certeza que deseja deletar o produto abaixo?</p>
            <div class="row">
                <label for="name_delete">Nome:</label>
                <div class="input-field col s12">
                    <input class="validate" hidden name="id" type="number" id="id-delete">
                    <input disabled class="validate" type="text" id="name-delete">
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn red delete" type="submit">Sim</button>
        </div>
    </form>
</div>