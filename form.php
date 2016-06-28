<?php
header('Content-disposition: attachment;filename=Creating pdf in PHP.mp3');
header('Content-type:audio/mpeg');
readfile('Creating pdf in PHP.mp3');
?>

<html>
<head>
<title> your download here</title>
</head>
<body>
<a href="Totorials.php">Download</a>

</body>

</html>