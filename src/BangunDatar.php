<?php 
/**
 * summary
 */
abstract class BangunDatar
{
    protected $hasil;
    protected $satuan;
    public $error = null;

    public function getHasil()
    {
    	return $this->hasil;
    }

    abstract public function submit();
}