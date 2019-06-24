<?
$client = new SoapClient('http://tc.geeksforless.net/~user7/soap/soapServer/?WSDL', array('cache_wsdl' => WSDL_CACHE_NONE));
$error = "";
    $method = $_POST['method'];
    $param = $_POST['name'];
    $year = $_POST['year'];
    $result = $client->__call('searchAuto', Array('name'=>$method,'param'=>$param,'year'=>$year));
    $val = $result->item;
    if(0 != sizeof($val))
    {
        return require('../view/searchcars_view.php');
    }else{
        $error = 'car not found';
        return require('../view/error_view.php');
    }
    
