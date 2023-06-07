<?php 
  require_once('.router/router.php');
  require_once('.router/router.functions.php');

  use router\Router;

  $globalStyles = [
    'style.css',
    '.error-pages/error-pages.css',
  ];

  $globalViews = [
    ['/',
      'app/board/board.view.php',[
        'app/app.css',
        'app/nav/nav.css',
        'app/note-miniature/note-miniature.css',
        'app/board/board.css',
      ]
    ],
    ['/board',
      'app/board/board.view.php',[
        'app/app.css',
        'app/nav/nav.css',
        'app/note-miniature/note-miniature.css',
        'app/board/board.css',
        'app/add-note/add-note.css',
        'app/open-note/open-note.css',
        'app/notification/notification.css'
      ]
    ],
    ['/config',
      'app/config/config.view.php',[
        'app/config/config.css',
        'app/app.css',
        'app/nav/nav.css',
        'app/notification/notification.css'
      ]
    ],
    ['/login',
      'app/login/login.view.php',[
        'app/app.css',
        'app/login/login.css',
        'app/TEST/TEST.css',
        'app/notification/notification.css'
        ]
    ],
    ['/register',
      'app/register/register.view.php',[
        'app/app.css',
        'app/register/register.css',
        'app/TEST/TEST.css'
      ]
    ],
    ['/log-out',
      '.tools/session/session-destroy.php',[
        'app/app.css'
      ]
    ]
    /*

    ['/route',
      'view.php',[
        'style1.css',
        'style2.css',
        ...
      ]
    ], 
    ...    

    */
  ];
  
  $unrestrictedUrls = [
    '/login',
    '/register',
    '/info'
  ];

  $initUri = '/login';

  function routerView(){
    global $globalViews;
    foreach($globalViews as &$view){
        Router::post($view,function($component){
          include $component;
        });
        Router::get($view,function($component){
          include $component;
        });
      }
      Router::dispatch(1);
  };

  function injectedModule($resource){
    global $globalStyles;
    global $globalViews;
    $styles = $globalViews;
    $cleanUri = route_uriForLevel(1); #router.functions.php
    switch($resource){          
      case 'styles':
        foreach($globalStyles as &$style){
          echo '<link href="'.$style.'" rel="stylesheet" type="text/css">';
        };
        
        foreach($globalViews as &$view){
          if($view[0] == $cleanUri ){
            $viewStyles = $view[2];
            foreach($viewStyles as &$style){
              echo '<link href="'.$style.'" rel="stylesheet" type="text/css">';
            };
          }
        }
        break;

      case 'aplication':
        routerView();
        break;

      case 'background':
        include_once('app/.data/data-services/background.service.php');
        $background =  get_background(); #background.service.php
        if(isset($_GET["background"]) && route_uriForLevel(1) != '/login' && route_uriForLevel(1) != '/register'){
          $backgroundId = $_GET["background"];

          if($backgroundId != 0){
            echo ' <img id="app-background" src='.$background[$backgroundId][0].'>';
          };

        }else if(isset($_SESSION['user_background']) && route_uriForLevel(1) != '/login' && route_uriForLevel(1) != '/register'){
          $backgroundId = $_SESSION['user_background'];

          if($backgroundId != 0){
            echo ' <img id="app-background" src='.$background[$backgroundId][0].'>';
          };

        }else if( route_uriForLevel(1) == '/login' || route_uriForLevel(1) == '/register'){
          echo ' <img id="app-background" src=".files\image7.jpg">';
        }
        break;
    };
  };

  function unrestricted($unrestrictedUrls){
    global $initUri;

    if(isset($_SESSION['user_id'])){
      $userId = $_SESSION['user_id'];
    }else{
      $uriIsRestricted = !in_array(route_uriForLevel(1), $unrestrictedUrls, $strict = true);
      if($uriIsRestricted){
        echo '<script>location.href="'.$initUri.'"</script>';
      };
    }
  };

  unrestricted($unrestrictedUrls);

  /*

  function background(){
    include_once('app\.data\data-services\background.service.php');
    $background =  get_background(); #background.service.php
    if(isset($_GET["background"]) && route_uriForLevel(1) != '/login' && route_uriForLevel(1) != '/register'){
      $backgroundId = $_GET["background"];
      if($backgroundId != 0){
        return $background[$backgroundId][0];
      }else{
        return "";
      }
    }else if(isset($_SESSION['user_background']) && route_uriForLevel(1) != '/login' && route_uriForLevel(1) != '/register'){
      $backgroundId = $_SESSION['user_background'];
      if($backgroundId != 0){
        return $background[$backgroundId][0];
      }else{
        return "";
      }
    }else if( route_uriForLevel(1) == '/login' || route_uriForLevel(1) == '/register'){
      return "'.files\image7.jpg'";
    }
  }*/
?>