<?php
if (!defined('BASE_URL')) {
  $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443)) ? "https://" : "http://";
  $host = $_SERVER['HTTP_HOST'] ?? 'localhost';
  $scriptDir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? ''));
  $projectRoot = ($scriptDir === '/' || $scriptDir === '.' || $scriptDir === '') ? '/' : rtrim($scriptDir, '/') . '/';
  if (strpos($host, 'university360.co') !== false) {
    define('BASE_URL', 'https://university360.co/');
  } else {
    define('BASE_URL', $protocol . $host . $projectRoot);
  }
}
$base_url = BASE_URL;
?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="robots" content="index, follow">
<meta name="author" content="UNIVERSITY 360">
<link rel="publisher" href="<?= $base_url ?>">
<link rel="icon" type="image/x-icon"
  href="images/univ360-favicon.ico?v=<?= file_exists(__DIR__ . '/images/univ360-favicon.ico') ? filemtime(__DIR__ . '/images/univ360-favicon.ico') : time() ?>">
<link href="bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700,900|Ubuntu:400,500,700" rel="stylesheet">
<link href="style.css?v=<?= file_exists(__DIR__ . '/style.css') ? filemtime(__DIR__ . '/style.css') : time() ?>"
  rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-18370069099"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag() { dataLayer.push(arguments); }
  gtag('js', new Date());

  gtag('config', 'AW-18370069099');
</script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-M0003CC5DK"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag() { dataLayer.push(arguments); }
  gtag('js', new Date());

  gtag('config', 'G-M0003CC5DK');
</script>

<!-- Meta Pixel Code -->
<script>
  !function (f, b, e, v, n, t, s) {
    if (f.fbq) return; n = f.fbq = function () {
      n.callMethod ?
        n.callMethod.apply(n, arguments) : n.queue.push(arguments)
    };
    if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0';
    n.queue = []; t = b.createElement(e); t.async = !0;
    t.src = v; s = b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t, s)
  }(window, document, 'script',
    'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '1450677136965223');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=1450677136965223&ev=PageView&noscript=1" /></noscript>
<!-- End Meta Pixel Code -->