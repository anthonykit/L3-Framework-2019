<?php



namespace App\Controller;
use App\Entity\Users;
use App\Form\RegisterType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;


class password extends \Symfony\Bundle\FrameworkBundle\Controller\AbstractController
{


    /**
     * @param Request $request
     * @Route("/register", name="register")
     */
public function register(Request $request)
{
    $user=new Users();
    $form=$this->createForm(RegisterType::class, $user);
    $form->handleRequest($request);
    if ($form->isSubmitted()&&$form->isValid())
    {
        $this->get("session")->set("user",$user);

        return $this->redirectToRoute("home");
    }
return $this->render("register.html.twig",["register"=>$form->createView()]);
}

}