<?php
echo date_default_timezone_get() . "<br>"; 
date_default_timezone_set("Africa/Nairobi");
echo date("Y.m.d.l H:i:sa");


?>