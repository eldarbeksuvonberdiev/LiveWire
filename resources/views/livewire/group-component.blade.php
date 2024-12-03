<div>
    In work, do what you enjoy.

    <table class="table table-hover table-bordered table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Order</th>
            </tr>
        </thead>
        <tbody wire:sortable="updateGroup">
            @foreach ($groups as $group)
                <tr draggable="true" wire:sortable.item="{{ $group->id }}">
                    <td>{{ $group->id }}</td>
                    <td>{{ $group->name }}</td>
                    <td>{{ $group->order }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
