<?php

use NoahBuscher\Macaw\Macaw;

Macaw::get('/sf/public/index.php/xxx', function() {
  echo "成功！";
});

Macaw::get('(:all)', function($fu) {
  echo '未匹配到路由<br>'.$fu;
});

Macaw::get('/sf/public/index.php/home', 'HomeController@home');
Macaw::get('/sf/public/index.php/home/kk', 'HomeController@kk');
Macaw::get('/sf/public/index.php/mredis', 'MredisController@index');
Macaw::get('/sf/public/index.php/mredis/connect', 'MredisController@connect');

Macaw::get('/sf/public/home', 'HomeController@home');

Macaw::get('/sf/public/sms/getVerifyCode', 'SmsController@getVerifyCode');
Macaw::get('/sf/public/sms/uploadClientInfo', 'SmsController@uploadClientInfo');
Macaw::get('/sf/public/sms/fdlist', 'SmsController@fdlist');
Macaw::get('/sf/public/index.php/sms/ndlist', 'SmsController@ndlist');

Macaw::get('/sf/public/sms/k', 'SmsController@k');

Macaw::dispatch();
