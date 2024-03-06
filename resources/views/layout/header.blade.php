<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  padding: 10px;
  height: 100px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}
</style>
</head>
<body>
<div class="row">
  <div class="column" style="background-color:white;">
  <img src="\Emblem_of_Nepal.svg.png" class="h-100 max-w-full ms-auto" alt="image description">
  </div>
  <div class="column" style="background-color:white;">
   <h1>Laravel Project</h1>
  </div>
  <div class="column" style="background-color:white;">
  <img src="\nepaliflag.gif" class="h-100 max-w-full" alt="image description">
  </div>
</div>

</body>
</html>
