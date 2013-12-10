<?php

namespace Taller\RutaMicroBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SucursalType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('descripcion')
            ->add('abreviacion')
            ->add('ubicacion')
            ->add('latitud')
            ->add('longitud')
            ->add('estado')
            ->add('entidad')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Taller\RutaMicroBundle\Entity\Sucursal'
        ));
    }

    public function getName()
    {
        return 'taller_rutamicrobundle_sucursaltype';
    }
}
