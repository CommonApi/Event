<?php
/**
 * System Event Interface
 *
 * @package    Event
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2014 Amy Stephen. All rights reserved.
 */
namespace CommonApi\Event;

/**
 * System Event Interface
 *
 * @author     Amy Stephen
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2014 Amy Stephen. All rights reserved.
 * @since      1.0
 */
interface SystemInterface
{
    /**
     * After Initialise Processing
     *
     * @return  $this
     * @since   0.1
     */
    public function onAfterInitialise();

    /**
     * After Route Processing
     *
     * @return  $this
     * @since   0.1
     */
    public function onAfterRoute();

    /**
     * After Authorise Processing
     *
     * @return  $this
     * @since   0.1
     */
    public function onAfterAuthorise();

    /**
     * After Resource Processing
     *
     * @return  $this
     * @since   0.1
     */
    public function onBeforeExecute();

    /**
     * After Execute Processing
     *
     * @return  $this
     * @since   0.1
     */
    public function onAfterExecute();
}
