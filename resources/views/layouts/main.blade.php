<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('header-title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="content">
        <div class="main-card">
            @hasSection('page-title')
                <h1 class="page-title">@yield('page-title')</h1>
            @endif
            
            @yield('content')
        </div>
    </div>
</body>
</html>

 <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            width: 100%;
        }
        
        body {
            background-image: url('{{ asset('image/sunset.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            min-height: 100vh;
            width: 100%;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        /* Затемнение фона */
        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.3);
            pointer-events: none;
            z-index: 0;
        }
        
        .content {
            position: relative;
            padding-left: 270px; 
            z-index: 1;
            min-height: 100vh;
            display: flex;
            align-items: flex-start;
            justify-content: center;
        }
        
        /* ПОЛУПРОЗРАЧНАЯ СЕРАЯ КАРТОЧКА ДЛЯ КОНТЕНТА */
        .main-card {
            background: rgba(44, 62, 80, 0.3);  /* Полупрозрачный серый */
            backdrop-filter: blur(10px);        /* Эффект матового стекла */
            -webkit-backdrop-filter: blur(10px);
            border-radius: 20px;                 /* Скругление */
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin: 20px;
            width: 100%;
            max-width: 1200px;                   /* Максимальная ширина */
            color: white;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
            min-height: calc(100vh - 40px);
        }
        
        /* Заголовок страницы */
        .page-title {
            font-size: 2rem;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        /* Адаптивность */
        @media (max-width: 768px) {
            .main-card {
                padding: 20px;
                margin: 10px;
                border-radius: 15px;
            }
            
            .page-title {
                font-size: 1.5rem;
            }
        }
    </style>