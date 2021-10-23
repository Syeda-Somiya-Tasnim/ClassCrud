<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <form method="post" action="">
                    <div class="card">
                        <div class="card-header bg-dark">
                            <h1 class="text-center text-white">Insert Operation</h1>
                        </div>
                        <div class="form-group">
                            <label for="username">UserName</label>
                            <input type="text" class="form-control" name="username">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="text" class="form-control" name="password">
                        </div>

                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
                <h5><a href="display.php"> <input type="button" class="btn btn-primary" value="Display Data"></a></h5>
            </div>

        </div>
    </div>

</body>

</html>