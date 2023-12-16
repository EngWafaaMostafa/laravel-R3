<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    @include('includes.nav')
    <div class="container">
        <h2>Update Car</h2>
        <form action="{{route('update',$car->id)}}" method="post">
            <!-- hidden input token without it laravel cant take any information from user-->
            @csrf
            @method('put')
            <div class="form-group">
                <label for="email">Title</label>
                <input type="text" class="form-control" id="email" placeholder="Enter email" name="title" value="{{$car->title}}">
            </div>
            <div class="form-group">
                <label for="pwd">Description</label>
                <textarea class="form-control" name="description" id="" cols="60" rows="3">{{$car->description}}</textarea>
            </div>
            <div class="checkbox">
                <label><input type="checkbox" name="published" @checked($car->published)> Published me</label>
            </div>
            <button type="submit" class="btn btn-default">Update</button>
        </form>
    </div>

</body>

</html>