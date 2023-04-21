<?php
  require_once('.router/router.php');

  use router\Router;
  
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
      'app/open-note/open-note.css'
    ]
  ],
  ['/login',
    'app/login/login.php',[
      'app/app.css',
      'app/login/login.css',
      'app/TEST/TEST.css'
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
      Router::dispatch();
  };

  function injectedModule($resource){
    global $globalStyles;
    global $globalViews;
    $styles = $globalViews;
    $uri = $_SERVER['REQUEST_URI'];
    $cleanUri = explode('?',$uri)[0]; 

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

      case 'view':
        routerView();
        break;
    };
  };
  ?>