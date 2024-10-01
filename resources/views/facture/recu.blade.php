@extends("layouts.menu_app")
@section('content')
<script type="text/javascript">
    function imprimer(){

        var body= document.getElementById('body').innerHTML;
        var data= document.getElementById('imprimer').innerHTML;
        document.getElementById('body').innerHTML=data;
         window.print();
         document.getElementById('body').innerHTML=body;



    }
</script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
<button onclick="imprimer()" class="btn btn-primary mb-2 mb-md-0 mr-2" class="btn-block"

type="button"> <i class="mdi mdi-fax"></i> Imprimer </button>
<div class="container mt-5" id="imprimer">

    <div class="row">
        <div class="col-12 mb-3 mb-lg-5">
            <div class="position-relative card table-nowrap table-card">
                <div class="card-header align-items-center">
                    <h5 class="mb-0">KOTOKO COMPAGNY   <img style="margin-left:300px;" src="{{asset('nav/images/faces/face1.jpg')}}" alt="image" /></h5>

                    <p class="mb-0 small text-muted" style="text-align:right;">Recu No: {{$vente->id}}</p>
                    <p class="mb-0 small text-muted"style="text-align:right;">Date: {{$vente->created_at}}</p>
                    <p class="mb-0 small text-muted">Nom: {{$vente->nom_client}}</p>
                    <p class="mb-0 small text-muted">Tel:</p>
                    <p class="mb-0 small text-muted">Adresse:</p>
                </div>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="small text-uppercase bg-body text-muted">
                            <tr>
                                <th> Designation</th>
                                <th>Prix Unitaire</th>
                                <th>Quantite</th>
                                <th>Total</th>

                            </tr>
                        </thead>
                        <tbody>



                            <tr class="align-middle">
                                <td>
                                    {{$vente->stock->designation}}
                                </td>
                                <td>{{$vente->prix_vente}}</td>

                                <td>
                                    <div class="d-flex align-items-center">
                                        <span><i class="fa fa-arrow-up" aria-hidden="true"></i></span>
                                        <span>{{$vente->quantite_vendu}}</span>
                                    </div>
                                </td>
                                <td>
                                    <span class="badge fs-6 fw-normal bg-tint-success text-success">{{$vente->prix_vente*$vente->quantite_vendu}}</span>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="card-footer text-end">
                    <a href="#!" class="btn btn-gray">Kotoko de luxe</a>
                </div>
            </div>
        </div>
    </div>
  
</div>
<style>

body {
    margin-top: 20px;
    background: #FFF5EE;
}

.card {
    box-shadow: 0 20px 27px 0 rgb(0 0 0 / 5%);
}

.avatar.sm {
    width: 2.25rem;
    height: 2.25rem;
    font-size: .818125rem;
}

.table-nowrap .table td,
.table-nowrap .table th {
    white-space: nowrap;
}

.table>:not(caption)>*>* {
    padding: 0.75rem 1.25rem;
    border-bottom-width: 1px;
}

table th {
    font-weight: 600;
    background-color: #eeecfd !important;
}

.fa-arrow-up {
    color: #00CED1;
}

.fa-arrow-down {
    color: #FF00FF;


</style>
@endsection()
