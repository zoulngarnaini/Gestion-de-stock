
@extends("layouts.menu_app")

@section('content')
<!-- Modals --!>
<!-- modification de stock -->
@if($stock->count()>0)

<div
    class="card"
  
  
   
>

<form method="POST" action="{{route('stock.store')}}" enctype="multipart/form-data">
    @csrf

    <div class="card">

                <div class="card-content">
                        <div class="card-header">
                            <h4 class="card-title" id="myLargeModalLabel">
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

                <div class="card-body">
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
                                Annuler
                            </button>
                            <button type="submit" class="btn btn-primary">
                                Enregistrer
                            </button>
                        </div>
                </div>

    </div>
</form>

</div>
@endif
<!-- Fin  modification stock -->

@endsection


