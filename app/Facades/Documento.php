<?php

namespace App\Facades;

class Documento
{
    /**
     * Devuelve los tipos de documentos.
     *
     * @return array
     */
    public function tipos()
    {
    	return [
    		'R.C.', 'T.I.', 'C.C.',
    	];
    }

}
