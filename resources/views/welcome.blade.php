<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/html2canvas@1.4.1/dist/html2canvas.min.js"></script>
    <title>Screenshot</title>
</head>
<body>
<div class="specific">
    <h1>Click to Take a Screenshot & Download it! <small>using html2canvas.js</small></h1>
    <p>
        This is a simple demo.
    </p>
    <p>
        Use html2canvas.js to take a screenshot of a specific div and save it as an image.
    </p>
    <button type="button" class="btn btn-primary m-4" onclick="takeScreenshot()">Take a Screenshot!</button>
    <p>Reference: <a href="https://html2canvas.hertzen.com/">html2canvas.js</a></p>
    <h1>Click to Take a Screenshot & Download it! <small>using html2canvas.js</small></h1>
    <p>
        This is a simple demo.
    </p>
    <p>
        Use html2canvas.js to take a screenshot of a specific div and save it as an image.
    </p>
    <h1>Click to Take a Screenshot & Download it! <small>using html2canvas.js</small></h1>
    <p>
        This is a simple demo.
    </p>
    <p>
        Use html2canvas.js to take a screenshot of a specific div and save it as an image.
    </p>
    <h1>Click to Take a Screenshot & Download it! <small>using html2canvas.js</small></h1>
    <p>
        This is a simple demo.
    </p>
    <p>
        Use html2canvas.js to take a screenshot of a specific div and save it as an image.
    </p>
    <h1>Click to Take a Screenshot & Download it! <small>using html2canvas.js</small></h1>
    <p>
        This is a simple demo.
    </p>
    <p>
        Use html2canvas.js to take a screenshot of a specific div and save it as an image.
    </p>
</div>

<script>
    function takeScreenshot() {
        html2canvas(document.querySelector('.specific')).then(function(canvas) {
            var link = document.createElement('a');
            link.download = 'screenshot.png';
            link.href = canvas.toDataURL();
            link.click();
        });
    }
</script>
</body>
</html> -->






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Screenshot</title>
    <script src="https://cdn.jsdelivr.net/npm/html2canvas@1.3.2/dist/html2canvas.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<button id="captureBtn">Capture Screenshot</button>

<script>
    $("#captureBtn").click(function() {
        window.open("{{ route('screenshot.capture') }}");
    });
</script>
</body>
</html>

