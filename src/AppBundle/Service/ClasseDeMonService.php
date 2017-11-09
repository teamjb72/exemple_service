<?php
// src/AppBundle/Service/MonServiceToto.php
namespace AppBundle\Service;

class ClasseDeMonService
{
    /**
     * @return string
     *
     */
    public function getHappyMessage()
    {
        $messages ='Je suis le message du service, ça marche !';

        return $messages;
    }
}