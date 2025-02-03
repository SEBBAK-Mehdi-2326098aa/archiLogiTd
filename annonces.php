<?php
    $link = mysqli_connect('mysql-sebbak.alwaysdata.net', 'sebbak_annonces', 'sebbakAnnonces', 'sebbak_annonces_db');

    $query= 'SELECT login FROM Users WHERE login="'.$_POST['login'].'" and password="'.$_POST['password'].'"';
    $resultlogin = mysqli_query($link, $query );

    if( mysqli_num_rows( $resultlogin) ){
        $login = $_POST['login'];

        mysqli_free_result( $resultlogin );
        $resultall = mysqli_query($link, 'SELECT id, title FROM Post');

        $annonces = array();
        while ($row = mysqli_fetch_row($resultall)) {
            $annonces[] = $row;
        }

    }
?>



<?php
    mysqli_close( $link );
?>
