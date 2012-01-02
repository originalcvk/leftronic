import urllib2
import json

class Leftronic(object):

    '''Provides access to Leftronic API'''

    def __init__(self, authKey):
        # Sets accessKey
        self.accessKey = authKey
        self.apiUrl = "https://beta.leftronic.com/customSend/"

    def pushNumber(self, streamName, point):
        '''Pushing a number to a Number, Horizontal/Vertical Bar, or Dial widget'''
        parameters = {"accessKey": self.accessKey, "streamName": streamName, "point": point}
        self.postData(parameters)

    def pushGeo(self, streamName, lati, longi, color=None):
        '''Pushing a geographic location (latitude and longitude) to a Map widget.
        Color can also be passed (red, green, blue, yellow, or purple).
        Default color is red.'''
        parameters = {"accessKey": self.accessKey, "streamName": streamName, "point": {
            "latitude": lati, "longitude": longi, "color": color
        }}
        self.postData(parameters)

    def pushText(self, streamName, myTitle, myMsg):
        '''Pushing a title and message to a Text Feed widget'''
        parameters = {"accessKey": self.accessKey, "streamName": streamName, "point": {
            "title": myTitle, "msg": myMsg
        }}
        self.postData(parameters)

    def pushLeaderboard(self, streamName, leaderArray):
        '''Pushing an array to a Leaderboard widget'''
        parameters = {"accessKey": self.accessKey, "streamName": streamName, "point": {
            "leaderboard": leaderArray
        }}
        self.postData(parameters)

    def pushList(self, streamName, listArray):
        '''Pushing an array to a List widget'''
        parameters = {"accessKey": self.accessKey, "streamName": streamName, "point": {
            "list": listArray
        }}
        self.postData(parameters)
        
    def postData(self, parameters):
        '''Makes an HTTP POST to the API URL'''
        # Convert to JSON
        jsonData = json.dumps(parameters)
        # Make request
        urllib2.urlopen(self.apiUrl, jsonData)
