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
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="{{asset('css/index.css')}}">
        <link rel="stylesheet" href="{{asset('components/select2/css/select.css')}}">
    </head>
    <body>
        
        <ul class="nav justify-content-center bg-dark p-2 sticky-top">
            
                <div class="col-9 col-md-4">

                    <x-select-filter :function="'products'"></x-select-filter>
                </div>
            
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
        
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script src="{{asset('components/select2/js/select2Filter.js')}}" defer></script>
    </body>
</html>
