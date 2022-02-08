<?php

namespace App\Services;
use MailchimpMarketing\ApiClient;

class Newsletter{

    public function subscribe($email){
       
        
        return $this->client()->lists->addListMember('25a9753dea',[
            'email_address'=>$email,
            "status" => "subscribed"
        ]);
         
    }


    public function client(){
        return (new ApiClient())->setConfig([
            'apiKey' => config('services.mailchimp.key'),
            'server' => 'us14']);
    }
}