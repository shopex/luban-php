shopex luban grpc sdk for php


```php
class MyServiceReslover{

	public function reslove($service){
		return env('SERVICE_'.$service);
	}

}

Shopex\Luban\Client::setReslover(new MyServiceReslover);

$dealer = Shopex\Luban\Client::Dealer();
$dealer->Deal($dealRequest);
```