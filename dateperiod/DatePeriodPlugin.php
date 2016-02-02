<?php
namespace Craft;

class DatePeriodPlugin extends BasePlugin
{
    public function getName()
    {
        return 'Date Period';
    }

    public function getVersion()
    {
        return '1.0.1';
    }

    public function getSchemaVersion()
    {
        return '1.0';
    }

    public function getDeveloper()
    {
        return 'carlcs';
    }

    public function getDeveloperUrl()
    {
        return 'https://github.com/carlcs/craft-dateperiod';
    }

    public function getDocumentationUrl()
    {
        return 'https://github.com/carlcs/craft-dateperiod';
    }

    public function getReleaseFeedUrl()
    {
        return 'https://github.com/carlcs/craft-dateperiod/raw/master/releases.json';
    }

    public function addTwigExtension()
    {
        Craft::import('plugins.dateperiod.twigextensions.DatePeriodTwigExtension');
        return new DatePeriodTwigExtension();
    }
}
