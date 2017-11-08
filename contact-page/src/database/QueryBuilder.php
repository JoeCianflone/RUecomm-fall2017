<?php

/**
 * QueryBuilder is going to handle the building of our
 * DB queries for us. We don't want this code
 * splattered all over the place, so we'll keep it
 * in one class and go from here.
 */
class QueryBuilder {

   // protected class variable...
   // remember protected means?
   protected $pdo;

   /**
    * @param PDO $pdo our DB connection instance
    */
   public function __construct(PDO $pdo)
   {
      $this->pdo = $pdo;
   }

   /**
    * This method will select all the data from the table we specify
    * @param  String $tableName the table we want to get all the data from
    * @return Array            everything we've fetched from the DB
    */
   public function getAll(String $tableName) : Array
   {
       $statement = $this->pdo->prepare("SELECT * FROM {$tableName}");
       $statement->setFetchMode(PDO::FETCH_OBJ);
       $statement->execute();

       return $statement->fetchAll();
   }

}