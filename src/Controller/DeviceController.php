<?php

namespace App\Controller;

use App\Entity\Device;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DeviceController extends AbstractController
{

    #[Route('/', name: 'devices', methods: ['GET'])]
    public function index(ManagerRegistry $doctrine): Response
    {
        $devices = $doctrine->getRepository(Device::class)->findAll();

        return $this->render(
            'device/index.html.twig',
            ['devices' => $devices]
        );
    }

    #[Route('/devices/{id}', methods: ['GET'])]
    public function detail(ManagerRegistry $doctrine, int $id): Response
    {
        $device = $doctrine->getRepository(Device::class)->find($id);

        if (!$device) {
            throw $this->createNotFoundException("That device doesn't exist.");
        }

        //TODO: add a proper detail view in stead of just a basic response
        return new Response($device->getName());
    }
}
