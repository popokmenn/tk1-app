<html>
        <head>
            <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
        </head>
        <body>
            <form method="post" action="{{ @$existVideo ? Route('update.file', $existVideo['id']) : Route('insert.file') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="drag-name">
                    <label>
                        Nama File :
                        <input type="text" name="name" placeholder="input nama file" value="{{ @$existVideo ? $existVideo['name'] : '' }} " />
                    </label>
                </div>
                <div class="drag-area">
                    <label>
                        Menu Upload Video :
                    </label>
                    <input type="file" name="video" class="margin"/>
                    <p>
                        @if($errors->has('video'))
                            {{ $errors->first('video') }}
                        @endif
                    </p>
                    <div>
                        <input type="submit" name="click" />
                    </div>
                </div>
            </form>
        </body>
</html>