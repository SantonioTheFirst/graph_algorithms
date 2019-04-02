<?php

namespace SantonioTheFirst\Graph;
class Graph
{

    /** @var array */
    private $edges;

    /**
     * Graph constructor.
     */
    public function __construct()
    {
        $this->edges = [];
    }

    /**
     * @param string $node
     */
    public function addNode(string $node) : void
    {

        $this->edges[$node] = [];

    }

    /**
     * @param int $weight
     * @param string $node1
     * @param string $node2
     */
    public function addEdge(int $weight, string $node1, string $node2) : void
    {

        $this->edges[$node1][$node2] = $weight;
        $this->edges[$node2][$node1] = $weight;

    }

    /**
     * @return iterable
     */
    public function getNodes() : iterable
    {

        foreach ($this->edges as $node => $edgesTo) {

            yield $node => $edgesTo;
            
        }

    }

    /**
     * @param $node1
     * @return iterable
     */
    public function getEdges($node1) : iterable
    {

        foreach ($this->edges[$node1] as $node2 => $weight) {

            yield $node2 => $weight;

        }
        
    }

}