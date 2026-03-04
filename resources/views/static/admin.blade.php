@include('/blocks/header') 

@extends('/layouts/main') 

@section('header-title')
Админ панель
@endsection

@section('page-title')
Админ панель
@endsection

@section('content')
<p>Админ панель</p>
    
@foreach ($goods as $product)
<div class="product_item">
    <img class="image_view" src="/image/{{ $product->img }}" alt="">
    
    <div class="product-content">
        <div class="product-id">ID: {{ $product->id }}</div>
        <div class="product-title">{{ $product->title }}</div>
        <div class="product-description">{{ $product->description }}</div>
        <div class="product-price">{{ number_format($product->price, 0, ',', ' ') }} ₽</div>
        <div class="product-category">{{ $product->category }}</div>
        <div class="product-date">{{ $product->created_at->format('d.m.Y') }}</div>
        
        <form action="{{ route('admin.delete',$product->id) }}" method="POST" class="delete-form">
            @csrf
            @method('DELETE')
            <button type="submit" class="delete-btn">Удалить</button>
        </form>
    </div>
</div>
@endforeach


<form class="add-product-form" action="{{ route('admin.add.product') }}" method="POST" enctype="multipart/form-data">
    <div class="form-title">Добавить новый товар</div>
    
    @csrf
    <input type="text" name="title" placeholder="Название" required>
    <textarea name="description" placeholder="Описание" required></textarea>
    <input type="number" name="price" placeholder="Цена" required>
    
    <select name="category" required>
        <option value="" disabled selected>— Выберите категорию —</option>
        <option value="Электрогитары">Электрогитары</option>
        <option value="Акустические гитары">Акустические гитары</option>
        <option value="Бас-гитары">Бас-гитары</option>
        <option value="Синтезаторы">Синтезаторы</option>
        <option value="Барабаны">Барабаны</option>
    </select>
    
    <input type="file" name="image" accept="image/*" required>
    
    <button type="submit">Добавить товар</button>
</form>


@endsection

<style>
.product_item {
    background: rgba(30, 30, 40, 0.85);
    backdrop-filter: blur(4px);
    border: 1px solid rgba(255, 140, 50, 0.2);
    border-radius: 16px;
    padding: 20px;
    margin-bottom: 15px;
    display: flex;
    gap: 20px;
    align-items: flex-start;
    transition: all 0.3s;
}

.image_view {
    width: 120px;
    height: 120px;
    object-fit: cover;
    border-radius: 12px;
    border: 1px solid rgba(255, 140, 50, 0.2);
    flex-shrink: 0;
}

.product-content {
    flex: 1;
    display: flex;
    flex-direction: column;
    gap: 8px;
}

.product-id {
    color: rgba(255, 255, 255, 0.5);
    font-size: 12px;
}

.product-title {
    color: #ffb347;
    font-size: 18px;
    font-weight: 600;
    margin: 0;
}

.product-description {
    color: rgba(255, 255, 255, 0.8);
    font-size: 14px;
    line-height: 1.5;
    margin: 5px 0;
}

.product-price {
    color: #ffb347;
    font-size: 18px;
    font-weight: 700;
}

.product-category {
    color: rgba(255, 255, 255, 0.6);
    font-size: 13px;
    background: rgba(255, 140, 50, 0.1);
    padding: 4px 10px;
    border-radius: 6px;
    display: inline-block;
    align-self: flex-start;
}

.product-date {
    color: rgba(255, 255, 255, 0.4);
    font-size: 12px;
}

.delete-form {
    margin-top: 10px;
}

.delete-btn {
    background: rgba(255, 87, 87, 0.2);
    border: 1px solid rgba(255, 87, 87, 0.3);
    color: #ffb347;
    padding: 8px 20px;
    border-radius: 8px;
    font-size: 14px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s;
    width: auto;
}

.delete-btn:hover {
    background: rgba(255, 87, 87, 0.3);
    color: #fff;
}



<style>
.add-product-form {
    background: rgba(30, 30, 40, 0.85);
    backdrop-filter: blur(4px);
    border: 1px solid rgba(255, 140, 50, 0.2);
    border-radius: 16px;
    padding: 25px;
    margin-bottom: 30px;
    max-width: 500px;
}

.add-product-form input,
.add-product-form textarea,
.add-product-form select {
    width: 100%;
    padding: 12px 15px;
    margin-bottom: 15px;
    background: rgba(0, 0, 0, 0.3);
    border: 1px solid rgba(255, 140, 50, 0.2);
    border-radius: 10px;
    color: #fff;
    font-size: 15px;
    box-sizing: border-box;
}

.add-product-form textarea {
    min-height: 100px;
    resize: vertical;
}

.add-product-form input:focus,
.add-product-form textarea:focus,
.add-product-form select:focus {
    outline: none;
    border-color: #ffb347;
    background: rgba(0, 0, 0, 0.4);
}

.add-product-form input::placeholder,
.add-product-form textarea::placeholder {
    color: rgba(255, 255, 255, 0.5);
}

.add-product-form select {
    cursor: pointer;
}

.add-product-form select option {
    background: #1e1e28;
    color: #fff;
}

.add-product-form button {
    width: 100%;
    padding: 14px;
    background: rgba(255, 140, 50, 0.25);
    border: 1px solid rgba(255, 140, 50, 0.4);
    border-radius: 10px;
    color: #ffb347;
    cursor: pointer;
    transition: all 0.3s;
}

.add-product-form button:hover {
    background: rgba(255, 140, 50, 0.4);
    color: #fff;
    border-color: #ffb347;
}

.form-title {
    color: #ffb347;
    font-size: 20px;
    margin-bottom: 20px;
    padding-bottom: 10px;
    border-bottom: 1px solid rgba(255, 140, 50, 0.2);
}
</style>
</style>