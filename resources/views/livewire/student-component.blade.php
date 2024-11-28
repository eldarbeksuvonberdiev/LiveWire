<div>
    <h2>Student Page</h2>
    <button class="btn btn-primary m-2"
        wire:click="{{ $activeForm ? 'cancel' : 'create' }}">{{ $activeForm ? 'Cancel' : 'Create' }}</button>
    @if ($activeForm)
        <form wire:submit.prevent="store">
            <div class="row mt-2">
                <div class="col-4">
                    <label for="full_name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="full_name" name="full_name" wire:model="full_name"
                        placeholder="Full name">
                </div>
                <div class="col-4">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" name="address" wire:model="address"
                        placeholder="Address">
                </div>
                <div class="col-4">
                    <label for="age" class="form-label">Age</label>
                    <input type="number" class="form-control" id="age" name="age" wire:model="age"
                        placeholder="Age">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-4">
                    <label for="field" class="form-label">Field</label>
                    <input type="text" class="form-control" id="field" name="field" wire:model="field"
                        placeholder="Field">
                </div>
                <div class="col-4">
                    <label for="course" class="form-label">Course</label>
                    <input type="number" class="form-control" id="course" name="course" wire:model="course"
                        placeholder="Curse">
                </div>
                <div class="col-4 mt-4">
                    <input type="submit" class="btn btn-primary" value="Create">
                </div>
            </div>
        </form>
    @else
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Full Name</th>
                    <th>Address</th>
                    <th>Age</th>
                    <th>Field</th>
                    <th>Course</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <th>
                        <input type="number" wire:model="searchId" placeholder="Search by id"
                            wire:keydown="searchColumns">
                    </th>
                    <th>
                        <input type="text" wire:model="searchFio" placeholder="Search by Full Name"
                            wire:keydown="searchColumns">
                    </th>
                    <th>
                        <input type="text" wire:model="searchAddress" placeholder="Search by Address"
                            wire:keydown="searchColumns">
                    </th>
                    <th>
                        <input type="number" wire:model="searchAge" placeholder="Search by Age"
                            wire:keydown="searchColumns">
                    </th>
                    <th>
                        <input type="text" wire:model="searchField" placeholder="Search by Field"
                            wire:keydown="searchColumns">
                    </th>
                    <th>
                        <input type="number" wire:model="searchCourse" placeholder="Search by Course"
                            wire:keydown="searchColumns">
                    </th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->full_name }}</td>
                        <td>{{ $student->address }}</td>
                        <td>{{ $student->age }}</td>
                        <td>{{ $student->field }}</td>
                        <td>{{ $student->course }}</td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" wire:click="changeActiveness({{ $student->id }})" role="switch" {{ $student->is_active ? 'checked' : '' }}>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
