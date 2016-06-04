<?php

require_once 'Select.php';

$select = new Select();
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $cCenters = $select->getAllCallcenters();
    include('form.php');
}

$params = [
    'callcenter' => ['name_field' => 'desk_name', 'table' => 'cc_desks', 'id_field' => 'id_callcenter'],
    'desk' => ['name_field' => 'team_name', 'table' => 'cc_teams', 'id_field' => 'id_desk'],
    'team' => ['name_field' => 'stage_name', 'table' => 'cc_users', 'id_field' => 'team_id'],
    'sale' => ['name_field' => 'nameStatus', 'table' => 'salestatus', 'id_field' => 'id'],
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $query_arr = $params[$_POST['id_field']];
    $query_arr['query_id'] = intval($select->dataValidate($_POST['query_id']));
    $result = $select->getSelectedData($query_arr);
    $jsonRequest = array();
    foreach ($result as $res) {
        $jsonRequest[] = array_values($res);
    }
    echo json_encode($jsonRequest);
}