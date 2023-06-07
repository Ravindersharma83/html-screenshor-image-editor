<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
.container {
  position: relative;
}

#canvas {
  border: 1px solid black;
  cursor: crosshair;
}

#upload-btn {
  margin-top: 10px;
}

#tools {
  margin-top: 10px;
}

.tool-btn {
  margin-right: 5px;
}

#color-picker {
  margin-top: 10px;
}

#save-btn {
  margin-top: 10px;
}
    </style>
</head>
<body>
<div class="container">
  <canvas id="canvas"></canvas>
</div>
<input type="file" id="upload-btn">
<div id="tools">
  <button id="pencil-btn" class="tool-btn" data-tool="pencil">Pencil</button>
  <button id="brush-btn" class="tool-btn" data-tool="brush">Brush</button>
  <button id="rectangle-btn" class="tool-btn" data-tool="rectangle">Rectangle</button>
  <button id="circle-btn" class="tool-btn" data-tool="circle">Circle</button>
</div>
<input type="color" id="color-picker" value="#000000">
<button id="save-btn">Save</button>
</body>

<script>
const canvas = document.getElementById('canvas');
const ctx = canvas.getContext('2d');

// Set the initial canvas size
canvas.width = 800;
canvas.height = 600;

// Set the initial drawing color and tool
let color = '#000000';
let tool = 'pencil';

// Set the initial drawing settings
ctx.strokeStyle = color;
ctx.lineWidth = 5;

// Variable to store the starting coordinates of a shape
let startX = 0;
let startY = 0;

// Function to handle image uploads
function handleImageUpload(event) {
  const file = event.target.files[0];
  const reader = new FileReader();

  reader.onload = function (event) {
    const img = new Image();
    img.onload = function () {
      // Clear the canvas
      ctx.clearRect(0, 0, canvas.width, canvas.height);

      // Calculate the aspect ratio of the image
      const aspectRatio = img.width / img.height;

      // Calculate the maximum width and height for the image to fit within the canvas
      let width = canvas.width;
      let height = canvas.height;

      if (aspectRatio < 1) {
        width = height * aspectRatio;
      } else {
        height = width / aspectRatio;
      }

      // Draw the image on the canvas
      ctx.drawImage(img, 0, 0, width, height);
    };
    img.src = event.target.result;
  };

  reader.readAsDataURL(file);
}

// Function to handle tool selection
function selectTool(event) {
  const selectedTool = event.target.getAttribute('data-tool');
  tool = selectedTool;
}

// Function to handle color selection
function selectColor(event) {
  color = event.target.value;
  ctx.strokeStyle = color;
}

// Function to handle mouse down event
function handleMouseDown(event) {
  const x = event.clientX - canvas.getBoundingClientRect().left;
  const y = event.clientY - canvas.getBoundingClientRect().top;

  if (tool === 'pencil' || tool === 'brush') {
    canvas.addEventListener('mousemove', handleMouseMove);
    canvas.addEventListener('mouseup', handleMouseUp);
    canvas.addEventListener('mouseout', handleMouseUp);

    ctx.beginPath();
    ctx.moveTo(x, y);
  } else if (tool === 'rectangle' || tool === 'circle') {
    startX = x;
    startY = y;
    canvas.addEventListener('mouseup', handleMouseUp);
  }
}

// Function to handle mouse move event
function handleMouseMove(event) {
  const x = event.clientX - canvas.getBoundingClientRect().left;
  const y = event.clientY - canvas.getBoundingClientRect().top;

  ctx.lineTo(x, y);
  ctx.stroke();
}

// Function to handle mouse up event
function handleMouseUp(event) {
  canvas.removeEventListener('mousemove', handleMouseMove);
  canvas.removeEventListener('mouseup', handleMouseUp);
  canvas.removeEventListener('mouseout', handleMouseUp);

  const x = event.clientX - canvas.getBoundingClientRect().left;
  const y = event.clientY - canvas.getBoundingClientRect().top;

  if (tool === 'rectangle') {
    ctx.beginPath();
    ctx.rect(startX, startY, x - startX, y - startY);
    ctx.stroke();
  } else if (tool === 'circle') {
    const radius = Math.sqrt(Math.pow(x - startX, 2) + Math.pow(y - startY, 2));
    ctx.beginPath();
    ctx.arc(startX, startY, radius, 0, 2 * Math.PI);
    ctx.stroke();
  }
}

// Function to handle save button click event
function handleSaveClick() {
  const dataURL = canvas.toDataURL();
  const link = document.createElement('a');
  link.href = dataURL;
  link.download = 'edited_image.png';
  link.click();
}

// Event listener for the image upload button
const uploadBtn = document.getElementById('upload-btn');
uploadBtn.addEventListener('change', handleImageUpload);

// Event listener for tool selection
const toolBtns = document.querySelectorAll('.tool-btn');
toolBtns.forEach((btn) => {
  btn.addEventListener('click', selectTool);
});

// Event listener for color selection
const colorPicker = document.getElementById('color-picker');
colorPicker.addEventListener('change', selectColor);

// Event listener for mouse down event
canvas.addEventListener('mousedown', handleMouseDown);

// Event listener for save button click event
const saveBtn = document.getElementById('save-btn');
saveBtn.addEventListener('click', handleSaveClick);
</script>
</html>