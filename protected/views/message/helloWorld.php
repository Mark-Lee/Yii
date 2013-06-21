<?php
$this->breadcrumbs = array(
    'Message'=>array(
        'message/index'
    ), 
    'HelloWorld'
);
?>

<p>
<button onclick="int=window.setInterval('clock()',50)">Start interval</button>
<input type="text" id="clock" size="35" /> <script language=javascript>
    var int = self.setInterval("clock()",50)
    function clock() {
      var time = new Date()
      document.getElementById("clock").value = time
    }
</script>
<button onclick="window.clearInterval(int)">Stop interval</button>
</p>

<h1>Hello, world!</h1>
<h3><?php
echo $time;
?></h3>
<h3><?php
echo $this->time;
?></h3>
<p><?php
echo CHtml::link("Goodbye", array(
    'message/goodbye'
));
?></p>

<p>You may change the content of this page by modifying the file <tt><?php
echo __FILE__;
?></tt>.</p>
