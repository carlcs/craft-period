<?php
namespace Craft;

class DatePeriodTwigExtension extends \Twig_Extension
{
	/**
	 * Returns the name of the extension.
	 *
	 * @return string The extension name
	 */
	public function getName()
	{
		return 'Date Period';
	}

	/**
	 * Returns a list of functions to add to the existing list.
	 *
	 * @return array An array of filters
	 */
	public function getFunctions()
	{
		return array(
			new \Twig_SimpleFunction('datePeriod', array($this, 'datePeriodFilter')),
		);
	}

	/**
	 * Creates a DatePeriod object.
	 * It allows iteration over a set of dates and times, recurring at regular intervals, over a given period.
	 *
	 * @param DateTime $start The start date of the period
	 * @param DateTime $end The end date of the period
	 * @param DateInterval $interval The interval between recurrences within the period
	 * @return array
	 */
        public function datePeriodFilter($start, $end, $interval = '1 day')
        {
                $interval = DateInterval::createFromDateString($interval);
                $datePeriod = new \DatePeriod($start, $interval, $end);

                return $datePeriod;
        }
}
