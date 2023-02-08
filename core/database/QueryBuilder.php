<?php


class QueryBuilder
{
    protected $pdo;
    public function __construct($pdo){
        $this->pdo=$pdo;

    }

    public function selectAll($tablename){
        $statement=$this->pdo->prepare("SELECT * FROM $tablename");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }
    public function insertSingle($data,$tablename){
        $keys = implode(",",array_keys($data)) ;//implode like join method
        $values =array_values($data) ;
        $keyForQuery = '';
        foreach($values as $value){
            $keyForQuery .= "?,";
        }
        $valueForSql = rtrim($keyForQuery,",");
        $sql = "INSERT INTO $tablename ($keys) VALUE ($valueForSql)";
        $statement=$this->pdo->prepare($sql);
        $statement->execute($values);
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }
}