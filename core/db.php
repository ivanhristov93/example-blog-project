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

// TODO dbSelect to return limited results
function dbSelect($table, $where = null)
{
    $resultList = [];
    $connection = dbInstance();

    $sql = "SELECT * FROM $table";
    if( $where != null ){
        $sql.= " WHERE ".$where;
    }

    $result = mysqli_query($connection, $sql);


    if (mysqli_affected_rows($connection) > 0) {

        while ($row = mysqli_fetch_assoc($result))
        {
            $resultList[] = $row;
        }
    }
    return $resultList;
}