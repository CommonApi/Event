<?php
/**
 * System Event Interface
 *
 * @package    Event
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2014-2015 Amy Stephen. All rights reserved.
 */
namespace CommonApi\Event;

/**
 * System Event Interface
 *
 * @author     Amy Stephen
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2014-2015 Amy Stephen. All rights reserved.
 * @since      1.0
 */
interface SystemEventInterface
{
    /**
     * After Initialise Processing
     *
     * @return  $this
     * @since   1.0.0
     */
    public function onAfterStart();

    /**
     * Before Route Processing
     *
     * @return  $this
     * @since   1.0.0
     */
    public function onBeforeRoute();

    /**
     * After Route Processing
     *
     * @return  $this
     * @since   1.0.0
     */
    public function onAfterRoute();

    /**
     * Before Dispatcher Processing
     *
     * @return  $this
     * @since   1.0.0
     */
    public function onBeforeDispatcher();

    /**
     * After Dispatcher Processing
     *
     * @return  $this
     * @since   1.0.0
     */
    public function onAfterDispatcher();

    /**
     * Before Execute Processing
     *
     * @return  $this
     * @since   1.0.0
     */
    public function onBeforeExecute();

    /**
     * After Execute Processing
     *
     * @return  $this
     * @since   1.0.0
     */
    public function onAfterExecute();

    /**
     * Before Response Processing
     *
     * @return  $this
     * @since   1.0.0
     */
    public function onBeforeResponse();

    /**
     * After Response Processing
     *
     * @return  $this
     * @since   1.0.0
     */
    public function onAfterResponse();
}
