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
            ->add('nickname', 'text', [
                "label" => "Нікнейм"
            ])
            ->add('email', 'email', [
                "label" => "Емейл адрес (не обов’язкове поле, емейл буде використовуватися для повідомлень про нові рецензії)"
            ])
            ->add('text', 'textarea', [
                'max_length' => 255,
                'attr' => [
                    'class' => 'review-text',
                ],
                "label" => "Текст рецензії"
            ])
            ->add('type', 'choice', [
                'choices' => [
                    "Подобається",
                    "Не подобається",
                ],
                "label" => "Вердикт"
            ])
            ->add('Зберегти', 'submit', [
                'attr' => [
                    "class" => "btn-default",
                ]
            ]);
    }

    public function getName()
    {
        return 'add_review';
    }
}
