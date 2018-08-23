@extends('layouts.modulos.monitoramento')

@section('stylesheets')
    <link rel="stylesheet" href="{{asset('/css/plugins/select2.css')}}">
    <link rel="stylesheet" href="{{asset('/css/plugins/datepicker3.css')}}">
@endsection

@section('title')
    Tempo Online
@stop

@section('subtitle')
    {{$ambiente->amb_nome}}
@stop

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Visualização de dados do ambiente virtual</h3>
        </div>
        <div class="box-body">
            {!! Form::open(["url" => url('/') . "/monitoramento/ambientesvirtuais/create", "method" => "POST", "id" => "form", "role" => "form"]) !!}
            @include('Monitoramento::tempoonline.includes.formulario')
            {!! Form::close() !!}
        </div>
        <div class="text-center margin" id="grafico"></div>
    </div>

    <!-- <div class="table-dados" style = "display:none">sadsadasdas</div> -->

    <div class="box box-primary" id = "tabela-semanas" style = "display:none">
        <div class="box-header with-border">
            <h3 class="box-title">Relatório de acesso semanal</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
            </div>
        </div>
        <div class="box-body" id = "dados-tabela-semana">
        </div>
        <div class="botao">
          {!! ActionButton::grid([
            'type' => 'LINE',
            'buttons' =>
            [
              [
                'classButton' => 'btn btn-success pull-right',
                'icon' => 'fa fa-file-pdf-o',
                'route' => 'monitoramento.tempoonline.print',
                'id' => 'algo',
                'label' => 'Relatório',
                'method' => 'post',
                'attributes' => [
                  'target' => '_blank'
                  ],
              ],
            ]])!!}
          </div>
    </div>
@stop

@section('scripts')
    <script src="{{asset('/js/plugins/select2.js')}}" type="text/javascript"></script>
    <script src="{{asset('/js/plugins/bootstrap-datepicker.js')}}" type="text/javascript"></script>
    <script src="{{asset('/js/plugins/bootstrap-datepicker.pt-BR.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("select").select2();
        });
    </script>

    <script type="text/javascript">
        $('.datepicker2').datepicker({
            format: 'dd/mm/yyyy',
            language: 'pt-BR'
        });
        var myDate = new Date();
        var prettyDate = (myDate.getDate() - 7) + '/' + (myDate.getMonth() + 1) + '/' + (myDate.getFullYear());
        $(".datepicker2").datepicker('setDate', prettyDate);
    </script>

    <script type="text/javascript">
        $('.datepicker').datepicker({
            format: 'dd/mm/yyyy',
            language: 'pt-BR'
        });

        $(".datepicker").datepicker('setDate', new Date());
    </script>

    <script src="{{asset('/js/plugins/Chart.min.js')}}" type="text/javascript"></script>
@endsection
