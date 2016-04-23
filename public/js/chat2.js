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
var sendbird2 = SB.getInstance();
/***********************************************
 *          // SendBird Box 1 Settings
 **********************************************/
function startSendBird2(guestId2, nickName2) {
    sendbird2.init({
        "app_id": appId,
        "guest_id": guestId2,
        "user_name": nickName2,
        "image_url": '',
        "access_token": '',
        "successFunc": function(data) {
            //$('.init-check').hide();
            //getMessagingChannelList();
            sendbird2.connect();
            sendbird2.getUserInfo(function(data) {
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
    sendbird2.events.onMessageReceived = function(obj) {
        $('#chat2-list').append(newMessage2(obj));
        //scrollBottom();
    };
    sendbird2.events.onSystemMessageReceived = function(obj) {
        // console.log(obj);
        // do something...
    };
    sendbird2.events.onFileMessageReceived = function(obj) {
        // console.log(obj);
        // do something...
    };
    sendbird2.events.onBroadcastMessageReceived = function(obj) {
        // console.log(obj);
        // do something...
    };
    sendbird2.events.onMessagingChannelUpdateReceived = function(obj) {
        // console.log(obj);
        // do something...
    };
    sendbird2.events.onTypeStartReceived = function(obj) {
        // console.log(obj);
        // do something...
    }
    sendbird2.events.onTypeEndReceived = function(obj) {
        // console.log(obj);
        // do something...
    }
    sendbird2.events.onReadReceived = function(obj) {
        // console.log(obj);
        // do something...
    };
    sendbird2.events.onMessageDelivery = function(obj) {
        // console.log(obj);
        // do something...
    };
    sendbird2.events.onBanReceived = function(obj) {
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
function newMessage2(obj) {
    var msgList = '';
    $('#chat2-list').append('<li>' + obj['message'] + '</li>');
}
/***********************************************
 *          // END Common functions
 **********************************************/
/***********************************************
 *          // Messaging functions
 **********************************************/
function startMessagingchat2() {
    var guestIds = ['1'];
    sendbird2.startMessaging(guestIds, {
        "successFunc": function(data) {
            // console.log(data);
            currChannelInfo = data['channel'];
            currChannelUrl = currChannelInfo['channel_url'];
            console.log("channel_url 2: " + currChannelUrl);
            sendbird2.connect({
                "successFunc": function(data) {
                    sendbird2.getMessageLoadMore({
                        "successFunc": function(data) {
                            var pastMessages = data["messages"];
                            var msgList = '';
                            $.each(pastMessages.reverse(), function(index, msg) {
                                if (sendbird2.isMessage(msg.cmd)) {
                                    msgList += msg.payload;
                                }
                            });
                            // console.log(msgList);
                        },
                        "errorFunc": function(status, error) {
                            // console.log(status, error);
                            // do something
                        }
                    });
                    // console.log(data);
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