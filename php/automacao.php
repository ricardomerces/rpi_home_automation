<?php

/*=======================================
 * Use LIGHTON or LIGHTOFF in APPLICATION
 * ======================================*/

if (isset($_POST['LightON']))
{
	exec("sudo /usr/bin/python /home/pi/GPIO/on.py");
}
if (isset($_POST['LightOFF']))
{
	exec("sudo /usr/bin/python /home/pi/GPIO/off.py");
}
?>

