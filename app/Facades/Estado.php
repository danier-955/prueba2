<?php

namespace App\Facades;

class Estado
{
    /**
     * Constantes
     *
     * @var constantes
     */
    const ACTIVO = '1';
    const INACTIVO = '0';

    /**
     * Devuelve el estado activo.
     *
     * @return string
     */
    public function activo()
    {
    	return self::ACTIVO;
    }

    /**
     * Devuelve el estado inactivo.
     *
     * @return string
     */
    public function inactivo()
    {
    	return self::INACTIVO;
    }

    /**
     * Devuelve los valores de los estados del usuario.
     *
     * @return array
     */
    public function indexados()
    {
    	return [
    		self::INACTIVO, self::ACTIVO,
    	];
    }

    /**
     * Devuelve los valores de los estados del usuario con su etiqueta.
     *
     * @return array
     */
    public function asociativos()
    {
    	return [
    		['id' => self::INACTIVO, 'texto' => 'Inactivo'],
            ['id' => self::ACTIVO, 'texto' => 'Activo'],
    	];
    }

    /**
     * Devuelve el nombre del primer estado encontrado.
     *
     * @return array
     */
    public function find($value)
    {
        $estados = $this->asociativos();

        return array_first($estados, function ($estado) use ($value) {
            return $estado['id'] === (string) $value;
        });
    }

    /**
     * Devuelve el color del estado.
     *
     * @return array
     */
    public function getColor($value)
    {
        if ($this->activo() === $value) {
            return 'bg-success text-white';
        }

        return 'bg-danger text-white';
    }

}
