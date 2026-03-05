@include('/blocks/header')

@extends('/layouts/main')

@section('header-title')
    Контакты
@endsection

@section('page-title')
    Контакты
@endsection

@section('content')
<div class="contacts-section">
    <h2 class="section-title">Свяжитесь с нами</h2>
    
    <div class="contacts-content">
        <p class="intro-text">Наша команда готова ответить на все ваши вопросы. Заполните форму обратной связи, и мы свяжемся с вами в ближайшее время.</p>

        <div class="contacts-info">
            <div class="contact-row">
                <span class="contact-label">Email:</span>
                <span class="contact-value">support@example.com</span>
            </div>
            
            <div class="contact-row">
                <span class="contact-label">Телефон:</span>
                <span class="contact-value">+7 (999) 123-45-67</span>
            </div>
        </div>
    </div>

    @if(session('success'))
        <div class="alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('contact_submit') }}" method="post" class="contact-form">
        @csrf
        
        <div class="form-field">
            <input type="text" name="name" id="name" value="{{ old('name') }}" placeholder="Имя" class="form-input">
        </div>

        <div class="form-field">
            <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="Электронная почта" class="form-input">
        </div>

        <div class="form-field">
            <textarea name="message" id="message" placeholder="Сообщение" class="form-textarea">{{ old('message') }}</textarea>
        </div>

        <button type="submit" class="submit-button">Отправить</button>
    </form>
</div>
@endsection

<style>

.contacts-section {
    background: rgba(25, 25, 30, 0.5);
    backdrop-filter: blur(5px);
    -webkit-backdrop-filter: blur(5px);
    border: 1px solid rgba(255, 140, 50, 0.2);
    border-radius: 20px;
    padding: 30px;  
    max-width: 800px;
    width: 100%;
    margin: 20px auto;
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
}

.intro-text {
    font-size: 15px;  
    line-height: 1.5;
    margin-bottom: 20px;
    color: rgba(255, 255, 255, 0.9);
}

.contacts-info {
    background: rgba(0, 0, 0, 0.2);
    border-radius: 12px;
    padding: 15px; 
    margin-bottom: 25px; 
}

.contact-row {
    padding: 8px 0; 
}

.contact-label {
    width: 80px;  
    font-size: 14px;
}

.contact-value {
    font-size: 15px;
}

.contact-form {
    gap: 15px; 
    margin-top: 15px; 
}

.form-input,
.form-textarea {
    padding: 12px 14px;
}

.submit-button {
    padding: 12px;
    font-size: 15px;  
}

.admin-link {
    display: inline-block;
    margin-bottom: 25px;
    padding: 8px 16px;
    background: rgba(255, 140, 50, 0.2);
    border: 1px solid rgba(255, 140, 50, 0.3);
    border-radius: 8px;
    color: #ffb347;
    text-decoration: none;
    font-size: 14px;
    transition: all 0.3s;
}

.admin-link:hover {
    background: rgba(255, 140, 50, 0.3);
    color: #fff;
}

.section-title {
    color: #ffb347;
    font-size: 28px;
    margin-bottom: 20px;
    font-weight: 500;
    letter-spacing: 0.5px;
}

.intro-text {
    font-size: 16px;
    line-height: 1.6;
    margin-bottom: 25px;
    color: rgba(255, 255, 255, 0.9);
}

.contacts-info {
    background: rgba(0, 0, 0, 0.2);
    border-radius: 12px;
    padding: 20px;
    margin-bottom: 30px;
}

.contact-row {
    display: flex;
    align-items: center;
    padding: 10px 0;
}

.contact-row:first-child {
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}

.contact-label {
    width: 100px;
    font-size: 15px;
    color: rgba(255, 255, 255, 0.7);
    font-weight: 500;
}

.contact-value {
    flex: 1;
    font-size: 16px;
    color: #fff;
}

.contact-form {
    display: flex;
    flex-direction: column;
    gap: 20px;
    margin-top: 20px;
}

.form-field {
    width: 100%;
}

.form-input,
.form-textarea {
    width: 100%;
    padding: 14px 16px;
    background: rgba(0, 0, 0, 0.2);
    border: 1px solid rgba(255, 140, 50, 0.2);
    border-radius: 10px;
    font-size: 15px;
    color: #fff;
    box-sizing: border-box;
    transition: all 0.3s;
}

.form-textarea {
    min-height: 120px;
    resize: vertical;
}

.form-input:focus,
.form-textarea:focus {
    outline: none;
    border-color: #ffb347;
    background: rgba(0, 0, 0, 0.3);
}

.form-input::placeholder,
.form-textarea::placeholder {
    color: rgba(255, 255, 255, 0.4);
}

.submit-button {
    width: 100%;
    padding: 14px;
    background: rgba(255, 140, 50, 0.25);
    border: 1px solid rgba(255, 140, 50, 0.4);
    border-radius: 10px;
    color: #ffb347;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-top: 10px;
}

.submit-button:hover {
    background: rgba(255, 140, 50, 0.4);
    color: #fff;
    border-color: #ffb347;
}

.alert-error {
    background: rgba(255, 87, 87, 0.15);
    border: 1px solid rgba(255, 87, 87, 0.2);
    border-radius: 10px;
    padding: 15px;
    margin: 20px 0;
    color: #ffb347;
    font-size: 14px;
}

.alert-success {
    background: rgba(9, 9, 10, 0.85);
    border: 1px solid rgba(76, 175, 80, 0.2);
    border-radius: 10px;
    padding: 15px;
    margin: 20px 0;
    color: #ffb347;
    font-size: 14px;
}
</style>