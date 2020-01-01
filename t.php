<?php

$cmd = "python3 p.py";
exec($cmd, $output, $status);
//echo $output;
//echo $status;
foreach($output as $line) echo htmlspecialchars("$line\n");

?>
