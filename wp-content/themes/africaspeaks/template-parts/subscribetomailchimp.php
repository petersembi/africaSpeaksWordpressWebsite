<?php

if($_POST){

    $data = [
        'email'     => $_POST['email'],
        'status'    => 'subscribed',
        'firstname' => $_POST['firstname'],
        'lastname'  => $_POST['lastname']
    ];
    
    // NOTE: status having 4 Option --"subscribed","unsubscribed","cleaned","pending"
    $res = syncMailchimp($data);
    
    if($res == 200){
        echo '<div class="alert alert-success" role="alert">Subscribed Successfull</div>';
    }else{
        echo '<div class="alert alert-danger" role="alert">Unable to Subscribe at the moment, try again later</div>';
    }
}


function syncMailchimp($data)
{
    $apiKey = '57acc1edc72d29800df2bb7a3c683ff7-us11';
    $listId = '246aab693f';

    $memberId = md5(strtolower($data['email']));
    $dataCenter = substr($apiKey, strpos($apiKey, '-') + 1);
    $url = 'https://' . $dataCenter . '.api.mailchimp.com/3.0/lists/' . $listId . '/members/' . $memberId;

    $json = json_encode([
        'email_address' => $data['email'],
        'status'        => $data['status'],
        'merge_fields'  => [
            'FNAME'     => $data['firstname'],
            'LNAME'     => $data['lastname']
        ]
    ]);

    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $apiKey);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json);

    $result = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    return $httpCode;
}

?>