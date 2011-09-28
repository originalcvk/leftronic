import urllib2
import json

class Leftronic(object):

    '''Provides access to Leftronic API'''

    def __init__(self, authKey):
        global accessKey
        # Sets accessKey
        accessKey = authKey

    def pushNumber(self, streamName, point):
        '''Pushing a number to a Number, Horizontal/Vertical Bar, or Dial widget'''
        parameters = {"accessKey": accessKey, "streamName": streamName, "point": point}
        # Convert to JSON
        jsonData = json.dumps(parameters)
        # Make request
        urllib2.urlopen("https://beta.leftronic.com/customSend/", jsonData)

    def pushGeo(self, streamName, lati, longi):
        '''Pushing a geographic location (latitude and longitude) to a Map widget'''
        parameters = {"accessKey": accessKey, "streamName": streamName, "point": {
            "latitude": lati, "longitude": longi
        }}
        # Convert to JSON
        jsonData = json.dumps(parameters)
        # Make request
        urllib2.urlopen("https://beta.leftronic.com/customSend/", jsonData)

    def pushText(self, streamName, myTitle, myMsg):
        '''Pushing a title and message to a Text Feed widget'''
        parameters = {"accessKey": accessKey, "streamName": streamName, "point": {
            "title": myTitle, "msg": myMsg
        }}
        # Convert to JSON
        jsonData = json.dumps(parameters)
        # Make request
        urllib2.urlopen("https://beta.leftronic.com/customSend/", jsonData)

    def pushLeaderboard(self, streamName, leaderArray):
        '''Pushing an array to a Leaderboard widget'''
        parameters = {"accessKey": accessKey, "streamName": streamName, "point": {
            "leaderboard": leaderArray
        }}
        # Convert to JSON
        jsonData = json.dumps(parameters)
        # Make request
        urllib2.urlopen("https://beta.leftronic.com/customSend/", jsonData)

    def pushList(self, streamName, listArray):
        '''Pushing an array to a List widget'''
        parameters = {"accessKey": accessKey, "streamName": streamName, "point": {
            "list": listArray
        }}
        # Convert to JSON
        jsonData = json.dumps(parameters)
        # Make request
        urllib2.urlopen("https://beta.leftronic.com/customSend/", jsonData)
