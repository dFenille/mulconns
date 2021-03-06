<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TabCanais
 *
 * @ORM\Table(name="tab_canais", indexes={@ORM\Index(name="NonClusteredIndex-20160727-095043", columns={"canal"})})
 * @ORM\Entity
 */
class TabCanais
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idCanal", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcanal;

    /**
     * @var string
     *
     * @ORM\Column(name="canal", type="string", length=30, nullable=true)
     */
    private $canal;



    /**
     * Get idcanal
     *
     * @return integer
     */
    public function getIdcanal()
    {
        return $this->idcanal;
    }

    /**
     * Set canal
     *
     * @param string $canal
     *
     * @return TabCanais
     */
    public function setCanal($canal)
    {
        $this->canal = $canal;

        return $this;
    }

    /**
     * Get canal
     *
     * @return string
     */
    public function getCanal()
    {
        return $this->canal;
    }
}
