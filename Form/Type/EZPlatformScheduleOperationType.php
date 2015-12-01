<?php
/*
 * This file is part of the CampaignChain package.
 *
 * (c) CampaignChain, Inc. <info@campaignchain.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CampaignChain\Operation\EZPlatformBundle\Form\Type;

use CampaignChain\CoreBundle\Form\Type\OperationType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EZPlatformScheduleOperationType extends OperationType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('content_type', 'choice', array(
            'choices'   => $this->content,
            'required'  => true,
            'label' => false,
            'empty_value' => 'Select a Content Type',
            'empty_data' => null,
            'attr' => array(
                'show_image' => false,
            )
        ));
        $builder->add('content_object', 'text', array(
            'label' => false,
            'attr' => array('placeholder' => 'Select a content object')
        ));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $defaults = array();
        $resolver->setDefaults($defaults);
    }

    public function getName()
    {
        return 'campaignchain_operation_ezplatform_schedule';
    }
}
