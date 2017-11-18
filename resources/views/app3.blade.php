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
                  <div class="col s12 p-3 mb-2 bg-success text-white">
                    <ul class="nav nav-pills bg-success text-white">
                      <li role="presentation"><a href="#">Adtalem Brasil</a></li>
                      <li role="presentation"><a href="/chamado">Tickets Control</a></li>
                      <li role="presentation"><a href="#">Author</a></li>
                      <li role="presentation">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">Actions
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li class="btn-success"><a href="/criaproduto">Create Products</a></li>
                            <li class="btn-success"><a href="/criacolaborador">Create Collaborators</a></li>
                            <li class="btn-success"><a href="/listaproduto">List Products</a></li>
                            <li role="separator" class="divider"></li>
                            <li class="btn-success"><a href="/listacolaborador">List Collaborators</a></li>
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
                    <!-- central da pagina -->
                    @yield('content')

                   </div>
                </div>
