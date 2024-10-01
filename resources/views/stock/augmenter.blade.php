@extends("layouts.menu_app")
@section('content')
<!--Augmenter le stock -->
<div
    class="card bs-example-modal-lg"
  
    >
  @if ($stock->count()>0)
    <form method="POST" action="{{route('stock.store')}}">
        @csrf
    <div class="card">

            <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myLargeModalLabel">
                            Augmenter la quantité
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
                            <input type="text" readonly class="form-control form-control-lg" name="reference" placeholder="reference" value="{{$stock->reference}}" aria-label="Username" />
                        </div>
                        <div class="form-group">
                            <label>Designation</label>
                            <input type="text" readonly class="form-control" placeholder="Designation" value="{{$stock->designation}}" name="designation" required aria-label="Username" />
                        </div>

                    </div>
                    </div>
                    </div>
                    <div class="col-md-5 grid-margin stretch-card">
                    <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Informations de quantité </h4>
                        <p class="card-description"> Veuillez remplir le champ quantité  a ajouter </p>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Prix unitaire</label>
                            <input type="number" readonly name="prixunitaire" value="{{$stock->prix_achat}}" required  class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect2">Quantite actuelle </label>
                            <input type="number" name="quantite" readonly required  class="form-control" value="{{$stock->quantite}}">

                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect3" >Zone critique de commande</label>
                            <input type="number" name="zonecritique" value="{{$stock->zone_critique}}" readonly   class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect2">Quantite a ajouter </label>
                            <input type="number" name="quantiteajouter"  required  class="form-control">
                            <div class="form-group">
                                <label for="exampleFormControlSelect2"> </label>
                                <input type="hidden" name="action" readonly required  value="update" class="form-control">

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
  @endif
</div>
<!-- Fin  Augmenter stock -->
@endsection