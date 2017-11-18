@extends('app')

@section('content')

</section>

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

<table id="example" class="display nowrap" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>QNTD</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>

         @foreach($type as $tipo)
        <tr>
         <td>{{ $tipo->type_nome }}</td>
         <td>{{ $tipo->type_qntd }}</td>
         <td><button type="button" class="btn btn-success btn-sm"><a href="/{{$tipo->id}}/addtype"><span class="glyphicon glyphicon-plus"></span> More</a></button>
           <button type="button" class="btn btn-success btn-sm"><a href="/{{$tipo->id}}/addtype"><span class="glyphicon glyphicon-minus"></span> Less</a></button>
         </td>
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
