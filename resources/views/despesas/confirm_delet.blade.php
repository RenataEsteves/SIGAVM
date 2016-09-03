@if($despesas)
    <div class="modal fade" id="confirm_delet{{ $despesa->id }}" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><b>Confirma exclusão?</b></h4>
                </div>
                <div class="modal-body">
                    <p>Tem certeza que deseja deletar o registro: <b>{{ $despesa->titulo }}</b> [ID: {{ $despesa->id }}]?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> Não</button>

                    <form style="display: inline-block" method="POST" accept-charset="UTF-8" action="/despesas/{{ $despesa->id }}">
                        <button type="submit" class="btn btn-danger"><i class="glyphicon glyphicon-ok"></i> Sim</button>
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                    </form>

                </div>
            </div>
        </div><
    </div>
@endif