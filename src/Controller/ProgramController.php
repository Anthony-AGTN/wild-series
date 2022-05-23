<?php
// src/Controller/ProgramController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ProgramController extends AbstractController
{
    public function index(): Response
    {
        return new Response(
            '<html><body>Wild Series Index</body></html>'
        );
    }
}
