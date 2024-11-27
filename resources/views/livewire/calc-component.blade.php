<div>
    <h1>Cart</h1>

    <button class="btn btn-outline-primary" wire:click='add'>+</button>
    <h2>{{ $a }}</h2>
    <button class="btn btn-outline-danger" wire:click='sub'>-</button>
    <hr>
    <h1>Hisob Kitob ishlari</h1>
    <div class="col-12 mt-5" >
        <input type="text" wire:model='num1' class="form-control mt-2" placeholder="Son1">
        <input type="text" wire:model='num2' class="form-control mt-2" placeholder="Son2">
        <input type="submit" wire:click="sum" class="btn btn-primary mt-2" value="Sum">
        <h2>{{ $hisob }}</h2>
    </div>
</div>
