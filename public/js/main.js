var skeletonId = 'skeleton';
var contentId = 'content';
var skipCounter = 0;
var takeAmount = 10;


function getRequests(mode) {
    var htmlElement = mode == 'sent' ? 'pills-profile' : 'pills-contact';
    var functionsOnSuccess = [
        [renderHTML, ['response', htmlElement]]
    ];

    ajax('/getRequests/' + mode, 'GET', functionsOnSuccess); //AJAX for Getting Requests Based On Mode
}

function getMoreRequests(mode) {
    // Optional: Depends on how you handle the "Load more"-Functionality
    // your code here...
}

function getConnections() { // Function Will Get Updated Connections
    var functionsOnSuccess = [
        [renderHTML, ['response', 'pills-contacta']]
    ];

    ajax('/getConnections', 'GET', functionsOnSuccess); //AJAX for Getting Connections
}

function getMoreConnections() {
    // Optional: Depends on how you handle the "Load more"-Functionality
    // your code here...
}

function getConnectionsInCommon(userId, connectionId) {
    // your code here...
}

function getMoreConnectionsInCommon(userId, connectionId) {
    // Optional: Depends on how you handle the "Load more"-Functionality
    // your code here...
}

function getSuggestions() { // Function Will Get Updated Suggestions

    var functionsOnSuccess = [
        [renderHTML, ['response', 'pills-home']]
    ];

    ajax('/getSuggestions', 'GET', functionsOnSuccess); // AJAX for Getting Suggestions
}

function getMoreSuggestions() {
    // Optional: Depends on how you handle the "Load more"-Functionality
    // your code here...
}

function sendRequest(sender_id, receiver_id) { //Function Will Send Connection Request

    var form = ajaxForm([
        ['sender_id', sender_id],
        ['receiver_id', receiver_id],
    ])

    var functionsOnSuccess = [
        [getSuggestions, []],
        [renderLoader, ['response', receiver_id]]
    ];

    ajax('/sendRequest', 'POST', functionsOnSuccess, form) //AJAX for Sending Requests

}


function deleteRequest(userId, requestId) { //Function Will WithDraw Request
    var form = ajaxForm([
        ['sender_id', userId],
        ['receiver_id', requestId],
    ])

    var functionsOnSuccess = [
        [getRequests, ['sent']],
        [renderLoader, ['response', requestId]]
    ];

    ajax('/deleteRequest', 'POST', functionsOnSuccess, form) //AJAX for Deleting Requests
}

function acceptRequest(userId, requestId) { //Function Will Accept Request
    var form = ajaxForm([
        ['receiver_id', userId],
        ['sender_id', requestId],
    ])

    var functionsOnSuccess = [
        [getRequests, ['received']],
        [renderLoader, ['response', requestId]]
    ];

    ajax('/acceptRequest', 'POST', functionsOnSuccess, form) //AJAX for Accpting Requests
}

function removeConnection(connectionId) { //Function Will Remove Connection
    var form = ajaxForm([
        ['connectionId', connectionId],
    ])

    var functionsOnSuccess = [
        [getConnections, []],
        [renderLoader, ['response', connectionId]]
    ];

    ajax('/removeConnection/' + connectionId, 'GET', functionsOnSuccess); //AJAX for Removing Connections

}

function refreshNetworkConnection() {

}

function renderLoader(response, id) { // Function Will Render Loader Skeleton
    $('#section_' + id).html(response);
}

function renderHTML(response, htmlElement) { // Function Will Render Updated Response
    $('#' + htmlElement).html(response)
}

$(function () {
    // getSuggestions();
});
