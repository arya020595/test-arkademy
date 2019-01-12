<?php 

function validasi($username, $password) {
    if (preg_match("/[a-z][_]/", $username) AND strlen($username) >= 8) 
    {
        echo 'Username anda adalah '. '<b>'.$username.'</b> <br><br>';
    }
    else {
        echo 'Username, harus terdiri dari <b>huruf kecil</b> dan <b>underscore</b>. Dengan <b>panjang 8 karakter</b> <br><br>';
    }

    if (preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/', $password)) {
        echo 'Password anda adalah '. '<b>'.$password.'</b> <br><br>';
    }
    else {
        echo 'Password, harus terdiri dari <b>huruf kecil</b>, <b>huruf besar</b>, <b>angka</b>, dan <b>karakter spesial</b>. <b>Dengan panjang 8 karakter</b> <br><br>';
    }
}

validasi('asdasdsss', 'qaz_123');

?>