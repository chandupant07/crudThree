<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <h3>Add New Course</h3>
    <form action="{{ route('course.index') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="row p-3 shadow-lg p-3 mb-5 bg-body rounded">
        <div class="col-6">
          <label for="">Course Name</label>
          <input type="text" class="form-control" name="courseName" />
        </div>

        <div class="col-6">
          <label for="">Course Price</label>
          <input type="text" class="form-control" name="price" />
        </div>

        <div class="col-6">
          <label for="">Instructor </label>
          <input type="text" class="form-control" name="instructor" />
        </div>

        <div class="col-6">
          <label for=""> Pic</label>
          <input type="file" class="form-control" name="img" />
        </div>

        <button class="btn btn-success mt-3" type="submit">Save</button>
      </div>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</body>

</html>