<html>
        <head>
            <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
        </head>
        <body>
        <div>
            <h2 class="textTitle">aplikasi video streaming menggunakan laravel</h2>
            <h4 class="textTitle">Team 5</h4>
        </div>
            <form method="post" action="{{ @$existVideo ? Route('update.file', $existVideo['id']) : Route('insert.file') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="drag-name">
                    <label class="textColor">
                        Nama File :
                        <input type="text" name="name" placeholder="input nama file" value="{{ @$existVideo ? $existVideo['name'] : '' }} " />
                    </label>
                </div>
                <div class="drag-area">
                    <label class="textColor">
                        Menu Upload Video :
                        <input type="file" name="video" />
                    </label>
                    <p>
                        @if($errors->has('video'))
                            {{ $errors->first('video') }}
                        @endif
                    </p>
                </div>
                    <div class ="button">
                        <input type="submit" name="click" class="styleButton" />
                    </div>
            </form>
        </body>
</html>