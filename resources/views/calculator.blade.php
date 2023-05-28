<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>age Calculator</title>
    <style>
        .form-group input {
    padding: 15px;
    background: #f7f7f7;
    border-radius: 14px;
    font-size: 18px;
    font-weight: 500;
}

.form-group label {
    font-size: 20px;
    font-weight: 600;
}

.form-group button {
    font-size: 18px;
    font-weight: 500;
    border-radius: 14px;
    padding: 10px;
    width: 154px;
}
    </style>
</head>

<body style="background-color:#f7f7f7; ">

    <div class="container">
        <div class="row align-items-center " style="height: 100vh;">
            <div class="col-sm-6 offset-sm-3 mt-5">
                <div class="card ">
                    <div class="card-header">
                        <h3 class="px-2">AGE CALCULATOR</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('calculate') }}" method="post">
                            @csrf
                            <div class="form-group p-2">
                                <label class="form-label" for="birthday">Birthday:</label>
                                <input class="form-control" type="date" name="birthday" id="birthday">
                                @error('birthday')
                                    <b class="text-danger">{{ $message }}</b>
                                @enderror
                            </div>

                            <div class="form-group p-2">
                                <label class="form-label" for="today">Today's Date:</label>
                                <input class="form-control" value="{{ now()->format('Y-m-d') }}" type="date"
                                    name="today" id="today">
                            </div>
                            <div class="form-group p-2">
                                <button class="btn btn-primary" type="submit">Calculate</button>
                            </div>
                        </form>



                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>

@if (isset($age))
    <script>
        Swal.fire(
            '<p>Your age is {{ $age }}.</p>',
        )
    </script>
    {{-- <p>Your age is {{ $age }}.</p> --}}
@endif
