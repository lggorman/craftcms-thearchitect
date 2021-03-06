<?php
namespace Craft;

/**
 * Class TheArchitectPlugin
 *
 * @package Craft
 */
class TheArchitectPlugin extends BasePlugin
{
    /**
     * getName
     * @return null|string
     */
    public function getName()
    {
        return Craft::t('The Architect');
    }

    /**
     * getVersion
     * @return string
     */
    public function getVersion()
    {
        return '1.5.0';
    }

    /**
     * getSchemaVersion
     * @return string
     */
    public function getSchemaVersion()
    {
        return '1.3.0';
    }

    /**
     * getDeveloper
     * @return string
     */
    public function getDeveloper()
    {
        return 'Pennebaker';
    }

    /**
     * getDeveloperUrl
     * @return string
     */
    public function getDeveloperUrl()
    {
        return 'http://pennebaker.com';
    }

    /**
     * getPluginUrl
     * @return string
     */
    public function getPluginUrl()
    {
        return 'https://github.com/Pennebaker/craftcms-thearchitect';
    }

    /**
     * getReleaseFeedUrl
     * @return string
     */
	public function getReleaseFeedUrl()
	{
		return 'https://raw.githubusercontent.com/Pennebaker/craftcms-thearchitect/master/releases.json';
	}

    /**
     * getDocumentationUrl
     * @return string
     */
    public function getDocumentationUrl()
    {
        return $this->getPluginUrl() . '/wiki';
    }

    /**
     * hasCpSection
     * @return boolean
     */
	public function hasCpSection()
	{
		if (craft()->userSession->isAdmin())
		{
			return true;
		}
	}

    public function registerCpRoutes()
    {
        return array(
            'thearchitect/files' => array('action' => 'theArchitect/constructList'),
            'thearchitect/blueprint' => array('action' => 'theArchitect/blueprint'),
            'thearchitect/convert' => array('action' => 'theArchitect/convert'),
        );
    }
}
