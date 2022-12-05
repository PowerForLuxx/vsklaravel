<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!DOCTYPE html>
<body>
<nav class="navbar navbar-expand-lg navbar-dark" style="background: orange">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Library</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="main" href="/">Main</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="booklist" href="/booklist">Book List</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="addB" href="/addbook">Add books</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="userlist" href="/userlist">Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="userlist" href="/login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="userlist" href="/register">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
</body>
<html>
<head>
    <body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-sm-12">
                @section('title-block')$data->name
                @endsection
                <h1>Книга</h1>
                   <div class="alert alert-info">
                       <label>Book name : </label>
                       <p>{{$data->name}}</p>
                       <label>Book author : </label>
                    <p>{{$data->author}}</p>
                       <label>Book years : </label>
                    <p>{{$data->years}}</p>
                       <a href="{{route('updatebook',$data->id)}}"><button class="btn btn-warning">
                               Edit
                           </button></a>
                       <a href="{{route('deletebook',$data->id)}}"><button class="btn btn-danger">
                               Delete
                           </button></a>
                   </div>
            </div>
        </div>
    </div>
</body>
</html>
