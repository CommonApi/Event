<?php
/**
 * Event Dispatcher Interface
 *
 * @package    Event
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2014 Amy Stephen. All rights reserved.
 */
namespace CommonApi\Event;

/**
 * Event Dispatcher Interface
 *
 * @author     Amy Stephen
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2014 Amy Stephen. All rights reserved.
 * @since      1.0
 */
interface EventDispatcherInterface
{
    /**
     * Event Dispatcher triggers Listeners
     *
     * @param   EventInterface $event
     * @param   array          $listeners - array of callable functions
     * @param   callable       $debug_callback
     *
     * @return  array
     * @since   1.0.0
     */
    public function triggerListeners(
        EventInterface $event,
        array $listeners = array(),
        callable $debug_callback = null
    );
}

