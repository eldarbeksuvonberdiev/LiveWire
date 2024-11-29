<div>
    <h1>Post CRUD</h1>

    @if (session()->has('message'))
        <div class="text-danger"><strong>{{ session('message') }}</strong></div>
    @endif

    <form wire:submit.prevent="store">
        <mb-3>
            <select class="form-select" wire:model="category" aria-label="Default select example">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </mb-3>
        <input type="text" class="form-control mt-2" wire:model="title" placeholder="Title">
        @error('title')
            <span>{{ $message }}</span>
        @enderror

        <textarea wire:model="content" class="form-control mt-2" placeholder="Content"></textarea>
        @error('content')
            <span>{{ $message }}</span>
        @enderror

        <button type="submit" class="btn btn-primary mt-4">Create</button>
    </form>

</div>
