<!-- <!DOCTYPE html>
<html>
<head>
    <title>Photos</title>
    <style>
        .photo-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .photo-item {
            text-align: center;
        }
        .photo-item img {
            max-width: 200px;
            height: auto;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('upload.form') }}">Upload Image</a></li>
            <li><a href="{{ route('images.index') }}">See Images</a></li>
            <li><a href="{{ route('photos.index') }}">See Photos</a></li>
        </ul>
    </nav>

    <h1>Photos</h1>
    <div class="photo-container">
        @foreach ($images as $image)
            <div class="photo-item">
                <img src="{{ url('private/' . $image->path) }}" alt="{{ $image->original_name }}">
                <p>{{ $image->original_name }}</p>
            </div>
        @endforeach
    </div>
</body>
</html> -->