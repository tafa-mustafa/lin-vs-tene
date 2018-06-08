<?php

namespace biblioBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class FrontControllerTest extends WebTestCase
{
    public function testAccueil()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Front/accueil');
    }

    public function testApropo()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'Front/Apropo');
    }

    public function testProgramme()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Front/Programme');
    }

    public function testBlog()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Front/Blog');
    }

    public function testContacts()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Front/Contact');
    }

    public function test404()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/404');
    }

    public function testEnconstruction()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Enconstruction');
    }

}
