<?php


class App
{
    public static $db;

    public function __construct()
    {
        self::$db = new FileDB(DB_FILE);
        self::$db->load();
        var_dump('class construct');
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        self::$db->save();
        var_dump('class destructor');
    }

}