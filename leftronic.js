/*
    Requires jQuery library.
    Load from Google CDN (Instructions: http://code.google.com/apis/libraries/devguide.html#jquery)
    or download directly (http://jquery.com/download)
*/

// Your secret API access key
var accessKey = "YOUR_ACCESS_KEY";

function pushNumber(streamName, point) {
	/* Pushing a number to a Number, Horizontal/Vertical Bar, or Dial widget */
    var parameters = {};
    parameters["accessKey"] = accessKey;
    parameters["streamName"] = streamName;
    parameters["point"] = point;
    // Convert to JSON
    var jsonData = JSON.stringify(parameters);
    // Make request (jQuery)
    $.post("https://beta.leftronic.com/customSend/", jsonData);
}

function pushGeo(streamName, lati, longi, color) {
	/* Pushing a geographic location (latitude and longitude) to a Map widget.
	 * Color can also be passed (red, green, blue, yellow, or purple).
	 * Default color is red. */
    var parameters = {};
    parameters["accessKey"] = accessKey;
    parameters["streamName"] = streamName;
    parameters["point"] = {"latitude": lati, "longitude": longi, "color": color};
    // Convert to JSON
    var jsonData = JSON.stringify(parameters);
    // Make request (jQuery)
    $.post("https://beta.leftronic.com/customSend/", jsonData);
}

function pushText(streamName, myTitle, myMsg) {
	/* Pushing a title and message to a Text Feed widget */
    var parameters = {};
    parameters["accessKey"] = accessKey;
    parameters["streamName"] = streamName;
    parameters["point"] = {"title": myTitle, "msg": myMsg};
    // Convert to JSON
    var jsonData = JSON.stringify(parameters);
    // Make request (jQuery)
    $.post("https://beta.leftronic.com/customSend/", jsonData);
}

function pushLeaderboard(streamName, leaderArray) {
	/* Pushing an array to a Leaderboard widget */
    var parameters = {};
    parameters["accessKey"] = accessKey;
    parameters["streamName"] = streamName;
    parameters["point"] = {"leaderboard": leaderArray};
    // Convert to JSON
    var jsonData = JSON.stringify(parameters);
    // Make request (jQuery)
    $.post("https://beta.leftronic.com/customSend/", jsonData);
}

function pushList(streamName, listArray) {
	/* Pushing an array to a List widget */
    var parameters = {};
    parameters["accessKey"] = accessKey;
    parameters["streamName"] = streamName;
    parameters["point"] = {"list": listArray};
    // Convert to JSON
    var jsonData = JSON.stringify(parameters);
    // Make request (jQuery)
    $.post("https://beta.leftronic.com/customSend/", jsonData);
}
