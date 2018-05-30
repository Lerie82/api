<pre>

<?php
$files = scandir('.', 1);
foreach($files as $file) if(is_dir($file)) array_pop($files);
die(var_dump($files));
?>

</pre>
