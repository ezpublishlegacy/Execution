<?php
/**
 * @copyright Copyright (C) 2005, 2006 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 * @version //autogentag//
 * @filesource
 * @package Execution
 */

/**
 * Interface for Execution callback handlers.
 *
 * This interface describes the methods that an Execution callback handler
 * should implement.
 *
 * @see ezcExecution for an example.
 *
 * @package Execution
 */
interface ezcExecutionErrorHandler
{
    /**
     * Processes an error situation
     *
     * This method is called by the ezcExecution environment whenever an error
     * situation (uncaught exception or fatal error) happens.  It accepts one
     * default parameter in case there was an uncaught exception.
     *
     * @param Exception $e 
     * @return void
     */
    static public function onError( Exception $e = NULL );
}
?>
