<?php


class QueryBuilder
{
    protected $pdo;
    public function __construct($pdo){
            $this->pdo=$pdo;
            
    }

    public function selectAll($tablename){
        $statement=$this->pdo->prepare("select * from $tablename");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }
}