
@extends("layouts.menu_app")
@section('content')
<!-- Ajouter la vente -->
<div
    class="card"
    >
    <div class="card">
     <div class="card-content">
        @if ($stock->count()>0)
        <form method="POST" action="{{route('vente.store')}}" enctype="multipart/form-data">
             @csrf
            <div class="card-header">
                <h4 class="card-title" id="myLargeModalLabel">
                    Nouvelle vente
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
                <p class="card-description"Veuillez remplir les champs </p>
                <div class="form-group">
                    <label>Reference</label>
                    <input type="text" class="form-control form-control-lg" name="reference" readonly placeholder="Reference" aria-label="Username" value="{{$stock->reference}}"/>
                </div>
                <div class="form-group">
                    <label>Designation</label>
                    <input type="text" class="form-control" value="{{$stock->designation}}" readonly placeholder="Designation" name="designation" required aria-label="Username" />
                </div>


                <div class="form-group">
                    <label>Description</label>
                    <input type="text" class="form-control" placeholder=" Description du produit" name="descriptionvente"  aria-label="Username" />
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
                    <input type="hidden" name="stock_id" required  class="form-control" value="{{$stock->id}}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect2">Quantite</label>
                    <input type="number" name="quantite" required  class="form-control">

                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect3">Nom du client </label>
                    <input type="text" name="nom_client"   class="form-control">
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
                    Enregistrer la vente
                </button>
            </div>
        </form>
 @endif
    </div>
  </div>
</div>
<!-- Fin de l'ajout vente -->

@endsection


