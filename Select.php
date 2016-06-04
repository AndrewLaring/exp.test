<?php

require_once 'Database.php';

class Select {

    public function __construct() {
        $this->db = new Database();
    }

    public function getSelectedData($params) {
        $sth = $this->db->prepare('SELECT id, ' . $params['name_field'] . ' FROM ' . $params['table'] . ' WHERE ' . $params['id_field'] . ' = :query_id');
        $sth->execute(array(':query_id' => intval($params['query_id'])));
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getAllCallcenters() {
        $sth = $this->db->prepare('SELECT id, name FROM cc_callcenters');
        $sth->execute();
        $cCenters = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $cCenters;
    }
    
    public function dataValidate($data) {
        trim($data);
        stripcslashes($data);
        htmlspecialchars($data);
        return $data;
    }

}
