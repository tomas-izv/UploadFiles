<!-- <!DOCTYPE html>
<html>
<head>
    <title>List of Images</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('upload.form') }}">Upload Imagen</a></li>
            <li><a href="{{ route('images.index') }}">View Images</a></li>
            <li><a href="{{ route('photos.index') }}">View Photos</a></li>
        </ul>
    </nav>

    <h1>List of Images</h1>
    <table >
        <thead>
            <tr>
                <th>Original Name</th>
                <th>Stored Name</th>
                <th>Date of Creation</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($images as $image)
                <tr>
                    <td>{{ $image->original_name }}</td>
                    <td>{{ $image->stored_name }}</td>
                    <td>{{ $image->created_at }}</td>
                   
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html> -->