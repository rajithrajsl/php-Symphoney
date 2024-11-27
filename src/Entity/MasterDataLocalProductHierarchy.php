<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MasterDataLocalProductHierarchy
 *
 * @ORM\Table(name="master_data_local_product_hierarchy")
 * @ORM\Entity
 */
class MasterDataLocalProductHierarchy
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
     * @ORM\Column(name="prodh", type="string", length=180, nullable=true)
     */
    private $prodh;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prodh_text", type="string", length=255, nullable=true)
     */
    private $prodhText;

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

    public function getProdh(): ?string
    {
        return $this->prodh;
    }

    public function setProdh(?string $prodh): self
    {
        $this->prodh = $prodh;

        return $this;
    }

    public function getProdhText(): ?string
    {
        return $this->prodhText;
    }

    public function setProdhText(?string $prodhText): self
    {
        $this->prodhText = $prodhText;

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
