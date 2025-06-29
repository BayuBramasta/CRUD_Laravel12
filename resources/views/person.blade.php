<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    {{-- Bootstrap5  --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- FontAwesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- DataTable --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.2/css/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/3.0.4/css/responsive.bootstrap5.css">

</head>

<body>
    <div class="container mt-2 p-5 mb-10">
        <h1 class="fw-bold">List of Person</h1>
        <a href="{{ route('create.index') }}" class="btn btn-primary btn-lg">Add Person</a>
        <div class="container-fluid mt-5">
            <table class="table table-striped nowrap mt-5 mb-3 me-2" id="QueryTB">
                <thead class="table table-dark table-sm">
                    <tr>
                        <th>ID</th>
                        <th>FIRSTNAME</th>
                        <th>LASTNAME</th>
                        <th>AGE</th>
                        <th>ADDRESS</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($persons as $person)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $person->firstname }}</td>
                        <td>{{ $person->lastname }}</td>
                        <td>{{ $person->age }}</td>
                        <td>{{ $person->address }}</td>
                        <td>
                            <a href="{{ route('edit.index',['id'=>$person->id]) }}" class="btn btn-warning btn-sm m-1"><i class="far fa-edit"></i>Edit</a>
                            <a href="{{ route('person.destroy',['id'=>$person->id]) }}" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i>Delete</a>
                        </td>
                        @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="container-fluid p-3">
        <h2>Made by BayuBramasta</h2>
        <p>Designed with Laravel Ver. 12 <br>Source code: https://github.com/BayuBramasta/CRUD_Laravel12 <br>License: Free</p>
    </div>
</body>
    {{-- DataTable --}}
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.3.2/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.3.2/js/dataTables.bootstrap5.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.4/js/dataTables.responsive.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.4/js/responsive.bootstrap5.js"></script>

    {{-- Script--}}
    <script>
        new DataTable('#QueryTB', {
            responsive: true,
            // lenghtChange = true;
            lengthMenu: [
                [5, 10, 25, 50, -1],
                ['5','10', '25', '50', 'Show all']
            ],
            
        }
    );
    </script>
</html>