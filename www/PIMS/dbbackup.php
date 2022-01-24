<?php
$backupfile = 'studendb' . date("Y-m-d") . '.sql'; 
system("mysqldump -h localhost -u user -p 'studendb' > $backupfile");



?>