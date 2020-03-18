<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Google Drive Fetcher</title>
</head>
<body>
    <br>
    <h1 class="text-center">All Files</h1>
    <br>
    @if(!count($files))
        <h2 class="text-center">You have no files yet :(</h2>
        <h3 class="text-center">Please go to <a href="{{ route('store') }}">Store Page</a> to fetch and save files</h3>
    @else
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>ID</th>
                    <th>File ID</th>
                    <th>Name</th>
                    <th>Size(KB)</th>
                    <th>Download URL</th>
                    <th>Mime Type</th>
                </tr>
            </thead>
            <tbody>
                @foreach($files as $index => $file)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $file->id }}</td>
                    <td>{{ $file->file_id }}</td>
                    <td>{{ $file->name }}</td>
                    <td>{{ $file->size }}</td>
                    <td><a href="{{ $file->link }}" target="_blank">Link</a></td>
                    <td>{{ $file->mime }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <h4 class="text-center"><a href="{{ route('truncate') }}">Delete saved files</a></h4>
    @endif
    
    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
