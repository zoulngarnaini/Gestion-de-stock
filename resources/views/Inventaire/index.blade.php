@extends("layouts.menu_app")

@section('content')

					<div class="card-box mt-2  ">
                        <div class="header-left">
                            <h1  class="text-blue h1" style="text-align:center;">Inventaire </h1>


                          </div>
						<div class="pb-10">
                            @if ($stocks->count()>0)


							<table
								class="table hover multiple-select-row data-table-export nowrap"
							>
								<thead>
                                    	<tr>
                                            <button class="btn btn-primary mb-2  mr-2" href="#"
                                            class="btn-block"
                                            data-toggle="modal"
                                            data-target="#nouvelproduitstock"
                                            type="button"> <i class="mdi mdi-plus-circle"></i> Ajouter le stock </button>


                                        <!--class="table-plus datatable-nosort" !-->
                                        <th class="table-plus datatable-nosort"></th>
										<th>Reference</th>
										<th>Designation</th>
										<th>Prix achat</th>
										<th> Quantite restante</th>
										<th>Date enreg/modif</th>

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
										<td>{{$stock->updated_at}}

											<button class="btn btn-primary "  href="{{$stock->id}}"
												class="btn-block"
												data-toggle="modal"
												data-target="#modalajoutervente{{$stock->id}}"
												type="button" >
												<i class="mdi mdi-menu"> Vendre</i>
											</button>



                                        </td>
										<!-- Ajouter la vente -->
							<div
								class="modal fade bs-example-modal-lg"
								id="modalajoutervente{{$stock->id}}"
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

												</tr>
												@endforeach
											</tbody>
										</table>
										@endif

									</div>
								</div>
								<!-- Export Datatable End -->

							<div class="footer-wrap pd-20 mb-20 card-box">
								<button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
									<span class="mdi mdi-menu"></span>
								</button>
							</div>


        @endsection


