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

        $program = new Program;
        $program->setTitle('Moon Knight');
        $program->setSynopsis("Quand Steven Grant, un aimable vendeur de souvenirs, est en proie à des trous noirs et à la mémoire d'une autre vie, il s'aperçoit qu'il souffre de troubles dissociatifs de l'identité et que son corps est habité par le mercenaire Marc Spector. Lorsque les ennemis de Steven/Marc se rapprochent, ils doivent tous deux gérer leur identité complexe en se frayant un chemin dans l'univers terriblement mystérieux des Dieux puissants de l'Égypte.");
        $program->setPoster('https://d1fmx1rbmqrxrr.cloudfront.net/cnet/optim/i/edit/2022/03/moon%20knight%20critique%20big.jpg');
        $program->setCategory($this->getReference('category_Fantastique'));
        $manager->persist($program);

        $program = new Program;
        $program->setTitle('Halo');
        $program->setSynopsis("Au 26e siècle, alors que l’humanité est empêtrée dans une guerre intergalactique contre une menace extraterrestre connue sous le nom d’Alliance, le Dr Halsey, une brillante scientifique, a créé les Spartans, des super-soldats génétiquement et technologiquement améliorés pour booster les capacités physiques et mentales. John-117, le commandant d'une des unités, mène ses troupes vers le combat...");
        $program->setPoster('https://www.francetvinfo.fr/pictures/4yM5Jwj84FTvHpcgzR9Epmwtq80/1200x1200/2022/04/05/phpjAIaW5.jpg');
        $program->setCategory($this->getReference('category_Action'));
        $manager->persist($program);

        $program = new Program;
        $program->setTitle('Spy x Family');
        $program->setSynopsis("Twilight, le plus grand espion du monde, doit pour sa nouvelle mission créer une famille de toutes pièces afin de pouvoir s’introduire dans la plus prestigieuse école de l’aristocratie. Totalement dépourvu d’expérience familiale, il va adopter une petite fille en ignorant qu’elle est télépathe, et s’associer à une jeune femme timide, sans se douter qu’elle est une redoutable tueuse à gages. Ce trio atypique va devoir composer pour passer inaperçu, tout en découvrant les vraies valeurs d’une famille unie et aimante. (source : manga-news.com)");
        $program->setPoster('https://kbimages1-a.akamaihd.net/1f83f028-98cd-419e-a278-1358db5bef32/1200/1200/False/spy-x-family-vol-2.jpg');
        $program->setCategory($this->getReference('category_Action'));
        $manager->persist($program);

        $program = new Program;
        $program->setTitle('Snowdrop');
        $program->setSynopsis("Une histoire d'amour envers et contre tous, dans le Séoul de 1987. Soo-ho, un étudiant issu d'une université prestigieuse, s'introduit, couvert de sang, dans le dortoir d'une université pour femmes. Yeong-ro, une étudiante de première année, se retrouve alors à le soigner, malgré la surveillance stricte et le danger encouru.");
        $program->setPoster('https://prod-ripcut-delivery.disney-plus.net/v1/variant/disney/1F8BA77CA0BFA2D189B1C4E41A6BC9E19D0A4B5D56B46F71E2FA6CA3AEBEEB5C/scale?width=1200&aspectRatio=1.78&format=jpeg');
        $program->setCategory($this->getReference('category_Action'));
        $manager->persist($program);

        $program = new Program;
        $program->setTitle('Drôle');
        $program->setSynopsis("Malgré leurs différences, quatre humoristes ont la même ambition : faire rire les autres. Entre petits jobs et rêve de buzz, ils feront tout pour percer dans le stand-up.");
        $program->setPoster('https://kifim.b-cdn.net/series/medium/1895000.webp');
        $program->setCategory($this->getReference('category_Comédie'));
        $manager->persist($program);

        $program = new Program;
        $program->setTitle('Tokyo Revengers');
        $program->setSynopsis("Takemichi Hanagaki n'a pas vraiment réussi sa vie. Il fait des petits boulots sans intérêt et lorsqu'il apprend que la seule petite amie qu'il ait jamais eue au collège, Hinata Tachibana, a été tuée par l'impitoyable gang Tokyo Manji-kai, il est anéanti. Le lendemain, toujours sous le choc, il est poussé sur les rails de la gare lors d'un mouvement de foule. Mais Takemichi ne meurt pas et quand il se réveille, il est revenu douze ans en arrière. Il va ainsi retrouver ses meilleures années, mais aussi tenter de sauver celle qui l'aime et prendre sa revanche sur la vie…");
        $program->setPoster('https://img1.ak.crunchyroll.com/i/spire4/81ba04142373eed44f7e0c2f278b17361626143500_full.jpg');
        $program->setCategory($this->getReference('category_Animation'));
        $manager->persist($program);

        $program = new Program;
        $program->setTitle('iCarly');
        $program->setSynopsis("Près d'une décennie après l'arrêt de iCarly, Carly Shay et ses amis jonglent avec leurs nouvelles responsabilités d'adultes, entre leurs vies professionnelles, sentimentales et familiales.");
        $program->setPoster('https://img.betaseries.com/h9LM2L_doiXn9RWIznShLwLAQb0=/600x900/smart/https%3A%2F%2Fpictures.betaseries.com%2Ffonds%2Fposter%2F64368dfc1699a3b03f2fbc8df437d1b6.jpg');
        $program->setCategory($this->getReference('category_Comédie'));
        $manager->persist($program);

        $program = new Program;
        $program->setTitle('Severance');
        $program->setSynopsis("Mark dirige une équipe d'employés de bureau dont les souvenirs ont été scindés chirurgicalement en fonction de leur vie professionnelle et de leur vie privée. L'irruption d'un mystérieux collègue en dehors du bureau enclenche une longue quête de vérité sur leur travail.");
        $program->setPoster('https://fr.web.img4.acsta.net/pictures/21/12/16/17/19/2294099.jpg');
        $program->setCategory($this->getReference('category_Drame'));
        $manager->persist($program);

        $program = new Program;
        $program->setTitle('The Croods: Family Tree');
        $program->setSynopsis("Following the events in the feature film THE CROODS: A NEW AGE, two very different families join forces to create a new community, an us-against-the-world, cave person co-op on the most amazing farm in the history of prehistory!");
        $program->setPoster('https://fr.web.img4.acsta.net/pictures/21/09/14/16/20/1364695.jpg');
        $program->setCategory($this->getReference('category_Aventure'));
        $manager->persist($program);

        $program = new Program;
        $program->setTitle('Vikings : Valhalla');
        $program->setSynopsis("Cent ans après la fin de la série originale, une nouvelle saga commence et met en scène les aventures des Vikings les plus célèbres de l'histoire.");
        $program->setPoster('https://fr.web.img2.acsta.net/pictures/22/02/09/11/13/1880062.jpg');
        $program->setCategory($this->getReference('category_Action'));
        $manager->persist($program);

        $program = new Program;
        $program->setTitle('KinnPorsche');
        $program->setSynopsis("Alors qu'il prend sa pause, Porsche découvre un homme pris en embuscade. D'abord peu intéressé par le sort de l'autre homme, celui-ci lui propose de l'argent si Porsche l'aide. Maitrisant les arts martiaux, il réussit à  sauver l'inconnu. Ce que Porsche ignore c'est que l'homme n'est autre que Kinn, le fils ambitieux d'un puissant mafieux, et qu'il est très intéressé par les talents au combat de Porsche. Kinn est prêt à tout pour en faire son garde du corps, malgré le refus catégorique de l'intéressé.");
        $program->setPoster('https://img.betaseries.com/EW4hIy79368pOycw2GlSSw9qVhI=/600x900/smart/https%3A%2F%2Fpictures.betaseries.com%2Ffonds%2Fposter%2Fd0652ca9d73f65a3b8235cd49adb8765.jpg');
        $program->setCategory($this->getReference('category_Romance'));
        $manager->persist($program);

        $program = new Program;
        $program->setTitle('Hawkeye');
        $program->setSynopsis("On retrouve l'ex-Avenger Clint Barton, alias Hawkeye, à New York après l'Éclipse. Sa seule mission : rejoindre sa famille pour Noël, jusqu'à ce qu'une menace liée à son passé l'oblige à faire équipe avec Kate Bishop, une talentueuse archère de 22 ans, afin d'élucider une conspiration criminelle.");
        $program->setPoster('https://sm.ign.com/ign_fr/gallery/h/hawkeye-pr/hawkeye-premiere-all-the-easter-eggs-from-the-first-two-epis_s3t5.jpg');
        $program->setCategory($this->getReference('category_Aventure'));
        $manager->persist($program);

        $program = new Program;
        $program->setTitle('Business Proposal');
        $program->setSynopsis("Grimée, Ha-ri se rend à un rendez-vous arrangé pour faire fuir un prétendant. Mais la situation lui échappe lorsqu'il se révèle être son PDG et lui fait une proposition.");
        $program->setPoster('https://www.nautiljon.com/images/drama/00/75/a_business_proposal_6657.jpg');
        $program->setCategory($this->getReference('category_Comédie'));
        $manager->persist($program);

        $program = new Program;
        $program->setTitle('Orelsan: Montre jamais ça à personne');
        $program->setSynopsis("Au début des années 2000, Aurélien Cotentin est un jeune provincial de classe moyenne à l’avenir flou. Quand il se lance avec ses amis dans le rap, il n’a absolument rien pour réussir. Mais, suivi à la trace par la caméra de son petit frère, il va surmonter épreuves et polémiques pour redéfinir les contours du rap et devenir l’un des artistes français les plus populaires de sa génération.");
        $program->setPoster('https://www.letelegramme.fr/images/2022/04/13/montre-jamais-ca-a-personne-le-documentaire-sur-orelsan-aura_6361843.jpg');
        $program->setCategory($this->getReference('category_Documentaire'));
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
