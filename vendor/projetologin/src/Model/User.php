<?php

namespace Main\Model;

use Main\Database\Sql;

class User
{
    public static function listAll()
    {
        $sql = new Sql();

        $query = 'SELECT * FROM tb_users a INNER JOIN tb_persons b WHERE a.idperson=b.idperson ORDER BY a.dtregister';

        $results = $sql->getSelect($query);
        if (count($results) > 0){
            return $results;
        }
        
    }
}
