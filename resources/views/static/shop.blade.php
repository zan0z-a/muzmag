@include('/blocks/header') 

@extends('/layouts/main') 

@section('header-title')
Список всех товаров
@endsection

@section('page-title')
Список всех товаров
@endsection

@section('content')
<div class="products-grid">
    @foreach ($goods as $product)
    <div class="product-card">
        <img class="product-image" loading="lazy" src="{{ ('image/' . $product->img) }}" alt="{{ $product->title }}">
        <div class="product-info">
            <h3 class="product-title">{{ $product->title }}</h3>
            <div class="product-price">{{ number_format($product->price, 0, ',', ' ') }} ₽</div>
            <a href="{{ route('product', $product->id) }}" class="details-btn">Подробнее</a>
        </div>
    </div>
    @endforeach
</div>
@endsection

<style>
.products-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 30px;
    padding: 40px;
    max-width: 1400px;
    margin: 0 auto;
}

.product-card {
    background: rgba(9, 9, 10, 0.85);  
    backdrop-filter: blur(4px);
    border-radius: 12px;
    overflow: hidden;
    border: 1px solid rgba(255, 140, 50, 0.2);
    display: flex;
    flex-direction: column;
}

.product-image {
    width: 100%;
    height: 200px; 
    object-fit: cover;
    display: block;
}

.product-info {
    padding: 15px;  
    display: flex;
    flex-direction: column;
    flex-grow: 1;
}

.product-title {
    font-size: 16px;  
    color: rgba(255, 255, 255, 0.95);
    font-weight: 500;
    margin: 0 0 8px 0;
    line-height: 1.4;
    min-height: 44px;
}

.product-price {
    font-size: 20px;
    font-weight: 700;
    color: #ffb347;  
    margin: 5px 0 15px 0; 
}

.details-btn {
    display: block;
    padding: 10px; 
    background: rgba(255, 140, 50, 0.25);
    color: #ffb347;
    text-align: center;
    text-decoration: none;
    border-radius: 6px;
    font-weight: 600;
    font-size: 14px; 
    border: 1px solid rgba(255, 140, 50, 0.3);
    cursor: pointer;
    margin-top: auto;
    transition: all 0.3s;
}

.details-btn:hover {
    background: rgba(255, 140, 50, 0.4);
    color: #ffffff;
    border-color: #ffb347;
}
</style>