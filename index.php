<html>
    <form method="post">
        <input type="submit" name="shutdown" id="shutdown" value="Shutdown" /><br/>
    </form>

    <form method="post">
        <input type="submit" name="restart" id="restart" value="Restart" /><br/>
    </form>
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