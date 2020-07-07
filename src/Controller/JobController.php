<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class JobController extends AbstractController
{
    /**
     * @Route("/{page}", name="job", requirements={"page":"\d+"})
     */
    public function index(int $page=1)
    {
        return new Response('My job list on page'.htmlspecialchars($page));
    }

    /**
     * @Route("/{slug}", methods={"GET"})
     */
    public function show(string $slug)
    {
        return new Response('This  is a job for a '. htmlspecialchars(str_replace('-', ' ', $slug)));
    }

    /**
     * @Route("/job/{slug}", methods={"PUT"})
     */
    public function edit(string $slug)
    {
        return new Response('This  is a job for a '. htmlspecialchars(str_replace('-', ' ', $slug)));
    }

    /**
     * @Route("/job/my-private-job", priority=1)
     */
    public function privateJob()
    {
        return new Response('This is a private job');
    }
}
