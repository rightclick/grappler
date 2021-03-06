<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="event")
 */
class Event
{
    /**
     * @ORM\Column(name="id",type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(name="title",type="string", length=100)
     */
    protected $title;

    /**
    * @ORM\Column(name="description",type="string", length=200)
    */
    protected $description;

    /**
     * @ORM\Column(name="start_date",type="datetime")
     */
    protected $startDate;

    /**
     * @ORM\Column(name="end_date",type="datetime")
     */
    protected $endDate;

}
