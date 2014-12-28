<?php
namespace Valiknet\CinemaBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class AddReviewType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->setAction("")
            ->add('nickname')
            ->add('text', 'textarea', [
                'max_length' => 255
            ])
            ->add('type', 'choice', [
                'choices' => [
                    "Подобається",
                    "Не подобається"
                ]
            ])
            ->add('Зберегти', 'submit');
    }

    public function getName()
    {
        return 'add_review';
    }
}
