<?php
    $clave=$_POST['clave'];
    $webservice="https://www.dafi.com.mx/ConsultaRemota/Service.asmx?wsdl";
    $parametros=array();
    $parametros['claveFideicomiso']=$clave;
    $WS=new SoapClient($webservice,$parametros); 
    $res=$WS->ObtenerEstados($parametros);
    $resultado=$res->ObtenerEstadosResult;
    //var_dump($resultado);
    foreach ($resultado->{'Estado'} as $item) {
        echo $item->{'ClaveEstado'}.'-';
        echo $item->{'Nombre'}.'<br>';
    }

?>