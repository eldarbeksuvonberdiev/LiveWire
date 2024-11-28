<div>
    <h1>Post CRUD</h1>

    @if (session()->has('message'))
        <div class="text-danger"><strong>{{ session('message') }}</strong></div>
    @endif

    <form wire:submit.prevent="{{ $isUpdate ? 'update' : 'store' }}">
        <input type="text" class="form-control mt-2" wire:model="title" placeholder="Title">
        @error('title')
            <span>{{ $message }}</span>
        @enderror

        <textarea wire:model="content" class="form-control mt-2" placeholder="Content"></textarea>
        @error('content')
            <span>{{ $message }}</span>
        @enderror

        <button type="submit" class="btn btn-primary mt-4">{{ $isUpdate ? 'Update' : 'Create' }}</button>
    </form>

    <ul class="mt-4">
        @foreach ($posts as $post)
            <li>
                <h2>{{ $post->title }}</h2>
                <p>{{ $post->content }}</p>
                <button wire:click="edit({{ $post->id }})" class="btn btn-primary">Edit</button>
                <button wire:click="delete({{ $post->id }})" class="btn btn-primary">Delete</button>
            </li>
        @endforeach
    </ul>

</div>
