<?php
/**
 * Display Event Interface
 *
 * @package    Event
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2014 Amy Stephen. All rights reserved.
 */
namespace CommonApi\Event;

/**
 * Display Event Interface
 *
 * @author     Amy Stephen
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2014 Amy Stephen. All rights reserved.
 * @since      1.0
 */
interface DisplayEventInterface
{
    /**
     * Before any parsing or rendering, after Execute
     *
     * @return  $this
     * @since   1.0.0
     */
    public function onBeforeRender();

    /**
     * Before parsing of rendered_page to extract tokens for rendering
     *  This is a recursive process - parse - render - parse - render - until no tokens found
     *  token_objects exclude_tokens contains values that are not processed during this parsing
     *
     * @return  $this
     * @since   1.0.0
     */
    public function onBeforeParse();

    /**
     * After the Body of the document has been processed for tokens and before the Head is rendered
     *
     * @return  $this
     * @since   1.0.0
     */
    public function onBeforeParseHead();

    /**
     * After parsing for tokens (recursive), parameters->tokens contains parsed results
     *
     * @return  $this
     * @since   1.0.0
     */
    public function onAfterParse();

    /**
     * Before Theme is Rendered
     *
     * @return  $this
     * @since   1.0.0
     */
    public function onBeforeRenderTheme();

    /**
     * After the Theme has been rendered but before it has been inserted into the rendered_page
     *
     * @return  $this
     * @since   1.0.0
     */
    public function onAfterRenderTheme();

    /**
     * Before Page View is Rendered
     *
     * @return  $this
     * @since   1.0.0
     */
    public function onBeforeRenderPage();

    /**
     * After the Page has been rendered but before it has been inserted into the rendered_page
     *
     * @return  $this
     * @since   1.0.0
     */
    public function onAfterRenderPage();

    /**
     * Before Template View is Rendered
     *
     * @return  $this
     * @since   1.0.0
     */
    public function onBeforeRenderTemplate();

    /**
     * Prepare Data for Injecting into Template
     *
     * @return  $this
     * @since   1.0.0
     */
    public function onGetTemplateData();

    /**
     * During Template View rendering, before the rendering of the Head
     *
     * @return  $this
     * @since   1.0.0
     */
    public function onBeforeRenderTemplateHead();

    /**
     * During Template View rendering for each item
     *
     * @return  $this
     * @since   1.0.0
     */
    public function onBeforeRenderTemplateItem();

    /**
     * During Template View rendering, before the rendering of the Footer
     *
     * @return  $this
     * @since   1.0.0
     */
    public function onBeforeRenderTemplateFooter();

    /**
     * After the Template/Wrap View has been rendered but before it has been inserted into the rendered_page
     *
     * @return  $this
     * @since   1.0.0
     */
    public function onAfterRenderTemplate();

    /**
     * Before Wrap View is Rendered
     *
     * @return  $this
     * @since   1.0.0
     */
    public function onBeforeRenderWrap();

    /**
     * After the Wrap has been rendered but before it has been inserted into the rendered_page
     *
     * @return  $this
     * @since   1.0.0
     */
    public function onAfterRenderWrap();

    /**
     * On after rendering the entire document
     *
     * @return  $this
     * @since   1.0.0
     */
    public function onAfterRender();
}
