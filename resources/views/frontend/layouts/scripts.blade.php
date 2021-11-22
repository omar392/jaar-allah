<script data-cfasync="false" src="{{ asset('frontend/assets/js/email-decode.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/form-validator.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/contact-form-script.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery.meanmenu.js') }}"></script>
<script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery-modal-video.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/odometer.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery.appear.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/smoothscroll.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/custom.js') }}"></script>
<script>
    var url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?5505';
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = url;
    var options = {
  "enabled":true,
  "chatButtonSetting":{
      "backgroundColor":"#4dc247",
      "ctaText":"",
      "borderRadius":"100",
      "marginLeft":"20",
      "marginBottom":"50",
      "marginRight":"20",
      "position":"left",
      @if (app()->getLocale() == 'ar')
      "position":"rigth"
      @endif
  },
  "brandSetting":{
      "brandName":"مكتب د . جار الله",
      "brandSubTitle":"يصلك الرد خلال اليوم",
      "brandImg":"{{asset('frontend/assets/img/logo80.png')}}",
      "welcomeText":"أهلا بك \n كيف يمكننى مساعدتك؟",
      "messageText":"كنت أود الاستفسار عن ",
      "backgroundColor":"#0a5f54",
      "ctaText":"إبدأ المحادثة",
      "borderRadius":"30",
      "autoShow":false,
      "phoneNumber":"{{$settings->whatsapp}}"
  }
};
    s.onload = function() {
        CreateWhatsappChatWidget(options);
    };
    var x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
</script>