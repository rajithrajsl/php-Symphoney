<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MasterDataCustomer0012
 *
 * @ORM\Table(name="master_data_customer_0012")
 * @ORM\Entity
 */
class MasterDataCustomer0012
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
     * @ORM\Column(name="hienr", type="integer", nullable=true)
     */
    private $hienr;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ktokd", type="integer", nullable=true)
     */
    private $ktokd;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vkorg", type="string", length=30, nullable=true)
     */
    private $vkorg;

    /**
     * @var int|null
     *
     * @ORM\Column(name="vtweg", type="integer", nullable=true)
     */
    private $vtweg;

    /**
     * @var int|null
     *
     * @ORM\Column(name="spart", type="integer", nullable=true)
     */
    private $spart;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sort1", type="string", length=40, nullable=true)
     */
    private $sort1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name1", type="string", length=80, nullable=true)
     */
    private $name1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name2", type="string", length=80, nullable=true)
     */
    private $name2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name3", type="string", length=80, nullable=true)
     */
    private $name3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="street", type="string", length=100, nullable=true)
     */
    private $street;

    /**
     * @var int|null
     *
     * @ORM\Column(name="house_num1", type="integer", nullable=true)
     */
    private $houseNum1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="post_code1", type="integer", nullable=true)
     */
    private $postCode1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="city1", type="string", length=100, nullable=true)
     */
    private $city1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="region", type="string", length=100, nullable=true)
     */
    private $region;

    /**
     * @var string|null
     *
     * @ORM\Column(name="country", type="string", length=100, nullable=true)
     */
    private $country;

    /**
     * @var string|null
     *
     * @ORM\Column(name="kvgr1", type="string", length=30, nullable=true)
     */
    private $kvgr1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="kvgr2", type="string", length=30, nullable=true)
     */
    private $kvgr2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vkbur", type="string", length=30, nullable=true)
     */
    private $vkbur;

    /**
     * @var int|null
     *
     * @ORM\Column(name="kdgrp", type="integer", nullable=true)
     */
    private $kdgrp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bzirk", type="string", length=30, nullable=true)
     */
    private $bzirk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="kdgrp_local", type="string", length=40, nullable=true)
     */
    private $kdgrpLocal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="klabc", type="string", length=20, nullable=true)
     */
    private $klabc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="klabc_plan", type="string", length=10, nullable=true)
     */
    private $klabcPlan;

    /**
     * @var int|null
     *
     * @ORM\Column(name="pernr", type="integer", nullable=true)
     */
    private $pernr;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getHienr(): ?int
    {
        return $this->hienr;
    }

    public function setHienr(?int $hienr): self
    {
        $this->hienr = $hienr;

        return $this;
    }

    public function getKtokd(): ?int
    {
        return $this->ktokd;
    }

    public function setKtokd(?int $ktokd): self
    {
        $this->ktokd = $ktokd;

        return $this;
    }

    public function getVkorg(): ?string
    {
        return $this->vkorg;
    }

    public function setVkorg(?string $vkorg): self
    {
        $this->vkorg = $vkorg;

        return $this;
    }

    public function getVtweg(): ?int
    {
        return $this->vtweg;
    }

    public function setVtweg(?int $vtweg): self
    {
        $this->vtweg = $vtweg;

        return $this;
    }

    public function getSpart(): ?int
    {
        return $this->spart;
    }

    public function setSpart(?int $spart): self
    {
        $this->spart = $spart;

        return $this;
    }

    public function getSort1(): ?string
    {
        return $this->sort1;
    }

    public function setSort1(?string $sort1): self
    {
        $this->sort1 = $sort1;

        return $this;
    }

    public function getName1(): ?string
    {
        return $this->name1;
    }

    public function setName1(?string $name1): self
    {
        $this->name1 = $name1;

        return $this;
    }

    public function getName2(): ?string
    {
        return $this->name2;
    }

    public function setName2(?string $name2): self
    {
        $this->name2 = $name2;

        return $this;
    }

    public function getName3(): ?string
    {
        return $this->name3;
    }

    public function setName3(?string $name3): self
    {
        $this->name3 = $name3;

        return $this;
    }

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function setStreet(?string $street): self
    {
        $this->street = $street;

        return $this;
    }

    public function getHouseNum1(): ?int
    {
        return $this->houseNum1;
    }

    public function setHouseNum1(?int $houseNum1): self
    {
        $this->houseNum1 = $houseNum1;

        return $this;
    }

    public function getPostCode1(): ?int
    {
        return $this->postCode1;
    }

    public function setPostCode1(?int $postCode1): self
    {
        $this->postCode1 = $postCode1;

        return $this;
    }

    public function getCity1(): ?string
    {
        return $this->city1;
    }

    public function setCity1(?string $city1): self
    {
        $this->city1 = $city1;

        return $this;
    }

    public function getRegion(): ?string
    {
        return $this->region;
    }

    public function setRegion(?string $region): self
    {
        $this->region = $region;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getKvgr1(): ?string
    {
        return $this->kvgr1;
    }

    public function setKvgr1(?string $kvgr1): self
    {
        $this->kvgr1 = $kvgr1;

        return $this;
    }

    public function getKvgr2(): ?string
    {
        return $this->kvgr2;
    }

    public function setKvgr2(?string $kvgr2): self
    {
        $this->kvgr2 = $kvgr2;

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

    public function getKdgrp(): ?int
    {
        return $this->kdgrp;
    }

    public function setKdgrp(?int $kdgrp): self
    {
        $this->kdgrp = $kdgrp;

        return $this;
    }

    public function getBzirk(): ?string
    {
        return $this->bzirk;
    }

    public function setBzirk(?string $bzirk): self
    {
        $this->bzirk = $bzirk;

        return $this;
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

    public function getKlabc(): ?string
    {
        return $this->klabc;
    }

    public function setKlabc(?string $klabc): self
    {
        $this->klabc = $klabc;

        return $this;
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

    public function getPernr(): ?int
    {
        return $this->pernr;
    }

    public function setPernr(?int $pernr): self
    {
        $this->pernr = $pernr;

        return $this;
    }


}
