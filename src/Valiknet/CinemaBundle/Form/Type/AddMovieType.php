<?php
namespace Valiknet\CinemaBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AddMovieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text', [
                    'label' => 'Назва фільму'
                ]
            )
            ->add('trailer', 'text', [
                    'label' => 'Трейлер до фільму'
                ]
            )
            ->add('basePoster', 'file', [
                    'label' => 'Постер до фільму'
                ]
            )
            ->add('description', 'textarea', [
                    'label' => 'Короткий опис фільму'
                ]
            )
            ->add('releasedAt', 'date', [
                    'label' => 'Дата виходу'
                ]
            )
            ->add('type', 'choice', [
                    'label' => 'Тип фільму',
                    'choices' => [
                        'Фільм',
                        'Серіал',
                        'Мультфільм',
                        'Мультсеріал'
                    ]
                ]
            )
            ->add('director', 'entity', [
                    'class' => 'Valiknet\CinemaBundle\Entity\Director',
                    'empty_value' => 'Виберіть потрібного режисера'
                ]
            )
            ->add('country', 'entity', [
                    'class' => 'Valiknet\CinemaBundle\Entity\Country',
                    'empty_value' => 'Виберіть потрібного країну'
                ]
            )
            ->add('actors')
            ->add('categories');
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Valiknet\CinemaBundle\Entity\Movie',
        ));
    }

    public function getName()
    {
        return 'add_review';
    }
}
