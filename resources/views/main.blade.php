
<link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/table.css') }}" rel="stylesheet">

<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
<link href="https://cdn.datatables.net/buttons/1.4.1/css/buttons.dataTables.min.css">

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


<table id="example" class="display nowrap" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
                <td>$170,750</td>
            </tr>
            <tr>
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
                <td>2009/01/12</td>
                <td>$86,000</td>
            </tr>
            <tr>
                <td>Donna Snider</td>
                <td>Customer Support</td>
                <td>New York</td>
                <td>27</td>
                <td>2011/01/25</td>
                <td>$112,000</td>
            </tr>
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
