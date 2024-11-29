<div>
    <h2>Category</h2>
    <button wire:click="changeCreateForm"
        class="btn btn-primary mt-2 mb-2">{{ $createForm ? 'Cancel' : 'Create' }}</button>
    @if ($createForm)
        <form wire:submit.prevent="saveCategory">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" wire:model="name" class="form-control" id="name" placeholder="Name...">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>
    @else
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        #
                    </td>
                    <td>
                        <input type="text" wire:keydown="search" wire:model="searchName" class="form-control" placeholder="Search...">
                    </td>
                    <td>
                    </td>
                </tr>
                @foreach ($categories as $category)
                    @if ($editForm == $category->id)
                        <tr>
                            <td>
                                {{ $category->id }}
                            </td>
                            <td>
                                <input type="text" wire:model="editName" class="form-control" id="editname">
                            </td>
                            <td>
                                <button wire:click="update" class="btn btn-primary">Update</button>
                            </td>
                        </tr>
                    @else
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td>
                                <button class="btn btn-warning" wire:click="edit({{ $category->id }})"><i
                                        class="bi bi-pencil"></i></button>
                                <button class="btn btn-danger" wire:click="destroy({{ $category->id }})"><i
                                        class="bi bi-trash3"></i></button>
                            </td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    @endif

</div>
