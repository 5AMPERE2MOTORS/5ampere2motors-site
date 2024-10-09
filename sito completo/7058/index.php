<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Iscriviti alla Newsletter</title>
      <style>
         body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
         }
         .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
         }
         h1 {
            font-size: 24px;
            color: #333;
            text-align: center;
         }
         form {
            display: flex;
            flex-direction: column;
            gap: 15px;
         }
         label {
            font-size: 18px;
            color: #333;
         }
         input[type="email"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
         }
         input[type="submit"] {
            padding: 10px;
            background-color: #34c3c3;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
         }
         input[type="submit"]:hover {
            background-color: #30b3b3;
         }
      </style>
   </head>
   <body>
      <div class="container">
         <h1>Iscriviti alla nostra Newsletter</h1>
         <form action="insert.php" method="post">
            <label for="emailAddress">Inserisci la tua email:</label>
            <input type="email" name="email" id="emailAddress" placeholder="example@email.com" required>
            <input type="submit" value="Invia">
         </form>
      </div>
   </body>
</html>
