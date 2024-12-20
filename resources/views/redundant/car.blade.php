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
            <livewire:calc-component/>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    @livewireScripts
</body>

</html>
