<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ConditionZprpPalletPrice
 *
 * @ORM\Table(name="condition_zprp_pallet_price")
 * @ORM\Entity
 */
class ConditionZprpPalletPrice
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
     * @ORM\Column(name="kotabnr", type="string", length=30, nullable=true)
     */
    private $kotabnr;

    /**
     * @var int|null
     *
     * @ORM\Column(name="knumh", type="integer", nullable=true)
     */
    private $knumh;

    /**
     * @var string|null
     *
     * @ORM\Column(name="kappl", type="string", length=30, nullable=true)
     */
    private $kappl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="kschl", type="string", length=30, nullable=true)
     */
    private $kschl;

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
     * @ORM\Column(name="kunnr", type="integer", nullable=true)
     */
    private $kunnr;

    /**
     * @var int|null
     *
     * @ORM\Column(name="matnr", type="integer", nullable=true)
     */
    private $matnr;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datab", type="datetime", nullable=true)
     */
    private $datab;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datbi", type="datetime", nullable=true)
     */
    private $datbi;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hienr", type="integer", nullable=true)
     */
    private $hienr;

    /**
     * @var int|null
     *
     * @ORM\Column(name="spart", type="integer", nullable=true)
     */
    private $spart;

    /**
     * @var int|null
     *
     * @ORM\Column(name="rke_kvgr1", type="integer", nullable=true)
     */
    private $rkeKvgr1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="rke_kvgr2", type="integer", nullable=true)
     */
    private $rkeKvgr2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="kfrst", type="integer", nullable=true)
     */
    private $kfrst;

    /**
     * @var string|null
     *
     * @ORM\Column(name="konms", type="string", length=30, nullable=true)
     */
    private $konms;

    /**
     * @var string|null
     *
     * @ORM\Column(name="kstbm", type="decimal", precision=8, scale=3, nullable=true, options={"default"="0.000"})
     */
    private $kstbm = '0.000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="kbetr", type="decimal", precision=8, scale=3, nullable=true, options={"default"="0.000"})
     */
    private $kbetr = '0.000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="konwa", type="string", length=30, nullable=true)
     */
    private $konwa;

    /**
     * @var int|null
     *
     * @ORM\Column(name="kpein", type="integer", nullable=true)
     */
    private $kpein;

    /**
     * @var string|null
     *
     * @ORM\Column(name="kmein", type="string", length=30, nullable=true)
     */
    private $kmein;

    /**
     * @var int|null
     *
     * @ORM\Column(name="kznep", type="integer", nullable=true)
     */
    private $kznep;

    /**
     * @var int|null
     *
     * @ORM\Column(name="zterm", type="integer", nullable=true)
     */
    private $zterm;

    /**
     * @var string|null
     *
     * @ORM\Column(name="kstbm001", type="decimal", precision=8, scale=3, nullable=true, options={"default"="0.000"})
     */
    private $kstbm001 = '0.000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="kbetr001", type="decimal", precision=8, scale=3, nullable=true, options={"default"="0.000"})
     */
    private $kbetr001 = '0.000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="kstbm002", type="decimal", precision=8, scale=3, nullable=true, options={"default"="0.000"})
     */
    private $kstbm002 = '0.000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="kbetr002", type="decimal", precision=8, scale=3, nullable=true, options={"default"="0.000"})
     */
    private $kbetr002 = '0.000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="kstbm003", type="decimal", precision=8, scale=3, nullable=true, options={"default"="0.000"})
     */
    private $kstbm003 = '0.000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="kbetr003", type="decimal", precision=8, scale=3, nullable=true, options={"default"="0.000"})
     */
    private $kbetr003 = '0.000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="kstbm004", type="decimal", precision=8, scale=3, nullable=true, options={"default"="0.000"})
     */
    private $kstbm004 = '0.000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="kbetr004", type="decimal", precision=8, scale=3, nullable=true, options={"default"="0.000"})
     */
    private $kbetr004 = '0.000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="kstbm005", type="decimal", precision=8, scale=3, nullable=true, options={"default"="0.000"})
     */
    private $kstbm005 = '0.000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="kbetr005", type="decimal", precision=8, scale=3, nullable=true, options={"default"="0.000"})
     */
    private $kbetr005 = '0.000';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getKotabnr(): ?string
    {
        return $this->kotabnr;
    }

    public function setKotabnr(?string $kotabnr): self
    {
        $this->kotabnr = $kotabnr;

        return $this;
    }

    public function getKnumh(): ?int
    {
        return $this->knumh;
    }

    public function setKnumh(?int $knumh): self
    {
        $this->knumh = $knumh;

        return $this;
    }

    public function getKappl(): ?string
    {
        return $this->kappl;
    }

    public function setKappl(?string $kappl): self
    {
        $this->kappl = $kappl;

        return $this;
    }

    public function getKschl(): ?string
    {
        return $this->kschl;
    }

    public function setKschl(?string $kschl): self
    {
        $this->kschl = $kschl;

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

    public function getKunnr(): ?int
    {
        return $this->kunnr;
    }

    public function setKunnr(?int $kunnr): self
    {
        $this->kunnr = $kunnr;

        return $this;
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

    public function getDatab(): ?\DateTimeInterface
    {
        return $this->datab;
    }

    public function setDatab(?\DateTimeInterface $datab): self
    {
        $this->datab = $datab;

        return $this;
    }

    public function getDatbi(): ?\DateTimeInterface
    {
        return $this->datbi;
    }

    public function setDatbi(?\DateTimeInterface $datbi): self
    {
        $this->datbi = $datbi;

        return $this;
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

    public function getSpart(): ?int
    {
        return $this->spart;
    }

    public function setSpart(?int $spart): self
    {
        $this->spart = $spart;

        return $this;
    }

    public function getRkeKvgr1(): ?int
    {
        return $this->rkeKvgr1;
    }

    public function setRkeKvgr1(?int $rkeKvgr1): self
    {
        $this->rkeKvgr1 = $rkeKvgr1;

        return $this;
    }

    public function getRkeKvgr2(): ?int
    {
        return $this->rkeKvgr2;
    }

    public function setRkeKvgr2(?int $rkeKvgr2): self
    {
        $this->rkeKvgr2 = $rkeKvgr2;

        return $this;
    }

    public function getKfrst(): ?int
    {
        return $this->kfrst;
    }

    public function setKfrst(?int $kfrst): self
    {
        $this->kfrst = $kfrst;

        return $this;
    }

    public function getKonms(): ?string
    {
        return $this->konms;
    }

    public function setKonms(?string $konms): self
    {
        $this->konms = $konms;

        return $this;
    }

    public function getKstbm(): ?string
    {
        return $this->kstbm;
    }

    public function setKstbm(?string $kstbm): self
    {
        $this->kstbm = $kstbm;

        return $this;
    }

    public function getKbetr(): ?string
    {
        return $this->kbetr;
    }

    public function setKbetr(?string $kbetr): self
    {
        $this->kbetr = $kbetr;

        return $this;
    }

    public function getKonwa(): ?string
    {
        return $this->konwa;
    }

    public function setKonwa(?string $konwa): self
    {
        $this->konwa = $konwa;

        return $this;
    }

    public function getKpein(): ?int
    {
        return $this->kpein;
    }

    public function setKpein(?int $kpein): self
    {
        $this->kpein = $kpein;

        return $this;
    }

    public function getKmein(): ?string
    {
        return $this->kmein;
    }

    public function setKmein(?string $kmein): self
    {
        $this->kmein = $kmein;

        return $this;
    }

    public function getKznep(): ?int
    {
        return $this->kznep;
    }

    public function setKznep(?int $kznep): self
    {
        $this->kznep = $kznep;

        return $this;
    }

    public function getZterm(): ?int
    {
        return $this->zterm;
    }

    public function setZterm(?int $zterm): self
    {
        $this->zterm = $zterm;

        return $this;
    }

    public function getKstbm001(): ?string
    {
        return $this->kstbm001;
    }

    public function setKstbm001(?string $kstbm001): self
    {
        $this->kstbm001 = $kstbm001;

        return $this;
    }

    public function getKbetr001(): ?string
    {
        return $this->kbetr001;
    }

    public function setKbetr001(?string $kbetr001): self
    {
        $this->kbetr001 = $kbetr001;

        return $this;
    }

    public function getKstbm002(): ?string
    {
        return $this->kstbm002;
    }

    public function setKstbm002(?string $kstbm002): self
    {
        $this->kstbm002 = $kstbm002;

        return $this;
    }

    public function getKbetr002(): ?string
    {
        return $this->kbetr002;
    }

    public function setKbetr002(?string $kbetr002): self
    {
        $this->kbetr002 = $kbetr002;

        return $this;
    }

    public function getKstbm003(): ?string
    {
        return $this->kstbm003;
    }

    public function setKstbm003(?string $kstbm003): self
    {
        $this->kstbm003 = $kstbm003;

        return $this;
    }

    public function getKbetr003(): ?string
    {
        return $this->kbetr003;
    }

    public function setKbetr003(?string $kbetr003): self
    {
        $this->kbetr003 = $kbetr003;

        return $this;
    }

    public function getKstbm004(): ?string
    {
        return $this->kstbm004;
    }

    public function setKstbm004(?string $kstbm004): self
    {
        $this->kstbm004 = $kstbm004;

        return $this;
    }

    public function getKbetr004(): ?string
    {
        return $this->kbetr004;
    }

    public function setKbetr004(?string $kbetr004): self
    {
        $this->kbetr004 = $kbetr004;

        return $this;
    }

    public function getKstbm005(): ?string
    {
        return $this->kstbm005;
    }

    public function setKstbm005(?string $kstbm005): self
    {
        $this->kstbm005 = $kstbm005;

        return $this;
    }

    public function getKbetr005(): ?string
    {
        return $this->kbetr005;
    }

    public function setKbetr005(?string $kbetr005): self
    {
        $this->kbetr005 = $kbetr005;

        return $this;
    }


}
