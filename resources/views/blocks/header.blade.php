<div class="sidebar">
    <div class="sidebar-header">Главное меню</div>
    
    <nav class="sidebar-nav">
        <a href="{{ route('home') }}" class="sidebar-link">Главная</a>
        <a href="{{ route('shop') }}" class="sidebar-link">Все товары</a>
        <a href="{{ route('about') }}" class="sidebar-link">О нас</a>
        <a href="{{ route('contacts') }}" class="sidebar-link">Контакты</a>
    </nav>
    
    <div class="sidebar-divider"></div>
    <div class="sidebar-header">Аккаунт</div>
    <nav class="sidebar-nav">
        @auth
            <a href="{{ route('profile') }}" class="sidebar-link">Профиль</a>
            <a href="{{ route('cart') }}" class="sidebar-link">Корзина</a>
            @if(@Auth::user()->is_admin == '1')
                <a href="{{ route('admin') }}" class="sidebar-link">Админ панель</a>
                <a href="{{ route('admin_message') }}" class="sidebar-link">Сообщения</a>
            @endif
            <a href="{{ route('logout') }}" class="sidebar-link">Выйти</a>
        @else
            <a href="{{ route('login') }}" class="sidebar-link">Логин</a>
            <a href="{{ route('register') }}" class="sidebar-link">Регистрация</a>
        @endauth
    </nav>
</div>

<style>
    .sidebar {
        position: fixed;
        left: 100px;
        top: 20px;   
        bottom: 20px;
        width: 250px;
        background: rgba(44, 62, 80, 0.3);  
        backdrop-filter: blur(10px);  
        border-radius: 20px;
        padding: 20px 0;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1); 
        border: 1px solid rgba(255, 255, 255, 0.1);  
        overflow-y: auto;
        z-index: 1000;
    }
    
    .sidebar-header {
        padding: 10px 20px;
        color: rgba(255, 255, 255, 0.9);
        font-size: 14px;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 1px;
        cursor: default;
        background: transparent;
        border: none;
        pointer-events: none;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
    }
    
    .sidebar-nav {
        display: flex;
        flex-direction: column;
    }
    
    .sidebar-link {
        padding: 12px 20px;
        color: rgba(255, 255, 255, 0.8); 
        text-decoration: none;
        transition: all 0.3s;
        display: block;
        position: relative;
        font-weight: 500;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
    }
    
    .sidebar-link:hover {
        color: white;
        padding-left: 25px;
    }
    
    .sidebar-divider {
        height: 1px;
        background: rgba(255, 255, 255, 0.2);  
        margin: 15px 20px;
    }
    
    body {
        margin-left: 290px; 
        margin-right: 20px;
        margin-top: 20px;
        margin-bottom: 20px;
        min-height: calc(100vh - 40px);
    }
    
  
</style>