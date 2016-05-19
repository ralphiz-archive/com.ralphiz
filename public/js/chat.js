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
            sendbird1.connect();
            sendbird1.getUserInfo(function(data) {
                console.log(data);
            });
        },
        "errorFunc": function(status, error) {
            if (error == 'Request Domain is not authentication.') {
                alert(error);
            } else {
                alert('please check your access code');
            }
            window.location.href = '/';
        }
    });
    sendbird1.events.onMessageReceived = function(obj) {
        // console.log(obj);
        // do something...
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
    };
    sendbird1.events.onTypeEndReceived = function(obj) {
        // console.log(obj);
        // do something...
    };
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
function sendMessage1() {
    var messageToSend1 = $('#btn-input-chat1').val();
    sendbird1.message(messageToSend1);
}
function createMessage1(obj) {
    var msg = '';
    var current_name = 'Me';
    var myDate = new Date( obj['ts'] );
    if(obj['user']['guest_id'] === '2') {
        msg = '' +
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
                        current_name +
        '           </strong>' +
        '       </div>' +
        '           <p>' +
                        obj['message'] +
        '           </p>' +
        '   </div>' +
        '</li>';
    } else {
        msg = '' +
        '<li class="left clearfix">' +
        '   <span class="chat-img pull-left">' +
            '<img src="' +
            obj['user']['image'] +
            '" alt="User Avatar" class="img-circle img-small">' +
        '   </span>' +
        '   <div class="chat-body clearfix">' +
        '       <div class="header">' +
        '           <strong class="primary-font">' +
                        current_name +
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

    $('#chat1-list').append(msg);

    console.dir(obj);
    console.log(obj['user']['guest_id']);
    console.log("---------------------");
}
/***********************************************
 *          // END Common functions
 **********************************************/
/***********************************************
 *          // Messaging functions
 **********************************************/
function startMessagingchat1() {
    var guestIds1 = ['2'];
    sendbird1.startMessaging(guestIds1, {
        "successFunc": function(data) {
            currChannelInfo = data['channel'];
            currChannelUrl = currChannelInfo['channel_url'];
            console.log("channel_url 1: " + currChannelUrl);
            sendbird1.connect({
                "successFunc": function(data) {
                    sendbird1.getMessageLoadMore({
                        "successFunc": function(data) {
                            var pastMessages = data.messages;
                            var msgList = '';
                            $.each(pastMessages.reverse(), function(index, msg) {
                                createMessage1(msg.payload);
                                // console.dir(msg);
                                // console.log(msg.payload);
                                // console.log(msg.payload.message);
                                // console.log('===');
                                // if (msg.cmd === 'MESG') {
                                //     $('#chat2-list').append(newMessage2(msg.payload));
                                // }
                            });
                            // console.log(msgList);
                        },
                        "errorFunc": function(status, error) {
                            // console.log(status, error);
                            // do something
                        }
                    });
                },
                "errorFunc": function(status, error) {
                    console.log(status, error);
                }
            });
            // do something
        },
        "errorFunc": function(status, error) {
            console.log(status, error);
        }
    });
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