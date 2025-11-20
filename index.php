 <?php
 function yourNamePrint() {

  echo "My Second Name is Imasha";

 echo "My Surname is Perera";

 }
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 <title>Name Printer</title>
 <style>

 body { font-family: Arial; text-align: center; padding: 50px; background: #fef9e7; }
 .output { font-size: 1.5em; color: #e67e22; margin: 20px; }

 </style>
 </head>
 <body>
 <h1>Name Printer</h1>
 <div class="output">
 <?php yourNamePrint(); ?>
 </div>

 <p>Current branch: <strong>merge both branches</strong></p>

 </body>
 </html>