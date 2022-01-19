<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">


    <title>Student Management System</title>
</head>
<body>

    @include("navbar")

    <div class="row header-container justify-content-center">
        <div class="header">
            <h1>Student Management System</h1>
        </div>
    </div>

    @if($layout == 'index')
        <div class="container-fluid mt-4">
            <div class="container-fluid mt-4">
                <div class="row justify-content-center">
                    <section class="col-md-7">
                        @include("studentslist");
                    </section>
                </div>
            </div>
        </div> 

    @elseif($layout == 'create')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col">
                    @include("studentslist")
                </section>
                <section class="col">

                <div class="card mb-3">
                    <img src="https://epod.cid.harvard.edu/sites/default/files/2020-05/analytical_angle.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Enter the information of the new student</h5>
                        <form action="{{ url('/store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>CNE</label>
                                <input name="cne" type="text" class="form-control"  placeholder="Enter CNE" style="text-transform: uppercase;">
                            </div>
                            <div class="form-group">
                                <label>First Name</label>
                                <input name="firstName" type="text" class="form-control"  placeholder="Enter the First name" style="text-transform: uppercase;"  autocomplete="firstName">
                            </div>      
                            <div class="form-group">
                                <label>second Name</label>
                                <input name="secondName" type="text" class="form-control"  placeholder="Enter Second name" style="text-transform: uppercase;" autocomplete="firstName">
                            </div>
                            <div class="form-group">
                                <label>Age</label>
                                <input name="age" type="text" class="form-control"  placeholder="Enter the Age" style="text-transform: uppercase;">
                            </div>
                            <div class="form-group">
                                <label>Speciality</label>
                                <input name="speciality" type="text" class="form-control"  placeholder="Enter Sepeciality" style="text-transform: uppercase;">
                            </div>

                            <input type="submit" class="btn btn-info" value="Save">
                            <input type="reset" class="btn btn-warning" value="Reset">
                        </form>                    
                    </div>
                </div>
                </section>
            </div>
        </div> 

    @elseif($layout == 'show')
        <div class="container-fluid mt-4">
                <div class="row">
                <section class="col">
                    @include("studentslist")
                </section>
                <section class="col"></section>
            </div>
        </div> 
        
    @elseif($layout == 'edit')
        <div class="container-fluid mt-4">
                <div class="row">
                <section class="col-md-7">
                    @include("studentslist")
                </section>
                <section class="col-md-5">
                    <div class="card mb-3">
                        <img src="https://epod.cid.harvard.edu/sites/default/files/2020-05/analytical_angle.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Update information of student</h5>
                            <form action="{{ url('/update/'.$student->id) }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>CNE</label>
                                    <input value="{{ $student->cne }}" name="cne" type="text" class="form-control"  placeholder="Enter CNE" style="text-transform: uppercase;">
                                </div>
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input value="{{ $student->firstname }}" name="firstName" type="text" class="form-control"  placeholder="Enter the First name"  style="text-transform: uppercase;">
                                </div>      
                                <div class="form-group">
                                    <label>second Name</label>
                                    <input value="{{ $student->secondname }}" name="secondName" type="text" class="form-control"  placeholder="Enter Second name" style="text-transform: uppercase;">
                                </div>
                                <div class="form-group">
                                    <label>Age</label>
                                    <input value="{{ $student->age }}" name="age" type="text" class="form-control"  placeholder="Enter the Age"  style="text-transform: uppercase;">
                                </div>
                                <div class="form-group">
                                    <label>Speciality</label>
                                    <input value="{{ $student->speciality }}" name="speciality" type="text" class="form-control"  placeholder="Enter Sepeciality" style="text-transform: uppercase;">
                                </div>

                                <input type="submit" class="btn btn-info" value="Update">
                                <input type="reset" class="btn btn-warning" value="Reset">
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div> 
    @endif

    <footer>

    </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>