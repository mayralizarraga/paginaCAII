<?php

namespace CAII\MiembroBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Gedmo\Translatable\Translatable;


/**
 * Ocupacion
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Ocupacion implements Translatable
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @Gedmo\Translatable
     * @ORM\Column(name="descripcion", type="string", length=80)
     */
    private $descripcion;


    /**
     * @var integer
     *
     * @ORM\Column(name="prioridad", type="integer", length=11, nullable=true)
     * 
     * 
     */
    private $prioridad;


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
     * Set descripcion
     *
     * @param string $descripcion
     * @return Ocupacion
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    
       
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }


    /**
     * Set prioridad
     *
     * @param integer $prioridad
     * @return Ocupacion
     */
    public function setPrioridad($prioridad)
    {
        $this->prioridad = $prioridad;
    
        return $this;
    }

    /**
     * Get prioridad
     *
     * @return integer 
     */
    public function getPrioridad()
    {
        return $this->prioridad;
    }


    public function __toString()
    {
        return $this->getDescripcion();
    }

    /**
    * @Gedmo\Locale
    */
    private $locale;
    public function setTranslatableLocale($locale)
    {
        $this->locale = $locale;
    }

}
