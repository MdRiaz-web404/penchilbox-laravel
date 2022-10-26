<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
    @livewireStyles
  </head>
  <body>
    <div class="container">
        <div class="row mt-5">
            <div class="card">
                <div class="card-body">
                    <h2>Money Conversion</h2>
                    @if ($errors->any())
                        <div class="alert alert-danger w-50">
                            @foreach ($errors->all() as $error)
                            <span>{{$error}}</span>
                            @endforeach
                        </div>
                    @endif

                    <form action="{{route('money.exchange')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <select name='currency' id="" class="form-control w-50">
                                <option value="1">USD to BDT</option>
                                <option value="2">BDT to USD</option>
                            </select>
                        </div>
                        <div class="mb-3">
                          <input type="number" name='amount' class="form-control w-50" id="exampleInputPassword1">
                        </div>
                        <button type=" submit" class="btn btn-danger btn-sm"> Exchange</button>
                        <h3>Amount: @if (session('result'))
                            {{session('result')}}
                        @endif</h3>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    @livewireScripts
  </body>
</html>
