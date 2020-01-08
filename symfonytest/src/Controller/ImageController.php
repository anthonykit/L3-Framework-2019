<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\Routing\Annotation\Route;
class ImageController extends \Symfony\Bundle\FrameworkBundle\Controller\AbstractController
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route ("/img/home", name="home")
     */
public function home()
{
    return $this->render('img/home.html.twig');
}

    public function menu()
    {

        $files = [];
        $dir = scandir($this->getParameter( "kernel.project_dir"). "/public/images");
        foreach ($dir as $file)

            if (!is_dir($file))

                $files[] = $file;
        return $this->render('img/menu.html.twig', ['files' => $files]);
    }
    /**
     * @Route("/data/{imgName}", name="img_download");
     * @param $imgName
     * @return BinaryFileResponse|\Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function download($imgName)
    {
        $publicResourcesFolderPath = $this->getParameter('kernel.project_dir'). '/public/images/' . $imgName;
        if (file_exists($publicResourcesFolderPath)){
            return $this->file($publicResourcesFolderPath);
        }
        return $this->redirectToRoute("home");
    }

}