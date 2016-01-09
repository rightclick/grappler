<?php
/**
 * Created by PhpStorm.
 * User: jwalters
 * Date: 1/8/2016
 * Time: 3:49 PM
 */

// src/AppBundle/Entity/Product.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="roster")
 */
class Roster
{
    /**
     * @ORM\Column(name="id",type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
}
