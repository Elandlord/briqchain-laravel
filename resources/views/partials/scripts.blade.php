<script>
    window.consentlySettings = {
        projectId: 'briqchain.com-d98076fda'
    };
    (function () {
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = 'https://consentlycloud.com/loader.js';
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
    })();
</script>

{{-- Collectjs --}}
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/collect.js/4.0.19/collect.min.js"></script>

{{--Application app.js--}}
<script type="text/javascript" src="js/app.js?1.1.0"></script>

{{--Vimeo player api script--}}
<script src="https://player.vimeo.com/api/player.js"></script>
<script>
    var iframe = document.getElementById('briq_video');
    if(iframe !== null){
        var player = new Vimeo.Player(iframe);
        player.on('play', function() {
            ga('send', 'event', 'Video', 'Play Video', 'Zo werkt het');
        });
    }
</script>

<!-- Start of Sleeknote signup and lead generation tool - www.sleeknote.com -->
{{-- <script id="sleeknoteScript" type="text/javascript">
    (function (){
        var sleeknoteScriptTag=document.createElement("script");
        sleeknoteScriptTag.type="text/javascript";
        sleeknoteScriptTag.charset="utf-8";
        sleeknoteScriptTag.src=("//sleeknotecustomerscripts.sleeknote.com/13839.js");
        var s=document.getElementById("sleeknoteScript");
        s.parentNode.insertBefore(sleeknoteScriptTag, s);
    })(); </script> --}}
<!-- End of Sleeknote signup and lead generation tool - www.sleeknote.com -->

<!--Start of Tawk.to Script-->
{{-- <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5a33ca3df4461b0b4ef88ee0/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script> --}}
<!--End of Tawk.to Script-->

{{--Jquery --}}
<script
        src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
        crossorigin="anonymous"></script>

<script src="/js/frontier.js?100"></script>

{{--GA Events for pre register--}}
<script type="text/javascript">
    $('#preRegisterEvent').click(function() {
        ga('send', 'event', 'Pre-register', 'Pre registreren');
        fbq('track', 'Lead');
    });
</script>

<script>
    !function(){var analytics=window.analytics=window.analytics||[];if(!analytics.initialize)if(analytics.invoked)window.console&&console.error&&console.error(“Segment snippet included twice.“);else{analytics.invoked=!0;analytics.methods=[“trackSubmit”,“trackClick”,“trackLink”,“trackForm”,“pageview”,“identify”,“reset”,“group”,“track”,“ready”,“alias”,“debug”,“page”,“once”,“off”,“on”];analytics.factory=function(t){return function(){var e=Array.prototype.slice.call(arguments);e.unshift(t);analytics.push(e);return analytics}};for(var t=0;t<analytics.methods.length;t++){var e=analytics.methods[t];analytics[e]=analytics.factory(e)}analytics.load=function(t,e){var n=document.createElement(“script”);n.type=“text/javascript”;n.async=!0;n.src=“https://cdn.segment.com/analytics.js/v1/“+t+“/analytics.min.js”;var a=document.getElementsByTagName(“script”)[0];a.parentNode.insertBefore(n,a);analytics._loadOptions=e};analytics.SNIPPET_VERSION=“4.1.0”;
        analytics.load(“oZYB9WsfZyEuCpOhxbGIczDtfpCOyFZb”);
        analytics.page();
    }}();
</script>

<script>!function(){var a=window.VL=window.VL||{};return a.instances=a.instances||{},a.invoked?void(window.console&&console.error&&console.error(“VL snippet loaded twice.“)):(a.invoked=!0,void(a.load=function(b,c,d){var e={};e.publicToken=b,e.config=c||{};var f=document.createElement(“script”);f.type=“text/javascript”,f.id=“vrlps-js”,f.defer=!0,f.src=“https://app.viral-loops.com/client/vl/vl.min.js“;var g=document.getElementsByTagName(“script”)[0];return g.parentNode.insertBefore(f,g),f.onload=function(){a.setup(e),a.instances[b]=e},e.identify=e.identify||function(a,b){e.afterLoad={identify:{userData:a,cb:b}}},e.pendingEvents=[],e.track=e.track||function(a,b){e.pendingEvents.push({event:a,cb:b})},e.pendingHooks=[],e.addHook=e.addHook||function(a,b){e.pendingHooks.push({name:a,cb:b})},e.$=e.$||function(a){e.pendingHooks.push({name:“ready”,cb:a})},e}))}();var campaign=VL.load(“y1ubnApQAkbRA3HxKpiar03_7vo”,{autoLoadWidgets:!0});campaign.addHook(“boot”,function(){campaign.widgets.create(“rewardingWidget”,{container:“body”,position:“bottom-left”}),campaign.widgets.create(“rewardingWidgetTrigger”,{container:“body”,position:“bottom-left”})});</script>