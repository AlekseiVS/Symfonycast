<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CommentController extends AbstractController
{
    /**
     * @Route ("comments/{id}/vote/{direction<up|down>}", methods="POST")
     */
    public function commentVote($id, $direction, LoggerInterface $logger)
    {
        if ($direction == 'up') {
            $currentCoutn = rand(7,100);
            $logger->info('Up');
        } else {
            $currentCoutn = rand(0,5);
            $logger->info('Down');
        }

        return $this->json(['votes' => $currentCoutn]);
    }


}