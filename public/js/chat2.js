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
 *          // SendBird Box 2 Settings
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
                console.log(data);
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
        // console.log(obj);
        // do something...
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
 *          // END SendBird Box 2 Settings
 **********************************************/
/***********************************************
 *          // Common functions
 **********************************************/
function sendMessage2() {
    var messageToSend2 = $('#btn-input-chat2').val();
    sendbird2.message(messageToSend2);
}
function createMessage2(obj) {
    var msg2 = '';
    var current_name2 = 'Syed (Me)';
    var other_user2 = 'Ralph';
    var myDate2 = new Date( obj['ts'] );
    if(obj['user']['guest_id'] === '1') {
        msg2 = '' +
        '<li class="right clearfix">' +
        '   <span class="chat-img pull-right">' +
            '<img src="' +
            obj['user']['image'] +
            '" alt="User Avatar" class="img-circle img-small">' +
        '   </span>' +
        '   <div class="chat-body clearfix">' +
        '       <div class="header">' +
        '           <small class=" text-muted">' +
        '               <span class="glyphicon glyphicon-time"></span>' +
                        myDate.toLocaleString() +
        '           </small>' +
        '           <strong class="pull-right primary-font">' +
                        current_name2 +
        '           </strong>' +
        '       </div>' +
        '           <p>' +
                        obj['message'] +
        '           </p>' +
        '   </div>' +
        '</li>';
    } else {
        msg2 = '' +
        '<li class="left clearfix">' +
        '   <span class="chat-img pull-left">' +
            '<img src="' +
            obj['user']['image'] +
            '" alt="User Avatar" class="img-circle img-small">' +
        '   </span>' +
        '   <div class="chat-body clearfix">' +
        '       <div class="header">' +
        '           <strong class="primary-font">' +
                        other_user2 +
        '           </strong>' +
        '           <small class="pull-right text-muted">' +
        '               <span class="glyphicon glyphicon-time"></span>' +
                        myDate.toLocaleString() +
        '           </small>' +
        '       </div>' +
        '           <p>' +
                        obj['message'] +
        '           </p>' +
        '   </div>' +
        '</li>';  
    }

    $('#chat2-list').append(msg2);
}
/***********************************************
 *          // END Common functions
 **********************************************/
/***********************************************
 *          // Messaging functions
 **********************************************/
function startMessagingchat2() {
    var guestIds2 = ['1'];
    sendbird2.startMessaging(guestIds2, {
        "successFunc": function(data) {
            currChannelInfo = data['channel'];
            currChannelUrl = currChannelInfo['channel_url'];
            console.log("channel_url 2: " + currChannelUrl);
            sendbird2.connect({
                "successFunc": function(data) {
                    sendbird2.getMessageLoadMore({
                        "successFunc": function(data) {
                            var pastMessages2 = data.messages;
                            var msgList2 = '';
                            // console.log("data: " + data);
                            // console.log("data['messages']: " + data.messages)
                            $.each(pastMessages2.reverse(), function(index, msg) {
                                createMessage2(msg.payload);
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