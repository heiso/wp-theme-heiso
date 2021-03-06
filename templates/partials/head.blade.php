<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="theme-color" content="#157878">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Raleway:200" rel="stylesheet">
  @php(wp_head())
  @if (get_header_image())
  <style>
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      color: #{{header_textcolor()}} !important;
    }
  </style>
  @endif
</head>
