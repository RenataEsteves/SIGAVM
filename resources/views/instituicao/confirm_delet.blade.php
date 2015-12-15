<div class="modal fade" id="confirm_delet" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Confirma exclusão?</h4>
            </div>
            <div class="modal-body">
                <p>Tem certeza que deseja deletar o registro de: {{$instituicao->nome}} [{{ $instituicao->id }}]?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> Não</button>

                <form style="display: inline-block" method="POST" accept-charset="UTF-8" action="/instituicaos/{{ $instituicao->id }}">
                    <button type="submit" class="btn btn-danger"><i class="glyphicon glyphicon-ok"></i> Sim</button>
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->