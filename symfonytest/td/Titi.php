<?php
namespace Td;
use Symfony\Component\HttpFoundation\Response;

class Titi
{
    public function cuicui($nbr){
        $rep="";
        for($i=0;$i<$nbr;$i++)
        { $rep="cuicui";}
        return new Response($rep);



}

}