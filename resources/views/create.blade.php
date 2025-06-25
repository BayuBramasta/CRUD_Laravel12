<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container mt-2">
        <h2 class="text-center fw-bold">Insert data below</h2>
        <a href="person" class="btn btn-danger btn-lg mt-3">Exit</a>
        <form action="{{ route('create.store') }}" method="POST" class="form-control d-grid p-4 rounded mt-3">
            @csrf
            <label for="firsname">Firstname</label>
            <input class="p-1" type="text" name="firstname"required>
            <label for="Lastname">Lastname</label>
            <input class="p-1" type="text" name="lastname"required>
            <label for="Age">Age</label>
            <input class="p-1" type="number" name="age"required>
            <label for="Address">Address</label>
            <input class="p-1" type="text" name="address"required>
            <input type="submit" class="btn btn-primary btn-lg mt-2" value="Submit">
        </form>
    </div>
</body>

</html>