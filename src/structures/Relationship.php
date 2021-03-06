<?php

namespace Bolt\structures;

/**
 * Class Relationship
 * Immutable
 *
 * @author Michal Stefanak
 * @link https://github.com/stefanak-michal/Bolt
 * @package Bolt\structures
 */
class Relationship
{
    /**
     * @var int
     */
    private $id;
    /**
     * @var int
     */
    private $startNodeId;
    /**
     * @var int
     */
    private $endNodeId;
    /**
     * @var string
     */
    private $type;
    /**
     * @var array
     */
    private $properties;

    /**
     * Relationship constructor.
     * @param int $id
     * @param int $startNodeId
     * @param int $endNodeId
     * @param string $type
     * @param array $properties
     */
    public function __construct(int $id, int $startNodeId, int $endNodeId, string $type, array $properties)
    {
        $this->id = $id;
        $this->startNodeId = $startNodeId;
        $this->endNodeId = $endNodeId;
        $this->type = $type;
        $this->properties = $properties;
    }

    /**
     * @return int
     */
    public function id(): int
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function startNodeId(): int
    {
        return $this->startNodeId;
    }

    /**
     * @return int
     */
    public function endNodeId(): int
    {
        return $this->endNodeId;
    }

    /**
     * @return string
     */
    public function type(): string
    {
        return $this->type;
    }

    /**
     * @return array
     */
    public function properties(): array
    {
        return $this->properties;
    }
}