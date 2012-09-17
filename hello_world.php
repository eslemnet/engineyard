<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?
  require('pubnub_api/Pubnub.php');
   // require('../Pubnub.php');

    $pubnub = new Pubnub( 'pub-de45f347-3399-416c-9617-16e808d06fee', 'sub-abe0e04f-0060-11e2-ac8e-9581afc33ebf' );
    $pubnub->publish(array(
        'channel' => 'my_test_channel',
        'message' => array( 'some_text' => 'hello!' )
    ));
	
	
	## Publish Messages To a JavaScript Browser
    $pubnub = new Pubnub( 'pub-de45f347-3399-416c-9617-16e808d06fee', 'sub-abe0e04f-0060-11e2-ac8e-9581afc33ebf' );
	$pubnub->publish(array(
    'channel' => 'my_test_channel',
    'message' => array( 'some_text' => 'hello2!' )
));
	
	
	    $pubnub = new Pubnub( 'pub-de45f347-3399-416c-9617-16e808d06fee', 'sub-abe0e04f-0060-11e2-ac8e-9581afc33ebf' );
	
$pubnub->subscribe(array(
    'channel ' => 'my_channel',
    'callback' => function($message) {
        var_dump($message['my_var']); // print message
        return true;             // keep listening?
    }
));


    ?>
    
<script language="javascript">



//window.alert('sadsa');

PUBNUB.publish({
    channel : 'my_test_channel',
    message : { 'some_var' : 'what up?' }
});


</script>    
</body>
</html>