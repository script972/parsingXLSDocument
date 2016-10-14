<?php

/**
 * Created by PhpStorm.
 * User: script972
 * Date: 12.10.2016
 * Time: 20:15
 */
class Controller extends AController
{

    public function execute($task) {
        if($task) {
            if(method_exists($this,$task)) {
                return $this->$task();
            }
            else {
                return FALSE;
            }
        }
    }

    public function export() {
        if(!empty($_FILES['xls']['tmp_name'])) {
            $file = $this->uploadFile($_FILES);
        }
        $this->xlsToArr($file);
    }
    public  function getPhpExcel($file){
        return PHPExcel_IOFactory::load($file);
    }
    
    public function xlsToArr($file){
        $this->xls=$this->getPhpExcel($file);
        $this->xls->setActiveSheetIndex(0);
        $sheet=$this->xls->getActiveSheet();
        $rowIterator= $sheet->getRowIterator();
        $arr=array();
        foreach ($rowIterator as $row){
            if($row->getRowIndex() != 1) {
                $cellIterator = $row->getCellIterator();
                foreach($cellIterator as $cell) {
                    $cellPath = $cell->getColumn();
                    if(isset($this->config->cells[$cellPath]) ){
                        if($cellPath=='AN' and $cell->getCalculatedValue()!=NULL)
                        {
                            $img=$this->parseImg($cell->getCalculatedValue());
                            $arr[$row->getRowIndex()][$this->config->cells[$cellPath]]=$img;
                            continue;
                        }
                        $arr[$row->getRowIndex()][$this->config->cells[$cellPath]]=$cell->getCalculatedValue();
                    }
                }
            }
        }
        $view=new View();
        $view->out($arr);
    }
    public function parseImg($from){
        $config=new Config();
        ini_set("max_execution_time", "1200");
        $url= $from;
        $filename = (($pos = strrpos($url, '/')) !== false)?substr($url, $pos + 1):$url;
        $pas=$config->getDirImg().$filename;
        $fileLink= $pas;
        if(!@copy($from,$fileLink))
        {
            $view = new View();
            $view->error("File can not download ");
        }
        return $pas;
        }




    protected function uploadFile($files) {
        $config=new Config();
        $uploaddir = $config->getDirFile();
        echo $uploaddir;
        $uploadfile = $uploaddir .'/'.(int)microtime(true).'.xls';
        if (move_uploaded_file($files['xls']['tmp_name'], $uploadfile)) {
            return $uploadfile;
        }
        $view = new View();
        $view->error("File con not upload");
        return FALSE;
    }
}
