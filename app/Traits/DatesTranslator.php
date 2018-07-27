<?php

namespace App\Traits;

use Jenssegers\Date\Date;

trait DatesTranslator
{
	/**
     * Traduce el campo fecha created_at al español.
     *
     * @var date
     * @return Date
     */
	public function getCreatedAttribute($date)
	{
		return new Date($date);
	}

	/**
     * Traduce el campo fecha updated_at al español.
     *
     * @var date
     * @return Date
     */
	public function getUpdatedAtAttribute($date)
	{
		return new Date($date);
	}

	/**
     * Traduce el campo fecha fech_ingr al español.
     *
     * @var date
     * @return Date
     */
	public function getFechIngrAttribute($date)
	{
		return new Date($date);
	}

}
