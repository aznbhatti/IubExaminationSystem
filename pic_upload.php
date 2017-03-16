<?php
include 'connectmysql.php';

// First run ONLY - need to create table by uncommenting this
// Or with silent @ we can let it fail every subsequent time ;-)

$q = <<<CREATE
create table pix (
    pid int primary key not null auto_increment,
    title text,
    imgdata longblob)
CREATE;
@mysql_query($q);

// Insert any new image into database

if ($_REQUEST['completed'] == 1) {
        // Need to add - check for large upload. Otherwise the code
        // will just duplicate old file ;-)
        // ALSO - note that latest.img must be public write and in a
        // live appliaction should be in another (safe!) directory.
        move_uploaded_file($_FILES['imagefile']['tmp_name'],"bs-forum\img");
        $instr = fopen("bs-forum\img","rb");
        $image = addslashes(fread($instr,filesize("bs-forum\img")));
        if (strlen($image) < 149000) {
                mysql_query ("insert into pix (title, imgdata) values (\"".
                $_REQUEST['whatsit'].
                "\", \"".
                $image.
                "\")");
        } else {
                $errmsg = "Too large!";
        }
}

// Find out about latest image

$gotten = @mysql_query("select * from pix order by pid desc limit 1");
if ($row = @mysql_fetch_assoc($gotten)) {
        $title = $row['title'];
        $bytes = $row['imgdata'];
} /*else {
        $errmsg = "There is no image in the database yet";
        $title = "no database image available";
        // Put up a picture of our training centre
        $instr = fopen("bs-forum.img","rb");
        $bytes = fread($instr,filesize("bs-forum.img"));
}*/

// If this is the image request, send out the image

/*if ($_REQUEST['gim'] == 1) {
        header("Content-type: image/jpeg");
        print $bytes;
        exit ();
        }*/
?>

<html><head>
<title>Upload an image to a database</title>
<body bgcolor=white><h2>Here's the latest picture</h2>
<font color=red><?php echo $title; ?></font>
<center><img src= width=144><br>
<b><?php  $bytes;  ?></center>
<hr>
<h2>Please upload a new picture and title</h2>
<form enctype=multipart/form-data method=post>
<input type=hidden name=MAX_FILE_SIZE value=150000>
<input type=hidden name=completed value=1>
Please choose an image to upload: <input type=file name=imagefile><br>
Please enter the title of that picture: <input name=whatsit><br>
then: <input type=submit></form><br>
<hr>
</body>
</html>
