<?php
/**
 * Connection class will handle connecting to our
 * database for us
 */
class Connection {

   /**
    * This function is static, meaning you don't need an
    * instance of the Connection class to work with
    * this function.
    *
    * @return PDO
    */
   public static function make($config) {
      // DSN = Data Source Name
      // This is the database, the host (localhost) and the
      // actual name of the database you're trying to connect to
      $dsn = "{$config['type']}:host={$config['host']};dbname={$config['dbname']}";

      // Generally this is a problem, we don't want to have
      // the username/password combo in code like this,
      // for now, we'll leave it, but we're going to
      // refactor this out ASAP.

      try {
         // Try to connect to the DB, if you can return the new PDO instance
        return new PDO($dsn, $config['username'], $config['password']);
      } catch (PDOException $e) {
         // If you can't, just die() right here and send out the message
        die($e->getMessage());
      }
   }
}