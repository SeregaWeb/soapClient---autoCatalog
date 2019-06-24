<?

$client = new SoapClient('http://tc.geeksforless.net/~user7/soap/soapServer/?WSDL', array('cache_wsdl' => WSDL_CACHE_NONE));
    $error = "";    
    $id = $_POST['id'];
    $result = $client->__call('oneAuto', Array('id'=>$id));
    // echo '<pre>'.print_r($result->item->item,true).'</pre>';
    $val = $result->item->item;
    if(0 != sizeof($val))
    {
        return require('../view/car_view.php');
    }else{
        $error ='car not found';
        return require('../view/error_view.php');

    }
?>
