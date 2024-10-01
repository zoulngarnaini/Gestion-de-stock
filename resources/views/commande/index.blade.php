@extends('layouts.modals')
@extends("layouts.menu_app")

@section('content')

					<div class="card-box mt-2  ">
						<div class="pd-20">
							<h4 class="text-blue h4">Gestion de commande</h4>
						</div>
						<div class="pb-10">
                            @if ($stocks->count()>0)


							<table
								class="table hover multiple-select-row data-table-export nowrap"
							>
								<thead>
									<tr>

                                        <!--class="table-plus datatable-nosort" !-->
                                        <th class="table-plus datatable-nosort">Image</th>
										<th>Reference</th>
										<th>Designation</th>
										<th>Prix achat</th>
										<th> Quantite restante</th>
										<th>Quantite Critique</th>

									</tr>
								</thead>
								<tbody>
                                 @foreach ($stocks as $stock )


									<tr>
										<td class="table-plus"><img src="{{asset('nav/images/logo-mini.svg')}}" alt="logo" /></td>
										<td>{{$stock->reference}}</td>
										<td>{{$stock->designation}}</td>
										<td>{{$stock->prix_achat}}</td>
										<td>{{$stock->quantite}}</td>
										<td>{{$stock->zone_critique}}
                                             <div class="dropdown">
                                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuIconButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  <i class="mdi mdi-menu"></i>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton1">
                                                  <h6 class="dropdown-header">Actions</h6>
                                                  <a class="dropdown-item"  href="{{$stock->id}}"
                                                    class="btn-block"
                                                    data-toggle="modal"
                                                    data-target="#ajouterstock{{$stock->id}}"
                                                    type="button">Modifier la quantite</a>

                                                  <a class="dropdown-item" href="#">Modifer la quantite critique </a>
                                                </div>
                                              </div>
                                        </td>
																					<!--Augmenter le stock -->
											<div
												class="modal fade bs-example-modal-lg"
												id="ajouterstock{{$stock->id}}"
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
									</tr>
                                    @endforeach
								</tbody>
							</table>
                            @endif
						</div>
					</div>
					<!-- Export Datatable End -->

				<div class="footer-wrap pd-20 mb-20 card-box">

				</div>

        @endsection

