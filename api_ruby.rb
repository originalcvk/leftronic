require 'rubygems'
require 'curb'
require 'json'

class Leftronic

  def initialize(key, url='https://beta.leftronic.com/customSend/')
    @key = key
    @url = url
  end

  # Pushing anything to a widget
  def push(stream, parameters)
    post parameters.merge({ 'accessKey' => @key, 'streamName' => stream })
  end

  # Pushing a Number to a widget
  def push_number(stream, point)
    push stream, 'point' => point
  end

  ## Pushing a geographic location (latitude and longitude) to a Map widget
  def push_geo(stream, lat, long)
    push stream, 'latitude' => lat, 'longitude' => long
  end

  # Pushing a title and message to a Text Feed widget
  def push_text(stream, title, message)
    push stream, 'title' => title, 'msg' => message
  end

  # Pushing an array to the Leaderboard widget
  def self.push_leaderboard(stream, leaders)
    post stream, 'leaderboard' => leaders
  end

  # Pushing an array to the List widget
  def self.push_list(streamName, list)
    post stream, 'list' => list
  end

  protected

  def post(parameters)
    Curl::Easy.http_post(@url, parameters.to_json) do |curl|
      curl.headers['Accept'] = 'application/json'
      curl.headers['Content-Type'] = 'application/json'
    end
  end

end