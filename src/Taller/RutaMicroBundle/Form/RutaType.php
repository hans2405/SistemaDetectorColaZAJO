<?php

namespace Taller\RutaMicroBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RutaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('posicion')
            ->add('latitud')
            ->add('longitud')
            ->add('calle')
            ->add('lineaMicro')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Taller\RutaMicroBundle\Entity\Ruta'
        ));
    }

    public function getName()
    {
        return 'taller_rutamicrobundle_rutatype';
    }
}
