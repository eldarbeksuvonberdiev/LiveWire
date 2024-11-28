<?php

namespace App\Livewire;

use App\Models\Student;
use LegacyTests\Browser\SyncHistory\Step;
use Livewire\Component;

class StudentComponent extends Component
{
    public $activeForm = false;
    public $students;

    public $full_name, $address, $age, $field, $course;
    public $searchId, $searchFio, $searchAddress, $searchAge, $searchField, $searchCourse;

    // public function mount() {
    //     $this->all();
    // }

    public function all()
    {
        $this->students = Student::all();
        return $this->students;
    }

    public function render()
    {
        $this->students = Student::all();
        return view('livewire.student-component');
    }

    public function create()
    {
        $this->activeForm = true;
    }

    public function cancel()
    {
        $this->activeForm = false;
        $this->all();
    }

    public function store()
    {
        if ($this->full_name && $this->address && $this->age && $this->field && $this->course) {
            Student::create([
                'full_name' => $this->full_name,
                'address' => $this->address,
                'age' => $this->age,
                'field' => $this->field,
                'course' => $this->course,
            ]);
            $this->reset(['full_name', 'address', 'age', 'field', 'course', 'activeForm']);
        }
    }

    public function searchColumns()
    {
        $this->students = Student::where('id', 'LIKE',"{$this->searchId}%")
            ->where('full_name', 'LIKE', "{$this->searchFio}%")
            ->where('address', 'LIKE', "{$this->searchAddress}%")
            ->where('age', 'LIKE', "{$this->searchAge}%")
            ->where('field', 'LIKE', "{$this->searchField}%")
            ->where('course', 'LIKE', "{$this->searchCourse}%")
            ->get();
    }

    public function changeActiveness(Student $student){
        $student->update([
            'is_active' => !($student->is_active)
        ]);
    }
}
