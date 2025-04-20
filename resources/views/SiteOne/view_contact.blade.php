<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="UTF-8">
  <title>Bootstrap</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body dir="rtl">

<div class="container my-5">
  <div class="table-responsive">
    <table class="table table-bordered table-striped text-center">
      <thead class="table-dark">
        <tr>
          <th>#</th>
          <th>NAME</th>
          <th>PHONE</th>
          <th>EMAIL</th>
          <th>MSG</th>
          <th>IMAGE</th>
          <th>CERATEDAT</th>
          <th>UPDATEDAT</th>
        </tr>
      </thead>
      <tbody>
       @foreach ($contacts as $c)
       <tr>
        <td>{{ $c->id }}</td>
        <td>{{ $c->name }}</td>
        <td>{{ $c->phone }}</td>
        <td>{{ $c->email }}</td>
        <td>{{ $c->msg }}</td>
        <td><img style="width: 70px" src="{{ asset('uploads/' . $c->image) }}"></td>
        <td>{{ $c->created_at }}</td>
        <td>{{ $c->updated_at }}</td>
      </tr>
       @endforeach

      </tbody>
    </table>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
