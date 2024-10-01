@extends("layouts.menu_app")
@section('content')

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
@endsection

