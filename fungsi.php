<?php

function judul()
{
    global $conn;
    $sql = "SELECT * FROM hero where id=1";
    $q1 = mysqli_query($conn, $sql);
    $r1 = mysqli_fetch_array($q1);
    $text = $r1['elemen'];
    return $text;
}
