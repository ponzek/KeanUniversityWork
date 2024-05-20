<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Rectangle Area Calculator by Karina Ponze</title>
</head>
<body>
   <h1>Rectangle Area Calculator by Karina Ponze</h1>
   <form method="POST" action="">
      <label for = "length">Length:</label>
      <input type="text" id="length" name = "length">
      <br>
      <label for="width">Width:</label>
      <input type="text" id="width" name="width">
      <br>
      <input type="submit" name="submit" value="Calculate">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $length = $_POST["length"];
    $width = $_POST["width"];

    //Prepare the command to run the Python Script
    $command = escapeshellcmd("python3 AreaOfRectangleKSP.py $length $width");

    //Execute the Python script and capture the output
    $output = shell_exec($command);

    //Display the result
    echo "<h3>Area of the rectangle:</h3>";
    echo "<p>$output</p>"; 
   }
   ?>
</body>
</html>
