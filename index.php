 <?php
 function yourNamePrint() {
 echo "My Second Name is Imasha";
 }
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 <title>Name Printer</title>
 <style>
 body { font-family: Arial; text-align: center; padding: 50px; background: #e8f5e9; }
 .output { font-size: 1.5em; color: #27ae60; margin: 20px; }
 </style>
 </head>
 <body>
 <h1>Name Printer</h1>
 <div class="output">
 <?php yourNamePrint(); ?>
 </div>
 <p>Current branch: <strong>feature/secondname</strong></p>
 </body>
 </html>