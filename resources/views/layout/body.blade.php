<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}
</style>
</head>
<body>

<h2>Responsive Two Column Layout</h2>
<p>Resize the browser window to see the responsive effect (the columns will stack on top of each other instead of floating next to each other, when the screen is less than 600px wide).</p>

<div class="row">
  <div class="column" style="background-color:#aaa;">
    <h2>Column 1</h2>
    <p>Some text..</p>
  </div>
  <div class="column" style="background-color:#bbb;">
    <h2>Column 2</h2>
    <p>Some text..</p>
  </div>
</div>

</body>
</html>
