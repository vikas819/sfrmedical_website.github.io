    function createCookie()
    {
      var date = new Date();
      date.setTime(date.getTime()+(365*24*60*60*1000));
      document.cookie ="sfrmedical=Accepted; expires=" + date.toGMTString() +"; path=/";
      $('.cookieinfo').hide();
      
    //   Facebook Pixel Code
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '114267959894402');
      fbq('track', 'PageView');
      
    //   Google analytics
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-164286304-1');
    }
      
    
    function hideCookie()
    {
      var date = new Date();
      date.setTime(date.getTime()+(5*24*60*60*1000));
      document.cookie ="sfrmedical=Declined; expires=" + date.toGMTString() +"; path=/";
      $('.cookieinfo').hide();
    }
    
    function accessCookie(cookieName)
    {
      var name = cookieName + "=";
      var allCookieArray = document.cookie.split(';');
      for(var i=0; i<allCookieArray.length; i++)
      {
        var temp = allCookieArray[i].trim();
        if (temp.indexOf(name)===0)
        return temp.substring(name.length,temp.length);
      }
        return "";
    }
    
    function checkCookie()
    {
      var user = accessCookie("sfrmedical");
      if (user!==""){
        $('.cookieinfo').hide();
      }
    }

    // checkCookie();