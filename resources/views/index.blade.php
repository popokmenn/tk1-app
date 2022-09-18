<html>
        <head>
            <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
        </head>
        <body>
            <div>
                <label>
                    Nama File :
                    <input type="text" name="name" value="input nama file" />
                </label>
            </div>
            <div class="drag-area">
                <form method="post" action="{{ Route('insert.file') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="file" name="video" />
                    <p>
                        @if($errors->has('video'))
                            {{ $errors->first('video') }}
                        @endif
                    </p>
                    <input type="submit" name="click" />
                </form>
            </div>
        </body>
</html>