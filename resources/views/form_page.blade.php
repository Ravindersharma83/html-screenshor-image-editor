<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Form Page</title>
</head>
<body>
    <div class="container my-4 bg-dark text-light p-2">
        <form>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control w-50" id="exampleInputPassword1">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
          <input type="file" name="uploadfile" id="img" style="display:none;"/>
          <label for="img" class="btn btn-danger">Upload Error Screenshot</label>
          <!-- <button type="submit" class="btn btn-primary">Upload Screen shot</button> -->
        </form>
    </div>
</body>
</html>