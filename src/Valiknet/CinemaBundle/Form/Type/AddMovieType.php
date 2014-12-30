<?php
namespace Valiknet\CinemaBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AddMovieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name')
                ->add('trailer')
                ->add('basePoster', 'file')
                ->add('description')
                ->add('releasedAt', 'date')
                ->add('type', 'choice')
                ->add('director')
                ->add('country')
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
