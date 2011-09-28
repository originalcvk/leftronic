<?php

# Note: Use of "json_encode()" requires PHP 5.2.0 or greater

class Leftronic {
	
	public $accessKey;
	
	public function __construct($secretKey) {
		$this->accessKey = $secretKey;
	}
	
	public function pushNumber($streamName, $point) {
		### Pushing a number to a Number, Horizontal/Vertical Bar, or Dial widget
		$parameters = array('accessKey' => $this->accessKey, 'streamName' => $streamName, 'point' => $point);
		# Convert to JSON
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
		### Pushing a geographic location (latitude and longitude) to a Map widget
		$parameters = array('accessKey' => $this->accessKey, 'streamName' => $streamName, 'point' => array(
			'latitude' => $lati, 'longitude' => $longi));
		# Convert to JSON
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
		### Pushing a title and message to a Text Feed widget
		$parameters = array('accessKey' => $this->accessKey, 'streamName' => $streamName, 'point' => array(
			'title' => $myTitle, 'msg' => $myMsg));
		# Convert to JSON
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
	
	public function pushLeaderboard($streamName, array $leaderArray) {
		### Pushing an array to a Leaderboard widget
		$parameters = array('accessKey' => $this->accessKey, 'streamName' => $streamName, 'point' => array(
			'leaderboard' => $leaderArray));
		# Convert to JSON
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
		### Pushing an array to a List widget
		$parameters = array('accessKey' => $this->accessKey, 'streamName' => $streamName, 'point' => array(
			'list' => $listArray));
		# Convert to JSON
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
