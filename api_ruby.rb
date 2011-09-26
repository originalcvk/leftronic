require 'rubygems'
require 'curb'
require 'json'

class Leftronic

  attr_accessor :accessKey
  
  # Class variable
  def initialize(accessKey)
      @@accessKey = accessKey
  end

  def self.pushNumber(streamName, point)
      parameters = {"accessKey" => @@accessKey, "streamName" => streamName, "point" => point}
      # Convert to JSON
      jsonData = parameters.to_json()
      # Form request
      urlRequest = Curl::Easy.http_post("https://beta.leftronic.com/customSend/", jsonData
      # Make request
          ) do |curl|
            curl.headers['Accept'] = 'application/json'
            curl.headers['Content-Type'] = 'application/json'
          end
  end

  def self.pushLocation(streamName, lati, longi)
      parameters = {"accessKey" => @@accessKey, "streamName" => streamName, "point" => {
        "latitude" => lati, "longitude" => longi}}
      # Convert to JSON
      jsonData = parameters.to_json()
      # Form request
      urlRequest = Curl::Easy.http_post("https://beta.leftronic.com/customSend/", jsonData
      # Make request
          ) do |curl|
            curl.headers['Accept'] = 'application/json'
            curl.headers['Content-Type'] = 'application/json'
          end
  end
  
  def self.pushText(streamName, myTitle, myMsg)
      parameters = {"accessKey" => @@accessKey, "streamName" => streamName, "point" => {
        "title" => myTitle, "msg" => myMsg}}
      # Convert to JSON
      jsonData = parameters.to_json()
      # Form request
      urlRequest = Curl::Easy.http_post("https://beta.leftronic.com/customSend/", jsonData
      # Make request
          ) do |curl|
            curl.headers['Accept'] = 'application/json'
            curl.headers['Content-Type'] = 'application/json'
          end
  end

  def self.pushBoard(streamName, leaderArray)
      parameters = {"accessKey" => @@accessKey, "streamName" => streamName, "point" => {
        "leaderboard" => leaderArray}}
      # Convert to JSON
      jsonData = parameters.to_json()
      # Form request
      urlRequest = Curl::Easy.http_post("https://beta.leftronic.com/customSend/", jsonData
      # Make request
          ) do |curl|
            curl.headers['Accept'] = 'application/json'
            curl.headers['Content-Type'] = 'application/json'
          end
  end
  
  def self.pushList(streamName, listArray)
      parameters = {"accessKey" => @@accessKey, "streamName" => streamName, "point" => {
        "list" => listArray}}
      # Convert to JSON
      jsonData = parameters.to_json()
      # Form request
      urlRequest = Curl::Easy.http_post("https://beta.leftronic.com/customSend/", jsonData
      # Make CURL request
          ) do |curl|
            curl.headers['Accept'] = 'application/json'
            curl.headers['Content-Type'] = 'application/json'
          end
  end

end
