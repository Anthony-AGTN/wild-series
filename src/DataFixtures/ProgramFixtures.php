<?php

namespace App\DataFixtures;

use App\Entity\Program;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class ProgramFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        
        $program = new Program;
        $program->setTitle('Arcane');
        $program->setSynopsis("Championnes de leurs villes jumelles et rivales, deux sœurs se battent dans une guerre où font rage des technologies magiques et des perspectives diamétralement opposées.");
        $program->setPoster('https://fr.web.img6.acsta.net/pictures/21/11/02/11/12/2878509.jpg');
        $program->setCategory($this->getReference('category_Animation'));
        $manager->persist($program);
        
        $program = new Program;
        $program->setTitle('Heartstopper');
        $program->setSynopsis("Dans cette série initiatique sur fond d'histoires d'amour et d'études, les ados Charlie et Nick découvrent une facette inattendue de leur amitié improbable.");
        $program->setPoster('https://c0.lestechnophiles.com/www.numerama.com/wp-content/uploads/2022/05/heartstoppernetflix-1650895928402.jpg?resize=1024,576');
        $program->setCategory($this->getReference('category_Romance'));
        $manager->persist($program);

        $program = new Program;
        $program->setTitle('Squid Game');
        $program->setSynopsis("Tentés par un prix alléchant en cas de victoire, des centaines de joueurs désargentés acceptent de s'affronter lors de jeux pour enfants aux enjeux mortels.");
        $program->setPoster('https://fr.web.img5.acsta.net/c_310_420/pictures/21/09/14/10/18/1090569.jpg');
        $program->setCategory($this->getReference('category_Horreur'));
        $manager->persist($program);

        $program = new Program;
        $program->setTitle('Loki');
        $program->setSynopsis("Alors que Loki a été tué par Thanos dans Avengers : Infinity War, l'histoire prend place plus tôt, en 2012, dans une réalité alternative créée par le Casse temporel des Avengers après que le Loki de 2012 se fut échappé avec le Tesseract. Le Dieu de la Malice veut se servir des pouvoirs du Tesseract pour changer le cours de l'histoire humaine. Après son évasion, il est emmené auprès du Tribunal des Variations Anachroniques (ou TVA), un organisme qui agit pour empêcher toute personne qui tenterait d'altérer le passé ou le futur.");
        $program->setPoster('https://img.phonandroid.com/2021/07/loki-saison-deux.jpg');
        $program->setCategory($this->getReference('category_Drame'));
        $manager->persist($program);

        $program = new Program;
        $program->setTitle('Obi-Wan Kenobi');
        $program->setSynopsis("L'histoire commence 10 ans après les événements dramatiques de \"Star Wars: La Revanche des Sith\" où Kenobi a fait face à sa plus grande défaite, la chute et la corruption de son meilleur ami et apprenti Jedi, Anakin Skywalker, devenu le méchant Seigneur Sith Dark Vador.");
        $program->setPoster('https://www.melty.fr/wp-content/uploads/meltyfr/2022/05/obi.jpg');
        $program->setCategory($this->getReference('category_Science-fiction'));
        $manager->persist($program);

        $program = new Program;
        $program->setTitle('WandaVision');
        $program->setSynopsis("Wanda Maximoff et Vision, deux super-héros menant une vie des plus normales, commencent à se douter que celle-ci n'est pas aussi parfaite qu’elle en a l'air.");
        $program->setPoster('https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/5A6949E15616A514884473E12153B1BDD4F595B97D2DEFD0F81C8CF805692D04/scale?width=1200&aspectRatio=1.78&format=jpeg');
        $program->setCategory($this->getReference('category_Fantastique'));
        $manager->persist($program);

        $program = new Program;
        $program->setTitle('Lupin');
        $program->setSynopsis("Inspiré par les aventures d'Arsène Lupin, le gentleman cambrioleur Assane Diop décide de venger son père d'une terrible injustice.");
        $program->setPoster('https://fr.web.img6.acsta.net/pictures/20/12/02/16/24/1535547.jpg');
        $program->setCategory($this->getReference('category_Action'));
        $manager->persist($program);

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            CategoryFixtures::class,
        ];
    }
}
