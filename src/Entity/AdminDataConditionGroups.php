<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AdminDataConditionGroups
 *
 * @ORM\Table(name="admin_data_condition_groups")
 * @ORM\Entity
 */
class AdminDataConditionGroups
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
     * @ORM\Column(name="prodh_5", type="string", length=80, nullable=true)
     */
    private $prodh5;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cond_group", type="integer", nullable=true)
     */
    private $condGroup;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cond_group_text", type="string", length=255, nullable=true)
     */
    private $condGroupText;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vkbur", type="string", length=30, nullable=true)
     */
    private $vkbur;

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

    public function getProdh5(): ?string
    {
        return $this->prodh5;
    }

    public function setProdh5(?string $prodh5): self
    {
        $this->prodh5 = $prodh5;

        return $this;
    }

    public function getCondGroup(): ?int
    {
        return $this->condGroup;
    }

    public function setCondGroup(?int $condGroup): self
    {
        $this->condGroup = $condGroup;

        return $this;
    }

    public function getCondGroupText(): ?string
    {
        return $this->condGroupText;
    }

    public function setCondGroupText(?string $condGroupText): self
    {
        $this->condGroupText = $condGroupText;

        return $this;
    }

    public function getVkbur(): ?string
    {
        return $this->vkbur;
    }

    public function setVkbur(?string $vkbur): self
    {
        $this->vkbur = $vkbur;

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
