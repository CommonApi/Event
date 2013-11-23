<?php
/**
 * Read Event Interface
 *
 * @package    Event
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2013 Common Api. All rights reserved.
 */
namespace Api\Event;

/**
 * Read Event Interface
 *
 * @author     Amy Stephen
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2013 Common Api. All rights reserved.
 * @since      1.0
 */
interface ReadInterface
{
    /**
     * Pre-read processing
     *
     * @return  $this
     * @since   1.0
     */
    public function onBeforeRead();

    /**
     * Post-read processing - one row at a time
     *
     * @return  $this
     * @since   1.0
     */
    public function onAfterRead();

    /**
     * Post-read processing - all rows at one time from query_results
     *
     * @return  $this
     * @since   1.0
     */
    public function onAfterReadall();
}
