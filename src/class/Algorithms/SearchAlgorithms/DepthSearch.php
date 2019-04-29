<?php

namespace SantonioTheFirst\Algorithms\SearchAlgorithms;

use SantonioTheFirst\Graph\Graph;
use SantonioTheFirst\Structures\Stack;

class DepthSearch
{

    /** @var Graph */
    private $graph;

    /**
     * Walk constructor.
     * @param Graph $graph
     */
    public function __construct(Graph $graph)
    {

        $this->graph = $graph;

//        $path = [];

    }

    /**
     * @param string $node
     * @return array
     */
    public function Depth(string $node) : array
    {

        $path = [];

        $stack = new Stack();

        $stack->put($node);

        while(!$stack->isEmpty())
        {

            $currentElement = $stack->get();

            $path[$currentElement] = true;

            foreach ($this->graph->getEdges($currentElement) as $node => $weight)
            {

               if(!$path[$node])

                   if(!$stack->contains($node))

                       $stack->put($node);
            }

        }

        return $path;

    }
}