<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Exel Import</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row ">

            <div class="card border-0">

                <div class="card-header bg-primary text-center">
                    <h1 class="text-white">Laravel Excel</h1>
                </div>
                <div class="card-body border border-dark">
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form enctype="multipart/form-data" method="post" action="{{ route('Import.Exel') }}">
                        @csrf
                        <div class="mt-3">

                            <input name="file" class="form-control @error('file') is-invalid @enderror"
                                type="file" id="file" multiple>

                        </div>
                        <button class="btn btn-primary mt-2" type="submit">Import</button>
                    </form>
                </div>
            </div>

        </div>
        <div class="row mt-5">
            <div class="card p-5 shadow">
                <div class="card-header d-flex justify-content-between">
                    <h4>List of users </h4>
                    <form method="post" action="{{ route('Export.Exel') }}">
                        @csrf

                        <button class="btn btn-sm btn-success" type="submit">Export</button>
                    </form>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach (App\Models\User::paginate(5) as $user)
                                    <tr>
                                        <th scope="row">{{ $user->id }}</th>
                                        <th scope="row">{{ $user->name }}</th>
                                        <th scope="row">{{ $user->email }}</th>


                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="ml-auto mt-2 mr-3">
                    {{ App\Models\User::paginate(5)->links('pagination::bootstrap-4') }}
                </div>
            </div>


        </div>
    </div>
</body>

</html>
