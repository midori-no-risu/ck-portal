<?php

namespace Geekhub\PointBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Work
 *
 * @ORM\Table(name="work")
 * @ORM\Entity
 */
class Work
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
     *
     * @ORM\Column(name="job", type="string", length=255)
     */
    private $job;

    /**
     * @var integer
     *
     * @ORM\Column(name="employee", type="integer")
     */
    private $employee;

    /**
     * @var integer
     *
     * @ORM\Column(name="day", type="integer")
     */
    private $day;

    /**
     * @var integer
     *
     * @ORM\Column(name="dream_id", type="integer")
     */
    private $dream_id;


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
     * Set job
     *
     * @param string $job
     * @return Work
     */
    public function setJob($job)
    {
        $this->job = $job;
    
        return $this;
    }

    /**
     * Get job
     *
     * @return string 
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * Set employee
     *
     * @param integer $employee
     * @return Work
     */
    public function setEmployee($employee)
    {
        $this->employee = $employee;
    
        return $this;
    }

    /**
     * Get employee
     *
     * @return integer 
     */
    public function getEmployee()
    {
        return $this->employee;
    }

    /**
     * Set day
     *
     * @param integer $day
     * @return Work
     */
    public function setDay($day)
    {
        $this->day = $day;
    
        return $this;
    }

    /**
     * Get day
     *
     * @return integer 
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * Set dream_id
     *
     * @param integer $dreamId
     * @return Work
     */
    public function setDreamId($dreamId)
    {
        $this->dream_id = $dreamId;
    
        return $this;
    }

    /**
     * Get dream_id
     *
     * @return integer 
     */
    public function getDreamId()
    {
        return $this->dream_id;
    }
}