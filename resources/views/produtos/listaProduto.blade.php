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
  <script>
    $(document).ready(function(){
        $("#myModal").on("show.bs.modal", function(e) {
            var id = $(e.relatedTarget).data('target-id');
            $.get( "/controller/" + id, function( data ) {
                $(".modal-body").html(data.html);
            });

        });
    });
</script>
@if(Session::has('altera'))
    <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('altera') !!}</em></div>
@endif

@if(Session::has('salva'))
    <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('salva') !!}</em></div>
@endif

<table id="example">
        <thead>
            <tr>
                <th>Produto Type</th>
                <th>Funcionario</th>
                <th>Matri</th>
                <th>Name</th>
                <th>Patrimonio</th>
                <th>Serie</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Status</th>
                <th>Garantia</th>
                <th>Ações</th>
              </tr>
        </thead>
        <tbody>

           @foreach($produtos as $produto)
        <tr>
          <td>{{ $produto->typeprods->type_nome }}</td>
         <td>{{ $produto->funcionarios->fun_nome }}</td>
         <td>{{ $produto->funcionarios->fun_matricula }}</td>
         <td>{{ $produto->prod_nome }}</td>
         <td>{{ $produto->prod_patrimonio }}</td>
         <td>{{ $produto->prod_serie }}</td>
         <td>{{ $produto->prod_marca }}</td>
         <td>{{ $produto->prod_modelo }}</td>
         <td>{{ $produto->prod_status }}</td>
         <td>{{ $produto->prod_garantia }}</td>
         <td><button type="button" class="btn btn-success btn-sm"><a href="/{{$produto->id}}/editaproduto"><span class="glyphicon glyphicon-edit"></span> Editar</a></button></td>
       </tr>
         @endforeach

         </tbody>
  </table>

    <script>
    $(document).ready(function() {
      $('#example').DataTable( {
          responsive: true,
          dom: 'Bfrtip',
          buttons: [
              'copy', 'csv', 'excel', 'pdf', 'print'
                    ]
          } );
      } );
    </script>
</div>

@endsection
