<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <h1 class="text-center">Strip Payment Gatway</h1>
            @if(Session::has("success"))
            <div class="alert alert-success">
                {{Session::get("success")}}
                @php
                Session::forget("success")
                @endphp
            </div>
            @endif
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/Stripe_Logo%2C_revised_2016.svg/2560px-Stripe_Logo%2C_revised_2016.svg.png"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">silver</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="{{route("stripe.checkout", ['price' => 30, 'product' => 'silver' ])}}"
                            class="btn btn-primary">Make Payment</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/Stripe_Logo%2C_revised_2016.svg/2560px-Stripe_Logo%2C_revised_2016.svg.png"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">gold</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="{{route("stripe.checkout", ['price' => 300, 'product' => 'gold' ])}}"
                            class="btn btn-primary">Make Payment</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/Stripe_Logo%2C_revised_2016.svg/2560px-Stripe_Logo%2C_revised_2016.svg.png"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">platium</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="{{route("stripe.checkout", ['price' => 1000, 'product' => 'platium' ])}}"
                            class="btn btn-primary">Make Payment</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>