<?php

namespace Core\CommonBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Event
 *
 * @ORM\Table(name="events")
 * @ORM\Entity(repositoryClass="Core\CommonBundle\Repository\EventRepository")
 */
class Event
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="referance", type="string", length=255)
     */
    private $referance;

    /**
     * @ORM\OneToMany(targetEntity="InputVector", mappedBy="event")
     */
    private $input_vectors;

    public function __construct()
    {
        $this->input_vectors = new ArrayCollection();
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
     *
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
     * Set referance
     *
     * @param string $referance
     *
     * @return Event
     */
    public function setReferance($referance)
    {
        $this->referance = $referance;

        return $this;
    }

    /**
     * Get referance
     *
     * @return string
     */
    public function getReferance()
    {
        return $this->referance;
    }

    /**
     * Add inputVector
     *
     * @param \Core\CommonBundle\Entity\InputVector $inputVector
     *
     * @return Event
     */
    public function addInputVector(\Core\CommonBundle\Entity\InputVector $inputVector)
    {
        $this->input_vectors[] = $inputVector;

        return $this;
    }

    /**
     * Remove inputVector
     *
     * @param \Core\CommonBundle\Entity\InputVector $inputVector
     */
    public function removeInputVector(\Core\CommonBundle\Entity\InputVector $inputVector)
    {
        $this->input_vectors->removeElement($inputVector);
    }

    /**
     * Get inputVectors
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getInputVectors()
    {
        return $this->input_vectors;
    }
}
