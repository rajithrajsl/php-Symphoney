<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SalesFigures
 *
 * @ORM\Table(name="sales_figures")
 * @ORM\Entity
 */
class SalesFigures
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
     * @ORM\Column(name="kunnr", type="integer", nullable=true)
     */
    private $kunnr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prodh_5", type="string", length=80, nullable=true)
     */
    private $prodh5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prodh", type="string", length=180, nullable=true)
     */
    private $prodh;

    /**
     * @var int|null
     *
     * @ORM\Column(name="matnr", type="integer", nullable=true)
     */
    private $matnr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="net_sales_cy", type="decimal", precision=9, scale=2, nullable=true)
     */
    private $netSalesCy;

    /**
     * @var string|null
     *
     * @ORM\Column(name="net_sales_py", type="decimal", precision=9, scale=2, nullable=true)
     */
    private $netSalesPy;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getProdh5(): ?string
    {
        return $this->prodh5;
    }

    public function setProdh5(?string $prodh5): self
    {
        $this->prodh5 = $prodh5;

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

    public function getMatnr(): ?int
    {
        return $this->matnr;
    }

    public function setMatnr(?int $matnr): self
    {
        $this->matnr = $matnr;

        return $this;
    }

    public function getNetSalesCy(): ?string
    {
        return $this->netSalesCy;
    }

    public function setNetSalesCy(?string $netSalesCy): self
    {
        $this->netSalesCy = $netSalesCy;

        return $this;
    }

    public function getNetSalesPy(): ?string
    {
        return $this->netSalesPy;
    }

    public function setNetSalesPy(?string $netSalesPy): self
    {
        $this->netSalesPy = $netSalesPy;

        return $this;
    }


}
