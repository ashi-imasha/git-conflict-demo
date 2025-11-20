<?php
 function yourNamePrint() {
 echo "My First Name is Ashini";
 }
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 <title>Name Printer</title>
 <style>
 body { font-family: Arial; text-align: center; padding: 50px; background: #f0f8ff; }
 .output { font-size: 1.5em; color: #2c3e50; margin: 20px; }
 </style>
 </head>
 <body>
 <h1>Name Printer</h1>
 <div class="output">
 <?php yourNamePrint(); ?>
 </div>
 <p>Current branch: <strong>main</strong></p>
 </body>
 </html>