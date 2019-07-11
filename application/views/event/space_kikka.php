<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="<?= base_url('static/sevenevent/css/seven.css') ?>" rel="stylesheet">
  <link href="<?= base_url('static/sevenevent/css/reset.css') ?>" rel="stylesheet">
  <link href="<?=base_url('static/sevenevent/css/itiran.css') ?>" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js" type="text/javascript"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?= base_url('static/sevenevent/slick/slick/slick.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?= base_url('static/sevenevent/slick/slick/slick-theme.css') ?>">
  <link href="https://fonts.googleapis.com/css?family=Rasa:400,700" rel="stylesheet">
  <script type="text/javascript" src="<?= base_url('static/sevenevent/slick/slick/slick.min.js') ?> "></script>
  <script src="<?= base_url('static/sevenevent/jquery.rotate-master/jquery.rotate.js') ?> "></script>
  <script src="<?= base_url('static/sevenevent/js/seven.js') ?>"></script>
  <script>

  </script>

  <style>
    .space_mv_sp{
      display: none;
    }

    .space_party_sp{
      display: none;
    }

    .space_mv_pc{
      width: 100%;
    }

    .space_mv_pc img{
      width: 100%;
    }

    .space_party_pc{
      width: 80%;
      margin: 0 auto;
    }

    .space_party_pc img{
      width: 100%;
    }

    #space_party{
      width: 100%;
      border-bottom: 1px solid black;
    }

    @media only screen and (max-width: 450px){
      .space_mv_pc{
        display: none;
      }

      .space_mv_sp{
        display: block;
      }

      
    .space_mv_sp{
      width: 100%;
    }

    .space_mv_sp img{
      width: 100%;
    }

    .space_party_sp{
      width: 80%;
      margin: 0 auto;
    }

    .space_party_sp img{
      width: 100%;
    }
    }
  </style>
</head>
<body>
  <div class="wrapper">
    <section id="space_mv">
      <div class="space_mv_pc">
        <img src="https://s3.ap-northeast-1.amazonaws.com/sevengarden/image/3/7garden-イベント_PC1-1561895611.jpg">
      </div>

      <div class="space_mv_sp">
        <img src="https://s3.ap-northeast-1.amazonaws.com/sevengarden/image/3/7garden-イベント_SP1-1561895654.jpg">
      </div>
    </section> 
    
    <section id="space_party">
      <div class="space_party_pc">
        <img src="https://s3.ap-northeast-1.amazonaws.com/sevengarden/image/3/7garden-イベント_PC2-1561895617.jpg">
      </div>

      <div class="space_party_sp">
        <img src="https://s3.ap-northeast-1.amazonaws.com/sevengarden/image/3/7garden-イベント_SP2-1561895662.jpg">
      </div>
    </section>    
    
    <section id="space_party">
      <div class="space_party_pc">
        <img src="https://s3.ap-northeast-1.amazonaws.com/sevengarden/image/3/7garden-イベント_PC3-1561895624.jpg">
      </div>

      <div class="space_party_sp">
        <img src="https://s3.ap-northeast-1.amazonaws.com/sevengarden/image/3/7garden-イベント_SP3-1561895668.jpg">
      </div>
    </section>    
    
    <section id="space_party"> 
      <div class="space_party_pc">
        <img src="https://s3.ap-northeast-1.amazonaws.com/sevengarden/image/3/7garden-イベント_PC4-1561895630.jpg">
      </div>

      <div class="space_party_sp">
        <img src="https://s3.ap-northeast-1.amazonaws.com/sevengarden/image/3/7garden-イベント_SP4-1561895674.jpg">
      </div>
    </section>    
    
    <section id="space_party"> 
      <div class="space_party_pc">
        <img src="https://s3.ap-northeast-1.amazonaws.com/sevengarden/image/3/7garden-イベント_PC5-1561895635.jpg">
      </div>

      <div class="space_party_sp">
        <img src="https://s3.ap-northeast-1.amazonaws.com/sevengarden/image/3/7garden-イベント_SP5-1561895680.jpg">
      </div>
    </section>

        
    <div class="footer">
        <div class="footer__left">
            <p>SEVEN GAEDEN.All Rights Rserved</p>
        </div><!--footer__left-->
        <div class="footer__right">
            <a href="https://seven-garden.com/ja/hotel/SEVENGARDEN"><img src="<?= base_url('static/sevenevent/img/logo_well.png') ?>"></a>
            <a href="https://seven-garden.com/ja/hotel/KIKKA"><img src="<?= base_url('static/sevenevent/img/logo_kikka.png') ?>"></a>
        </div><!--footer__right-->
    </div><!--footer-->
  </div>  
</body>
</html>

