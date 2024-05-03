@extends ('site.layout')

@prepend ('head_scripts')
    {{-- Seguimiento de Adwords --}}
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-878433697"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'AW-878433697');
    </script>
    {{-- Analytics --}}
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-80431512-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-80431512-1', { 'optimize_id': 'GTM-MFJWF5P' });
    </script>
    {{-- Bing --}}
    <script>(function(w,d,t,r,u){var f,n,i;w[u]=w[u]||[],f=function(){var o={ti:"16003451"};o.q=w[u],w[u]=new UET(o),w[u].push("pageLoad")},n=d.createElement(t),n.src=r,n.async=1,n.onload=n.onreadystatechange=function(){var s=this.readyState;s&&s!=="loaded"&&s!=="complete"||(f(),n.onload=n.onreadystatechange=null)},i=d.getElementsByTagName(t)[0],i.parentNode.insertBefore(n,i)})(window,document,"script","//bat.bing.com/bat.js","uetq");</script>
    {{-- Facebook --}}
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '207989389623762');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=207989389623762&ev=PageView&noscript=1" /></noscript>
    {{-- OneSignal --}}
    <script async src="https://cdn.onesignal.com/sdks/OneSignalSDK.js"></script>
    <script>
        var OneSignal = window.OneSignal || [];
        OneSignal.push(function() {
            OneSignal.init({
                appId: "0a7109db-bd14-4b1a-8fc1-ca053d5e0a79",
            });
        });
    </script>
    {{-- ProveSource --}}
    <script>!function(o,i){provesrc=window.provesrc={dq:[],display:function(o,i){this.dq.push({n:o,g:i})}},o._provesrcAsyncInit=function(){provesrc.init({apiKey:"eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJhY2NvdW50SWQiOiI1Y2RhNmQ1YTRlOTNiMDM2ODM1ODk4ZDMiLCJpYXQiOjE1NTc4MTg3MTR9.oj1rVzpqyMRLR2Z8NlpgqjGM-xTP8Kmh_RV8sXvyWww",v:"0.0.3"})};var r=i.createElement("script");r.type="text/javascript",r.async=!0,r.charset="UTF-8",r.src="https://cdn.provesrc.com/provesrc.js";var e=i.getElementsByTagName("script")[0];e.parentNode.insertBefore(r,e)}(window,document);</script>
@endprepend

@prepend ('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.7.5/css/bulma.min.css">
    <link rel="stylesheet" href="https://aiudo.es/wp-content/themes/concept_2019/css/helpers.css">
    <link rel="stylesheet" href="https://aiudo.es/wp-content/themes/concept_2019/style.css">
    <link rel="stylesheet" href="{{ secure_url(mix('dist/site/css/app.css')) }}">

    <link rel="prefetch" as="style" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Paytone+One&amp;display=swap" onload="this.rel='stylesheet'">
@endprepend

@prepend ('scripts')
    <script src="https://aiudo.es/wp-content/themes/concept_2019/js/modernizr.js"></script>
    <script src="https://aiudo.es/wp-content/themes/concept_2019/js/bulma.js"></script>
    <script src="{{ secure_url(mix('dist/site/js/manifest.js')) }}"></script>
    <script src="{{ secure_url(mix('dist/site/js/vendor.js')) }}"></script>
    <script src="{{ secure_url(mix('dist/site/js/app.js')) }}"></script>

    <script async defer src="https://aiudo.es/wp-content/themes/concept_2019/js/call-modal.js"></script>
    <script async defer src="https://aiudo.es/wp-content/themes/concept_2019/js/blog-entries.js"></script>
    <script async defer src="https://kit.fontawesome.com/495218e886.js"></script>
@endprepend

@section ('content')
    @yield ('content')
@overwrite
