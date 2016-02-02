<?php
namespace Craft;

class PeriodPlugin extends BasePlugin
{
    public function getName()
    {
        return 'Period';
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
        return 'https://github.com/carlcs/craft-period';
    }

    public function getDocumentationUrl()
    {
        return 'https://github.com/carlcs/craft-period';
    }

    public function getReleaseFeedUrl()
    {
        return 'https://github.com/carlcs/craft-period/raw/master/releases.json';
    }

    public function addTwigExtension()
    {
        Craft::import('plugins.period.twigextensions.PeriodTwigExtension');
        return new PeriodTwigExtension();
    }
}
