<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{
    private $encoder;
    
    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {

        /*

        for($j=1; $j<random_int (0, 8); $j++) {
        $user2 = new User("admin");
        $user2->setPassword($this->encoder->encodePassword($user2, "admin"));
        $user2->setRoles(array("ROLE_ADMIN"));
        $user2->setUsername("user".$j);
        $user2->setIsActive(0 == $j % 2 ? false : true);
        $manager->persist($user2);
       
          }  
          */
          /*
          for($k=1; $k < 4; $k++) {
            $user3 = new User("caissier");
            $user3->setPassword($this->encoder->encodePassword($user3, "caissier"));
            $user3->setRoles(array("ROLE_CAISSIER"));
            $user3->setUsername("user".$k);
            $user3->setIsActive(0 == $k % 2 ? false : true);
            $manager->persist($user3);
            
              }  
*/
        $user1 = new User("supadmin");
        $user1->setPassword($this->encoder->encodePassword($user1, "damndy"));
        $user1->setRoles(array("ROLE_SUPADMIN"));
        $user1->setIsActive(true);
        $user1->setUsername("dame620");
        $user1->setNomcomplet("damendiaye");
        $manager->persist($user1);
        
        $manager->flush();
    }
}
