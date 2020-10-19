@extends('welcome')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="text-center">Update student details</h4>
                    </div>
                    <div class="panel-body">




                        <form action="" method="post">

                            <div class="form-group">
                                <label for="name">Your Name:</label>
                                <input type="text" readonly name="name" value="{{ $student->name }}" class="form-control" id="name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email address:</label>
                                <input type="email" readonly name="email" value="{{ $student->email }}" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone:</label>
                                <input type="text" readonly name="phone" value="{{ $student->phone }}" class="form-control" id="phone">
                            </div>
                            <div class="form-group">
                                <label for="registration_number">Registration Number:</label>
                                <input type="text" readonly name="registration_number" value="{{ $student->registration_number }}" class="form-control" id="registration_number">
                            </div>
                            <a href="{{ route('student.index') }}" class="btn btn-sm btn-success">Go back</a>
                        </form>


                    </div>
                </div>

            </div>
            <div class="col-md-3"></div>
        </div>
    </div>

@endsection
