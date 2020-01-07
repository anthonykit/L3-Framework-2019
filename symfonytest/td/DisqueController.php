<?php
namespace Td;






use Symfony\Component\HttpFoundation\Response;

class DisqueController
{
    public function info($ref){
        return new Response($ref);
    }

}