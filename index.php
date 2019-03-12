<html>
    <form method="post">
        <input type="submit" name="shutdown" id="shutdown" value="RUN" /><br/>
    </form>

    <form method="post">
        <input type="submit" name="restart" id="restart" value="RUN" /><br/>
    </form>
</html>
<?php

function shutdownNow()
{
   echo "Your Shutdown button is working";
}

function restartNow()
{
   echo "Your Restart button is working";
}

if(array_key_exists('shutdown',$_POST)){
   shutdownNow();
}

if(array_key_exists('restart',$_POST)){
   restartNow();
}
?>