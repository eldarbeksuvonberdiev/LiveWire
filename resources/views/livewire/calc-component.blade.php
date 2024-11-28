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
        <select class="form-select mt-2" wire:model="option" aria-label="Default select example">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
            <option value="%">%</option>
        </select>
        <input type="submit" wire:click="proccess" class="btn btn-primary mt-2" value="Sum">
        <h2>{{ $hisob }}</h2>
    </div>
</div>
