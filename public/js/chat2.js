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
/***********************************************
 *          // SendBird Box 1 Settings
 **********************************************/
function startSendBird2(guestId1, nickName1) {
    sendbird2 = SB.getInstance();
    sendbird2.init({
        "app_id": appId,
        "guest_id": guestId1,
        "user_name": nickName1,
        "image_url": '',
        "access_token": '',
        "successFunc": function(data) {
            //$('.init-check').hide();
            //getMessagingChannelList();
            sendbird2.connect();
            sendbird2.getUserInfo(function(data) {
                console.log(data);
            });
        },
        "errorFunc": function(status, error) {
            console.log(status, error);
            if (error == 'Request Domain is not authentication.') {
                alert(error);
            } else {
                alert('please check your access code');
            }
            window.location.href = '/';
        }
    });
    sendbird2.events.onMessageReceived = function(obj) {
        $('#chat2-list').append(newMessage(obj));
        //scrollBottom();
    };
    sendbird2.events.onSystemMessageReceived = function(obj) {
        console.log(obj);
        // do something...
    };
    sendbird2.events.onFileMessageReceived = function(obj) {
        console.log(obj);
        // do something...
    };
    sendbird2.events.onBroadcastMessageReceived = function(obj) {
        console.log(obj);
        // do something...
    };
    sendbird2.events.onMessagingChannelUpdateReceived = function(obj) {
        console.log(obj);
        // do something...
    };
    sendbird2.events.onTypeStartReceived = function(obj) {
        console.log(obj);
        // do something...
    }
    sendbird2.events.onTypeEndReceived = function(obj) {
        console.log(obj);
        // do something...
    }
    sendbird2.events.onReadReceived = function(obj) {
        console.log(obj);
        // do something...
    };
    sendbird2.events.onMessageDelivery = function(obj) {
        console.log(obj);
        // do something...
    };
    sendbird2.events.onBanReceived = function(obj) {
        console.log(obj);
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
    console.log(obj);
}
/***********************************************
 *          // END Common functions
 **********************************************/
/***********************************************
 *          // Messaging functions
 **********************************************/
function startMessaging() {
    var guestIds = ['1', '2'];
    sendbird2.startMessaging(guestIds, {
        "successFunc": function(data) {
            console.log(data);
            sendbird2.connect({
                "successFunc": function(data) {
                    console.log(data);
                    // do something
                },
                "errorFunc": function(status, error) {
                    console.log(status, error);
                    // do something
                }
            });
            // do something
        },
        "errorFunc": function(status, error) {
            console.log(status, error);
            // do something
        }
    });
}
/***********************************************
 *          // END Messaging functions
 **********************************************/
function init2() {
    guestId2 = "2";
    nickname2 = $('#user_nickname2').val();
    startSendBird2(guestId2, nickname2);
    $('.chat2-status').html(" (Online as '" + nickname2 + "')");
}
$(document).ready(function() {
    $('#btn_start2').click(function() {
        init2();
    });
});