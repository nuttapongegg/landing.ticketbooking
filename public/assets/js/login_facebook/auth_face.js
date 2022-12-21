var id = "";
var name = "";
var email = "";
var picture = "";

window.fbAsyncInit = function() {
    // FB JavaScript SDK configuration and setup
    FB.init({
      appId      : '1126421014729295', // FB App ID ของพี่มอส(1126421014729295), ของเอ้ก (476847497713912)
      cookie     : true,  // enable cookies to allow the server to access the session
      xfbml      : true,  // parse social plugins on this page
      version    : 'v15.0' // use graph api version 2.8
    });
    
    // Check whether the user already logged in
    FB.getLoginStatus(function(response) {
        if (response.status === 'connected') {
            //display user data
            getFbUserData();
        }
    });
};

// Load the JavaScript SDK asynchronously
(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

// Facebook login with JavaScript SDK
function fbLogin() {
    FB.login(function (response) {
        if (response.authResponse) {
            // Get and display the user profile data
            getFbUserData();
        } else {
            document.getElementById('status').innerHTML = 'User cancelled login or did not fully authorize.';
        }
    }, {scope: 'email'});
}

// Fetch the user profile data from facebook
function getFbUserData(){
    FB.api('/me', {locale: 'en_US', fields: 'id,first_name,last_name,email,link,gender,locale,picture'},
    function (response) {

        let id = response.id
        let name = response.first_name+' '+response.last_name
        let email = response.email
        let picture = response.picture.data.url

        let dataObj = {
            id,
            name,
            email,
            picture
        }
        $.ajax({
            type: 'POST',
            url: '/login',
            contentType: 'application/json; charset=utf-8;',
            processData: false,
            data: JSON.stringify(dataObj),
        }),
        location.reload();
        document.getElementById('fbLink').setAttribute("onclick","fbLogout()");
        document.getElementById('fbLink').innerHTML = '<div class="d-flex"> <div class="mt-1"> <span class="avatar"> <img src="'+response.picture.data.url+'" alt="img" class="rounded-circle" style="width: 30px; height: 30px;"></span></div><div class="d-flex1 mt-2">&nbsp; <a>Logout </a></div></div> '; // from Facebook
        // document.getElementById('fbLink').innerHTML = '<i class="fa fa-facebook-square" style="font-size:24px" id="'+id+'" aria-hidden="true"></i> Logout Facebook'; // from Facebook
        // document.getElementById('fbLink').setAttribute("onclick","fbLogout()");//<i class="fa fa-facebook-square" style="font-size:24px" aria-hidden="true"></i>
        // document.getElementById('fbLink').innerHTML = '<div class="d-flex"> <div class="me-3 mt-1"> <span class="avatar"> <img src="'+response.picture.data.url+'" alt="img" class="rounded-circle"></span></div><div class="d-flex1 mt-3">&nbsp; <a>Logout Facebook</a></div></div> '; // from Facebook
        // document.getElementById('status').innerHTML = '<p>Thanks for logging in, ' + response.first_name + '!</p>';
        // document.getElementById('userData').innerHTML = '<h2>Facebook Profile Details</h2><p><img src="'+response.picture.data.url+'"/></p><p><b>FB ID:</b> '+response.id+'</p><p><b>Name:</b> '+response.first_name+' '+response.last_name+'</p><p><b>Email:</b> '+response.email+'</p><p><b>Gender:</b> '+response.gender+'</p><p><b>FB Profile:</b> <a target="_blank" href="'+response.link+'">click to view profile</a></p>';
    });
}

// Logout from facebook
function fbLogout() {
    FB.logout(function() {
        // var fb_id = $(this).attr('id');
        $.ajax({
            type: 'GET',
            url: '/logout',
            // contentType: 'application/json; charset=utf-8;',
            // processData: false,
            // data: fb_id,
        }),
        document.getElementById('fbLink').setAttribute("onclick","fbLogin()");
        document.getElementById('fbLink').innerHTML = '<i class="fa fa-facebook-square"  style="font-size:24px" aria-hidden="true"></i> เข้าสู่ระบบด้วย Facebook';
        document.getElementById('userData').innerHTML = '';
        document.getElementById('status').innerHTML = '';
    });
}



