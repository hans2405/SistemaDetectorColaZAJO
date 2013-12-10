<?php

namespace Taller\RutaMicroBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class LineaMicroType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('foto')
            ->add('descripcion', 'textarea')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Taller\RutaMicroBundle\Entity\LineaMicro'
        ));
    }

    public function getName()
    {
        return 'taller_rutamicrobundle_lineamicrotype';
    }
}
