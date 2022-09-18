<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Video</title>
    <style>
        .root {
            display: flex;
            flex-direction: column;
            padding: 5px;
        }
        .root:not(:last-of-type) {
            margin-bottom: 10;
        }
        .root a {
            color: #212121;
        }

        .root p {
            font-size: 1.3em;
            margin: 0 0 5px 0;
        }
    </style>
</head>
<body>
    <div>
        <h1>Ini list data video</h1>
    </div>

    @foreach($data as $row)
        <div class="root">
            <p> Nama : {{ $row['name'] }}</p>
            <video width="320" height="240" controls="controls" preload="none" onclick="this.play()">
                <source src="{{asset('upload')}}/{{$row['video']}}" type="video/mp4">
            </video>
            <a href="{{ url('/index_u/' . $row['id']) }}">Edit</a>
            <a href="{{ url('/delete_video/' . $row['id']) }}">Hapus</a>
        </div>
    @endforeach
</body>
</html>