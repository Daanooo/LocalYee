<?php

namespace App\Controller;

use App\Entity\Device;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DeviceController extends AbstractController {

    #[Route('/', name: 'devices')]
    public function index(ManagerRegistry $doctrine): Response {
        $devices = $doctrine->getRepository(Device::class)->findAll();

        return $this->render('device/index.html.twig', ['devices' => $devices]);
    }
}
