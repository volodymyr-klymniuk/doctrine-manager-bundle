<?php

namespace Dt\DoctrineManagerBundle\Model;

use Doctrine\ORM\Mapping as ORM;

trait PriorityEntityTrait
{
    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    private $priority = 500;

    /**
     * @param int $priority
     *
     * @return $this
     */
    public function setPriority(int $priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * @return int
     */
    public function getPriority(): int
    {
        return $this->priority;
    }
}