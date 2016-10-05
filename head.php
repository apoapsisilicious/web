
<!--Google Analytics[start]-->

<!-- Google analytics[end] -->

<!--favicon, favico, ico, favicon.ico what ever you may call it[start]-->
<link rel="apple-touch-icon" sizes="180x180" href="/assets/media/favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" href="/assets/media/favicons/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="/assets/media/favicons/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="/assets/media/favicons/manifest.json">
<link rel="mask-icon" href="/assets/media/favicons/safari-pinned-tab.svg" color="#4f4f4f">
<link rel="shortcut icon" href="/assets/media/favicons/favicon.ico">
<meta name="msapplication-config" content="/assets/media/favicons/browserconfig.xml">
<meta name="theme-color" content="#4f4f4f">
<!-- favicon[end] -->

<!-- Retrive html that is will chage equally over all pages over all pages[start] -->
<!-- transelement-place you put where you want the included html and transelement-origin is only placed once in the source file and not on this page -->
<!-- sidebar[start] -->
  <script>
      $(document).ready(function(){
          $('#transelement-sidebar-place').load('assets/html/transelemts/sidebar.php #transelement-sidebar-origin');
      });
  </script>
<!-- sidebar[end] -->

<!-- navigation[start] -->
<script>
    $(document).ready(function(){
        $('#transelement-nav-place').load('assets/html/transelemts/nav.php #transelement-nav-origin');
    });
</script>
<!-- navigation[end] -->
<!-- Retrive html that is static ovrer all pages[end] -->

<!-- External font[start] -->
<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300|Lato:400,300,100,700|Cutive+Mono' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- External fonts[end] -->
