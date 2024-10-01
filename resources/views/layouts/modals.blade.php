<!--Ajouter nouveau produit -->
<!-- Ajouter le stock du produit -->
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
</div>
<!-- Fin de l'ajout du nouveau produit -->
<!-- Ajouter le stock du produit -->
<div
    class="modal fade bs-example-modal-lg"
    id="bd-example-modal-lg"
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
                    <input type="number" name="zonecritique"   class="form-control">
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
                <button type="button" class="btn btn-primary">
                    Enregistrer
                </button>
            </div>
     </div>
    </div>
</div>
<!-- Fin de l'ajout stock -->

<!-- Ajouter la vente -->
<div
    class="modal fade bs-example-modal-lg"
    id="modalajoutervente"
    tabindex="-1"
    role="dialog"
    aria-labelledby="myLargeModalLabel"
    aria-hidden="true"
    >
    <div class="modal-dialog modal-lg modal-dialog-centered">
     <div class="modal-content">
        @if ($stocks->count()>0)
        <form method="POST" action="{{route('vente.store')}}" enctype="multipart/form-data">
             @csrf
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">
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
                    <input type="text" class="form-control form-control-lg" name="reference" placeholder="Reference" aria-label="Username" value="{{$stock->reference}}"/>
                </div>
                <div class="form-group">
                    <label>Designation</label>
                    <input type="text" class="form-control" value="{{$stock->designation}}" placeholder="Designation" name="designation" required aria-label="Username" />
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
                    Fermer
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

<!--Augmenter le stock -->
<div
    class="modal fade bs-example-modal-lg"
    id="ajouterstock"
    tabindex="-1"
    role="dialog"
    aria-labelledby="myLargeModalLabel"
    aria-hidden="true"
    >
  @if ($stocks->count()>0)
    <form method="POST" action="{{route('stock.store')}}">
        @csrf
    <div class="modal-dialog modal-lg modal-dialog-centered">

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

            <div class="modal-body">
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
<!--modification de stock -->
@if ($stocks->count()>0)
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
  @endif
</div>
<!-- Fin  modification stock -->
