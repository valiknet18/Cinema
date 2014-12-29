<?php
namespace Valiknet\CinemaBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class AddMovieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name')
                ->add('trailer')
                ->add('basePoster', 'file')
                ->add('description')
                ->add('releasedAt')
                ->add('type', 'choice')
                ->add('director')
                ->add('country')
                ->add('actors', 'choice')
                ->add('categories', 'choice');
    }

    public function getName()
    {
        return 'add_review';
    }
}
