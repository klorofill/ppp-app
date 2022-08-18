<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body style="background-color: #f1f3f4">
  <div class="container pt-4 mt-4 ">
    <div class="card mx-auto p-2 col-md-6" >
      <h2 class="text-center">Calon</h2>
      <div class="card-body">
        <table class="table">
          @foreach ($candidates as $candidate)
          <tr>
            <td>{{ $candidate->id }}</a></td>
            <td><a href="{{ url('candidate/'.$candidate->id) }}" >{{ $candidate->name }}</td>
          </tr>
          @endforeach
          
        </table>
      </div>
    </div>
  </div>
</body>
</html>