<?php

namespace Formation\FormationBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class GestionPersonneControllerTest extends WebTestCase
{
    public function testListe()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Liste');
    }

    public function testShow()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/show');
    }

    public function testSupprimerpersonne()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/SupprimerPersonne');
    }

    public function testAfficherpersonne()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/AfficherPersonne');
    }

    public function testConnexion()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Connexion');
    }

    public function testInsererpersonne()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/InsererPersonne');
    }

}
