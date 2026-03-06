@include('/blocks/header') 

@extends('/layouts/main') 

@section('header-title')
Тест
@endsection
 <!-- @foreach ($goods as $product)
    <div class="product-card">
        <img class="product-image" src="{{ asset('image/' . $product->img) }}" alt="{{ $product->title }}">
        <div class="product-info">
            <h3 class="product-title">{{ $product->title }}</h3>
            <div class="product-price">{{ number_format($product->price, 0, ',', ' ') }} ₽</div>
            <a href="{{ route('product', $product->id) }}" class="details-btn">Подробнее</a>
        </div>
    </div>
    @endforeach -->

@section('page-title')
Главная страница
@endsection

@section('content')
<h1 class="welcome_text">Выберите нужную категорию товаров</h1>


<div class="category-grid">
    <a class="details-btn" href="{{ route('category', 'Электрогитары') }}">Электрогитары</a>
    <a class="details-btn" href="{{ route('category', 'Бас-гитары') }}">Бас-гитары</a>
    <a class="details-btn" href="{{ route('category', 'Акустические гитары') }}">Акустические гитары</a>
    <a class="details-btn" href="{{ route('category', 'Синтезаторы') }}">Синтезаторы</a>
    <a class="details-btn" href="{{ route('category', 'Барабаны') }}">Барабаны</a>
</div>
@endsection


<style>

.details-btn {
    display: block;
    padding: 20px; 
    background: rgba(0, 0, 0, 0.25);
    color: #ffb347;
    text-align: center;
    text-decoration: none;
    border-radius: 6px;
    font-weight: 600;
    font-size: 20px; 
    border: 1px solid rgba(0, 0, 0, 0.3);
    cursor: pointer;
    transition: all 0.3s;
}

.details-btn:hover {
    background: rgba(175, 102, 45, 0.4);
    color: #ffffff;
    border-color: #ffb347;
}


.category-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 30px;
    padding: 40px;
    max-width: 1400px;
    margin: 0 auto;
}
</style>