<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MasterDataMaterial
 *
 * @ORM\Table(name="master_data_material")
 * @ORM\Entity
 */
class MasterDataMaterial
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
     * @var int|null
     *
     * @ORM\Column(name="matnr", type="integer", nullable=true)
     */
    private $matnr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="maktx", type="string", length=255, nullable=true)
     */
    private $maktx;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vmsta", type="string", length=30, nullable=true)
     */
    private $vmsta;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prat5", type="string", length=30, nullable=true)
     */
    private $prat5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prodh", type="string", length=180, nullable=true)
     */
    private $prodh;

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

    public function getMatnr(): ?int
    {
        return $this->matnr;
    }

    public function setMatnr(?int $matnr): self
    {
        $this->matnr = $matnr;

        return $this;
    }

    public function getMaktx(): ?string
    {
        return $this->maktx;
    }

    public function setMaktx(?string $maktx): self
    {
        $this->maktx = $maktx;

        return $this;
    }

    public function getVmsta(): ?string
    {
        return $this->vmsta;
    }

    public function setVmsta(?string $vmsta): self
    {
        $this->vmsta = $vmsta;

        return $this;
    }

    public function getPrat5(): ?string
    {
        return $this->prat5;
    }

    public function setPrat5(?string $prat5): self
    {
        $this->prat5 = $prat5;

        return $this;
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
