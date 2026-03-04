@include('/blocks/header') 

@extends('/layouts/main') 

@section('header-title')
Профиль
@endsection

@section('page-title')
Профиль
@endsection

@section('content')
<div class="profile-section">
    <div class="profile-info">
        <div class="info-row">
            <span class="info-label">Имя:</span>
            <span class="info-value">{{ Auth::user()->name }}</span>
        </div>
        
        <div class="info-row">
            <span class="info-label">Телефон:</span>
            <span class="info-value">{{ Auth::user()->phone }}</span>
        </div>
        
        <div class="info-row">
            <span class="info-label">Дата регистрации:</span>
            <span class="info-value">{{ Auth::user()->created_at->format('d.m.Y') }}</span>
        </div>
    </div>
    
    <a href="{{ route('cart') }}" class="cart-button">Корзина</a>
</div>
@endsection

<style>
.profile-section {
    display: flex;
    flex-direction: column;
    gap: 30px;
}

.profile-info {
    background: rgba(0, 0, 0, 0.2);
    border-radius: 12px;
    padding: 25px;
}

.info-row {
    display: flex;
    padding: 12px 0;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}

.info-row:last-child {
    border-bottom: none;
}

.info-label {
    width: 150px;
    color: rgba(255, 255, 255, 0.7);
    font-size: 16px;
}

.info-value {
    color: #fff;
    font-size: 16px;
    font-weight: 500;
}

.cart-button {
    display: inline-block;
    padding: 14px 30px;
    background: rgba(255, 140, 50, 0.25);
    border: 1px solid rgba(255, 140, 50, 0.4);
    border-radius: 10px;
    color: #ffb347;
    text-decoration: none;
    font-size: 16px;
    font-weight: 600;
    transition: all 0.3s;
    text-align: center;
    max-width: 200px;
}

.cart-button:hover {
    background: rgba(255, 140, 50, 0.4);
    color: #fff;
    border-color: #ffb347;
}
</style>