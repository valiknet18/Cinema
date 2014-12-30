<?php
namespace Valiknet\CinemaBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class AddProposalMovieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', 'email', [
                    'label' => 'Введіть ваш email, для того щоб ми могли вам повідомити що цей фільм добавлений'
                ]
            )
            ->add('movie', new AddMovieType())
            ->add('type', 'hidden', [
                'attr' => [
                    "value" => 1,
                ]
            ]);
    }

    public function getName()
    {
        return 'add_review';
    }
}
