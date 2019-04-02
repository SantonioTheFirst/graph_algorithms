<?php

namespace SantonioTheFirst\Graph;
class Graph
{

    /** @var array */
    private $edges;

    public function __construct()
    {
        $this->edges = [];
    }

    public function addNode(string $node) : void
    {

        $this->edges[$node] = [];

    }

    public function addEdge(string $weight, string $node1, string $node2) : void
    {

        $this->edges[$node1][$node2] = $weight;

    }

    public function getNodes() : iterable
    {

        foreach ($this->edges as $node => $edgesTo) {

            yield $node;
            
        }

    }
    
    public function getEdges($node1) : iterable
    {

        foreach ($this->edges[$node1] as $node2 => $weight) {

            yield $node2 => $weight;

        }
        
    }


}