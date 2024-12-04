<div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Attendance</h1>
                <input type="date" class="form-control" name="" wire:change="changeDate($event.target.value)">
                <h4 class="text-primary mt-2 mb-2">{{ $date->format('F Y') }}</h4>
                <table class="table table-striped table-dark table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            @foreach ($days as $day)
                                <th>{{ $day->format('d') }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                            <tr>
                                <th>{{ $student->id }}</th>
                                <td>{{ $student->name }}</td>
                                @foreach ($days as $day)
                                    <td></td>
                                @endforeach
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
