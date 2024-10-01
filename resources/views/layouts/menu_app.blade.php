<!DOCTYPE html>
<html lang="en" >
  <head>

    		<!-- Basic Page Info -->
		<meta charset="utf-8" />
            <link rel="stylesheet" href="{{asset('tables/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('tables/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('tables/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('tables/vendors/jquery-bar-rating/css-stars.css')}}" />
    <link rel="stylesheet" href="{{asset('tables/vendors/font-awesome/css/font-awesome.min.css')}}" />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('tables/css/demo_2/style.css')}}" />
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('tables/images/favicon.png')}}" />
  </head>

        <link rel="stylesheet" href="{{asset('tables/vendors/mdi/css/materialdesignicons.min.css')}}">
        <link rel="stylesheet" href="{{asset('tables/vendors/flag-icon-css/css/flag-icon.min.css')}}">
        <link rel="stylesheet" href="{{asset('tables/vendors/css/vendor.bundle.base.css')}}">
        <script src="{{asset('tables/js/off-canvas.js')}}"></script>
        <script src="{{asset('tables/js/hoverable-collapse.js')}}"></script>
        <script src="{{asset('tables/js/misc.js"')}}></script>
        <script src="{{asset('tables/js/settings.js')}}"></script>
        <script src="{{asset('tables/js/todolist.js')}}"></script>

		<!-- Site favicon -->
		<link
			rel="apple-touch-icon"
			sizes="180x180"
			href="{{asset('tables/vendors/images/apple-touch-icon.png')}}"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="32x32"
			href="{{asset('tables/vendors/images/favicon-32x32.png')}}"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="16x16"
			href="{{asset('tables/vendors/images/favicon-16x16.png')}}"
		/>

		<!-- Mobile Specific Metas -->
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1"
		/>

		<!-- Google Font -->
		<link
			href="{{asset('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap')}}"
			rel="stylesheet"
		/>
		<!-- CSS -->
		<!-- welcome modal end -->
		<link rel="stylesheet" type="text/css" href="{{asset('tables/vendors/styles/core.css')}}" />
		<link
			rel="stylesheet"
			type="text/css"
			href="{{asset('tables/vendors/styles/icon-font.min.css')}}"
		/>
		<link
			rel="stylesheet"
			type="text/css"
			href="{{asset('tables/src/plugins/datatables/css/dataTables.bootstrap4.min.css')}}"
		/>
		<link
			rel="stylesheet"
			type="text/css"
			href="{{asset('tables/src/plugins/datatables/css/responsive.bootstrap4.min.css')}}"
		/>
		<link rel="stylesheet" type="text/css" href="{{asset('tables/vendors/styles/style.css')}}" />


		
		<!-- Google Tag Manager -->
		
		<!-- End Google Tag Manager -->
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title></title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('nav/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('nav/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('nav/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('nav/vendors/jquery-bar-rating/css-stars.css')}}" />
    <link rel="stylesheet" href="{{asset('nav/vendors/font-awesome/css/font-awesome.min.css')}}" />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('nav/css/demo_2/style.css')}}" />
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('nav/images/favicon.png')}}" />
  </head>
  <body id="body">
    <div class="container-scroller">
      <!-- partial:partials/_horizontal-navbar.html -->
      <div class="horizontal-menu mb-4">

        <nav class="bottom-navbar">
          <div class="container">
            <ul class="nav page-navigation">
              <li class="nav-item">
                <a class="nav-link" href="{{route('home')}}">
                  <i class="mdi mdi-compass-outline menu-icon"></i>
                  <span class="menu-title">Dashboard</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('stock.index')}}" class="nav-link">
                  <i class="mdi mdi-monitor-dashboard menu-icon"></i>
                  <span class="menu-title">Stock</span>
                  <i class="menu-arrow"></i>
                </a>

              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="mdi mdi-account-check menu-icon"></i>
                  <span class="menu-title">Vente</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="submenu">
                    <ul class="submenu-item">
                      <li class="nav-item">
                        <a class="nav-link" href="{{route('vente.index')}}">Journal de ventes</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{route('Caisse.index')}}">Caisse</a>
                      </li>

                    </ul>
                  </div>

              </li>
              <li class="nav-item">
                <a href="{{route('commande.index')}}" class="nav-link">
                  <i class="mdi mdi-alarm-plus menu-icon"></i>
                  <span class="menu-title">Commande</span>
                  <i class="menu-arrow"></i>
                </a>

              </li>
              <li class="nav-item">
                <a href="{{route('inventaire.index')}}" class="nav-link">
                  <i class="mdi mdi-arrow-collapse-all menu-icon"></i>
                  <span class="menu-title">Inventaire</span>
                  <i class="menu-arrow"></i>
                </a>

              </li>
              <li class="nav-item">
                <a href="{{route('facture.index')}}" class="nav-link">
                  <i class="mdi mdi-fax menu-icon"></i>
                  <span class="menu-title"></span>
                  <i class="menu-arrow"></i> Facturation
                </a>

              </li>
              <li class="nav-item">
                <a href="{{route('Gestion.index')}}" class="nav-link">
                  <i class="mdi mdi-fax menu-icon"></i>
                  <span class="menu-title"></span>
                  <i class="menu-arrow"></i> Gestion
                </a>

              </li>
              <li class="nav-item">
                <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">

                    <ul class="navbar-nav navbar-nav-right">
                      <li class="nav-item nav-profile dropdown">
                        <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                       
                          <div class="nav-profile-text">
                            <p class="text-black font-weight-semibold m-0"> {{Auth::user()->name}} </p>
                           
                          </div>
                        </a>
                        <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                          <a class="dropdown-item" href="#">
                            <i class="mdi mdi-cached mr-2 text-success"></i>  Profil </a>


                              <a class="dropdown-item" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                  {{ __('Deconnexion') }}
                              </a>


                              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                  @csrf
                              </form>
                          </div>


                      </li>
                    </ul>
                  </div>


              </li>



            </ul>
          </div>
        </nav>
      </div>

      <div class="main-panel">

            @yield('content')



    </div>
    </div>
<!-- container-scroller -->
<!-- welcome modal end -->
		<!-- js -->
		<script src="{{asset('tables/vendors/scripts/core.js')}}"></script>
		<script src="{{asset('tables/vendors/scripts/script.min.js')}}"></script>
		<script src="{{asset('tables/vendors/scripts/process.js')}}"></script>
		<script src="{{asset('tables/vendors/scripts/layout-settings.js')}}"></script>
		<script src="{{asset('tables/src/plugins/datatables/js/jquery.dataTables.min.js')}}"></script>
		<script src="{{asset('tables/src/plugins/datatables/js/dataTables.bootstrap4.min.js')}}"></script>
		<script src="{{asset('tables/src/plugins/datatables/js/dataTables.responsive.min.js')}}"></script>
		<script src="{{asset('tables/src/plugins/datatables/js/responsive.bootstrap4.min.js')}}"></script>
		<!-- buttons for Export datatable -->
		<script src="{{asset('tables/src/plugins/datatables/js/dataTables.buttons.min.js')}}"></script>
		<script src="{{asset('tables/src/plugins/datatables/js/buttons.bootstrap4.min.js')}}"></script>
		<script src="{{asset('tables/src/plugins/datatables/js/buttons.print.min.js')}}"></script>
		<script src="{{asset('tables/src/plugins/datatables/js/buttons.html5.min.js')}}"></script>
		<script src="{{asset('tables/src/plugins/datatables/js/buttons.flash.min.js')}}"></script>
		<script src="{{asset('tables/src/plugins/datatables/js/pdfmake.min.js')}}"></script>
		<script src="{{asset('tables/src/plugins/datatables/js/vfs_fonts.js')}}"></script>
		<!-- Datatable Setting js -->
		<script src="{{asset('tables/vendors/scripts/datatable-setting.js')}}"></script>
		<!-- Google Tag Manager (noscript) -->
		<noscript
			><iframe
				src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS"
				height="0"
				width="0"
				style="display: none; visibility: hidden"
			></iframe
		></noscript>
		<!-- End Google Tag Manager (noscript) -->
    <!-- plugins:js -->
    <script src="{{asset('vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('nav/vendors/jquery-bar-rating/jquery.barrating.min.js')}}"></script>
    <script src="{{asset('nav/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('nav/vendors/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('nav/vendors/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('nav/vendors/flot/jquery.flot.categories.js')}}"></script>
    <script src="{{asset('nav/vendors/flot/jquery.flot.fillbetween.js')}}"></script>
    <script src="{{asset('nav/vendors/flot/jquery.flot.stack.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('nav/js/off-canvas.js')}}"></script>
    <script src="{{asset('nav/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('nav/js/misc.js')}}"></script>
    <script src="{{asset('nav/js/settings.js')}}"></script>
    <script src="{{asset('nav/js/todolist.js')}}"></script>

    <script src="{{asset('nav/js/dashboard.js')}}"></script>
  </body>
</html>
