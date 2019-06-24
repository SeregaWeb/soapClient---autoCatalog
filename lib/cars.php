<?
    $client = new SoapClient('http://tc.geeksforless.net/~user7/soap/soapServer/?WSDL', array('cache_wsdl' => WSDL_CACHE_NONE));
    $error = "";
    $result = $client->allAuto();
    $val = $result->item;
    if(0 != sizeof($val))
    {
        return require('../view/cars_view.php');
    }else{
       $error = 'car not found';
       return require('../view/error_view.php');

    }
?>