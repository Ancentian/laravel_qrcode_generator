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
        <div class="row mt-5">
            <div class="col-sm-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        Obtain Access token
                    </div>
                    <div class="card-body">
                        <h4 id="access_token"></h4>
                        <button id="getAccessToken" class="btn btn-primary">Request Access Token</button>
                    </div>
                </div>
                <div class="card mt-5">
                    <div class="card-header">
                        Register URLS
                    </div>
                    <div class="card-body">
                        <button class="btn btn-primary">Register URLS</button>
                    </div>
                </div>

                <div class="card mt-5">
                    <div class="card-header">
                        Simulate Transaction
                    </div>
                    <div class="card-body">
                        <form action="">
                            @csrf
                            <div class="form-group">
                                <label for="amount">Amount</label>
                                <input class="form-control" type="text" name="amount" id="amount">
                            </div>
                            <div class="form-group">
                                <label for="account">Amount</label>
                                <input class="form-control" type="text" name="account" id="account">
                            </div>
                            <button class="btn btn-primary">Simulate Payment</button>
                        </form> 
                    </div>
                </div>

                <div class="card mt-5">
                    <div class="card-header">
                        Register URLS
                    </div>
                    <div class="card-body">
                        <button class="btn btn-primary">Register URLS</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script>
        document.getElementById('getAccessToken').addEventListener('click', (event) => {
            event.preventDefault()

            axios.post('/get-token', {})
            .then((response) => {
                console.log(response.data);
                document.getElementById('access_token').innerHTML = response.data.access_token
            })
            .catch((error) => {
                console.log(error)
            })
        })
    </script>
</body>
</html>