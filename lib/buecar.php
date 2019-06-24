<?
$client = new SoapClient('http://tc.geeksforless.net/~user7/soap/soapServer/?WSDL', array('cache_wsdl' => WSDL_CACHE_NONE));
$error = "";
$res = '';
$id = $_POST['id'];
$order = $_POST['order'];
$sname = $_POST['sname'];
$lname = $_POST['lname'];
if(strlen($sname) != 0 && strlen($lname) != 0){
$result = $client->__call('bueAuto', array('idcar'=>$id, 'fname'=>$sname,'lname'=>$lname,'order'=>$order));
        if($result->item == 'ok'){
            $res = $sname." ".$lname." спасибо за покупку";
            return require('../view/buecar_view.php');
        }
}else{
    $error ='поля не заполнены';
    return require('../view/error_view.php');

}