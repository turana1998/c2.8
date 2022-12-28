<?php
   class DBConnection extends PDO{
        const host="localhost:3307 via TCP/IP";
        const dbname="c2.8N";
        const user="root";
        const pass="";
        const port="3307";

        public function __construct()
        {
            parent::__construct("mysql:host=".self::host.";dbname=".self::dbname.";charset=utf8", self::user, self::pass);
            $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        }
    }

?>