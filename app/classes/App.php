<?php

namespace App;

use Core\FileDB;
use Core\Session;

class App
{
    public static FileDB $db;
    public static Session $session;
    public static Tracker $tracker;


    public function __construct()
    {
        self::$db = new FileDB(DB_FILE);
        self::$db->load();

        self::$session = new Session();
        self::$tracker = new Tracker();

    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        self::$db->save();
    }

}