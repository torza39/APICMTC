<?php

    $data = array('api' => 'API123456',
    'student_id' => '5839010005',
    'birthday'    => '14/06/2540');

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, 'http://it.cmtc.ac.th/lab/api.php');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

    $exec = curl_exec($curl);
    curl_close($curl);

    var_dump(json_decode($exec));
?>