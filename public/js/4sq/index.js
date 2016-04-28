uri = window.location.href;
search = '#access_token=';
start = uri.indexOf(search);
access_token = false;
if (start > 0) {
    start = start + search.length
    access_token = uri.slice(start);
}
if(access_token){
    $.ajax({
        url:'https://api.foursquare.com/v2/users/self',
        data: {oauth_token:access_token},
        success:function(user_data) {
            console.dir(user_data);
            $('article').text('Hello '+user_data.response.user.firstName);
        },
        error: function(jqXHR, textStatus, errorThrown){
            console.error(errorThrown);
        }
    });
} else {
    // print a login button
    client_id = '2QQJG0VY4JDU5T3F1NEB0MJFK24TJNASWVLRLLVY5AGT1ZWX';
    redirect_uri = 'http://ralphiz.com/4sq';
    auth_url = 'https://foursquare.com/oauth2/authenticate?client_id=' + client_id + '&response_type=code&redirect_uri=' + redirect_uri;
    $('article').html('<a href="' + auth_url + '" target="_new"><img src="https://playfoursquare.s3.amazonaws.com/press/logo/connect-blue@2x.png"></a>');
}
