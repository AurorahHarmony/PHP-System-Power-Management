<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Stardust</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" media="screen" href="main.css">
   <script src="main.js"></script>

   <style>
      body{
         background-color: rgb(147, 153, 233);
         padding:20px;
         min-height: 100vh;
         overflow-y: hidden;
      }
      input{
         min-width: 100%;
         margin-bottom: 10px;
         margin-top: 10px;
         border-radius: 10px;
         border-width: 0;
         font-size: 1rem;
         font-weight: bolder;
         color: rgb(76, 0, 138);
      }
      #restart{
         background: #a5ebfe;
      }
      #shutdown{
         background: #ff0087;
      }
   </style>
</head>

<body>
   <form method="post">
      <input type="submit" name="shutdown" id="shutdown" value="Shutdown" /><br />
   </form>

   <form method="post">
      <input type="submit" name="restart" id="restart" value="Restart" /><br />
   </form>
</body>
</html>

<?php

function shutdownNow()
{
   exec('sudo shutdown now');
}

function restartNow()
{
   exec('sudo reboot');
}

if(array_key_exists('shutdown',$_POST)){
   shutdownNow();
}

if(array_key_exists('restart',$_POST)){
   restartNow();
}
?>