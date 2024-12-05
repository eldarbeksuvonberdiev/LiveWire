<div>
    <h1>Post CRUD</h1>

    @if (session()->has('message'))
        <div class="text-danger"><strong>{{ session('message') }}</strong></div>
    @endif
    <button class="btn btn-primary mb-2 mt-2" wire:click="changeCreate">{{ $createForm ? 'Back' : 'Create' }}</button>
    @if ($createForm)
        <form wire:submit.prevent="store">
            <div class="mb-3">
                <select class="form-select" wire:model.blur="category_id">
                    <option value="">Select Category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                @error('category_id')
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <input type="text" class="form-control mt-2" wire:model.blur="title" placeholder="Title">
            @error('title')
                <span>{{ $message }}</span>
            @enderror

            <textarea wire:model.blur="content" class="form-control mt-2" placeholder="Content"></textarea>
            @error('content')
                <span>{{ $message }}</span>
            @enderror

            <button type="submit" class="btn btn-primary mt-2">Create</button>
        </form>
    @else
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Category</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <input type="text" class="form-control" wire:keydown="search" wire:model="searchTitle"
                            placeholder="Title search">
                    </td>
                    <td>
                        <input type="text" class="form-control" wire:keydown="search" wire:model="searchContent"
                            placeholder="Content search">
                    </td>
                    <td></td>
                </tr>
                @foreach ($posts as $post)
                    @if ($editForm == $post->id)
                        <tr>
                            <td></td>
                            <td>
                                <div class="mb-3">
                                    <select class="form-select" wire:model="editCategory"
                                        aria-label="Default select example">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                {{ $post->category_id == $category->id ? 'selected' : '' }}>
                                                {{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </td>
                            <td>
                                <input type="text" class="form-control mt-2" wire:model.blur="editTitle"
                                    placeholder="Title">
                                @error('title')
                                    <span>{{ $message }}</span>
                                @enderror
                            </td>
                            <td>
                                <textarea wire:model.blur="editContent" class="form-control mt-2" placeholder="Content"></textarea>
                                @error('content')
                                    <span>{{ $message }}</span>
                                @enderror
                            </td>
                            <td>
                                <button type="submit" wire:click="update({{ $post->id }})"
                                    class="btn btn-primary mt-2">Update</button>
                            </td>
                        </tr>
                    @else
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->category->name }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->content }}</td>
                            <td>
                                <button class="btn btn-warning" wire:click="edit({{ $post->id }})"><i
                                        class="bi bi-pencil"></i></button>
                                <button class="btn btn-danger" wire:click="delete({{ $post->id }})"><i
                                        class="bi bi-trash3"></i></button>
                            </td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    @endif

</div>
