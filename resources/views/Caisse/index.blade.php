@extends("layouts.menu_app")
@section('content')
<script type="text/javascript">
function imprimer() {
    // Masquer le bouton "Ajouter une ligne"
    var addButton = document.querySelector('.add-line-btn');
    if (addButton) {
        addButton.style.display = 'none';
    }

    // Lancer l'impression
    window.print();

    // Réafficher le bouton après l'impression
    if (addButton) {
        addButton.style.display = 'inline-block';
    }
}



</script>


<script type="text/javascript">
    function calculer(element) {
        // Get the row where the change occurred
        var row = element.closest('tr');

        // Get the prix and quantite inputs from that row and convert them to numbers
        var prix = parseFloat(row.querySelector('input[name^="prix"]').value) || 0;
        var quantite = parseFloat(row.querySelector('input[name^="quantite"]').value) || 0;

        // Calculate the total
        var total = prix * quantite;

        // Set the total to the total input field
        var totalInput = row.querySelector('input[name^="total"]');
        totalInput.value = total.toFixed(2);  // Ensure 2 decimal places
    }

    function NewLigne() {
        // Get the table body where rows are added
        var tableBody = document.querySelector('tbody');

        // Create a new row
        var newRow = document.createElement('tr');
        newRow.classList.add('align-middle');

        // Generate a unique ID suffix for the row
        var rowIndex = tableBody.rows.length;

        // Create cells for the new row
        var designationCell = document.createElement('td');
        var designationInput = document.createElement('input');
        designationInput.setAttribute('type', 'text');
        designationInput.setAttribute('class', 'form-control form-control-lg');
        designationInput.setAttribute('name', 'designation_' + rowIndex);  // Unique name for each row
        designationCell.appendChild(designationInput);

        var quantityCell = document.createElement('td');
        var quantityInput = document.createElement('input');
        quantityInput.setAttribute('type', 'number');
        quantityInput.setAttribute('class', 'form-control form-control-lg');
        quantityInput.setAttribute('name', 'quantite_' + rowIndex);  // Unique name
        quantityInput.setAttribute('onchange', 'calculer(this)');
        quantityCell.appendChild(quantityInput);

        var priceCell = document.createElement('td');
        var priceInput = document.createElement('input');
        priceInput.setAttribute('type', 'number');
        priceInput.setAttribute('class', 'form-control form-control-lg');
        priceInput.setAttribute('name', 'prix_' + rowIndex);  // Unique name
        priceInput.setAttribute('onchange', 'calculer(this)');
        priceCell.appendChild(priceInput);

        var totalCell = document.createElement('td');
        var totalInput = document.createElement('input');
        totalInput.setAttribute('type', 'number');
        totalInput.setAttribute('class', 'form-control form-control-lg');
        totalInput.setAttribute('name', 'total_' + rowIndex);  // Unique name
        totalInput.setAttribute('readonly', true);  // Total should be readonly
        totalCell.appendChild(totalInput);

        // Append the cells to the new row
        newRow.appendChild(designationCell);
        newRow.appendChild(quantityCell);
        newRow.appendChild(priceCell);
        newRow.appendChild(totalCell);

        // Append the new row to the table body
        tableBody.appendChild(newRow);
    }
</script>



<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
<button onclick="imprimer()" class="btn btn-primary mb-2 mb-md-0 mr-2" class="btn-block"

type="button"> <i class="mdi mdi-fax add-line-btn"></i> Impression </button>
<button onclick="" class="btn btn-primary mb-2 mb-md-0 mr-2" class="btn-block"
type="button"> <i class="mdi mdi-fax add-line-btn"></i> Scanner </button>
<div class="container mt-5" id="imprimer">

<div class="row">
    <div class="col-12 mb-3 mb-lg-5">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
        <div class="container">
            <div class="row">
                <div class="col-12 mb-3 mb-lg-5">
                    <div class="position-relative card table-nowrap table-card">
                        <div class="card-header align-items-center">
                            <h5 class="mb-0">KOTOKO COMPAGNY
                                <img style="margin-left:300px;" src="{{asset('nav/images/faces/face1.jpg')}}" alt="image" />
                            </h5>

                            <p class="mb-0 small text-muted" style="text-align:right;">Recu No:
                                <input type="text" class="form-control-sm" id="recu" placeholder="Numero du recu" style="border: #eeecfd; background-color:transparent" />
                            </p>
                            <p class="mb-0 small text-muted" style="text-align:right;">Date:
                                <input type="text" class="form-control-sm" id="data" placeholder=" Entrer la date" style="border: #eeecfd; background-color:transparent" />
                            </p>
                            <p class="mb-0 small text-muted">Nom:
                                <input type="text" class="form-control-sm" id="nom" placeholder="Entrer nom du client" style="border: #eeecfd; background-color:transparent" />
                            </p>
                            <p class="mb-0 small text-muted">Tel:
                                <input type="text" class="form-control-sm" id="tel" placeholder="Entrer le telephone" style="border: #eeecfd; background-color:transparent" />
                            </p>
                            <p class="mb-0 small text-muted">Adresse:
                                <input type="text" class="form-control-sm" id="adresse" placeholder="Entrer adresse" style="border: #eeecfd; background-color:transparent" />
                            </p>
                        </div>

                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="small text-uppercase bg-body text-muted">
                                    <tr>
                                        <th>DESIGNATION</th>
                                        <th>QUANTITE</th>
                                        <th>PRIX UNITAIRE</th>
                                        <th>TOTAL</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Rows will be dynamically added here -->
                                </tbody>
                            </table>
                        </div>

                        <div class="card-footer text-end">
                        <button onclick="NewLigne()" class="btn btn-primary mb-2 mb-md-0 mr-2 add-line-btn"> 
                            <i class="mdi mdi-fax"></i> Ajouter une ligne 
                        </button>
                            
                        </div>
                    </div>
                </div>
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
.hidden-print {
    display: none;
}
@media print {
    .add-line-btn {
        display: none !important;
    }
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
