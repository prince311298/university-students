@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between mb-4">
            <h2>Students</h2>

            <a href="{{ route('students.create') }}" class="btn btn-primary">Add New Student</a>
        </div>
        <div class="table-responsive">
            <table id="students-table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Student Name</th>
                        <th>Class Teacher</th>
                        <th>Class</th>
                        <th>Admission Date</th>
                        <th>Yearly Fees</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>

    <script>
        //student list
        $(document).ready(function() {
            $('#students-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{{ route('students.index') }}',
                    type: 'GET'
                },
                columns: [{
                        data: 'student_name',
                        name: 'student_name'
                    },
                    {
                        data: 'teacher_name',
                        name: 'teacher_name'
                    },
                    {
                        data: 'class',
                        name: 'class'
                    },
                    {
                        data: 'admission_date',
                        name: 'admission_date'
                    },
                    {
                        data: 'yearly_fees',
                        name: 'yearly_fees'
                    },
                    {
                        data: null,
                        render: function(data, type, row) {
                            return `
                        <a href="{{ url('students') }}/${row.id}/edit" class="btn btn-sm btn-primary">Edit</a>
                        <button class="btn btn-sm btn-danger" onclick="deleteStudent(${row.id})">Delete</button>
                    `;
                        }
                    }
                ]
            });
        });

        //delete function
        function deleteStudent(id) {
            if (confirm('Are you sure you want to delete this student?')) {
                $.ajax({
                    url: '/students/' + id,
                    type: 'DELETE',
                    data: {
                        "_token": $("meta[name='csrf-token']").attr("content"),
                    },
                    success: function(response) {
                        alert('Student deleted successfully.');
                        $('#students-table').DataTable().ajax.reload();
                    },
                    error: function(xhr) {
                        alert('An error occurred while deleting the student.');
                    }
                });
            }
        }
    </script>
@endsection
