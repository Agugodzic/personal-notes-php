<?php 
  require_once('.router/router.php');
  require_once('.router/router.functions.php');
  use router\Router;

  session_start();

  $globalStyles = [
    'style.css',
    '.error-pages/error-pages.css'
  ];

  $globalViews = [
    ['/',
      'app/app.php',[
        'app/app.css',
        'app/nav/nav.css',
        'app/note-miniature/note-miniature.css',
        'app/board/board.css',
      ]
    ],
    ['/board',
      'app/app.php',[
        'app/app.css',
        'app/nav/nav.css',
        'app/note-miniature/note-miniature.css',
        'app/board/board.css',
        'app/add-note/add-note.css',
        'app/open-note/open-note.css',
        'app/notification/notification.css'
      ]
    ],
    ['/login',
      'app/login/login.php',[
        'app/app.css',
        'app/login/login.css',
        'app/TEST/TEST.css',
        'app/notification/notification.css'
        ]
    ],
    ['/register',
      'app/register/register.php',[
        'app/app.css',
        'app/register/register.css',
        'app/TEST/TEST.css'
      ]
    ]
  ];

  function routerView(){
    global $globalViews;
    foreach($globalViews as &$view){
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
    };

   
  };
?>