
            <!-- -->
            <!DOCTYPE html>
            <html xmlns="http://www.w3.org/1999/xhtml">
            <head>
                  <meta charset="utf-8" />
                <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                <title>Simple Responsive Admin</title>
            	<!-- BOOTSTRAP STYLES-->
                <link href="Admin/assets/css/bootstrap.css" rel="stylesheet" />
                 <!-- FONTAWESOME STYLES-->
                <link href="Admin/assets/css/font-awesome.css" rel="stylesheet" />
                    <!-- CUSTOM STYLES-->
                <link href="Admin/assets/css/custom.css" rel="stylesheet" />
                 <!-- GOOGLE FONTS-->
               <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />




            </head>
            <body>



                <div id="wrapper">
                     <div class="navbar navbar-inverse navbar-fixed-top">
                        <div class="adjust-nav">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="#">
                                    <img src="Admin/assets/img/adtalem.jpg" />

                                </a>

                            </div>

                            <span class="logout-spn" ><i class="fa fa-user fa-1x"></i>
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
                                                  LOGOUT
                                              </a>

                                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                  {{ csrf_field() }}
                                              </form>
                                          </li>
                                      </ul>
                                  </li>
                              @endif

                            </span>
                        </div>
                    </div>
                    <!-- /. NAV TOP  -->
                    <nav class="navbar-default navbar-side" role="navigation">
                        <div class="sidebar-collapse">
                            <ul class="nav" id="main-menu">



                                <li class="active-link">
                                    <a href="index.html" ><i class="fa fa-desktop "></i>Dashboard <span class="badge">Included</span></a>
                                </li>


                                <li>
                                    <a href="/criaproduto"><i class="fa fa-table "></i>Criar Produtos  <span class="badge">Included</span></a>
                                </li>
                                <li>
                                    <a href="/listaproduto"><i class="fa fa-edit "></i>Lista Produtos  <span class="badge">Included</span></a>
                                </li>

                                 <li>
                                    <a href="#"><i class="fa fa-edit "></i>Cria Colaborador </a>
                                </li>
                                <li>
                                   <a href="#"><i class="fa fa-edit "></i>Lista Colaborador </a>
                               </li>

                               <li>
                                  <a href="/chamado"><i class="fa fa-edit "></i>Chamados / Tickets </a>
                              </li>

                            </ul>
                      </div>

                    </nav>
                    <!-- /. NAV SIDE  -->
                    <div id="page-wrapper" >
                        <div id="page-inner">
                            <div class="row">
                                <div class="col-lg-12">
                                 <h2>ADMIN SUPORTE T.I.</h2>
                                </div>
                            </div>
                             <!-- /. ROW  -->
                              <hr />
                            <div class="row">
                                <div class="col-lg-12 ">
                                    <div class="alert alert-info">
                                         <strong>Welcome {{ Auth::user()->name }} ! </strong> You Have pending Task For Today.
                                    </div>

                                </div>
                                </div>
                              <!-- /. ROW  -->
                                      @yield('content')


                              </div>
                          </div>
                             <!-- /. ROW  -->
            				  <div class="row">
                                <div class="col-lg-12 ">
            					<br/>
                                    <div class="alert alert-danger">
                                         <strong>Want More Icons Free ? </strong> Checkout fontawesome website and use any icon <a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icons/">Click Here</a>.
                                    </div>

                                </div>
                                </div>
                              <!-- /. ROW  -->
                </div>
                         <!-- /. PAGE INNER  -->
                        </div>
                     <!-- /. PAGE WRAPPER  -->
                    </div>
                <div class="footer">


                        <div class="row">
                            <div class="col-lg-12" >
                                &copy;  2017 adtalemglobaleducation | Devry Fanor | Support IT
                                <!-- &copy;  2014 yourdomain.com | Design by: <a href="http://binarytheme.com" style="color:#fff;" target="_blank">www.binarytheme.com --></a>
                            </div>
                        </div>
                    </div>


                 <!-- /. WRAPPER  -->
                <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
                <!-- JQUERY SCRIPTS -->
                <script src="Admin/assets/js/jquery-1.10.2.js"></script>
                  <!-- BOOTSTRAP SCRIPTS -->
                <script src="Admin/assets/js/bootstrap.min.js"></script>
                  <!-- CUSTOM SCRIPTS -->
                <script src="Admin/assets/js/custom.js"></script>


            </body>
            </html>
