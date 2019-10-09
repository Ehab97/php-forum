<?php
/**
 * summary
 */
class QueryBuilder
{
    /**
     * summary
     */
    protected $PDO;
    public function __construct(PDO $PDO)
    {
     $this->PDO=$PDO;   
    }
    public function selectAll($table,$className){
    	$sql=$this->PDO->prepare("select * from {$table}");
    	$sql->execute();
	   return $sql->fetchALL(PDO::FETCH_CLASS,$className);
    }
}