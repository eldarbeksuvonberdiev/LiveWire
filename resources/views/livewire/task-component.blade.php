<div>
    To attain knowledge, add things every day; To attain wisdom, subtract things every day.

    <div class="container text-center">
        <div class="row align-items-start">
            @foreach ($tasks as $status => $taskGroup)
                <div class="col-3" wire:sortable="#" style="background-color: blueviolet;border-radius:20px;">
                    <h2>Status {{ $status }} Tasks</h2>
                    @foreach ($taskGroup as $task)
                        <ul draggable="true" wire:sortable.item="{{ $task['id'] }}">
                            <li>{{ $task['name'] }}</li>
                        </ul>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
</div>
