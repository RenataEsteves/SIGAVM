<div class="modal fade" id="confirm_delet{{ $membro->id }}" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Confirma exclusão?</h4>
            </div>
            <div class="modal-body">
                <p>Tem certeza que deseja deletar o registro de: {{ $membro->nome }} [ID: {{ $membro->id }}]?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> Não</button>

                <form style="display: inline-block" method="POST" accept-charset="UTF-8" action="/membros/{{ $membro->id }}">
                    <button type="submit" class="btn btn-danger"><i class="glyphicon glyphicon-ok"></i> Sim</button>
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                </form>
                {{--{!! Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('membros.destroy', $membro->id))) !!}--}}
                {{--{!! Form::submit('Deletar', array('class' => 'btn btn-deletar')) !!}--}}
                {{--{!! Form::close() !!}--}}
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->