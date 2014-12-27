<?php

namespace Vbv\WebaliasBundle\Tests\Controller;
namespace Vbv\WebaliasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AliasControllerTest extends WebTestCase
{
    
    public function testSearch()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');
        $this->assertEquals(200, $client->getResponse()->getStatusCode(), "Unexpected HTTP status code for GET /");

        $form = $crawler->selectButton('Encuentra el alias!')->form(array(
            'form[tag]'  => 'Test',
            'form[code]'  => 'Test1'
        ));

        $client->submit($form);
        $crawler = $client->followRedirect();

        $this->assertGreaterThan(0, $crawler->filter('html:contains("testurl")')->count(), 'Busqueda fallida');
        $this->assertGreaterThan(0, $crawler->filter('html:contains("test")')->count(), 'Busqueda fallida');
        $this->assertGreaterThan(0, $crawler->filter('html:contains("test1")')->count(), 'Busqueda fallida');

        $crawler = $client->request('GET', '/');
        $this->assertEquals(200, $client->getResponse()->getStatusCode(), "Unexpected HTTP status code for GET /");
        $form = $crawler->selectButton('Encuentra el alias!')->form(array(
            'form[tag]'  => 'aaa',
            'form[code]'  => 'aaa'
        ));
        $crawler = $client->submit($form);
        $this->assertGreaterThan(0, $crawler->filter('html:contains("No se han encontrado resultados")')->count(), 'No hay resultados error');
    }

    // public function testCreate()
    // {
    //     $client = static::createClient();
    //     $crawler = $client->request('GET', '/create');
    //     $this->assertEquals(200, $client->getResponse()->getStatusCode(), "Unexpected HTTP status code for GET /");

    //     $form = $crawler->selectButton('Crea un alias!')->form(array(
    //         'form[tag]'  => 'Test',
    //         'form[code]'  => 'Test',
    //         'form[url]' => 'testurl'
    //     ));
    //     $client->submit($form);
    //     $crawler = $client->followRedirect();
    //     $this->assertGreaterThan(0, $crawler->filter('html:contains("creado corectamente")')->count(), 'Busqueda fallida');

    //     $crawler = $client->request('GET', '/');
    //     $this->assertEquals(200, $client->getResponse()->getStatusCode(), "Unexpected HTTP status code for GET /");
    //     $form = $crawler->selectButton('Encuentra el alias!')->form(array(
    //         'form[tag]'  => 'aaa',
    //         'form[code]'  => 'aaa'
    //     ));
    //     $crawler = $client->submit($form);
    //     $this->assertGreaterThan(0, $crawler->filter('html:contains("No hay resultados")')->count(), 'No hay resultados error');
    // }
}
