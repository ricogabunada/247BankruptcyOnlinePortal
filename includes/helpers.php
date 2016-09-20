<?php

function dd($value='')
{
  var_dump($value);
  die(1);
}
// encode_existing_customer_data_to_jason();

function encode_existing_customer_data_to_jason($value='')
{
  $db = new database();
  $db->connect();
  $allcustomers = "SELECT * FROM customer";
  $customers = $db->fetch_all_array($allcustomers);
  $data = array();
  foreach ($customers as $key => $customer) {
    $data['departmentname'] = mysqli_real_escape_string($db->link_id,json_encode([$customer['departmentname']]));
    //7th panel data - contacts
    $data['contact'] = mysqli_real_escape_string($db->link_id, json_encode( [$customer['contact']]) );
    $data['rank'] = mysqli_real_escape_string($db->link_id, json_encode( [$customer['rank']]) );
    $data['directnumber'] = mysqli_real_escape_string($db->link_id, json_encode( [$customer['directnumber']]) );
    $data['cemail'] = mysqli_real_escape_string($db->link_id, json_encode( [$customer['cemail']]) );
    //8th panel data - supervisors
    $data['supervisorname'] = mysqli_real_escape_string($db->link_id,json_encode( [$customer['supervisorname']]) );
    $data['supervisordeptname'] = mysqli_real_escape_string($db->link_id,json_encode( [$customer['supervisordeptname']]) );
    $data['supervisorshift'] = mysqli_real_escape_string($db->link_id,json_encode( [$customer['supervisorshift']]) );
    $data['supervisordirectnum'] = mysqli_real_escape_string($db->link_id,json_encode( [$customer['supervisordirectnum']]) );
    $data['supervisoremail'] = mysqli_real_escape_string($db->link_id,json_encode( [$customer['supervisoremail']]) );
    //9th panel data - shift schedule
    $data['shiftname'] = mysqli_real_escape_string($db->link_id,json_encode( [$customer['shiftname']] ));
    $data['shiftdays'] = mysqli_real_escape_string($db->link_id,json_encode( [$customer['shiftdays']] ));
    $data['shifthours'] = mysqli_real_escape_string($db->link_id,json_encode( [$customer['shifthours']] ));

    $db->query_update("customer",$data,"cid=".$customer['cid']);
  }
}

function isJson($string) {
 json_decode($string);
 return (json_last_error() == JSON_ERROR_NONE);
}