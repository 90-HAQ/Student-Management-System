<div class="card mb-3">
  <img src="https://27mi124bz6zg1hqy6n192jkb-wpengine.netdna-ssl.com/wp-content/uploads/2020/05/Top-12-Pioneers-in-Education-scaled.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">List of Students</h5>
    <p class="card-text">You can find all the information about students in the system.</p>

    <table class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">CNE</th>
            <th scope="col">First name</th>
            <th scope="col">Second Name</th>
            <th scope="col">Age</th>
            <th scope="col">Speciality</th>
            <th scope="col">Operations</th>

        </tr>
        </thead>
        <tbody>
        @foreach($students as $student)
            <tr>
                <td>{{ $student->cne }}</td>
                <td>{{ $student->firstname }}</td>
                <td>{{ $student->secondname }}</td>
                <td>{{ $student->age }}</td>
                <td>{{ $student->speciality }}</td>
                <td>
                    <!-- <a href="#" class="btn btn-sm btn-info">Show</a> -->
                    <a href="{{ url('/edit/'.$student->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <a href="{{ url('/delete/'.$student->id) }}" class="btn btn-sm btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

  </div>
</div>

