 
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>affichage des vehicules </title>


    @extends('layouts.app')
    <!-- END: Header -->
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->


<li class="nav-item nav-search"><a class="nav-link nav-link-search" href="#"><i class="ficon ft-search"></i></a>
    <div class="search-input">
        <input class="input" type="text" placeholder="Explore Modern..." tabindex="0" data-search="template-list">
        <div class="search-input-close"><i class="ft-x"></i></div>
        <ul class="search-list"></ul>
    </div>
</li>



<li><a class="menu-item" href="#"><i class="la la-search"></i><span data-i18n="Search">Search</span></a>
    <ul class="menu-content">
        <li><a class="menu-item" href="search-page.html"><i></i><span data-i18n="Search Page">Search Page</span></a>
        </li>
        <li><a class="menu-item" href="search-website.html"><i></i><span data-i18n="Search Website">Search Website</span></a>
        </li>
        <li><a class="menu-item" href="search-images.html"><i></i><span data-i18n="Search Images">Search Images</span></a>
        </li>
        <li><a class="menu-item" href="search-videos.html"><i></i><span data-i18n="Search Videos">Search Videos</span></a>
        </li>
    </ul>
</li>


<li><a class="menu-item" href="headers-breadcrumbs-with-search.html"><i></i><span data-i18n="Breadcrumbs with search">Breadcrumbs with search</span></a>

    <div x-data="{ search: '' }">
        <input x-model="search" placeholder="Rechercher...">
        <template x-for="item in filteredItems" :key="item.id">
            <!-- Affichage des résultats -->
        </template>
    </div>

<body class="vertical-layout vertical-compact-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-compact-menu" data-col="2-columns">

                                <li><a class="menu-item" href="component-pagination.html"><i></i><span data-i18n="Pagination">Pagination</span></a>
                                </li>
                                
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-6 col-12">
                    <div class="btn-group">
                        <button class="btn btn-round btn-info mb-1" type="button"><i class="icon-cog3"></i> Settings</button>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- HTML (DOM) sourced data -->
                <section id="html">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Liste</h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collpase show">
                                    <div class="card-body card-dashboard dataTables_wrapper dt-bootstrap">
                                        <p class="card-text">   </p> Voici les voitures de la compagnie</p>
                                        </p>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered sourced-data">
                                                <thead>
                                                    <tr>
                                                        <th>Marque</th>
                                                        <th>Modèle</th>
                                                        <th>Année</th>
                                                        <th>Couleur</th>
                                                        <th>Prix</th>
                                                        <th>Immatriculation</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($voitures as $voiture)
                                                    <tr>
                                                        <td>{{ $voiture->marque }}</td>
                                                        <td>{{ $voiture->modele }}</td>
                                                        <td>{{ $voiture->annee }}</td>
                                                        <td>{{ $voiture->couleur }}</td>
                                                        <td>{{ $voiture->prix }}</td>
                                                        <td>{{ $voiture->immatriculation }}</td> 
                                                        <td>
                                                            <a href="{{ route('voitures.edit', $voiture->id) }}" class="btn btn-sm btn-warning">Modifier</a>
                                                            
                                                            <form action="{{ route('voitures.destroy', $voiture->id) }}" method="POST" style="display:inline;">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Supprimer ce véhicule ?')">Supprimer</button>
                                                            </form>
                                                        </td>
                                                    @endforeach
                                                    
                                                </tbody>
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
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ HTML (DOM) sourced data -->

            </div>
        </div>
    </div>        
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

   
</body>
<!-- END: Body-->

</html> 


{{-- 
 
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>Sources Datatable - Modern Admin - Clean Bootstrap 4 Dashboard HTML Template + Bitcoin Dashboard</title>


@extends('layouts.app')
    <!-- END: Header -->
</head>


@section('title', 'Liste des véhicules')

@section('content')
    <section class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h4>Liste des véhicules</h4>
                <a href="{{ route('voitures.create') }}" class="btn btn-primary float-right">Ajouter un véhicule</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Marque</th>
                            <th>Modèle</th>
                            <th>Année</th>
                            <th>Couleur</th>
                            <th>Prix</th>
                            <th>Immatriculation</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($voitures as $voiture)
                            <tr>
                                {{-- <td>{{ $voiture->marque }}</td>
                                <td>{{ $voiture->modele }}</td>
                                <td>{{ $voiture->annee }}</td>
                                <td>{{ $voiture->couleur }}</td>
                                <td>{{ $voiture->prix }}</td>
                                <td>{{ $voiture->immatriculation }}</td> 
                                <td>
                                    <a href="{{ route('voitures.edit', $voiture->id) }}" class="btn btn-sm btn-warning">Modifier</a>
                                    
                                    <form action="{{ route('voitures.destroy', $voiture->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Supprimer ce véhicule ?')">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

             
                {{ $voitures->links() }}
            </div>
        </div>
    </section>
@endsection
</body>


</html>   --}}



{{-- 
<body class="vertical-layout vertical-compact-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-compact-menu" data-col="2-columns">

    <li><a class="menu-item" href="component-pagination.html"><i></i><span data-i18n="Pagination">Pagination</span></a>
    </li>
    
</div>
</div>
<div class="content-header-right text-md-right col-md-6 col-12">
<div class="btn-group">
<button class="btn btn-round btn-info mb-1" type="button"><i class="icon-cog3"></i> Settings</button>
</div>
</div>
</div>
<div class="content-body">
<!-- HTML (DOM) sourced data -->
<section id="html">
<div class="row">
<div class="col-12">
<div class="card">
    <div class="card-header">
        <h4 class="card-title">HTML (DOM) sourced data</h4>
        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
        <div class="heading-elements">
            <ul class="list-inline mb-0">
                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                <li><a data-action="close"><i class="ft-x"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="card-content collpase show">
        <div class="card-body card-dashboard dataTables_wrapper dt-bootstrap">
            <p class="card-text">The foundation for DataTables is progressive enhancement, so it is very adept at reading
                table information directly from the DOM. This example shows how easy it is to add searching, ordering and paging
                to your HTML table by simply running DataTables on it.
            </p>
            <div class="table-responsive">
                <table class="table table-striped table-bordered sourced-data">
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
                    <tbody>
                        
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
                </table>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</section>
<!--/ HTML (DOM) sourced data -->

</div>
</div>
</div>        
<!-- END: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light navbar-border navbar-shadow">
<p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2019 <a class="text-bold-800 grey darken-2" href="https://1.envato.market/modern_admin" target="_blank">PIXINVENT</a></span><span class="float-md-right d-none d-lg-block">Hand-crafted & Made with<i class="ft-heart pink"></i><span id="scroll-top"></span></span></p>
</footer>
<!-- END: Footer-->


<!-- BEGIN: Vendor JS-->
<script src="../../../app-assets/vendors/js/vendors.min.js"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="../../../app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="../../../app-assets/js/core/app-menu.js"></script>
<script src="../../../app-assets/js/core/app.js"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="../../../app-assets/js/scripts/tables/datatables-extensions/datatables-sources.js"></script>
<!-- END: Page JS-->

</body>
<!-- END: Body--> --}}

{{-- 

@extends('layouts.app')

@section('title', 'Liste des véhicules')

@section('content')
<section id="basic-datatable">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Liste des véhicules</h4>
                    <a href="{{ route('voitures.create') }}" class="btn btn-success">Ajouter un véhicule</a>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Marque</th>
                                    <th>Modèle</th>
                                    <th>Année</th>
                                    <th>Couleur</th>
                                    <th>Prix</th>
                                    <th>Immatriculation</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($voitures as $voiture)
                                    <tr>
                                        <td>{{ $voiture->marque }}</td>
                                        <td>{{ $voiture->modele }}</td>
                                        <td>{{ $voiture->annee }}</td>
                                        <td>{{ $voiture->couleur }}</td>
                                        <td>{{ $voiture->prix }}</td>
                                        <td>{{ $voiture->immatriculation }}</td>
                                        <td>
                                            <a href="{{ route('voitures.edit', $voiture->id) }}" class="btn btn-warning btn-sm">Éditer</a>
                                            
                                            <form action="{{ route('voitures.destroy', $voiture->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce véhicule ?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                   
                        <div class="mt-2">
                            {{ $voitures->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection --}}



{{-- @section('content')
    <h1>Hello depuis la page index</h1>
@endsection --}}
