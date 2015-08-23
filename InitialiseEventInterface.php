<?php
/**
 * Initialise Event Interface
 *
 * @package    Event
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2014 Amy Stephen. All rights reserved.
 */
namespace CommonApi\Event;

/**
 * Initialise Event Interface
 *
 * @author     Amy Stephen
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2014 Amy Stephen. All rights reserved.
 * @since      1.0
 */
interface InitialiseEventInterface
{
    /**
     * Pre-initialise row processing
     *
     * @return  $this
     * @since   1.0.0
     */
    public function onBeforeInitialise();

    /**
     * Post-initialise row processing
     *
     * @return  $this
     * @since   1.0.0
     */
    public function onAfterInitialise();
}
