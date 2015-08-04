<?php

class Kullanici extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var string
     */
    public $isim;

    /**
     *
     * @var string
     */
    public $soyisim;

    /**
     *
     * @var integer
     */
    public $tcno;

    /**
     *
     * @var string
     */
    public $sifre;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'core_kullanici';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return CoreKullanici[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return CoreKullanici
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
