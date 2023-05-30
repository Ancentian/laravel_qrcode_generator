<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>QR Code</title>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row justify-content-md-center">
        <div class="col-md-9">
            <div class="card px-5 mt-3 shadow">
                <h1 class="text-primary pt-4 text-center mb-4">Generate Barcode in Laravel</h1>
                <form action="{{url('store')}}" method="POST">
                  @csrf
                  <label for="Title">Title</label>
                  <input type="text" class="form-control mb-3" name="title" required>
                  <label for="price">Price</label>
                  <input type="text" class="form-control mb-3" name="price" required>
                  <label for="">Description</label>
                  <textarea name="description" class="form-control mb-3" id="" cols="30" rows="10"></textarea>
                  <button type="submit" class="btn btn-success col-md-3">Submit</button>
                </form>
            </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>