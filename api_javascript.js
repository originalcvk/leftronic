/*
    Requires jQuery library.
    Load from Google CDN (Instructions: http://code.google.com/apis/libraries/devguide.html#jquery)
    or download directly (http://jquery.com/download)
*/

// Your secret API access key
var accessKey = "YOUR_ACCESS_KEY";

function pushNumber(streamName, point) {
    var parameters = {};
    parameters["accessKey"] = accessKey;
    parameters["streamName"] = streamName;
    parameters["point"] = point;
    // Convert to JSON
    var jsonData = JSON.stringify(parameters);
    // Make request (jQuery)
    $.post("https://beta.leftronic.com/customSend/", jsonData);
}

function pushLocation(streamName, lati, longi) {
    var parameters = {};
    parameters["accessKey"] = accessKey;
    parameters["streamName"] = streamName;
    parameters["point"] = {"latitude": lati, "longitude": longi};
    // Convert to JSON
    var jsonData = JSON.stringify(parameters);
    // Make request (jQuery)
    $.post("https://beta.leftronic.com/customSend/", jsonData);
}

function pushText(streamName, myTitle, myMsg) {
    var parameters = {};
    parameters["accessKey"] = accessKey;
    parameters["streamName"] = streamName;
    parameters["point"] = {"title": myTitle, "msg": myMsg};
    // Convert to JSON
    var jsonData = JSON.stringify(parameters);
    // Make request (jQuery)
    $.post("https://beta.leftronic.com/customSend/", jsonData);
}

function pushBoard(streamName, leaderArray) {
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
    var parameters = {};
    parameters["accessKey"] = accessKey;
    parameters["streamName"] = streamName;
    parameters["point"] = {"list": listArray};
    // Convert to JSON
    var jsonData = JSON.stringify(parameters);
    // Make request (jQuery)
    $.post("https://beta.leftronic.com/customSend/", jsonData);
}
