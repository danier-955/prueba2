<?php

namespace App\Facades;

class TipoNomina
{
    /**
     * Constantes
     *
     * @var constantes
     */
    const MENSUAL = '0';
    const QUINCENAL = '1';
    const UNICO = '2';
    const QUINCENA_1 = '1';
    const QUINCENA_2 = '2';

    /**
     * Devuelve el tipo de pago de nomina mensual.
     *
     * @return string
     */
    public function mensual()
    {
    	return self::MENSUAL;
    }

    /**
     * Devuelve el tipo de pago de nomina quincenal.
     *
     * @return string
     */
    public function quincenal()
    {
    	return self::QUINCENAL;
    }

    /**
     * Devuelve el tipo de pago de nomina unico.
     *
     * @return string
     */
    public function unico()
    {
        return self::UNICO;
    }

    /**
     * Devuelve la primera quincena.
     *
     * @return string
     */
    public function primeraQuincena()
    {
        return self::QUINCENA_1;
    }

    /**
     * Devuelve la segunda quincena.
     *
     * @return string
     */
    public function segundaQuincena()
    {
        return self::QUINCENA_2;
    }

    /**
     * Devuelve los valores de los tipos de pago de  nominas.
     *
     * @return array
     */
    public function indexados()
    {
    	return [
    		self::MENSUAL, self::QUINCENAL, self::UNICO,
    	];
    }

    /**
     * Devuelve los valores de los tipos de pago de  nominas con su etiqueta.
     *
     * @return array
     */
    public function asociativos()
    {
    	return [
    		['id' => self::MENSUAL, 'texto' => 'Mensual'],
            ['id' => self::QUINCENAL, 'texto' => 'Quincenal'],
            ['id' => self::UNICO, 'texto' => 'Único'],
    	];
    }

}
