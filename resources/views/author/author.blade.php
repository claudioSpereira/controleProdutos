<head>

<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<script src="bootstrap/js/jquery.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
<script src="js/init.js"></script>
<script>
$('.dropdown-toggle').dropdown()
</script>
</head>

<div class="row">
  <div class="col-md-12">
    <ul class="nav nav-pills ">
      <li role="presentation"><a href="#">Adtalem Brasil</a></li>
      <li role="presentation"><a href="/chamado">Tickets Control</a></li>
      <li role="presentation"><a href="#">Author</a></li>
      <li role="presentation">
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">Actions
            <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li class="btn-success"><a href="/criaproduto">Create Products</a></li>
            <li class="btn-success"><a href="/listaproduto">List Products</a></li>
            <li role="separator" class="divider"></li>
            <li class="btn-success"><a href="/criafuncionario">Create Collaborators</a></li>
            <li class="btn-success"><a href="/listacolaborador">List Collaborators</a></li>
            <li role="separator" class="divider"></li>
            <li class="btn-success"><a href="/criatype">Create Type</a></li>
            <li class="btn-success"><a href="/listatype">Lista Type</a></li>
          </ul>
      </li>

      <li role="presentation" class="col-md-6"><!-- Authentication Links -->
      @if (Auth::guest())
          <li><a href="{{ route('login') }}">Login</a></li>
          <li><a href="{{ route('register') }}">Register</a></li>
      @else
          <li class="dropdown btn btn-default">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                  {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <ul class="dropdown-menu btn float-right btn-success" role="menu">
                  <li>
                      <a href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                          Logout
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                      </form>
                  </li>
              </ul>
          </li>
      @endif
      </li>
    </ul>
  </div>

      <div class="col-sm-4 col-md-12 col-lg-6 col-md-offset-3">
      <!-- start icons -->
      <div class="row text-center pad-top">

       <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
            <div class="div-square">
                 <a href="blank.html" >
      <i class="fa fa-clipboard fa-5x"></i>
            <h4>All Docs</h4>
            </a>
            </div>


        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
            <div class="div-square">
                 <a href="blank.html" >
      <i class="fa fa-gear fa-5x"></i>
            <h4>Settings</h4>
            </a>
            </div>


        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
            <div class="div-square">
                 <a href="blank.html" >
      <i class="fa fa-wechat fa-5x"></i>
            <h4>Live Talk</h4>
            </a>
            </div>


        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
            <div class="div-square">
                 <a href="blank.html" >
      <i class="fa fa-bell-o fa-5x"></i>
            <h4>Notifications </h4>
            </a>
            </div>


        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
            <div class="div-square">
                 <a href="blank.html" >
      <i class="fa fa-rocket fa-5x"></i>
            <h4>Launch</h4>
            </a>
            </div>


        </div>
           <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
            <div class="div-square">
                 <a href="blank.html" >
      <i class="fa fa-user fa-5x"></i>
            <h4>Register User</h4>
            </a>
            </div>


        </div>
      </div>
      <p>...
    </p>
      <!-- end icons -->
      </div>
      <p>...
    </p>
     </div>

<div class="col-sm-4 col-md-12 col-lg-6 col-md-offset-3">
<!-- central da pagina -->
<img src="/img/gallery/980x380/euLaravelVueJs.png" class="img-rounded" alt="Cinque Terre" width="454" height="236">

<img src="/img/gallery/980x380/SAM_1538.jpg" class="img-rounded" alt="Cinque Terre" width="224" height="236">


  <div class="list-group">
     <a href="#" class="list-group-item active">
       <h4 class="list-group-item-heading">Claudio Santos</h4>
       <p class="list-group-item-text">Tecnólogo em Gestão de T.I. e Pós Graduando em Administração e Segurança em Sistemas Computacionais</p>
     </a>
</div><p>
