<?php


namespace App\EventListener;



#use Symfony\Component\HttpFoundation\Response;
#use Symfony\Component\HttpKernel\Event\ResponseEvent;
#use Symfony\Component\DomCrawler\Crawler;
#use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
#class FooterEvent
#{
 #   private $urlGenerator;

  # public function __construct(UrlGeneratorInterface $urlGenerator)
#{
 #   $this->urlGenerator = $urlGenerator;
#}
 #   public function add(ResponseEvent $rep)
  #  {
   # $html=$rep->getResponse()->getContent();
    #$crawler=new Crawler($html);
     #   try {
      #      $crawler->filter('body')->children()->last()->getNode(0)->appendChild(new \DOMText("@UPJV"));

       # }catch (\Exception $e) {
        #    print $e->getMessage();
        #}
        #$rep->getResponse()->setContent($crawler->html());

    #}


#}
