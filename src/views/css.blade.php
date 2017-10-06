<style>
  @import url('https://fonts.googleapis.com/css?family=Anton|Cabin:400,700');
  @import url('https://fonts.googleapis.com/css?family=Pacifico');

  html {
    position: relative;
    min-height: 100%;
  }

  body {
    /*font-family: 'Cabin', sans-serif;*/
    font-size: .70rem !important;
    padding-top: 70px !important;
    /*background-image: url('https://storage.googleapis.com/decimaerp/organizations/8/mosaico_cuadrado.jpg');*/
  }

  footer {
    position: relative;
    bottom: 0;
    /*background: rgba(109,145,38,0.6) !important;*/
    background: rgb(109,145,38) !important;
    width: 100%;
    height: auto !important;
    /*background-color: #000;*/
    /*opacity: 0.7;*/
    /*filter: alpha(opacity=70);*/
    /*height: 370px;*/
  }

  label {
    font-size: 1rem !important;
  }

  .top-bar {
    /*background-color: #D6D6D6;*/
    /*background: rgba(252,252,252,0.7) !important;*/
    /*border: 1px solid #6d9126;*/
    /*background-color: #6d9126;*/
    /*background-color: rgb(247, 247, 247);*/
  }

  .nav-item > a {
    /*color: #ba53a6 !important;*/
    /*font-family: 'Pacifico', cursive !important;*/
    /*color: #6d9126 !important;*/
  }


  .content-section-a {
    padding: 30px 0;
    /*background-color: #fff;*/
  }

  .content-section-b {
    padding: 30px 0;
    background-color: #f8f8f8;
    border-top: 1px solid #e7e7e7;
    border-bottom: 1px solid #e7e7e7;
  }

  .section-title {
    /*margin-top: 1.5rem!important;*/
    margin-bottom: 1.5rem!important;
  }

  .footer-margin {
    /*height:30px;*/
  }

  /*Boton de formulrio de amigos*/
  .btn-footer-suscribe {
    padding: 0px;
    font-size: 1.8em;
    /*font-family: 'Cabin', sans-serif;*/
    /*width: 300px !important;*/
    width: 100%;
    height: 31px !important;
    /*background-color: #937CA7 !important;*/
    /*color: #FFFFFF !important;*/
    /*border-color: #937CA7 !important;*/
    /*font-family: 'Questrial', sans-serif !important;*/
    /*border-radius: 0;*/
  }

  .btn-footer-suscribe:hover {
    color: #937CA7 !important;;
    background-color: #FFFFFF !important;
    border-color: #FFFFFF !important;
  }

  .btn-footer-suscribe:disabled {
    background-color: #FFFFFF !important;
    color: #fff !important;
  }


  /*tamaño campos formulario footer */
  .cs-ac
  {
    /*width: 300px !important;*/
    /*height: 31px !important;*/
  }

  .cs-ac, .cs-af {
    margin-bottom: 10px;
  }

  .cs-ac p {
    text-align: left !important;
  }

  .cs-ac input {
    border-color: #937CA7;
  }

  .fb-like, .fb_iframe_widget {

    /*width: 200px !important;*/
  }

  /*color texto helper*/
  .help-block {
    color: #777373;
  }

 /*Tipografía títulos, botones y filtros */
  .tittle-filter-buttons-font, .card-title-nos, .card-title-abc, .card-title-footer, .img-txt-header, .fake-link{
    /*font-family: 'Cabin', sans-serif !important;
    color: #FFFFFF !important;*/
  }

  /*Top bar titles color*/
  .nav-link {
    /*font-family: 'Cabin', sans-serif !important;*/
    /*font-size:1.34em;*/
    /*color: #FFFFFF !important;*/
  }

  /*Image headers*/
  .img-txt-header {
   font-size: 72px;
   color: #000000 !important;
   text-align: right;
   padding-top: 120px !important;
   padding-right: 90px !important;
  }

 .image-filter {
   filter: opacity(50%);
 }

  /*Carousel*/
  .carousel {
    padding-left: 0px !important;
    padding-right: 0px !important;
  }

  .carousel-item.active,
  .carousel-item-next,
  .carousel-item-prev {
  display: block !important;
  }



  .badge-primary {
    background-color: #23241e !important;
  }

  .items {
    width: 100% !important;
  }

  .dt-os-pager-pages-info, .dt-os-pager-pages-info.disabled, .dt-os-pager-pages-info:disabled,
  .cms-blog-pager-pages-info, .cms-blog-pager-pages-info.disabled, .cms-blog-pager-pages-info:disabled {
    background-color: #fff !important;
    border-color: #937CA7 !important;
    color: #937CA7 !important;
  }

  .btn-shpng-crt .fa, .btn-float-fltrs .fa {
    font-size: 2em;
  }

  /* Social icons*/
  .navbar-social-icon {
    margin-left: -0.6rem !important;
  }

  .footer-icon-color {
    color: #fff;
    font-size: 1.5em;
  }

  /*Blog posts*/

  .grid figure figcaption {
  	display: none;
  }

  .blog-post-resume {
    margin-bottom: 0.2rem;
  }

  .blog-post-meta-top {
  	display: none;
  }

  .blog-preview-post-title {
    margin-top: 0.2rem;
    margin-bottom: 0.2rem;
    font-weight: bold;
    font-size: 1.1rem !important;
    text-align: justify;
  }

  .blog-preview-text-container {
    background-color: #cccccc;
    padding: 5px;
    min-height: 175px;
  }

  .blog-post-meta {
    color: #999;
  }

  /*Callouts*/

  .bd-callout {
    padding: 1.25rem;
    margin-top: 1.25rem;
    margin-bottom: 1.25rem;
    border: 1px solid #eee;
    border-left-width: .25rem;
    border-radius: .25rem;
  }

  .bd-callout h4 {
    margin-top: 0;
    margin-bottom: .25rem;
  }

  .bd-callout p:last-child {
    margin-bottom: 0;
  }

  .bd-callout code {
    border-radius: .25rem;
  }

  .bd-callout + .bd-callout {
    margin-top: -.25rem;
  }

  .bd-callout-info {
    border-left-color: #159bc3;
  }

  .bd-callout-info > h4{
    color: #159bc3;
  }

  .bd-callout-warning { }
  .bd-callout-danger { }

  /* Twitter */
  .twitter-well {
    padding:5px 19px 5px 19px !important;
  }

  /* Profile */
  .profile-well {
    padding:10px 19px 10px 19px !important;
  }

  .profile-well p{
    margin-bottom: 0px;
  }

  .profile-name {
    margin-top:8px !important;
    margin-bottom: 1px !important;
  }

  .profile-description {
    margin:0 0 0 -15px !important;
  }

  /* Adsense */
  .adsense-well {
    padding: 5px 0 2px 0 !important;
    text-align: center;
  }

  /*Documentation classes*/
  .lqp-header {
    margin-bottom: 0px !important;
  }

  .lqp-header-hr {
    margin-top: 10px !important;
  }

  .lqp-well {
    margin-bottom: 10px !important;
  }

  .lqp-bottom {
    margin-bottom: 20px;
  }

  pre.prettyprint {
    background-color: #fff !important;
    display: block;
    overflow: auto;
    width: auto;
    max-width:750px;
    white-space: pre;
    word-wrap: normal;
  }

  .prettyprint ol.linenums > li {
    list-style-type: decimal;
    font-size:13px !important;
  }

  .zero-clipboard {
    position: relative;
    display: none;
  }

  .btn-clipboard {
    position:absolute;
    top:0;
    right:0;
    z-index:10;
    display:block;
    padding:5px 8px;
    font-size:12px;
    color:#777;
    cursor:pointer;
    background-color:#fff;
    border:1px solid #e1e1e8;
    border-radius:0 4px 0 4px
  }

  .btn-clipboard-hover {
    color:#fff;
    background-color:#777;
  }

  .msg-post-title {
    margin-top: 6px;
    font-size: 14px;
  }

  .msg-post-text {
    font-size: 13px;
  }

  .post-reply {
    font-size: 18px;
  }

  .post-hr {
    border-top: 2px solid #dcdcdc !important;
    margin-top: 10px !important;
  }

  .post-form {
    margin-bottom: 10px;
  }

  .form-textarea .help-block {
    float: left;
  }

  /*Media*/
  @media (max-width: 767px) {

    .navbar-social {
      margin-right: 10px;
    }

    .social-post {
      float: left !important;
    }

    .post-header {
      margin-bottom: 10px !important;
      margin-top: 0px !important;
    }

  }

  @media (min-width: 768px) {

    .zero-clipboard {
      display: block;
    }

    .subtitile-post-date {
      float: left !important;
    }

    .subtitile-post-social {
      float: right !important;
    }

    .social-post {
      float: right !important;
    }

    .post-header {
      margin-bottom: 0px !important;
      margin-top: 5px !important;
    }

  }

  @media (min-width: 992px) and (max-width: 1199px){

    pre.prettyprint {
      max-width:940px !important;
    }

    .google-post {
      margin-top: 30px;
      margin-left: 65px;
      float: none !important;
    }

  }

  @media (min-width: 1200px){

    .social-well {
      float: right !important;
    }

    .google-well {
      margin-top: 30px;
    }

  }

  @media (max-width: 767px), (min-width: 768px) and (max-width: 1199px){

    .social-well {
      display:inline-block;
    }

    .fb-like span {
      vertical-align: inherit !important;
    }

    .google-well {
      display:inline-block;
    }

  }

  /* Pasar aqui todos los medias,...*/

  /*Extra small devices (portrait phones, less than 576px)*/
  @media (max-width: 575px) {

    body {
      /*padding-top: 110px;*/
    }

    .header-height {
      max-height:90px;
    }

    .phone-margin-section {
      margin-top: 20px;
    }
  }

  /*From Small devices to extra large*/
  @media (min-width: 576px) {

    .header-height {
      max-height:200px;
    }
  }

  /*Small devices (landscape phones, 576px and up)*/
  @media (min-width: 576px) and (max-width: 767px) {
    body {
      /*padding-top: 110px;*/
    }


  }

  /*Extra small devices and Small devices*/
  @media (max-width: 767px){

    .nv-decima-web {
       margin-left: 0 !important;
    }

    .navbar-brand {
      display: inline !important;
    }

    .navbar-brand > img {
      width: 35%;
      height: auto;
    }

    .btn-float-fltrs {
    	right:19% !important;
    }

    figure.effect-honey h2 {
    	padding: 0.5em 0.5em !important;
      font-size: 1.5rem !important;
    }
  }

  /*From Medium devices to extra large*/
  @media (min-width: 768px) {
    body {
      /*padding-top: 110px;*/
    }
  }

  /*Medium devices (tablets, 768px and up)*/
  @media (min-width: 768px) and (max-width: 991px) {

  }

  /*Small and medium devices (landscape phones, 576px and up)*/
  @media (min-width: 576px) and (max-width: 991px) {
    .bottom-margin-section {
      margin-top: 20px;
    }
  }

  /*Medium devices and Large devices*/
  @media (min-width: 768px) and (max-width: 1199px)
  {
    figure.effect-honey h2 {
    	padding: 0em 0.5em !important;
      font-size: 1.5rem !important;
    }
  }

  /*Extra small devices, Small devices and medium devices*/
  @media (max-width: 991px) {
    /*body {
      padding-top: 90px !important;
    }*/

    .btn-comic-title {
      font-size: 2em;
    }

    .nav-link {
      font-size:1.40em;
      text-align: center;
    }

    .imagen-cinta {
      width:40%;
    }

  }

  /*Large devices (desktops, 992px and up)*/
  @media (min-width: 992px) and (max-width: 1199px) {
    .btn-comic-title {
      font-size: 1.7em;
    }
  }

  /*Large and Extra large devices*/
  @media (min-width:992px) {
    .nav-link {
      font-size:1.34em;
      margin-left: 40px;
    }
    .imagen-cinta {
      width:15%;
    }

    /*body {
      padding-top: 0px !important;
    }*/
    /*.nav-link {
      margin-left: 40px;
    }*/

  }

  /*Extra large devices (large desktops, 1200px and up)*/
  @media (min-width: 1200px) {
    .btn-comic-title {
      font-size: 2em;
    }
  }

  /*Custom*/
  @media (min-width: 768px) and (max-width: 863px)
  {
    .btn-float {
  		top:12% !important;
  	}

    .btn-float-fltrs {
      top:20% !important;
    }
  }

  /*Custom*/
  @media (max-width: 1199px), (max-height:679px)
  {

  }

</style>
