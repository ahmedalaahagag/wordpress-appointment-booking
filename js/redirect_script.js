jQuery(document).ready(function() {
        {
            if(navigator.userAgent.toLowerCase().indexOf("android") > -1)
            {
                window.location.href = 'https://play.google.com/store/apps/details?id=com.youclick.wecare';
            }
            if(navigator.userAgent.toLowerCase().indexOf("iphone") > -1)
            {
                window.location.href = 'https://itunes.apple.com/us/app/you-click-we-care/id1015588412?mt=8';
            }
        }