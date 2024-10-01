
@extends("layouts.menu_app")
@section('content')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
          <div class="content-wrapper pb-0">
            <div class="page-header flex-wrap">
              <div class="header-left">
                <button class="btn btn-primary mb-2 mb-md-0 mr-2" class="btn-block"
                  data-toggle="modal"
                  data-target="#nouvelproduitstock"
                  type="button"> 
                  <i class="mdi mdi-plus-circle" ></i> Ajouter le stock </button>
                <button class="btn btn-outline-primary mb-2 mb-md-0" data-toggle="modal" data-target="#modalajoutervente"> <i class="mdi mdi-plus-circle" ></i> Ajouter une vente  </button>
              </div>
              <div class="header-right d-flex flex-wrap mt-md-2 mt-lg-0">
                
                <button type="button" class="btn btn-primary mt-2 mt-sm-0 btn-icon-text">
                  </button>
                   <button type="button" class="btn btn-primary mt-2 mt-sm-0 btn-icon-text" data-toggle="modal" data-target="#modalajoutervente">
                  <i class="mdi mdi-plus-circle"></i> Ajouter une vente </button>
              </div>
            </div>
            <!-- first row starts here -->

            <!-- chart row starts here -->
            <div class="row">
              <div class="col-sm-6 stretch-card grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <div class="card-title"> Vente journaliere<small class="d-block text-muted">August 01 - August 31</small>
                      </div>
                      <div class="d-flex text-muted font-20">
                        <i class="mdi mdi-printer mouse-pointer"></i>
                        <i class="mdi mdi-help-circle-outline ml-2 mouse-pointer"></i>
                      </div>
                    </div>
                    <h3 class="font-weight-bold mb-0"> 2,409 <span class="text-success h5">4,5%<i class="mdi mdi-arrow-up"></i></span>
                    </h3>
                    <span class="text-muted font-13">Vente journalier</span>
                    <div class="line-chart-wrapper">
                      <canvas id="linechart" height="80"></canvas>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 stretch-card grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <div class="card-title"> Vente mensuelle <small class="d-block text-muted">August 01 - September 31</small>
                      </div>
                      <div class="d-flex text-muted font-20">
                        <i class="mdi mdi-printer mouse-pointer"></i>
                        <i class="mdi mdi-help-circle-outline ml-2 mouse-pointer"></i>
                      </div>
                    </div>
                    <h3 class="font-weight-bold mb-0"> 0.40% <span class="text-success h5">0.20%<i class="mdi mdi-arrow-up"></i></span>
                    </h3>
                    <span class="text-muted font-13">Vente mensuelle</span>
                    <div class="bar-chart-wrapper">
                      <canvas id="barchart" height="80"></canvas>
                    </div>
                  </div>
                </div>
              </div>
            </div>




          </div>
          
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
                        <select class="form-control">
                        @foreach( $stocks as $stock)
												
                          <option  class="form-control" value="{{$stock->id}}"> {{$stock->reference}} </option>
										    @endforeach
                        </select>
                      </div>
											<div class="form-group">
												<label>Designation</label>
                        <select class="form-control">
                        @foreach( $stocks as $stock)
                          <option class="form-control" value="{{$stock->id}}"> {{$stock->designation}} </option>
										    @endforeach
                        </select>
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
              @else
              <h1> Aucun produit a vendre veuillez verifier votre stock et ajouter des produits</h1>
           
							@endif
								</div>
							</div>
							</div>

												</tr>
								
											</tbody>
										</table>
                  
										

									</div>
								</div>
								<!-- Export Datatable End -->
        
          <footer class="footer">
            <div class="container">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © company.com</span>
               
              </div>

              <div>
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block"> Distributed By: Sahel technology <a href="#" target="_blank">...</a></span>
              </div>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
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
</div>
@endsection
