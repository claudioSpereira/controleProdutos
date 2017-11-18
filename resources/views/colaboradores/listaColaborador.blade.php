@extends('app')

@section('content')


<link href="css/jquery.dataTables.min.css">
<link href="css/buttons.dataTables.min.css">

<link href="css/jquery.dataTables.min.css" rel="stylesheet">
<link href="css/buttons.dataTables.min.css" rel="stylesheet">
<link href="css/jquery.dataTables.min.css" rel="stylesheet">

<link href="css/table.css" rel="stylesheet">
<link href="{{ asset('bootstrap/css/bootstrap.css') }}" rel="stylesheet">

<link href="font-awesome/font-awesome.min.css" rel="stylesheet">

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
                <th>Name</th>
                <th>Matricula</th>
                <th>Cargo</th>
                <th>Setor</th>
            </tr>
        </thead>
        <tbody>

         @foreach($col as $colaboradores)
        <tr>
         <td>{{ $colaboradores->col_nome }}</td>
         <td>{{ $colaboradores->col_matricula }}</td>
         <td>{{ $colaboradores->col_cargo }}</td>
         <td>{{ $colaboradores->col_setor }}</td>
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
