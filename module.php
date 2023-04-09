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
      'app/components/nav/nav.css',
      'app/components/note/note.css',
      'app/components/board/board.css',
      'app/components/add-note/add-note.css',
    ]
  ],
  ['/board',
    'app/app.php',[
      'app/app.css',
      'app/components/nav/nav.css',
      'app/components/note/note.css',
      'app/components/board/board.css',
      'app/components/add-note/add-note.css'
    ]
  ],
  ['/login',
    'app/app.php',[
      'app/app.css',
      'app/login/login.css'
      ]
  ],
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