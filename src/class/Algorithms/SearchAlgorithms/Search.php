<?php

namespace SantonioTheFirst\Algorithms\SearchAlgorithms;

use SantonioTheFirst\Graph\Graph;
use SantonioTheFirst\Structures\Sequence;

class Search
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


    }

    /**
     * @param string $item
     * @param Sequence $sequence
     * @return array
     */
    public function Search(string $item, Sequence $sequence) : array
    {

        $path = [];

        $sequence->put($item);

        while(!$sequence->isEmpty())
        {

            $currentElement = $sequence->get();

            $path[$currentElement] = true;

            foreach ($this->graph->getEdges($currentElement) as $node => $weight)
            {

               if(!$path[$node])

                   if(!$sequence->contains($node))

                       $sequence->put($node);
            }

        }

        return $path;

    }
}