
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        var_dump($_POST);
	$test=fopen("email-list.txt","a");
	fwrite($test,$_POST["myfield"] . "\n");
	fclose($test);
    }
    else
    {
       var_dump($_GET);
    }
 ?> 
<!DOCTYPE html>
 <html lang="en">
   <head>
     <meta char-set="utf-8">
     <title>Page title</title>
   </head>
   <body>
     <form action="" method="POST">
       <input type="text" value="default value, you can edit it" name="myfield">
       <input type="submit" value = "post">
     </form>
   </body>
 </html>