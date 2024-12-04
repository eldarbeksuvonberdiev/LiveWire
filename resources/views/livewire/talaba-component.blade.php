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
                                    @php
                                        $userAttendance = $student->checks($day->format('Y-m-d'));
                                    @endphp
                                    <td wire:click="inputView('{{ $student->id }}','{{ $day->format('Y-m-d') }}')">
                                        @if ($talabaId == $student->id && $attendanceDate == $day->format('Y-m-d'))
                                            <input type="text" style="width: 30px;" autofocus
                                                value="{{ $userAttendance->value ?? '' }}"
                                                wire:keydown.enter="createAttendance('{{ $student->id }}','{{ $day->format('Y-m-d') }}',$event.target.value)">
                                        @else
                                            @if ($userAttendance)
                                                <span
                                                    class="text-{{ $userAttendance->value == '+' ? 'primary' : 'danger' }}">{{ $userAttendance->value }}</span>
                                            @endif
                                        @endif
                                    </td>
                                @endforeach
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
