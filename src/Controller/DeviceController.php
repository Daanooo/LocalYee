<?php

namespace App\Controller;

use App\Entity\Device;
use App\Form\DeviceType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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

    #[Route('/device/{id}', methods: ['GET', 'POST'], name: 'getDevice')]
    public function detail(ManagerRegistry $doctrine, int $id, Request $request): Response
    {
        $entityManager = $doctrine->getManager();

        $device = $doctrine->getRepository(Device::class)->find($id);
        if (!$device) {
            throw $this->createNotFoundException("That device doesn't exist.");
        }

        $form = $this->createForm(DeviceType::class, $device);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'Device succesfully updated.');
            return $this->redirectToRoute('devices');
        }

        return $this->renderForm('device/new.html.twig', [
            'form' => $form
        ]);
    }

    #[Route('/devices/new', name: 'smellpp')]
    public function new(ManagerRegistry $doctrine, Request $request): Response
    {
        $entityManager = $doctrine->getManager();
        $device = new Device();

        $form = $this->createForm(DeviceType::class, $device);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $device = $form->getData();

            $entityManager->persist($device);
            $entityManager->flush();

            $this->addFlash('success', 'Device has been created');
            return $this->redirectToRoute('devices');
        }

        return $this->renderForm('device/new.html.twig', [
            'form' => $form,
        ]);
    }

    #[Route('/device/delete/{id}', name: 'deleteDevice')]
    public function delete(ManagerRegistry $doctrine, int $id): Response
    {
        $entityManager = $doctrine->getManager();
        $device = $doctrine->getRepository(Device::class)->find($id);

        if (!$device) {
            return $this->createNotFoundException('Device not found.');
        }

        $entityManager->remove($device);
        $entityManager->flush();

        $this->addFlash('success', 'Device has been deleted');
        return $this->redirectToRoute('devices');
    }
}
