<?php

class DB
{
    public function __construct()
    {
        mysql_connect('localhost', 'root', '');
        mysql_select_db('test');
    }

    public function query($sql, $class = 'stdClass')
    {
       $res = mysql_query($sql);
        if ($res === false) {
            return false;
        }
        $ret = [];
        while ($row = mysql_fetch_object($res, $class)) {
            $ret[] = $row;
        }
        return $ret;
    }
}