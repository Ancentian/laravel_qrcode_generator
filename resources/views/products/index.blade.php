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
    <h1>Hello, world!</h1>
    <div class="container">
        <div class="row justify-content-md-center">
            <h1 class="text-danger pt-4 text-center mb-4">List of Products</h1>
            <hr>
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>*</th>
                    <th>Title</th>
                    <th>Price</th>
                    <th>QRCODE</th>
                    <th>Barcode</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $key=>$list)
                   <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $list->title }}</td>
                        <td>{{ $list->price }}</td>
                        <td>{!! DNS2D::getBarcodeHTML("$list->product_code", 'QRCODE') !!}</td>
                        <td>{!! DNS1D::getBarcodeHTML("$list->product_code", 'CODABAR',2,33) !!} p - {{$list->product_code}}</td>
                        <td>{{ $list->description }}</td>
                    </tr> 
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>