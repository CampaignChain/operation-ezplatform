<?php
/*
 * Copyright 2016 CampaignChain, Inc. <info@campaignchain.com>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace CampaignChain\Operation\EZPlatformBundle\Entity;

use CampaignChain\CoreBundle\Entity\Meta;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="campaignchain_operation_ezplatform_schedule")
 */
class EZPlatformSchedule extends Meta
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToOne(targetEntity="CampaignChain\CoreBundle\Entity\Operation", cascade={"persist"})
     */
    protected $operation;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set operation
     *
     * @param \CampaignChain\CoreBundle\Entity\Operation $operation
     * @return Status
     */
    public function setOperation(\CampaignChain\CoreBundle\Entity\Operation $operation = null)
    {
        $this->operation = $operation;

        return $this;
    }

    /**
     * Get operation
     *
     * @return \CampaignChain\CoreBundle\Entity\Operation
     */
    public function getOperation()
    {
        return $this->operation;
    }
}
