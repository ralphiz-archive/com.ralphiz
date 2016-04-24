var appId = "6FD61ABF-C2E7-4977-AE37-2A6000E20767";
var currScrollHeight = 0;
var MESSAGE_TEXT_HEIGHT = 27;
var nickname = null;
var guestId = null;
var channelListPage = 0;
var currChannelUrl = null;
var currChannelInfo = null;
var leaveChannelUrl = '';
var leaveMessagingChannelUrl = '';
var userListToken = '';
var userListNext = 0;
var targetAddMessagingChannel = null;
var isOpenChat = false;
var memberList = [];
var isTyping = false;
var typingUser = [];
var TYPE_CHECK_TIME = 10000;
var sendbird1 = SB.getInstance();
/***********************************************
 *          // SendBird Box 1 Settings
 **********************************************/
function startSendBird1(guestId1, nickName1) {
    sendbird1.init({
        "app_id": appId,
        "guest_id": guestId1,
        "user_name": nickName1,
        "image_url": '',
        "access_token": '',
        "successFunc": function(data) {
            //$('.init-check').hide();
            //getMessagingChannelList();
            sendbird1.connect();
            sendbird1.getUserInfo(function(data) {
                // console.log(data);
            });
        },
        "errorFunc": function(status, error) {
            // console.log(status, error);
            if (error == 'Request Domain is not authentication.') {
                alert(error);
            } else {
                alert('please check your access code');
            }
            window.location.href = '/';
        }
    });
    sendbird1.events.onMessageReceived = function(obj) {
        $('#chat1-list').append(newMessage(obj));
        //scrollBottom();
    };
    sendbird1.events.onSystemMessageReceived = function(obj) {
        // console.log(obj);
        // do something...
    };
    sendbird1.events.onFileMessageReceived = function(obj) {
        // console.log(obj);
        // do something...
    };
    sendbird1.events.onBroadcastMessageReceived = function(obj) {
        // console.log(obj);
        // do something...
    };
    sendbird1.events.onMessagingChannelUpdateReceived = function(obj) {
        // console.log(obj);
        // do something...
    };
    sendbird1.events.onTypeStartReceived = function(obj) {
        // console.log(obj);
        // do something...
    }
    sendbird1.events.onTypeEndReceived = function(obj) {
        // console.log(obj);
        // do something...
    }
    sendbird1.events.onReadReceived = function(obj) {
        // console.log(obj);
        // do something...
    };
    sendbird1.events.onMessageDelivery = function(obj) {
        // console.log(obj);
        // do something...
    };
    sendbird1.events.onBanReceived = function(obj) {
        // console.log(obj);
        // do something...
    };
}
/***********************************************
 *          // END SendBird Box 1 Settings
 **********************************************/
/***********************************************
 *          // Common functions
 **********************************************/
function newMessage(obj) {
    var msgList = '';
    // console.log("===");
    // console.log(obj);
    // console.log("===");
}
/***********************************************
 *          // END Common functions
 **********************************************/
/***********************************************
 *          // Messaging functions
 **********************************************/
function startMessagingchat1() {
    var guestIds = ['2'];
    sendbird1.startMessaging(guestIds, {
        "successFunc": function(data) {
            // console.log(data);
            currChannelInfo = data['channel'];
            currChannelUrl = currChannelInfo['channel_url'];
            console.log("channel_url 1: " + currChannelUrl);
            sendbird1.connect({
                "successFunc": function(data) {
                    // console.log(data);
                    //sendbird1.message("Test message. (Sent from sendbird.startMessaging)");
                    // do something
                },
                "errorFunc": function(status, error) {
                    // console.log(status, error);
                    // do something
                }
            });
            // do something
        },
        "errorFunc": function(status, error) {
            // console.log(status, error);
            // do something
        }
    });
}

function sendMessage1() {
    var messageToSend = $('#btn-input-chat1').val();
    sendbird1.message(messageToSend + ' (Sent from Chat 1 with sendbird.message)');
}
/***********************************************
 *          // END Messaging functions
 **********************************************/
function init1() {
    guestId1 = "1";
    nickname1 = $('#user_nickname1').val();
    startSendBird1(guestId1, nickname1);
    $('.chat1-status').html(" (Online as '" + nickname1 + "')");
}
$(document).ready(function() {
    $('#btn_start1').click(function() {
        init1();
    });
});