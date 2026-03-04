@include('/blocks/header')

@extends('/layouts/main')

@section('header-title')
    Корзина
@endsection

@section('page-title')
    Корзина
@endsection

@section('content')
<div class="cart-section">
    @if($cartItems->isEmpty())
        <p class="empty-cart">Корзина пуста</p>
    @else
        <div class="cart-items">
        @php $total_price = 0; @endphp
            @foreach($cartItems as $item)
                <div class="cart-item">
                    <img src="{{ asset('image/' . $item->goods->img) }}" alt="{{ $item->goods->title }}" class="cart-item-image">
                    
                    <div class="cart-item-info">
                        <h3 class="cart-item-title">{{ $item->goods->title }}</h3>
                        <div class="cart-item-price">{{ number_format($item->goods->price, 0, ',', ' ') }} ₽</div>
                    </div>

                    <form action="{{ route('cart.remove', $item->id) }}" method="POST" class="cart-item-remove">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="remove-btn">Удалить</button>
                    </form>
                   @php $total_price += $item->goods->price @endphp
                </div>
            @endforeach
        </div>

        <div class="cart-actions">
            <form action="{{ route('cart.clear') }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="clear-btn">Очистить корзину</button>
            </form>
            
            <button class="buy-all-btn">Купить все</button>
        </div>
        <div>total price: {{ $total_price }}</div>
    @endif
</div>
@endsection

<style>
    .cart-total {
    text-align: right;
    font-size: 20px;
    font-weight: 600;
    color: #ffb347;
    margin: 20px 0;
    padding: 15px;
    border-top: 1px solid rgba(255, 140, 50, 0.2);
}

.cart-section {
    padding: 20px;
}

.empty-cart {
    text-align: center;
    color: rgba(255, 255, 255, 0.9);
    font-size: 18px;
    padding: 40px;
}

.cart-items {
    display: flex;
    flex-direction: column;
    gap: 15px;
    margin-bottom: 25px;
}

.cart-item {
    background: rgba(0, 0, 0, 0.2);
    border-radius: 12px;
    padding: 20px;
    display: flex;
    align-items: center;
    gap: 20px;
    border: 1px solid rgba(255, 140, 50, 0.1);
}

.cart-item-image {
    width: 100px;
    height: 100px;
    object-fit: cover;
    border-radius: 8px;
}

.cart-item-info {
    flex: 1;
}

.cart-item-title {
    color: #fff;
    font-size: 18px;
    margin-bottom: 8px;
}

.cart-item-price {
    color: #ffb347;
    font-size: 16px;
    margin-bottom: 5px;
}

.cart-item-quantity {
    color: rgba(255, 255, 255, 0.7);
    font-size: 14px;
    margin-bottom: 5px;
}

.cart-item-total {
    color: #fff;
    font-size: 16px;
    font-weight: 600;
}

.cart-item-remove {
    margin-left: auto;
}

.remove-btn {
    background: rgba(255, 87, 87, 0.2);
    border: 1px solid rgba(255, 87, 87, 0.3);
    color: #ffb347;
    padding: 8px 16px;
    border-radius: 8px;
    cursor: pointer;
    transition: all 0.3s;
}

.remove-btn:hover {
    background: rgba(255, 87, 87, 0.3);
    color: #fff;
}

.cart-actions {
    display: flex;
    gap: 15px;
    justify-content: flex-end;
    margin-top: 20px;
}

.clear-btn, .buy-all-btn {
    padding: 12px 24px;
    border-radius: 10px;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s;
    border: none;
}

.clear-btn {
    background: rgba(255, 87, 87, 0.2);
    border: 1px solid rgba(255, 87, 87, 0.3);
    color: #ffb347;
}

.clear-btn:hover {
    background: rgba(255, 87, 87, 0.3);
    color: #fff;
}

.buy-all-btn {
    background: rgba(255, 140, 50, 0.25);
    border: 1px solid rgba(255, 140, 50, 0.4);
    color: #ffb347;
}

.buy-all-btn:hover {
    background: rgba(255, 140, 50, 0.4);
    color: #fff;
}
</style>