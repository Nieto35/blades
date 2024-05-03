@extends ('site.layout')

@prepend ('head_scripts')
    {{-- Google Tag Manager --}}
    <script>
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-WXHQ7BF');
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

    <link rel="prefetch" as="style" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Paytone+One&amp;display=swap" onload="this.rel='stylesheet'">

    <style>
        .quote__content--table {
            margin-bottom: 20px;
        }
        .quote__content--table table {
            width: 100%;
            font-family: 'Lato', Tahoma, Verdana, Segoe, sans-serif;
            border-collapse: collapse;
            color: #0c2e69;
        }
        .quote__content--table table thead tr td, .quote__content--table table tbody tr td, .quote__content--table table tfoot tr td {
            padding: 20px;
        }
        .quote__content--table table thead tr td:first-child, .quote__content--table table tbody tr td:first-child, .quote__content--table table tfoot tr td:first-child {
            border-right: 1px solid #fff;
        }
        .quote__content--table table thead tr {
            background-color: #cedfe9;
            font-size: 140%;
            line-height: 50px;
            white-space: nowrap;
        }
        .quote__content--table table thead tr td {
            text-align: center;
        }
        .quote__content--table table tfoot tr {
            border: 4px solid #ff595a;
            background-color: #fff8fc;
            font-weight: bold;
            white-space: nowrap;
        }
        .quote__content--table table tfoot tr td {
            font-size: 18px;
        }
        .quote__content--table table tfoot tr td:last-child {
            text-align: center;
        }
        .quote__content--table table tbody tr:nth-child(even) {
            background-color: #fbc1c1;
        }
        .quote__content--table table tbody tr:nth-child(even) td:first-child {
            border-right: 1px solid #fff;
        }
        .quote__content--table table tbody tr:nth-child(odd) td:first-child {
            border-right: 1px solid #f1f3f3;
        }
        .quote__content--table table tbody tr.subresult {
            color: #999;
            background-color: #fff;
        }
        .quote__content--table table tbody tr td {
            font-size: 18px;
            padding: 20px;
        }
        .quote__content--table table tbody tr td:nth-child(2) {
            text-align: center;
        }
        .quote__content--table .quote__content--table__trigger {
            color: #ff595a;
            font-size: 80%;
            cursor: pointer;
        }
        .quote__content--table .quote__content--table__content {
            display: none;
        }
        .quote__content--table .quote__content--table__content.is-active {
            display: table-row-group;
        }
        .quote__content--table .quote__content--table__quota__info__content {
            display: none;
            font-size: 80%;
        }
        .quote__content--table .quote__content--table__quota__info__content.is-active {
            display: table-row;
        }
        .quote__content--table .quote__content--table__quota__info__content .delete {
            float: right;
        }
        .quote__pay {
            margin-bottom: 20px;
        }
        .quote__pay, .quote__pay .subtitle {
            color: #0c2e69;
        }
        .quote__pay .quote__pay--header {
            margin-bottom: 10px;
        }
        .quote__pay .quote__pay--summary {
            margin-bottom: 20px;
        }
        .quote__pay .quote__pay--summary .quote__pay--summary__info__content {
            display: none;
            font-size: 80%;
        }
        .quote__pay .quote__pay--summary .quote__pay--summary__info__content.is-active {
            display: block;
        }
        .quote__pay .quote__pay--summary .quote__pay--summary__info__content .delete {
            float: right;
        }
        .quote__pay .quote__pay--total span {
            font-weight: bold;
            font-size: 300%;
            color: #ff595a;
        }
        .quote__pay .quote__pay--upselling .quote__pay--upselling__item {
            margin-bottom: 10px;
            background-color: #cedfe9;
            padding: 10px;
        }
        .quote__pay .quote__pay--upselling .quote__pay--upselling__item .control > label {
            margin-bottom: 0;
            color: #0c2e69;
            font-weight: bold;
        }
        .quote__pay .quote__pay--upselling .quote__pay--upselling__item .control > label > input {
            margin-left: 10px;
        }
        .quote__options .quote__options--header .subtitle {
            margin-bottom: 20px;
            color: #0c2e69;
        }
        .quote__options .quote__options--option:not(:last-child) {
            margin-bottom: 20px;
        }
        .quote__options .quote__options--option .quote__options--option__header > h4 {
            border-bottom: 1px solid #f5f5f5;
            padding-bottom: 5px;
            margin-bottom: 10px;
            color: #0c2e69;
        }
        .quote__options .quote__options--option .quote__options--option__header > p {
            margin-bottom: 20px;
        }
        .quote__options .quote__options--option .quote__options--option__content .quote__options--option__title, .quote__options .quote__options--option .quote__options--option__content .quote__options--option__summary, .quote__options .quote__options--option .quote__options--option__content .quote__options--option__total, .quote__options .quote__options--option .quote__options--option__content .quote__options--option__selection__cost {
            color: #0c2e69;
        }
        .quote__options .quote__options--option .quote__options--option__content .quote__options--option__title {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
        .quote__options .quote__options--option .quote__options--option__content .quote__options--option__summary {
            font-weight: bold;
        }
        .quote__options .quote__options--option .quote__options--option__content .quote__options--option__total span {
            color: #ff595a;
            font-weight: bold;
        }
        .quote__options .quote__options--option.quote__options--option__externa .quote__options--option--slider__7__days .control {
            margin-bottom: 10px;
            background-color: #fbc1c1;
            padding: 10px;
        }
        .quote__options .quote__options--option.quote__options--option__externa .quote__options--option--slider__7__days .control > label {
            margin-bottom: 0;
            color: #0c2e69;
            font-weight: bold;
        }
        .quote__options .quote__options--option.quote__options--option__externa .quote__options--option--slider__7__days .control > label > input {
            margin-left: 10px;
        }
        .quote__options .quote__options--option.quote__options--option__externa .quote__options--option--slider__7__days > p {
            margin-bottom: 10px;
        }
        .quote__content {
            padding: 20px;
        }
        .quote__content .quote__content--header {
            margin-bottom: 20px;
        }
        .quote__content .quote__content--header .title, .quote__content .quote__content--header .subtitle {
            color: #0c2e69;
        }
        @media screen and (max-width: 500px) {
            .quote__content .quote__content--header .title {
                font-size: 2rem !important;
            }
        }
        .quote__content .quote__content--header .quote__content--header__share {
            text-align: right;
        }
        .quote__content .quote__content--header .quote__content--header__share ul {
            display: inline-block;
        }
        .quote__content .quote__content--header .quote__content--header__share ul li {
            text-align: left;
        }
        .quote__content .quote__content--intro {
            margin-bottom: 20px;
            color: #0c2e69;
        }
        .quote__content .quote__content--intro .quote__content--intro__total span {
            font-weight: bold;
            font-size: 300%;
            color: #ff595a;
        }
        .quote__content .quote__content--intro .quote__content--intro__info .quote__content--intro__info__trigger {
            font-weight: bold;
        }
        .quote__content .quote__content--intro .quote__content--intro__info .quote__content--intro__info__content {
            display: none;
            font-size: 80%;
        }
        .quote__content .quote__content--intro .quote__content--intro__info .quote__content--intro__info__content.is-active {
            display: block;
        }
        .quote__content .quote__content--intro .quote__content--intro__info .quote__content--intro__info__content .delete {
            float: right;
        }
        .quote__sidebar {
            padding: 20px;
        }
        .quote__sidebar .quote__sidebar--content .quote__sidebar--doubt {
            margin-bottom: 10px;
        }
        .quote__sidebar .quote__sidebar--content .quote__sidebar--doubt .quote__sidebar--doubt__item {
            cursor: pointer;
            background-color: #ff595a;
            color: #fff;
            font-size: 100%;
            font-weight: bolder;
            line-height: 30px;
            padding: 10px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        .quote__sidebar .quote__sidebar--content .quote__sidebar--doubt .quote__sidebar--doubt__content {
            display: none;
            padding: 10px;
            font-size: 80%;
            border: 1px solid rgba(102, 102, 102, 0.1);
            background-color: #fff;
        }
        .quote__sidebar .quote__sidebar--content .quote__sidebar--doubt .quote__sidebar--doubt__content .quote__sidebar--doubt__share {
            list-style: none;
        }
        .quote__sidebar .quote__sidebar--content .quote__sidebar--doubt.is-active .quote__sidebar--doubt__content {
            display: block;
        }
        #swal2-content label.minilab {
            width: 100%;
            font-size: 1.2rem;
            color: #0c2e69;
            text-align: left;
        }
        #swal2-content label.minilab input, #swal2-content label.minilab select {
            margin-right: 20px;
            display: inline;
            float: right;
            font-size: 90%;
            color: rgba(51, 51, 51, 1);
        }
        #swal2-content p {
            margin-bottom: 5px;
            margin-top: 5px;
        }
        .chicle {
            color: #ff595a;
        }
        .button.button-cherry {
            background-color: #ff595a;
            border-color: #ff595a;
        }
        .StripeElement {
            box-sizing: border-box;
            height: 40px;
            padding: 10px 12px;
            border: 1px solid transparent;
            border-radius: 4px;
            background-color: white;
            box-shadow: 0 1px 3px 0 #e6ebf1;
            -webkit-transition: box-shadow 150ms ease;
            transition: box-shadow 150ms ease;
        }
        .StripeElement.StripeElement--focus {
            box-shadow: 0 1px 3px 0 #cfd7df;
        }
        .StripeElement.StripeElement--invalid {
            border-color: #fa755a;
        }
        .StripeElement.StripeElement--webkit-autofill {
            background-color: #fefde5 !important;
        }
        .card .card-loader {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
            display: none;
            background-color: rgba(51, 51, 51, 0.4);
            z-index: 100;
            justify-content: center;
            align-items: center;
        }
        .card .card-loader span i {
            color: #0c2e69;
        }
        .card.is-loading .card-loader {
            display: flex;
        }
    </style>
@endprepend

@prepend ('scripts')
    <script src="https://aiudo.es/wp-content/themes/concept_2019/js/modernizr.js"></script>
    <script src="https://aiudo.es/wp-content/themes/concept_2019/js/bulma.js"></script>
    <script async defer src="https://aiudo.es/wp-content/themes/concept_2019/js/call-modal.js"></script>
    <script async defer src="https://aiudo.es/wp-content/themes/concept_2019/js/blog-entries.js"></script>
    <script async defer src="https://kit.fontawesome.com/495218e886.js"></script>

    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6%2CIntersectionObserver"></script>
    <script>
        window.lazyLoadOptions = {
            elements_selector: ".lazy"
        };
    </script>
    <script async src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@12.0.0/dist/lazyload.min.js"></script>
@endprepend

@section ('content')
    {{-- Google Tag Manager --}}
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WXHQ7BF" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    @yield ('content')
@overwrite
