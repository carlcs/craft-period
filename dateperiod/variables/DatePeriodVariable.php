<?php
namespace Craft;

class DatePeriodVariable
{
        public function getPeriod($startDate, $endDate, $dateInterval = '1 day')
        {
                $dateInterval = DateInterval::createFromDateString($dateInterval);
                $datePeriod = new \DatePeriod($startDate, $dateInterval, $endDate);

                return $datePeriod;
        }
}
