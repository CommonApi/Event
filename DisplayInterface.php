<?php
/**
 * Display Event Interface
 *
 * @package    Event
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2013 Common Api. All rights reserved.
 */
namespace CommonApi\Event;

/**
 * Display Event Interface
 *
 * @author     Amy Stephen
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2013 Common Api. All rights reserved.
 * @since      1.0
 */
interface DisplayInterface
{
    /**
     * After Route and Authorisation, the Theme/Page are parsed
     *
     * @return  $this
     * @since   1.0
     */
    public function onBeforeParse();

    /**
     * After the body render is complete and before the document head rendering starts
     *
     * @return  $this
     * @since   1.0
     */
    public function onBeforeParseHead();

    /**
     * After the Read Query has executed but Before Query results are injected into the View
     *
     * @return  $this
     * @since   1.0
     */
    public function onBeforeRenderView();

    /**
     * After the View has been rendered but before the output has been passed back to the Includer
     *
     * @return  $this
     * @since   1.0
     */
    public function onAfterRenderView();

    /**
     * On after parsing and rendering is complete
     *
     * @return  $this
     * @since   1.0
     */
    public function onAfterParse();
}
