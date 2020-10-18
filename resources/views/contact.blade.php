<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body class="bg-dark text-white">

    <div class="container">
        <h2>Vertical (basic) form</h2>
        {{--@if($errors->all())--}}
            {{--<div class="alert alert-danger">--}}
                {{--<ul>--}}
                    {{--@foreach($errors->all() as $error)--}}
                        {{--<li>{{$error}}</li>--}}
                    {{--@endforeach--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--@endif--}}
        <form action="{{url('contact/post')}}" method="post">
            @csrf
            <div class="form-group">
                <label>Name:</label>
                <input type="text" class="form-control" name="name" value="{{ old('name')}}">
                @error("name")
                    <div class="mt-1 alert alert-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>email:</label>
                <input type="text" class="form-control" name="email" value="{{ old('email')}}">
                @error("email")
                <div class="mt-1 alert alert-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>textarea:</label>
                <textarea type="text" class="form-control" row="10" col="10" name="message">{{ old('message')}}</textarea>
                @error("message")
                <div class="mt-1 alert alert-danger">{{$message}}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>

</body>
</html>
