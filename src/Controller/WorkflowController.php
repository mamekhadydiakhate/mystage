<?php

namespace App\Controller;

use App\Entity\Workflow;
use FOS\UserBundle\Mailer\Mailer;
use Symfony\Component\Mime\Email;
use App\Controller\BaseController;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class WorkflowController extends BaseController
{
  /**
     * @Route("/workflow")
     */
    public function sendworkflow(MailerInterface $mailer): Response
    {
        $workflow = (new Workflow())
            ->from('hello@example.com')
            ->to('you@example.com')
            ->subject('Time for Symfony Mailer!')
            ->text('Sending emails is fun again!')
            ->html('<p>See Twig integration for better HTML integration!</p>');

        $mailer->send($workflow);
        

       
    }
}
