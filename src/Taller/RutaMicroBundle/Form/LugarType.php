<?php

namespace Taller\RutaMicroBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class LugarType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre', null, array('required' => true))
            ->add('foto')
            ->add('descripcion')
            ->add('calle', null, array('required' => false))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Taller\RutaMicroBundle\Entity\Lugar'
        ));
    }

    public function getName()
    {
        return 'taller_rutamicrobundle_lugartype';
    }
}
