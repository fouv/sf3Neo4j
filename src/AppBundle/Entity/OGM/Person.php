<?php
/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 04/07/17
 * Time: 16:22
 */

namespace AppBundle\Entity\OGM;

use GraphAware\Neo4j\OGM\Annotations as OGM;

/**
 * Class User
 * @package AppBundle\Entity\OGM
 * @OGM\Node(label="Person")
 */
class Person
{

    /**
     * @var int
     * @OGM\GraphId()
     */
    protected $id;

    /**
     * @var string
     * @OGM\Property(type="string")
     */
    private $firstName;

    /**
     * @var string
     * @OGM\Property(type="string")
     */
    private $lastName;

    /**
     * @var string
     * @OGM\Property(type="string")
     */
    private $email;

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }
}