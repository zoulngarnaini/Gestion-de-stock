@extends("layouts.menu_app")
@section('content')

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
<div class="container">
<section class="section mb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-7 text-center desc">
                <h2 class="h1 mb-3">Centre de gestion</h2>
               
                <form class="d-flex flex-column flex-md-row mt-4"><input type="email" class="form-control me-sm-2 mb-2 mb-sm-0" placeholder="kotokocompagny.com"> <button class="btn btn-primary flex-shrink-0" type="submit">Get Started</button></form>
            </div>
        </div>
    </div>
</section>
<section class="section pt-0">
    <div class="container">
        <div class="row gy-4 justify-content-center">
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-body d-flex">
                        <div class="icon-lg bg-primary rounded-3 text-white"><i class="fa fa-question-circle"></i></div>
                        <div class="ps-3 col">
                            <h5 class="h6 mb-2"><a class="stretched-link text-reset" href="#">Boutique et Magasin</a></h5>

                        </div>
                    </div>
                </div>
            </div>
     
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-body d-flex">
                        <div class="icon-lg bg-primary rounded-3 text-white"><i class="fa fa-user"></i></div>
                        <div class="ps-3 col">
                            <h5 class="h6 mb-2"><a class="stretched-link text-reset" href="#">Compte utilisateur</a></h5>
                           
                        </div>
                    </div>
                </div>
            </div>
   
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-body d-flex">
                        <div class="icon-lg bg-primary rounded-3 text-white"><i class="fa fa-book"></i></div>
                        <div class="ps-3 col">
                            <h5 class="h6 mb-2"><a class="stretched-link text-reset" href="#">Autres</a></h5>
                           
                        </div>
                    </div>
                </div>
            </div>
         
        </div>
    </div>
</section>
</div>

<style>
body{
    margin-top:20px;
    background:#e7e8e9;
}
.icon-lg {
    width: 3.5rem;
    height: 3.5rem;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    font-size: 1.5rem;
    line-height: 1;
}
.card {
    box-shadow: 0 20px 27px 0 rgb(0 0 0 / 5%);
}
a {
    text-decoration:none;
}

.desc{
    color:#fff;
}

</style>


@endsection
