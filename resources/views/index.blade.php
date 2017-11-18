
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

  <script>
  function move() {
      var elem = document.getElementById("myBar");
      var width = 10;
      var id = setInterval(frame, 10);
      function frame() {
          if (width >= 100) {
              clearInterval(id);
          } else {
              width++;
              elem.style.width = width + '%';
              elem.innerHTML = width * 1 + '%';
          }
      }
  }
  </script>

  <script languague="javascript">
  $(document).ready(function() {
    $('#exemplomodal').modal('show');
})
  </script>
</head>

<div class="row">
    <div class="col-md-12">
      <ul class="nav nav-pills ">
        <li role="presentation"><a href="#">Adtalem Brasil</a></li>
        <li role="presentation"><a href="/chamados">Tickets Control</a></li>
        <li role="presentation"><a href="/author">Author</a></li>
        <li role="presentation">
          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">Actions
              <span class="caret"></span>
            </button>
            <button type="button" class="btn btn-primary construcao" data-toggle="modal" data-target="#exemplomodal">INFORMAÇÕES DE USO</button>

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
     <img src="teste.jpg" class="img-rounded" alt="Cinque Terre" width="244" height="236">
     <img src="/img/gallery/980x380/001.jpg" class="img-rounded" alt="Cinque Terre" width="214" height="236">
     <img src="/img/gallery/980x380/002.jpg" class="img-rounded" alt="Cinque Terre" width="284" height="236">
     <img src="/img/gallery/980x380/004.jpg" class="img-rounded" alt="Cinque Terre" width="269" height="236">
     <img src="/img/gallery/980x380/002.jpg" class="img-rounded" alt="Cinque Terre" width="261" height="236">
     <img src="/img/gallery/980x380/001.jpg" class="img-rounded" alt="Cinque Terre" width="214" height="236">
    </div><p>
  </p>

    <div class="panel panel-default col-sm-6 col-md-6 col-lg-6 col-md-4 col-md-offset-3">
      <!-- Default panel contents -->
      <p>...</p>
      <div class="panel-heading">SUPORTE T.I.</div>
      <div class="panel-body">

      </div>

      <!-- List group -->
      <ul class="list-group">
        <li class="list-group-item">Cras justo odio</li>
        <li class="list-group-item">Dapibus ac facilisis in</li>
        <li class="list-group-item">Morbi leo risus</li>
        <li class="list-group-item">Porta ac consectetur ac</li>
        <li class="list-group-item">Vestibulum at eros</li>
      </ul>
    </div>
    <div class="col-sm-6 col-md-6 col-lg-6 col-md-4 col-md-offset-3">
    <!-- central da pagina -->
    <div class="list-group">
       <a href="#" class="list-group-item active">
         <h4 class="list-group-item-heading">APOIO ACADÊMICO - CASA</h4>
         <p class="list-group-item-text">Quais são os lugares que fazem você se sentir em casa? Na DeVry Brasil, a Coordenadoria de Apoio e Suporte ao Aluno (CASA) é um desses locais criados para acolher os alunos e ajudá-los a ter um melhor desempenho acadêmico durante a graduação. </p>
       </a>
     </div>
     <div class="list-group">
        <a href="#" class="list-group-item active">
          <h4 class="list-group-item-heading">CARREIRAS</h4>
          <p class="list-group-item-text">Você entra na faculdade e já começa a pensar no mercado de trabalho. Uma série de dúvidas começa a surgir. Qual carreira devo seguir? Em que área posso me especializar? Vou encontrar um estágio? Como me preparo para a primeira entrevista de emprego? É para ajudar você a responder essas e outras perguntas que a DeVry Brasil criou o setor Carreiras. </p>
        </a>
      </div>
      <div class="list-group">
         <a href="#" class="list-group-item active">
           <h4 class="list-group-item-heading">ATENDIMENTO ACADÊMICO E FINANCEIRO – NAAF</h4>
           <p class="list-group-item-text">O dia a dia acadêmico e financeiro dos alunos da DeVry Brasil fica mais simples com o suporte dado pelo Núcleo de Atendimento Acadêmico e Financeiro. Neste setor, os estudantes encontram toda a ajuda de que precisam para solucionar dúvidas e realizar serviços específicos, de forma pratica e rápida.</p>
         </a>
       </div>
       ©copyright All rights reserved Claudio Santos Pereira
   </div>

  </div>




<!--- INFORMAÇÕES SOBRE O SISTEMA -->
  <div class="modal fade" id="exemplomodal" tabindex="-1" role="dialog" aria-
   labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="gridSystemModalLabel">Atenção</h4>
          </div>
          <div class="modal-body">
              Prezado,<p></p>
              <p></p>

              Esse sistema foi desenvolvido para controle de seus produtos e agilidade em suas demandas, no que diz
              repeito a controle de chamados em sala ,laboratórios e outros, trabalhando em conjuto com o ORTS.
              Contendo recursos que facilitam as atividades do então colaborador. Recursosfree´s e open sources sob a licença GPL e MIT.

              O sistema se resume em cadastro de tipo de Produto, ex: "NOTEBOOK".
              Seguindo do cadastro do colaborador.
              E enfim o cadastro do produto.

              Utilize-o para fins legais.

          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
      </div>
  </div>
