@extends('welcome')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="text-center">Add new student</h4>
                    </div>
                    <div class="panel-body">


                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('student.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name">Your Name:</label>
                                <input type="text" name="name" class="form-control" id="name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email address:</label>
                                <input type="email" name="email" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone:</label>
                                <input type="text" name="phone" class="form-control" id="phone">
                            </div>
                            <div class="form-group">
                                <label for="registration_number">Registration Number:</label>
                                <input type="text" name="registration_number" class="form-control" id="registration_number">
                            </div>

                            <div class="checkbox">
                                <label><input type="checkbox"> Remember me</label>
                            </div>
                            <button type="submit" class="btn btn-success">Add new student</button>
                        </form>


                    </div>
                </div>

            </div>
            <div class="col-md-3"></div>
        </div>
    </div>

@endsection
