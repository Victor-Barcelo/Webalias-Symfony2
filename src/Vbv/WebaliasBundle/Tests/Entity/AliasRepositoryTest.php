// <?php

// namespace Vbv\WebaliasBundle\Tests\Entity;

// use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

// class AliasRepositoryTest extends KernelTestCase
// {
//     /**
//      * @var \Doctrine\ORM\EntityManager
//      */
//     private $repo;

//     /**
//      * {@inheritDoc}
//      */
//     public function setUp()
//     {
//         self::bootKernel();
//         $this->repo = static::$kernel->getContainer()
//             ->get('doctrine')
//             ->getManager()->getRepository('VbvWebaliasBundle:Alias');
//         ;
//     }

//     public function testAddAlias()
//     {
//         $this->repo->addAlias('testt','cod','www.url.com'); 
//         $this->assertEquals($repo->getAliases('testt','cod'), 1);
//     }

//     /**
//      * {@inheritDoc}
//      */
//     protected function tearDown()
//     {
//         parent::tearDown();
//         // $this->em->close();
//     }
// }