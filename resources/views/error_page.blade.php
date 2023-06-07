<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/html2canvas@1.4.1/dist/html2canvas.min.js"></script>
</head>
<body>
<div class="container">
    <h3 class="text-primary">
        This is a simple demo.
    </h3>
    <p>
        It's a page where an Error Exists
    </p>
    <h1 class="text-danger">Click to Take a Screenshot & Download it! </h1>
    <hr/>
    <h3 class="text-primary">
        This is a simple demo.
    </h3>
    <p>
        It's a page where an Error Exists
    </p>
    <h1 class="text-danger">Click to Take a Screenshot & Download it! </h1>
    <button type="button" class="btn btn-primary m-4" onclick="takeScreenshot()">Take a Screenshot!</button>
</div>
</body>
<script>
    function takeScreenshot() {
        html2canvas(document.querySelector('.container')).then(function(canvas) {
            var link = document.createElement('a');
            link.download = 'screenshot.png';
            link.href = canvas.toDataURL();
            link.click();
        });
    }
</script>
</html>