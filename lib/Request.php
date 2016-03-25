<?php
/**
 * Created by PhpStorm.
 * User: VAHTANG
 * Date: 22.03.2016
 * Time: 21:56
 */


class Request
{
    private $DataExternalArticle= array();
    private $DataInstantArticle= array();
    private $DataNewsArticle= array();
    private $DataDir= ROOT_DIR.DS.'data';

    public function __construct()
    {
        $this->DataExternalArticle=$this->GetFileCvs('ExternalArticle.csv','ExternalArticle','date','autor','topic','url','text');
        $this->DataInstantArticle=$this->GetFileCvs('InstantArticle.csv','InstantArticle','date','autor','text');
        $this->DataNewsArticle=$this->GetFileCvs('NewsArticle.csv','NewsArticle','date','autor','topic','text');

    }

    public function __get($name)
    {
        // TODO: Implement __get() method.
        return $this -> $name;
    }
    public function __set($name, $value)
    {
        // TODO: Implement __set() method.

        $this -> data [$name]= $value;

    }

    private function GetFileCvs($FileName,$type,$name1='-',$name2='-',$name3='-',$name4='-',$name5='-')
    {

        $DataArticle = array();
        $handle = fopen($this->DataDir . DS . $FileName, "r");


        echo $this->DataDir . DS . $FileName.'112 <br>';
        while (!feof($handle)) {

            $data = fgetcsv($handle, 10000, ';');

            $DataArticle[] = array(
                'type' => $type,
                $name1 => $data[1].'',
                $name2 => $data[2].'',
                $name3 => $data[3].'',
                $name4 => $data[4].'',
                $name5 => $data[5].'',
            );

        }
        var_dump($DataArticle);
        return $DataArticle;
    }

}