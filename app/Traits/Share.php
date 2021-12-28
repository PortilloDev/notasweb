<?php 

namespace App\Traits;

trait Share {
    public function ShareWidget($page)
    {
        $shareComponent = \Share::page(
            $page,
            'Publicación compartida desde https://notasweb.me',
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