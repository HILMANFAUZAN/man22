<?php
if ($_GET['menu'] == 'home'){
    include("konten/home.php");
}
else if ($_GET['menu'] == 'logout'){
    session_start();
    session_destroy();
    print "<meta http-equip="refresh" content=0; url=?menu=login'>";
}