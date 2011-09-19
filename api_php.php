<?php

# Note: Use of "json_encode()" requires PHP 5.2.0 or greater

class Leftronic {
	
	public $accessKey;
	
	public function __construct($secretKey) {
		$this->accessKey = $secretKey;
	}
	
	public function pushNumber($streamName, $point) {
		$parameters = array('accessKey' => $this->accessKey, 'streamName' => $streamName, 'point' => $point);
		$jsonData = json_encode($parameters);
		
		# cURL options
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_URL, 'https://beta.leftronic.com/customSend/');
		curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
		
		# Make the request
		$result = curl_exec($ch);
	}

	public function pushLocation($streamName, $lati, $longi) {
		$parameters = array('accessKey' => $this->accessKey, 'streamName' => $streamName, 'point' => array(
			'latitude' => $lati, 'longitude' => $longi));
		$jsonData = json_encode($parameters);
		
		# cURL options
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_URL, 'https://beta.leftronic.com/customSend/');
		curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);

		# Make the request
		$result = curl_exec($ch);
	}
	
	public function pushText($streamName, $myTitle, $myMsg) {
		$parameters = array('accessKey' => $this->accessKey, 'streamName' => $streamName, 'point' => array(
			'title' => $myTitle, 'msg' => $myMsg));
		$jsonData = json_encode($parameters);
		
		# cURL options
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_URL, 'https://beta.leftronic.com/customSend/');
		curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);

		# Make the request
		$result = curl_exec($ch);
	}
	
	public function pushBoard($streamName, array $leaderArray) {
		$parameters = array('accessKey' => $this->accessKey, 'streamName' => $streamName, 'point' => array(
			'leaderboard' => $leaderArray));
		$jsonData = json_encode($parameters);
		
		# cURL options
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_URL, 'https://beta.leftronic.com/customSend/');
		curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);

		# Make the request
		$result = curl_exec($ch);
	}
	
	public function pushList($streamName, array $listArray) {
		$parameters = array('accessKey' => $this->accessKey, 'streamName' => $streamName, 'point' => array(
			'list' => $listArray));
		$jsonData = json_encode($parameters);
		
		# cURL options
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_URL, 'https://beta.leftronic.com/customSend/');
		curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);

		# Make the request
		$result = curl_exec($ch);
	}
}

?>
