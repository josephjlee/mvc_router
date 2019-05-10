<?php

class Connection {
  public static function make($config) {
    try {
      return new PDO('mysql:host=sql101.epizy.com; dbname=epiz_23729338_db1', 'epiz_23729338', '5hBhfEVwUHOSetm');
      return new PDO(
        $config['connection'].'; dbname='.$config['name'],
        $config['username'],
        $config['password'],
        $config['options']
      );
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }
}


?>
