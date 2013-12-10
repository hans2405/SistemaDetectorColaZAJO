<?php

namespace Taller\RutaMicroBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UsuarioType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('apellidos')
            ->add('email')
            ->add('password')
            ->add('salt')
            ->add('direccion')
            ->add('fechaAlta')
            ->add('fechaNacimiento')
            ->add('ci')
            ->add('foto')
            ->add('roles')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Taller\RutaMicroBundle\Entity\Usuario'
        ));
    }

    public function getName()
    {
        return 'taller_rutamicrobundle_usuariotype';
    }
}
