@extends("layouts.menu_app")
@section('content')
<div class="card-box mt-2  ">

    <h1  class="text-blue h1" style="text-align:center;">Gestion de stock </h1>

    <div class="pb-10">
        @if ($message=Session('success'))
        <div class="alert alert-dark alert-dismissible mb-0" role="alert">
            {{$message}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <button class="btn btn-primary mb-2  mr-2" href="#"
            class="btn-block"
            data-toggle="modal"
            data-target="#nouvelproduitstock"
            type="button"> <i class="mdi mdi-plus-circle"></i> Ajouter le stock 
        </button>
        @if ($stocks->count()>0)
        <table
            class="table hover multiple-select-row data-table-export nowrap"
        >
            <thead>
                    <tr>
                        


                    <!--class="table-plus datatable-nosort" !-->
                    <th class="table-plus datatable-nosort"></th>
                    <th>Reference</th>
                    <th>Designation</th>
                    <th>Prix achat</th>
                    <th> Quantite restante</th>
                    <th>Actions</th>

                </tr>
            </thead>
            <tbody>

                @foreach ($stocks as $stock)

                <tr>
                    <td class="table-plus"><img src="{{asset('nav/images/logo-mini.svg')}}" alt="logo" /></td>
                    <td>{{$stock->reference}}</td>
                    <td>{{$stock->designation}}</td>
                    <td>{{$stock->prix_achat}}</td>
                    <td>{{$stock->quantite}}</td>
                    <td>
                            <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuIconButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-menu"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton1">

                            <a class="dropdown-item" 
                            
                                href="{{route('vente.edit',$stock->id)}}"
                            >Vendre
                            </a>
                            <a class="dropdown-item"
                                href="{{route('addStock',$stock->id)}}"
                                > Ajouter
                            </a>
                            <a class="dropdown-item" href="{{route('masStock',$stock->id)}}"
                                >Modifier
                            </a>
                                <div class="dropdown-divider"></div>
                            
                            </div>
                            </div>
                    </td>

                </tr>
                @endforeach

            </tbody>
        </table>
        @else
        <h6> Aucun  enregistrement
        @endif

    </div>
</div>
					<!-- Export Datatable End -->

				<div class="footer-wrap pd-20 mb-20 card-box">
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                        <span class="mdi mdi-menu"></span>
                      </button>
				</div>



<div
    class="modal fade bs-example-modal-lg"
    id="nouvelproduitstock"
    tabindex="-1"
    role="dialog"
    aria-labelledby="myLargeModalLabel"
    aria-hidden="true"
    >
    <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">
                    Nouvelle entree
                </h4>
                <button
                    type="button"
                    class="close"
                    data-dismiss="modal"
                    aria-hidden="true"
                >
                    ×
                </button>
            </div>
        <form method="POST" action="{{route('stock.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
            <div class="row">
            <div class="col-md-5 grid-margin stretch-card">
            <div class="card">
            <div class="card-body">
                <h4 class="card-title">Informations du produit</h4>
                <p class="card-description"Veuillez remplir les champs </p>
                <div class="form-group">
                    <label>Reference</label>
                    <input type="text" class="form-control form-control-lg" name="reference" placeholder="Designation" aria-label="Username" />
                </div>
                <div class="form-group">
                    <label>Designation</label>
                    <input type="text" class="form-control" placeholder="Designation" name="designation" required aria-label="Username" />
                </div>

                <div class="form-group">
                    <label>Image</label>
                    <input type="file" class="form-control" placeholder="Selectonner une image" name="imagestock"  aria-label="Username" />
                </div>
            </div>
            </div>
            </div>
            <div class="col-md-5 grid-margin stretch-card">
            <div class="card">
            <div class="card-body">
                <h4 class="card-title">Informations de quantité </h4>
                <p class="card-description"> Certains champs sont obligatoires </p>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Prix unitaire</label>
                    <input type="number" name="prixunitaire" required  class="form-control">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect2">Quantite</label>
                    <input type="number" name="quantite" required  class="form-control">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect3">Zone critique de commande</label>
                    <input type="number" name="zone_critique"   class="form-control">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect2"> </label>
                    <input type="hidden" name="action" readonly required  value="insert" class="form-control">
                </div>
            </div>
            </div>
            </div>
            </div>
    </div>
            <div class="modal-footer">
                <button
                    type="button"
                    class="btn btn-secondary"
                    data-dismiss="modal"
                >
                    Fermer
                </button>
                <button type="submit" class="btn btn-primary">
                    Enregistrer
                </button>
            </div>
    </form>
    </div>
</div>
<!-- Modals --!>
<!-- modification de stock -->
@if($stocks->count()>0)
@foreach ($stocks as $stock)
<div
    class="modal fade bs-example-modal-lg"
    id="update_complet{{$stock->id}}"
    tabindex="-1"
    role="dialog"
    aria-labelledby="myLargeModalLabel"
    aria-hidden="true"
>

<form method="POST" action="{{route('stock.store')}}" enctype="multipart/form-data">
    @csrf

    <div class="modal-dialog modal-lg modal-dialog-centered">

                <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myLargeModalLabel">
                                Modification de stock
                            </h4>
                            <button
                                type="button"
                                class="close"
                                data-dismiss="modal"
                                aria-hidden="true"
                            >
                                ×
                            </button>
                        </div>

                <div class="modal-body">
                        <div class="row">
                        <div class="col-md-5 grid-margin stretch-card">
                        <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Informations du produit</h4>
                            <p class="card-description"> </p>
                            <div class="form-group">
                                <label>Reference</label>
                                <input type="text"  class="form-control form-control-lg" name="reference" placeholder="reference" value="{{$stock->reference}}" aria-label="Username" />
                            </div>
                            <div class="form-group">
                                <label>Designation</label>
                                <input type="text"  class="form-control" placeholder="Designation" value="{{$stock->designation}}" name="designation" required aria-label="Username" />
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect2"> </label>
                                <input type="file" name="imagestock"    value="{{$stock->image}}" class="form-control">

                            </div>

                        </div>
                        </div>
                        </div>
                        <div class="col-md-5 grid-margin stretch-card">
                        <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Informations de quantité </h4>
                            <p class="card-description"> Veuillez entrer les modifications </p>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Prix unitaire</label>
                                <input type="number"  name="prixunitaire" value="{{$stock->prix_achat}}" required  class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect2">Quantite  </label>
                                <input type="number" name="quantite"  required  class="form-control" value="{{$stock->quantite}}">

                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect3" >Zone critique de commande</label>
                                <input type="number" name="zone_critique" value="{{$stock->zone_critique}}"    class="form-control">
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect2"> </label>
                                    <input type="hidden" name="action"  required  value="update_complet" class="form-control">

                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect2"> </label>
                                    <input type="hidden" name="id" readonly required  value="{{$stock->id}}" class="form-control">

                                </div>

                            </div>
                        </div>
                        </div>
                        </div>
                        </div>

                </div>
                        <div class="modal-footer">
                            <button
                                type="button"
                                class="btn btn-secondary"
                                data-dismiss="modal"
                            >
                                Fermer
                            </button>
                            <button type="submit" class="btn btn-primary">
                                Enregistrer
                            </button>
                        </div>
                </div>

    </div>
</form>

</div>
@endforeach
@endif
<!-- Fin  modification stock -->

@endsection


