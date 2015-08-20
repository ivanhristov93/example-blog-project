<?php
function dbInstance(){
    static $connection = null;

    if( $connection == null ){
        $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_TABLE);

        if ( mysqli_connect_error())
        {
            if( DEBUG ){
                die('Connect Error (' . mysqli_connect_errno() . ') '
                    . mysqli_connect_error());
            } else {
                die('DB connection error. Contact administrator mraiur@gmail.com');
            }
        }
    }

    return $connection;
}