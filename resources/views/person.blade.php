<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <nav class="navbar bg-dark text-white fixed-top">
  <div class="container-fluid">
    <h2 class="fw-bold">CRUD APP.</h2>
    <form class="d-flex" method="POST" action="{{ route('person.show') }}" role="search">
        @csrf
      <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search"/>
      <button class="btn btn-primary" type="submit">Search</button>
    </form>
  </div>
</nav>
    <div class="container-fluid mt-5 p-5 mb-10">
        <h1 class="fw-bold">List of Person</h1>
        <a href="{{ route('create.index') }}" class="btn btn-primary btn-lg">Add Person</a>
        <table class="table table-striped mt-5 mb-3 me-2">
            <tr class="table table-dark">
                <th>ID</th>
                <th>FIRSTNAME</th>
                <th>LASTNAME</th>
                <th>AGE</th>
                <th>ADDRESS</th>
                <th>ACTION</th>
            </tr>
            @foreach($persons as $person)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $person->firstname }}</td>
                <td>{{ $person->lastname }}</td>
                <td>{{ $person->age }}</td>
                <td>{{ $person->address }}</td>
                <td>
                    <a href="{{ route('edit.index',['id'=>$person->id]) }}" class="btn btn-primary btn-sm m-1"><i class="far fa-edit"></i>Edit</a>
                    <a href="{{ route('person.destroy',['id'=>$person->id]) }}" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i>Delete</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <div class="container-fluid p-3">
        <h2>Made by Bayu</h2>
        <p>Designed with Laravel Ver. 12 <br>Source code: https://github.com/BayuBramasta/CRUD_Laravel12 <br>License: Free</p>
    </div>
</body>

</html>