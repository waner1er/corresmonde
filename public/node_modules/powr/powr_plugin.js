tinymce.PluginManager.add('powr', function(editor, url) {
  // Add the powr script to the body when the editor has initialized
  editor.on('init', function() {
    var scriptEle = editor.dom.create('script', {
      src: 'https://www.powr.io/powr.js?platform=tinymce',
      async: true
    });
    editor.getBody().appendChild(scriptEle);
  });

  var insertPowrBlock = function(appSlug){
    var uniqueId = 'xxxxxxxx_'.replace(/[x]/g, function(c) {
      var r = Math.random()*16|0, v = c == 'x' ? r : (r&0x3|0x8);
      return v.toString(16);
    }) + new Date().getTime();
    editor.insertContent('<div class="powr-'+appSlug+'" id='+uniqueId+'></div>');
  }

  // editor.ui.registry.addIcon('powr-icon', '<i class="powr-icon"></i>');
  editor.ui.registry.addIcon('powr-icon', '<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1024 1024" style="height: 25px;" xml:space="preserve"> <style type="text/css"> .st0{fill:#5287DF;}</style> <path class="st0" d="M546.5,74.5v236.1h-69V74.4c-152.3,17-273.6,147.4-273.6,305.7c0,0.9,0,2.8,0,2.9v418c0,0.7,0.2,1.6,0.3,2.3 c1.2,4.5,3.2,7.6,5,10.2c2.2,3.2,4.1,5.4,5.2,6.7c66.5,74.8,166.4,115.7,271.2,132.9c13.6,2.2,26.8-4.4,28.7-19.9 c0.5-4.4,0.4-245.5,0.4-245.5c0,0,0,0,0,0c163.5-1.4,296.7-130.5,304.6-292.4C827.4,231.1,704.7,92.2,546.5,74.5 M512.1,604.4 c-124.6,0-225.5-101-225.5-225.6c0-87.7,50.6-163.7,123.1-201v80.4c-33.3,28.8-54.8,71.5-54.8,119.2c0,86.8,70.3,157.2,157.2,157.2 s157-70.4,157-157.2c0-47.6-20.3-90.3-54.8-119.2v-80.4c72.6,37.3,123.2,113.3,123.2,201C737.5,503.4,636.7,604.4,512.1,604.4"/></svg>');
  editor.ui.registry.addMenuButton('powr', {
    title : 'POWr Plugin',
    tooltip: 'Insert POWr Plugin',
    icon: 'powr-icon',
    text: 'POWr',
    fetch: function(callback){
      var items = [
        {
          type: 'nestedmenuitem',
          text: 'Popular',
          getSubmenuItems: function(){
            return [
              {
                type: 'menuitem',
                text: 'Form Builder',
                onAction: function(){insertPowrBlock('form-builder');}
              },
              {
                type: 'menuitem',
                text: 'Popup',
                onAction: function(){insertPowrBlock('popup');}
              },
              {
                type: 'menuitem',
                text: 'Media Gallery',
                onAction: function(){insertPowrBlock('media-gallery');}
              },
              {
                type: 'menuitem',
                text: 'Social Feed',
                onAction: function(){insertPowrBlock('social-feed');}
              },
              {
                type: 'menuitem',
                text: 'Multi Slider',
                onAction: function(){insertPowrBlock('multi-slider');}
              },
              {
                type: 'menuitem',
                text: 'Countdown Timer',
                onAction: function(){insertPowrBlock('countdown-timer');}
              },
              {
                type: 'menuitem',
                text: 'FAQ',
                onAction: function(){insertPowrBlock('faq');}
              },
              {
                type: 'menuitem',
                text: 'Chat',
                onAction: function(){insertPowrBlock('chat');}
              },
              {
                type: 'menuitem',
                text: 'Ecommerce',
                onAction: function(){insertPowrBlock('ecommerce');}
              },
              {
                type: 'menuitem',
                text: 'Comments',
                onAction: function(){insertPowrBlock('comments');}
              },
              {
                type: 'menuitem',
                text: 'Social Media Icons',
                onAction: function(){insertPowrBlock('social-media-icons');}
              },
              {
                type: 'menuitem',
                text: 'Price Table',
                onAction: function(){insertPowrBlock('price-table');}
              }
            ]
          }
        },
        {
          type: 'nestedmenuitem',
          text: 'Forms & Surveys',
          getSubmenuItems: function(){
            return [
              {
                type: 'menuitem',
                text: 'Contact Form',
                onAction: function(){insertPowrBlock('contact-form');}
              },
              {
                type: 'menuitem',
                text: 'Form Builder',
                onAction: function(){insertPowrBlock('form-builder');}
              },
              {
                type: 'menuitem',
                text: 'Mailing List',
                onAction: function(){insertPowrBlock('mailing-list');}
              },
              {
                type: 'menuitem',
                text: 'Order Form',
                onAction: function(){insertPowrBlock('order-form');}
              },
              {
                type: 'menuitem',
                text: 'Poll',
                onAction: function(){insertPowrBlock('poll');}
              },
              {
                type: 'menuitem',
                text: 'Survey',
                onAction: function(){insertPowrBlock('survey');}
              },
            ]
          }
        },
        {
          type: 'nestedmenuitem',
          text: 'Galleries & Sliders',
          getSubmenuItems: function(){
            return [
              {
                type: 'menuitem',
                text: 'Banner Slider',
                onAction: function(){insertPowrBlock('banner-slider');}
              },
              {
                type: 'menuitem',
                text: 'Event Gallery',
                onAction: function(){insertPowrBlock('event-gallery');}
              },
              {
                type: 'menuitem',
                text: 'Event Slider',
                onAction: function(){insertPowrBlock('event-slider');}
              },
              {
                type: 'menuitem',
                text: 'Flickr Gallery',
                onAction: function(){insertPowrBlock('flickr-gallery');}
              },
              {
                type: 'menuitem',
                text: 'Image Slider',
                onAction: function(){insertPowrBlock('image-slider');}
              },
              {
                type: 'menuitem',
                text: 'Media Gallery',
                onAction: function(){insertPowrBlock('media-gallery');}
              },
              {
                type: 'menuitem',
                text: 'Microblog',
                onAction: function(){insertPowrBlock('microblog');}
              },
              {
                type: 'menuitem',
                text: 'Multi-Slider',
                onAction: function(){insertPowrBlock('multi-slider');}
              },
              {
                type: 'menuitem',
                text: 'Photo Gallery',
                onAction: function(){insertPowrBlock('photo-gallery');}
              },
              {
                type: 'menuitem',
                text: 'Video Gallery',
                onAction: function(){insertPowrBlock('video-gallery');}
              },
              {
                type: 'menuitem',
                text: 'Video Slider',
                onAction: function(){insertPowrBlock('video-slider');}
              },
              {
                type: 'menuitem',
                text: 'Youtube Gallery',
                onAction: function(){insertPowrBlock('youtube-gallery');}
              },

            ]
          }
        },
        {
          type: 'nestedmenuitem',
          text: 'Social',
          getSubmenuItems: function(){
            return [
              {
                type: 'menuitem',
                text: 'Chat',
                onAction: function(){insertPowrBlock('chat');}
              },
              {
                type: 'menuitem',
                text: 'Comments',
                onAction: function(){insertPowrBlock('comments');}
              },
              {
                type: 'menuitem',
                text: 'Facebook Feed',
                onAction: function(){insertPowrBlock('facebook-feed');}
              },
              {
                type: 'menuitem',
                text: 'Instagram Feed',
                onAction: function(){insertPowrBlock('instagram-feed');}
              },
              {
                type: 'menuitem',
                text: 'Pinterest Feed',
                onAction: function(){insertPowrBlock('pinterest-feed');}
              },
              {
                type: 'menuitem',
                text: 'Reviews',
                onAction: function(){insertPowrBlock('reviews');}
              },
              {
                type: 'menuitem',
                text: 'RSS Feed',
                onAction: function(){insertPowrBlock('rss-feed');}
              },
              {
                type: 'menuitem',
                text: 'Social Feed',
                onAction: function(){insertPowrBlock('social-feed');}
              },
              {
                type: 'menuitem',
                text: 'Social Media Icons',
                onAction: function(){insertPowrBlock('social-media-icons');}
              },
              {
                type: 'menuitem',
                text: 'Tumblr Feed',
                onAction: function(){insertPowrBlock('tumblr-Feed');}
              },
              {
                type: 'menuitem',
                text: 'Twitter Feed',
                onAction: function(){insertPowrBlock('twitter-feed');}
              },
            ]
          }
        },
        {
          type: 'nestedmenuitem',
          text: 'eCommerce',
          getSubmenuItems: function(){
            return [
              {
                type: 'menuitem',
                text: 'Ecommerce',
                onAction: function(){insertPowrBlock('ecommerce');}
              },
              {
                type: 'menuitem',
                text: 'Digital Download',
                onAction: function(){insertPowrBlock('digital-download');}
              },
              {
                type: 'menuitem',
                text: 'Paypal Button',
                onAction: function(){insertPowrBlock('paypal-button');}
              },
              {
                type: 'menuitem',
                text: 'Plan Comparison',
                onAction: function(){insertPowrBlock('plan-comparison');}
              },
              {
                type: 'menuitem',
                text: 'Price Table',
                onAction: function(){insertPowrBlock('price-table');}
              },
            ]
          }
        },
        {
          type: 'nestedmenuitem',
          text: 'Miscellaneous',
          getSubmenuItems: function(){
            return [
              {
                type: 'menuitem',
                text: 'About Us',
                onAction: function(){insertPowrBlock('about-us');}
              },
              {
                type: 'menuitem',
                text: 'Button',
                onAction: function(){insertPowrBlock('button');}
              },
              {
                type: 'menuitem',
                text: 'Countdown Timer',
                onAction: function(){insertPowrBlock('countdown-timer');}
              },
              {
                type: 'menuitem',
                text: 'Count Up Timer',
                onAction: function(){insertPowrBlock('count-up-timer');}
              },
              {
                type: 'menuitem',
                text: 'Price Table',
                onAction: function(){insertPowrBlock('price-table');}
              },
              {
                type: 'menuitem',
                text: 'FAQ',
                onAction: function(){insertPowrBlock('faq');}
              },
              {
                type: 'menuitem',
                text: 'Graph',
                onAction: function(){insertPowrBlock('graph');}
              },
              {
                type: 'menuitem',
                text: 'Hit Counter',
                onAction: function(){insertPowrBlock('hit-counter');}
              },
              {
                type: 'menuitem',
                text: 'Job Board',
                onAction: function(){insertPowrBlock('job-board');}
              },
              {
                type: 'menuitem',
                text: 'Map',
                onAction: function(){insertPowrBlock('map');}
              },
              {
                type: 'menuitem',
                text: 'Menu',
                onAction: function(){insertPowrBlock('menu');}
              },
              {
                type: 'menuitem',
                text: 'Music Player',
                onAction: function(){insertPowrBlock('music-player');}
              },
              {
                type: 'menuitem',
                text: 'Notification Bar',
                onAction: function(){insertPowrBlock('notification-bar');}
              },
              {
                type: 'menuitem',
                text: 'Popup',
                onAction: function(){insertPowrBlock('popup');}
              },
              {
                type: 'menuitem',
                text: 'Resume',
                onAction: function(){insertPowrBlock('resume');}
              },
              {
                type: 'menuitem',
                text: 'Scroll to Top',
                onAction: function(){insertPowrBlock('scroll-to-top');}
              },
              {
                type: 'menuitem',
                text: 'Tabs',
                onAction: function(){insertPowrBlock('tabs');}
              },
              {
                type: 'menuitem',
                text: 'weather',
                onAction: function(){insertPowrBlock('weather');}
              },

            ]
          }
        },
      ]
      callback(items);
    }
  });
});
