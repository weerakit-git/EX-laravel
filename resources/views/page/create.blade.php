<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>

    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 mt-4 ">
                <h2>Add data</h2>
            </div>
            <div class="mt-3">
                <a href="{{ route('page.index') }}" class="btn btn-primary mb-3" >Back</a>
            </div>
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            <form action=" {{ route('page.store') }}" method="POST" enctype="multipart/form-data"   >
                @csrf 
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <strong>Toppic</strong>
                            <input type="text" name="toppic" class="form-control" placeholder="Plaes enter Toppic">
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            {{-- <strong>Text</strong> --}}
                            <textarea id="w3review" name="text" rows="12"  cols="120" class="mt-4" placeholder="Plaes enter text"></textarea>
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    
                    <button type="Submit" class="btn btn-success col-2 mt-3" >Submit</button>
                </div>
            </form>
        </div>

    </div>

    
</body>
</html>