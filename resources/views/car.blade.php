<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    @livewireStyles
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-12">
                <ul>
                    <li><a href="home" wire:navigate>Home Sahifa</a></li>
                    <li><a href="calc" wire:navigate>Calculator Sahifa</a></li>
                    <li><a href="student" wire:navigate>Student Sahifa</a></li>
                    <li><a href="category" wire:navigate>Category Sahifa</a></li>
                    <li><a href="car" wire:navigate>Car Sahifa</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div>
                <h1>Cart</h1>

                <button class="btn btn-outline-primary" wire:click='add'>+</button>
                {{-- <h2>{{ $a }}</h2> --}}
                <button class="btn btn-outline-danger" wire:click='sub'>-</button>
                <hr>
                <h1>Hisob Kitob ishlari</h1>
                <div class="col-12 mt-5">
                    <input type="text" wire:model='num1' class="form-control mt-2" placeholder="Son1">
                    <input type="text" wire:model='num2' class="form-control mt-2" placeholder="Son2">
                    <select class="form-select mt-3" aria-label="Default select example">
                        <option></option>
                        <option>One</option>
                        <option>Two</option>
                        <option>Three</option>
                    </select>
                    <input type="submit" wire:click="sum" class="btn btn-primary mt-2" value="Sum">
                    {{-- <h2>{{ $hisob }}</h2> --}}
                </div>
            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    @livewireScripts
</body>

</html>
