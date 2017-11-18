@extends('app')

@section('content')


<link href="css/jquery.dataTables.min.css">

<link href="css/buttons.dataTables.min.css">

<link href="css/jquery.dataTables.min.css" rel="stylesheet">

<link href="css/buttons.dataTables.min.css" rel="stylesheet">

<link href="css/jquery.dataTables.min.css" rel="stylesheet">

<link href="css/table.css" rel="stylesheet">
<link href="{{ asset('bootstrap/css/bootstrap.css') }}" rel="stylesheet">

<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
<!-- js datatables -->
<script src="jsTables/jquery-1.12.4.js"></script>
<script src="jsTables/jquery.dataTables.min.js"></script>
<script src="jsTables/dataTables.buttons.min.js"></script>
<script src="jsTables/buttons.flash.min.js"></script>
<script src="jsTables/jszip.min.js"></script>
<script src="jsTables/pdfmake.min.js"></script>
<script src="jsTables/vfs_fonts.js"></script>
<script src="jsTables/buttons.html5.min.js"></script>
<script src="jsTables/buttons.print.min.js"></script>

<script src="js/bootstrap-confirmation.min.js"></script>

<div class="tabela">

<table id="example">
        <thead>
            <tr>
                <th><span class="glyphicon glyphicon-user"></span> Name</th>
                <th><span class="glyphicon glyphicon-list-alt"></span> Matr.</th>
                <th><span class="glyphicon glyphicon-sound-7-1"></span> Cargo</th>
                <th><span class="glyphicon glyphicon-map-marker"></span> Setor</th>
                <th><span class="glyphicon glyphicon-edit"></span> Ações</th>
            </tr>
        </thead>
        <tbody>

         @foreach($col as $colaboradores)
        <tr>
         <td>{{ $colaboradores->fun_nome }}</td>
         <td>{{ $colaboradores->fun_matricula }}</td>
         <td>{{ $colaboradores->fun_cargo }}</td>
         <td>{{ $colaboradores->fun_setor }}</td>
         <td><button type="button" class="btn btn-success btn-sm"><a href="/{{$colaboradores->id}}/editafuncionario"><span class="glyphicon glyphicon-edit"></span> Editar</a></button></td>
         </tr>
         @endforeach

         </tbody>
  </table>


    <script>
    $(document).ready(function() {
      $('#example').DataTable( {
          dom: 'Bfrtip',
          buttons: [
              'copy', 'csv', 'excel', 'pdf', 'print'
                    ]
          } );
      } );
    </script>
</div>

@endsection
