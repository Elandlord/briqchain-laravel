{{-- Google analytics--}}

@if((env('ANALYTICS')) != null)
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', '<?php echo env('ANALYTICS'); ?>', 'auto');
        ga('send', 'pageview');
    </script>
@endif

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
<script id="sleeknoteScript" type="text/javascript">
    (function (){
        var sleeknoteScriptTag=document.createElement("script");
        sleeknoteScriptTag.type="text/javascript";
        sleeknoteScriptTag.charset="utf-8";
        sleeknoteScriptTag.src=("//sleeknotecustomerscripts.sleeknote.com/13839.js");
        var s=document.getElementById("sleeknoteScript");
        s.parentNode.insertBefore(sleeknoteScriptTag, s);
    })(); </script>
<!-- End of Sleeknote signup and lead generation tool - www.sleeknote.com -->

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5a33ca3df4461b0b4ef88ee0/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
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