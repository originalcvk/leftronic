require 'rubygems'
require 'curb'
require 'json'

# Your secret API access key (global variable)
$accessKey = "YOUR_ACCESS_KEY"

class Leftronic

  def self.pushNumber(streamName, point)
      authKey = $accessKey
      parameters = {"accessKey" => authKey, "streamName" => streamName, "point" => point}
      jsonData = parameters.to_json()
      urlRequest = Curl::Easy.http_post("https://beta.leftronic.com/customSend/", jsonData
          ) do |curl|
            curl.headers['Accept'] = 'application/json'
            curl.headers['Content-Type'] = 'application/json'
          end
  end

  def self.pushLocation(streamName, lati, longi)
      authKey = $accessKey
      parameters = {"accessKey" => authKey, "streamName" => streamName, "point" => {
        "latitude" => lati, "longitude" => longi}}
      jsonData = parameters.to_json()
      urlRequest = Curl::Easy.http_post("https://beta.leftronic.com/customSend/", jsonData
          ) do |curl|
            curl.headers['Accept'] = 'application/json'
            curl.headers['Content-Type'] = 'application/json'
          end
  end
  
  def self.pushText(streamName, myTitle, myMsg)
      authKey = $accessKey
      parameters = {"accessKey" => authKey, "streamName" => streamName, "point" => {
        "title" => myTitle, "msg" => myMsg}}
      jsonData = parameters.to_json()
      urlRequest = Curl::Easy.http_post("https://beta.leftronic.com/customSend/", jsonData
          ) do |curl|
            curl.headers['Accept'] = 'application/json'
            curl.headers['Content-Type'] = 'application/json'
          end
  end

  def self.pushBoard(streamName, leaderArray)
      authKey = $accessKey
      parameters = {"accessKey" => authKey, "streamName" => streamName, "point" => {
        "leaderboard" => leaderArray}}
      jsonData = parameters.to_json()
      urlRequest = Curl::Easy.http_post("https://beta.leftronic.com/customSend/", jsonData
          ) do |curl|
            curl.headers['Accept'] = 'application/json'
            curl.headers['Content-Type'] = 'application/json'
          end
  end
  
  def self.pushList(streamName, listArray)
      authKey = $accessKey
      parameters = {"accessKey" => authKey, "streamName" => streamName, "point" => {
        "list" => listArray}}
      jsonData = parameters.to_json()
      urlRequest = Curl::Easy.http_post("https://beta.leftronic.com/customSend/", jsonData
          ) do |curl|
            curl.headers['Accept'] = 'application/json'
            curl.headers['Content-Type'] = 'application/json'
          end
  end

end
