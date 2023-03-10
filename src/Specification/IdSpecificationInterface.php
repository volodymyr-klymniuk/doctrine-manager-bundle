<?php

namespace VolodymyrKlymniuk\DoctrineManagerBundle\Specification;

interface IdSpecificationInterface extends BaseSpecInterface
{
    /**
     * @param string $id
     *
     * @return IdSpecificationInterface
     */
    public function applyId(string $id): IdSpecificationInterface;
}