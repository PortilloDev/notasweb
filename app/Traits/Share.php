<?php 

namespace App\Traits;

trait Share {
    public function ShareWidget($page, $post_name)
    {
        $shareComponent = \Share::page(
            $page,
            $post_name. ' ',
        )
        ->facebook()
        ->twitter()
        ->linkedin()
        ->telegram()
        ->whatsapp()        
        ->reddit();
        return $shareComponent;
    }
}