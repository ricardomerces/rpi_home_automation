<!--
========================================
 Use (NUM)ON or (NUM)OFF in APPLICATION
========================================
DEVICE  MAP to PIN(GPIO)

DEVICE 1 pin7  (GPIO4)
DEVICE 2 pin11 (GPIO17)
DEVICE 3 pin12 (GPIO18)
DEVICE 4 pin13 (GPIO21)
DEVICE 5 pin15 (GPIO22)
DEVICE 6 pin16 (GPIO23)
========================================
-->


<?php 
if (isset($_POST['1ON']))
{
exec('python /home/pi/GPIO/automate.py 7 0');
}
if (isset($_POST['1OFF']))
{
exec('python /home/pi/GPIO/automate.py 7 1');
}
if (isset($_POST['2ON']))
{
exec('python /home/pi/GPIO/automate.py 11 0');
}
if (isset($_POST['2OFF']))
{
exec('python /home/pi/GPIO/automate.py 11 1');
}
if (isset($_POST['3ON']))
{
exec('python /home/pi/GPIO/automate.py 12 0');
}
if (isset($_POST['3OFF']))
{
exec('python /home/pi/GPIO/automate.py 12 1');
}
if (isset($_POST['4ON']))
{
exec('python /home/pi/GPIO/automate.py 13 0');
}
if (isset($_POST['4OFF']))
{
exec('python /home/pi/GPIO/automate.py 13 1');
}
if (isset($_POST['5ON']))
{
exec('python /home/pi/GPIO/automate.py 15 0');
}
if (isset($_POST['5OFF']))
{
exec('python /home/pi/GPIO/automate.py 15 1');
}
if (isset($_POST['6ON']))
{
exec('python /home/pi/GPIO/automate.py 16 0');
}
if (isset($_POST['6OFF']))
{
exec('python /home/pi/GPIO/automate.py 16 1');
}
?>

<title></title>
</head>
<body>
<form method="post">
<table style="width: 20%; text-align: left; margin-left: auto; margin-right: auto;"
 border="0" cellpadding="4" cellspacing="0">
      <tr>
        <td style="text-align: center;">DEVICE 1</td>
        <td style="text-align: center;"><button name="1ON">ON</button></td>
        <td style="text-align: center;"><button name="1OFF">OFF</button></td>
      </tr>
      <tr>
        <td style="text-align: center;">DEVICE 2</td>
        <td style="text-align: center;"><button name="2ON">ON</button></td>
        <td style="text-align: center;"><button name="2OFF">OFF</button></td>
      </tr>
      <tr>
        <td style="text-align: center;">DEVICE 3</td>
        <td style="text-align: center;"><button name="3ON">ON</button></td>
        <td style="text-align: center;"><button name="3OFF">OFF</button></td>
      </tr>
      <tr>
        <td style="text-align: center;">DEVICE 4</td>
        <td style="text-align: center;"><button name="4ON">ON</button></td>
        <td style="text-align: center;"><button name="4OFF">OFF</button></td>
      </tr>
      <tr>
        <td style="text-align: center;">DEVICE 5</td>
        <td style="text-align: center;"><button name="5ON">ON</button></td>
        <td style="text-align: center;"><button name="5OFF">OFF</button></td>
      </tr>
      <tr>
        <td style="text-align: center;">DEVICE 6</td>
        <td style="text-align: center;"><button name="6ON">ON</button></td>
        <td style="text-align: center;"><button name="6OFF">OFF</button></td>
      </tr>
  </table>
</form>
</body>
</html>

