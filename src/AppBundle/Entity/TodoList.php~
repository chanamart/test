<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity()
 * @ORM\Table(name="todo_list")
 */
class TodoList
{
    /**
     * @var string
     * @ORM\Column(type="string", name="title", length=255)
     */
    private $title;

    /**
     * @var bool
     * @ORM\Column(type="boolean", name="done")
     */
    private $done = false;

    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return TodoList
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param bool $done
     *
     * @return TodoList
     */
    public function setDone($done)
    {
        $this->done = $done;

        return $this;
    }

    /**
     * @return bool
     */
    public function getDone()
    {
        return $this->done;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}
