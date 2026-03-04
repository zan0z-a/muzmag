@include('/blocks/header')
@extends('/layouts/main')

@section('header-title')
Сообщения из формы
@endsection

@section('page-title')
Сообщения из формы
@endsection

@section('content')
<div>
    <h2>Все сообщения из формы обратной связи</h2>
    
    @if($messages->count() > 0)
        @foreach($messages as $message)
            <div style="border:1px solid #ccc; padding:10px; margin:10px 0;">
                <small>ID: {{ $message->id }}</small><br>
                name - <strong>{{ $message->name }}</strong><br>email - ({{ $message->email }})<br>
                data - {{ $message->created_at->format('d.m.Y H:i') }}<br>
                text - {{ $message->text }}<br>
            </div>
    <form action="{{ route('delete_message', $message->id) }}" method="POST">
        @csrf
        @method('DELETE')
    <button type="submit" class="remove-btn">Удалить</button>
    </form>


        @endforeach
        <p>Всего сообщений: {{ $messages->count() }}</p>
    @else
        <p>Сообщений пока нет</p>
    @endif
</div>
@endsection
<style>

.remove-btn {
    background: rgba(255, 87, 87, 0.2);
    border: 1px solid rgba(255, 87, 87, 0.3);
    color: #ffb347;
    padding: 8px 20px;
    border-radius: 8px;
    cursor: pointer;
    transition: all 0.3s;
    font-size: 14px;
    font-weight: 500;
    margin-top: 10px;
}

.remove-btn:hover {
    background: rgba(255, 87, 87, 0.3);
    color: #fff;
    border-color: #ffb347;
}
</style>