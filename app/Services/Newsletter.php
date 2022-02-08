<?php

namespace App\Services;
use MailchimpMarketing\ApiClient;

class Newsletter{

    protected $client;
    public function __construct(ApiClient $client)
    {
        $this->client = $client;
    }

    public function subscribe($email){
            
        return $this->client->lists->addListMember('25a9753dea',[
            'email_address'=>$email,
            "status" => "subscribed"
        ]);
         
    }


    
}