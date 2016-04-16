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
function startSendBird1(guestId1, nickName1) {
    var sendbird1 = SB.getInstance();
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
}
/***********************************************
 *          // END SendBird Box 1 Settings
 **********************************************/


function init1() {
    guestId1 = "1";
    nickname1 = $('#user_nickname1').val();
    startSendBird1(guestId1, nickname1);
    $('.chat1-status').html(" (Online as '"+nickname1+"')");
}

$(document).ready(function() {
    $('#btn_start1').click(function() {
        init1();
    });
});
