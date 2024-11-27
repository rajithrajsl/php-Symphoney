<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AdminDataLocalCustomerGroup
 *
 * @ORM\Table(name="admin_data_local_customer_group")
 * @ORM\Entity
 */
class AdminDataLocalCustomerGroup
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="kdgrp_local", type="string", length=80, nullable=true)
     */
    private $kdgrpLocal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="kdgrp_text", type="string", length=255, nullable=true)
     */
    private $kdgrpText;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vl_lead", type="string", length=180, nullable=true)
     */
    private $vlLead;

    /**
     * @var string|null
     *
     * @ORM\Column(name="gbl_lead", type="string", length=180, nullable=true)
     */
    private $gblLead;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getKdgrpLocal(): ?string
    {
        return $this->kdgrpLocal;
    }

    public function setKdgrpLocal(?string $kdgrpLocal): self
    {
        $this->kdgrpLocal = $kdgrpLocal;

        return $this;
    }

    public function getKdgrpText(): ?string
    {
        return $this->kdgrpText;
    }

    public function setKdgrpText(?string $kdgrpText): self
    {
        $this->kdgrpText = $kdgrpText;

        return $this;
    }

    public function getVlLead(): ?string
    {
        return $this->vlLead;
    }

    public function setVlLead(?string $vlLead): self
    {
        $this->vlLead = $vlLead;

        return $this;
    }

    public function getGblLead(): ?string
    {
        return $this->gblLead;
    }

    public function setGblLead(?string $gblLead): self
    {
        $this->gblLead = $gblLead;

        return $this;
    }


}
