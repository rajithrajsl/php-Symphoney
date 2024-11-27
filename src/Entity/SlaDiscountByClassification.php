<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SlaDiscountByClassification
 *
 * @ORM\Table(name="sla_discount_by_classification")
 * @ORM\Entity
 */
class SlaDiscountByClassification
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
     * @ORM\Column(name="klabc_plan", type="string", length=20, nullable=true)
     */
    private $klabcPlan;

    /**
     * @var string|null
     *
     * @ORM\Column(name="base_discount", type="string", length=30, nullable=true)
     */
    private $baseDiscount;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getKlabcPlan(): ?string
    {
        return $this->klabcPlan;
    }

    public function setKlabcPlan(?string $klabcPlan): self
    {
        $this->klabcPlan = $klabcPlan;

        return $this;
    }

    public function getBaseDiscount(): ?string
    {
        return $this->baseDiscount;
    }

    public function setBaseDiscount(?string $baseDiscount): self
    {
        $this->baseDiscount = $baseDiscount;

        return $this;
    }


}
