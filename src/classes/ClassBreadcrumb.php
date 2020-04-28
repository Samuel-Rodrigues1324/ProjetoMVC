<?php

namespace Src\Classes;

class ClassBreadcrumb{

    use \Src\Traits\TraitUrlParser;

    #cria os Bradcrumbs do site
    public function addBrreadcrumb(){

        $contador=count($this->parseUrl());
        
        $ArrayLink[0]="";
        echo "<a href=".DIRPAGE.">home</a> > ";
        for($i=0;$i<$contador;$i++){
            $ArrayLink[0]=$this->parseUrl()[$i]."/";
            echo "<a href=".DIRPAGE.">".$this->parseUrl()[$i]."</a>";

            if($i<$contador-1){
                echo " > ";
            }
        }

    }

}

?>