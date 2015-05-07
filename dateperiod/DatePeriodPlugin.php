<?php
namespace Craft;

class DatePeriodPlugin extends BasePlugin
{
	function getName()
	{
		return 'Date Period';
	}

	function getVersion()
	{
		return '1.0';
	}

	function getDeveloper()
	{
		return 'carlcs';
	}

	function getDeveloperUrl()
	{
		return 'https://github.com/carlcs/craft-dateperiod';
	}

	public function addTwigExtension()
	{
		Craft::import('plugins.dateperiod.twigextensions.DatePeriodTwigExtension');
		return new DatePeriodTwigExtension();
	}
}
