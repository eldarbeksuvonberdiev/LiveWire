<div>
    To attain knowledge, add things every day; To attain wisdom, subtract things every day.

    <div class="container text-center">
        <div class="row align-items-start">
            @foreach ($tasks as $status => $taskGroup)
                <div class="col-3">
                    <h2>Status {{ $status }} Tasks</h2>
                    <ul>
                        @foreach ($taskGroup as $task)
                            <li>{{ $task['name'] }}</li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>
    </div>
</div>
