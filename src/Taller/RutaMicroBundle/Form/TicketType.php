<?php

namespace Taller\RutaMicroBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TicketType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nro')
            ->add('fechaHoraEmision')
            ->add('fechaHoraAtencion')
            ->add('fechaHoraFinalizacion')
            ->add('estado')
            ->add('sucursal')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Taller\RutaMicroBundle\Entity\Ticket'
        ));
    }

    public function getName()
    {
        return 'taller_rutamicrobundle_tickettype';
    }
}
