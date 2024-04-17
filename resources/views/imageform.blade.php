<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <style>
        .card_container{
            min-height: 100vh;
            background: url();

        }
        .card_container .card{
            background: linear-gradient(rgb(183, 0, 255),rgba(255, 0, 200, 0.931));

        }
        .card .form-control{
            background: transparent;

        }
        .card .form-control::placeholder{
            color: #fff;

        }
        .card .form-group .btn{
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row d-flex justify-content-center align-items-center card_container">
        <!-- md->medium,sm->small,lg->large,cl-1=8.33%width,col-12=100%  -->
        <form method="post" action="{{route('method3')}}" class="col-md-12 col-lg-6" enctype="multipart/form-data"  >
            @csrf
            <div class="card p-2">
                <h1 class="text-center">Upload area</h1>
                <div class="form-group mt-3">
                    <label for="" class="form-label">select file</label>
                    <input type="file" name="myfile" class="form-control">
                </div>
                @error('myfile')
                <p>{{$message}} </p>
                @enderror
                <div class="form-group mt-3">
                    <button class="btn w-100 p-3 text-black bg-info-subtle fs-4" id="btn">Upload</button>
                </div>
            </div>
        </form>
        <img src="{{asset('myImages/1713345079-ex 2.PNG')}}" />

    </div>
</div>
</body>
</html>
