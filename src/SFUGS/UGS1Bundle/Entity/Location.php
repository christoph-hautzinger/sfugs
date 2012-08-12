<?php

namespace SFUGS\UGS1Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SFUGS\UGS1Bundle\Entity\Location
 */
class Location
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
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $events;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->events = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Location
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
     * Add events
     *
     * @param SFUGS\UGS1Bundle\Entity\Event $events
     * @return Location
     */
    public function addEvent(\SFUGS\UGS1Bundle\Entity\Event $events)
    {
        $this->events[] = $events;
    
        return $this;
    }

    /**
     * Remove events
     *
     * @param SFUGS\UGS1Bundle\Entity\Event $events
     */
    public function removeEvent(\SFUGS\UGS1Bundle\Entity\Event $events)
    {
        $this->events->removeElement($events);
    }

    /**
     * Get events
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getEvents()
    {
        return $this->events;
    }

    public function __toString()
    {
        return $this->name;
    }
}
