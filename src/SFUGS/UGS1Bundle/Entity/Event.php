<?php

namespace SFUGS\UGS1Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SFUGS\UGS1Bundle\Entity\Event
 */
class Event
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $name
     */
    private $name;

    /**
     * @var string $description
     */
    private $description;

    /**
     * @var \DateTime $date
     */
    private $date;

    /**
     * @var boolean $enabled
     */
    private $enabled;

    /**
     * @var SFUGS\UGS1Bundle\Entity\Location
     */
    private $location;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $genres;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->genres = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
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
     * Set name
     *
     * @param string $name
     * @return Event
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Event
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Event
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     * @return Event
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
    
        return $this;
    }

    /**
     * Get enabled
     *
     * @return boolean 
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set location
     *
     * @param SFUGS\UGS1Bundle\Entity\Location $location
     * @return Event
     */
    public function setLocation(\SFUGS\UGS1Bundle\Entity\Location $location = null)
    {
        $this->location = $location;
    
        return $this;
    }

    /**
     * Get location
     *
     * @return SFUGS\UGS1Bundle\Entity\Location 
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Add genres
     *
     * @param SFUGS\UGS1Bundle\Entity\Genre $genres
     * @return Event
     */
    public function addGenre(\SFUGS\UGS1Bundle\Entity\Genre $genres)
    {
        $this->genres[] = $genres;
    
        return $this;
    }

    /**
     * Remove genres
     *
     * @param SFUGS\UGS1Bundle\Entity\Genre $genres
     */
    public function removeGenre(\SFUGS\UGS1Bundle\Entity\Genre $genres)
    {
        $this->genres->removeElement($genres);
    }

    /**
     * Get genres
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getGenres()
    {
        return $this->genres;
    }

    public function __toString()
    {
        return $this->name;
    }
}
