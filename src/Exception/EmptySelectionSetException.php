<?php

namespace GraphQL\Exception;

/**
 * Class EmptySelectionSetException
 *
 * @package GraphQL\Exception
 */
class EmptySelectionSetException extends \UnderflowException
{
    public function __construct($objectName)
    {
        parent::__construct("Query object of type \"$objectName\" has an empty selection set");
    }
}