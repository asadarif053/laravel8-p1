<?php

namespace App\Services;
use MailchimpMarketing\ApiClient;

class Newsletter{

    protected $client;
    protected $foo;
    public function __construct(ApiClient $client, $foo)
    {
        $this->client = $client;
        $this->foo= $foo;
    }

    public function subscribe($email){
       
        
        return $this->client()->lists->addListMember('25a9753dea',[
            'email_address'=>$email,
            "status" => "subscribed"
        ]);
         
    }


    public function client(){
        return $this->client->setConfig([
            'apiKey' => config('services.mailchimp.key'),
            'server' => 'us14']);
    }
}