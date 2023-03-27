<!DOCTYPE html>
<html lang="en">
<head>
               <meta charset="UTF-8">
               <meta name="viewport" content="width=device-width, initial-scale=1.0">
               <meta http-equiv="X-UA-Compatible" content="ie=edge">
               <title>index</title>
               <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
               <div class="container mt-2">
                              <div class="row">
                                             <div class="col-lg-12 text-center">
                                                            <h2>Post all index</h2>
                                             </div>
                                             <div>
                                                            <a href="{{ route('page.create') }}" class="btn btn-success mb-3"  >Create Post</a>
                                             </div>

                                             @if ($message = Session::get('success'))
                                             <div class="alert alert-success">
                                                 <p>{{ $message }}</p>
                                             </div>
                                             @endif

                                             <table class="table table-bordered">
                                                            <tr>
                                                                <th>NO.</th>
                                                                <th>toppic</th>
                                                                <th>Information Post</th>
                                                                <th width="280px" >Action</th>
                                                            </tr>
                                                            @foreach($datachats as $indata)
                                                                <tr>
                                                                    <td>{{ $indata->id }}</td>
                                                                    <td>{{ $indata->toppic }}</td>
                                                                    <td>{{ $indata->text }}</td>
                                                                 
                                                                   
                                                                    <td>
                                                                        <form action="{{ route('page.destroy', $indata->id)  }}"  method="POST" >
                                                                                <a href="{{ route('page.edit', $indata->id) }}"  class="btn btn-warning">Edit</a>
                                                                                @csrf
                                                                                @method('DELETE')
                                                                                <button type="submit" class="btn btn-danger">Delete</button>
                                                                        </form>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </table>
                                                        {!! $datachats->links('pagination::bootstrap-4') !!}
                              </div>
               </div>
               
</body>
</html>