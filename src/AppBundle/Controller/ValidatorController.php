<?php

namespace AppBundle\Controller;

class ValidatorController
{
    /**
     * @Route("/validator", name="indexValidacao")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('general/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

}
