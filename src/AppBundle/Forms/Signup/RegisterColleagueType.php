<?php
/**
 * Created by PhpStorm.
 * User: richard
 * Date: 10/30/17
 * Time: 8:32 AM
 */

namespace AppBundle\Forms\Signup;


use AppBundle\Entity\HpnDoctor;
use AppBundle\Entity\Office;
use AppBundle\Entity\User;
use AppBundle\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class RegisterColleagueType extends AbstractType
{
    private $entityManager;
    private $token;

    public function __construct(ObjectManager $entityManager, TokenStorageInterface $tokenStorage)
    {
        $this->entityManager = $entityManager;
        $this->token = $tokenStorage->getToken();
    }


    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('colleagues',CollectionType::class, [
                'entry_type' => ColleagueType::class,
                'entry_options' => ['label' => false],
                'allow_add' => true,
                'allow_delete' => true,
                'label' => _("Kollegaer")
            ])
            ->add("save", SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => RegisterColleagueDTO::class,
            'empty_data' => $this->createDefaultData()
        ]);
    }


    public function createDefaultData(): RegisterColleagueDTO
    {
        return new RegisterColleagueDTO([
            new ColleagueDTO(0,"test", "test@test.no",0),
            new ColleagueDTO(0,"test", "test@test.no",0),
            new ColleagueDTO(0,"test", "test@test.no",0),
            new ColleagueDTO(0,"test", "test@test.no",0),
        ]);
    }


}