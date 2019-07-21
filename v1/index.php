<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <title>LeD Strip (DESK)</title>
</head>
<body>

  <style>
    body {
      height: 100%;
      padding-top: 150px;
      font-family: Gill Sans,Gill Sans MT,Calibri,sans-serif;
      background-color: #001628;
    }

    .head {
      font-size: 20px;
    }

    .bg {
      height: 200%;
      background-position: center;
      background-repeat: no-repeat;
      background-size: auto;
    }

    table,th,td {
      border: 1px solid black;
      border-collapse: collapse;
    }

    th,td {
      padding: 5px;
      text-align: left;
    }

    .container {
      border-radius: 5px;
      background-color: #f2f2f2;
      text-align: center;
      margin: auto;
      width: 30%;
      border: 5px solid #00ffff;
      padding: 10px;
    }

    .button {
      background-color: #555555;
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
    }

    .tbox {
      background-color: #555555;
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
    }


  </style>

<div class="">
  <div class="container">
    <h2>Desk LeD Control</h2>
      <p class="head">Desk On or Off</p>
      <br>
      <form class="" action="#" method="post">
        <input class="button" type="submit" name="submit1" value="On">
        <input class="button" type="submit" name="submit2" value="Off">
         <?php

          if (isset($_POST['submit1']))
          {
            system ("bash on.sh");
          }

         ?>

         <?php

           if (isset($_POST['submit2']))
           {
             system ("bash off.sh");
           }

          ?>
        <br>
      </form>
      <br>

    <h1>Other Controls</h1>

    <br>
    <form class="" action="#" method="post">
      <input class="button" type="submit" name="submit3" value="Red">
      <input class="button" type="submit" name="submit4" value="Blue">
      <input class="button" type="submit" name="submit5" value="Green">
      <?php

        if (isset($_POST['submit3']))
        {
          system ("bash red.sh");
        }

       ?>

       <?php

         if (isset($_POST['submit4']))
         {
           system ("bash blue.sh");
         }

        ?>

        <?php

          if (isset($_POST['submit5']))
          {
            system ("bash green.sh");
          }

         ?>
      <br>
    </form>
    <br>

  </div>
</div>

</body>
</html>
