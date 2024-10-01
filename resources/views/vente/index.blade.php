@extends("layouts.menu_app")
@section('content')

					<div class="card-box mt-2  ">
						<div class="pd-20">
							<h4 class="text-blue h4">Recapitulative des ventes</h4>
						</div>
						<div class="pb-10">
                            @if ($message=Session('success'))
                            <div class="alert alert-dark alert-dismissible mb-0" role="alert">
                                {{$message}}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                              </div>
                            @endif

                            @if ($ventes->count()>0)
							<table
								class="table hover multiple-select-row data-table-export nowrap"
							>


								<thead>
									<tr>

                                        <!--class="table-plus datatable-nosort" !-->
										<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Reference</th>
										<th>Designation</th>
										<th>P. Unit</th>
										<th> Quantite</th>
										<th>Date</th>
                                        <th >Nom du client</th>
									</tr>
								</thead>

								<tbody>

                                    @foreach ($ventes as $vente)

									<tr>
										<td class="table-plus"> <img src="{{asset('nav/images/logo-mini.svg')}}" alt="logo" />
										{{$vente->stock->reference}}</td>
										<td>{{$vente->stock->designation}}</td>
										<td>{{$vente->prix_vente}}</td>
										<td>{{$vente->quantite_vendu}}</td>
                                        <td> {{$vente->updated_at}}</td>
										<td> {{$vente->nom_client}}
                                            <div class="dropdown">
                                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuIconButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  <i class="mdi mdi-menu"></i>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuIconButton1">
                                                  <h6 class="dropdown-header">Actions</h6>
                                                  <a class="dropdown-item" href="{{route('facture.show',$vente->id)}}">Imprimer  le recu</a>
                                                  <a class="dropdown-item" href="#"> Modifier</a>

                                                  <div class="dropdown-divider"></div>
                                                  <a class="dropdown-item" href="#">Supprimer </a>
                                                </div>
                                              </div>
                                        </td>
									</tr>

								</tbody>
                                @endforeach


							</table>
                            @endif
						</div>
					</div>
					<!-- Export Datatable End -->

				<div class="footer-wrap pd-20 mb-20 card-box">

				</div>

        @endsection




