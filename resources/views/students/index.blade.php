@extends('welcome')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="text-center">Students list</h4>
                    </div>
                    <div class="panel-body">

                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif

                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th width="5%">ID</th>
                                <th width="30">Name</th>
                                <th width="40%">Email</th>
                                <th width="25%">Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach ($students as $student)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->email }}</td>
                                <td class="text-center">
                                    <a class="btn btn-xs btn-info" href="{{ route('student.edit',$student->id) }}"><span class="material-icons">edit</span></a>
                                    <a class="btn btn-xs btn-success" href="{{ route('student.show',$student->id) }}"><span class="material-icons">visibility</span></a>
                                    <button class="btn btn-danger btn-xs" type="button" onclick="deleteStudent({{ $student->id }})">
                                        <i class="material-icons">delete</i>
                                    </button>
                                    <form id="delete-form-{{ $student->id }}" action="{{ route('student.destroy',$student->id) }}" method="POST" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                            </tbody>
                        </table>

                        {!! $students->links() !!}


                    </div>
                </div>

            </div>
            <div class="col-md-3"></div>
        </div>
    </div>

@endsection
