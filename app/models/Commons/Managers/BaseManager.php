<?php

namespace Commons\Managers;

/**
 * BaseManager No se usa directamente, al igual BaseRepo
 */
abstract class BaseManager
{

    protected $entity;
    protected $data;
    protected $errors;

    public function __construct($entity,$data)
    {
        $this->entity = $entity;
        $this->data = array_only($data,array_keys($this->getRules()));
        //ESto es para validar la data directamente desde nuestras reglas.
    }

    abstract public function getRules();
    /**
     * Aqui es donde se va hacer el proceso de validacion que se tienen
     * en el controller
    */
    public function isValid()
    {
        $rules = $this->getRules();

        $validation = \Validator::make($this->data,$rules);

        $isValid = $validation->passes();
        $this->errors = $validation->messages();

        return $isValid; //Boolean
    }
    /**
     * Ademas de que valide los datos pueda guardarlos tambien
    */
    public function getErrors()
    {
        return $this->errors;
    }


    public function save()
    {
        if(!$this->isValid())
            return FALSE;

        $this->entity->fill($this->data);//Asigna todos los datos, function fill de eloquent y que salve
        $this->entity->save();

        return TRUE;
    }

}