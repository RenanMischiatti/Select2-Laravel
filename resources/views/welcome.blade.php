<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Filter</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/index.css')}}">
        
    </head>
    <body>
        
        <ul class="nav justify-content-center bg-dark p-2 sticky-top">
            <select name="" id=""></select>
        </ul>
        <main class="container">
            <section id="itens">
                @foreach ($products as $product)
                    <div class="row my-2 p-3 m-0">
                        <div class="col-12 col-md-2">
                            <img src="{{$product->image_path}}" class="w-100 rounded" alt="">
                        </div>
                        <div class="col-12 col-md-6">
                            <div>
                                <label class="labelName">Product Name</label>
                                <span class="productName">{{$product->name}}</span>
                            </div>

                            <div>
                                <label class="labelName">Description</label>
                                <span class="productDescription">{{$product->description}}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </section>
        </main>
        
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    </body>
</html>
