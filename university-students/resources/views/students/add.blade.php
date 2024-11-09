@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Add New Student</h2>
    <form id="addStudentForm">
        @csrf
        <div class="mb-3">
            <label for="student_name" class="form-label">Student Name</label>
            <input type="text" class="form-control" id="student_name" name="student_name" required>
        </div>
        <div class="mb-3">
            <label for="class_teacher_id" class="form-label">Class Teacher</label>
            <select class="form-control" id="class_teacher_id" name="class_teacher_id" required>
                <option value="">Select Teacher</option>
                @foreach($teachers as $teacher)
                    <option value="{{ $teacher->id }}">{{ $teacher->teacher_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="class" class="form-label">Class</label>
            <input type="text" class="form-control" id="class" name="class" required>
        </div>
        <div class="mb-3">
            <label for="admission_date" class="form-label">Admission Date</label>
            <input type="date" class="form-control" id="admission_date" name="admission_date" required>
        </div>
        <div class="mb-3">
            <label for="yearly_fees" class="form-label">Yearly Fees</label>
            <input type="number" step="any" class="form-control" id="yearly_fees" name="yearly_fees" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Student</button>
    </form>
</div>

<script>
    $('#addStudentForm').submit(function(e) {
        e.preventDefault();

        $.ajax({
            url: '{{ route("students.store") }}',
            type: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                alert(response.success);
                window.location.href = "{{ route('students.index') }}";
            }
        });
    });
</script>
@endsection
