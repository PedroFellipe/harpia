<!doctype html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <style>

        body {
            font-size: 10pt;
            /*font-family: sans-serif;*/
            line-height: 0.2;
        }

        .bloco {
            margin-bottom: 2.0em;
            background-color: #E6E6E6;
            border-radius: 0.5em;
            padding: 0.5em;
            width: 100%;
        }

        .radius {
            border-radius: 0.4em;
        }

        table {
            width: 100%;
            table-layout: fixed;
            border: 0.5mm solid #000000;
        }

        td{
            text-align: justify;
        }

        tr:nth-child(even) {
            background-color: #a0a0a0;
        }

    </style>
</head>
<body>
<div class="bloco">
    <div class="radius" style="background-color: white;">
        <div align="left" style="width: 15%;float: left;padding: 0.2em;">
            <img height="80%" src="{{public_path('/img/logo_uema.png')}}">
        </div>
        <div class="radius" style="padding: 0.1em;margin-top: 0.5em;">
            <p>Universidade Estadual do Maranhão - <strong>UEMA</strong></p>
            <p>Sistema Acadêmico de Educação a Distância - <strong>SAED/UEMA</strong></p>
            <p>Núcleo de Tecnologias Educacionais - <strong>UEMANET</strong></p>
        </div>
    </div>
    <div style="margin-top: 0.3em;">
        <h3 style="text-align: center">RELATÓRIO DE ACESSO</h3>
        <h3 style="text-align: center"></h3>
    </div>
</div>


<div>
    <img src="{{ $dados['url'] }}">
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
@foreach($tabledata as $tutor)
<div><h3><strong>{{$tutor['fullname']}}</strong></h3>
<table class=" table-bordered table-striped" style="width: 70%">
  <thead>
    <tr>
      <th>Período</th>
      <th>Tempo de acesso</th>
    </tr>
  </thead>
  <tbody>
    @foreach($tutor['weeks'] as $week)
    <tr>
      <td><strong>{{ $week['date_start'] }}</strong> a <strong>{{ $week['date_end'] }}</strong></td>
      <td><strong>{{ $week['onlinetime'] }}</strong></td>
    </tr>
    @endforeach
    <tr>
      <td><strong>Total</strong></td>
      <td><strong>{{ $tutor['total'] }}</strong></td>
    </tr>
  </tbody>
</table>
@endforeach


<?php
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');
?>

<div>
    <h4 style="text-align: center;">São Luís, {{strftime('%d de %B de %Y', strtotime('today'))}}</h4>
</div>
</body>
</html>
