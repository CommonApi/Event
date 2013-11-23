<?php
/**
 * System Event Interface
 *
 * @package    Event
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2013 Common Api. All rights reserved.
 */
namespace Api\Event;

/**
 * System Event Interface
 *
 * @author     Amy Stephen
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2013 Common Api. All rights reserved.
 * @since      1.0
 */
interface SystemInterface
{
    /**
     * After Initialise Processing
     *
     * @return  $this
     * @since   1.0
     */
    public function onAfterInitialise();

    /**
     * After Route Processing
     *
     * @return  $this
     * @since   1.0
     */
    public function onAfterRoute();

    /**
     * After Authorise Processing
     *
     * @return  $this
     * @since   1.0
     */
    public function onAfterAuthorise();

    /**
     * After Resource Processing
     *
     * @return  $this
     * @since   1.0
     */
    public function onAfterResource();

    /**
     * After Execute Processing
     *
     * @return  $this
     * @since   1.0
     */
    public function onAfterExecute();
}