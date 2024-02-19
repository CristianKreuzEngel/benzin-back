@extends('layouts.app')
@section('head')
<link  href="{{ asset('assets/css/login/style.css') }}" rel="stylesheet">
<script src="https://kit.fontawesome.com/324b71f187.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@300;400;700;900&display=swap" rel="stylesheet">
<script src="{{asset('assets/js/login.js')}}" defer></script>
@endsection
@section('title', 'Acesso')
@section('content')
<main>
        <div class="login-container" id="login-container">
            <div class="form-container">
                <form class="form form-login">
                    <h2 class="form-title">Entrar com</h2>
                    <!-- <div class="form-social">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                    <p class="form-text">ou utilize sua conta</p> -->
                    <div class="form-input-container">
                        <input type="email" class="form-input" placeholder="Email">
                        <input type="password" class="form-input" placeholder="Senha">
                    </div>
                    <a href="#" class="form-link">Esqueceu a senha?</a>
                    <button type="button" class="form-button">Logar</button>
                    <p class="mobile-text">
                        Não tem conta?
                        <a href="#" id="open-register-mobile">Registre-se</a>
                    </p>
                </form>
                <form class="form form-register">
                    <!-- <h2 class="form-title">Criar Conta</h2>
                    <div class="form-social">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div> -->
                    <p class="form-text">Cadastre seu email</p>
                    <div class="form-input-container">
                        <input type="text" class="form-input" placeholder="Nome">
                        <input type="email" class="form-input" placeholder="Email">
                        <input type="password" class="form-input" placeholder="Senha">
                    </div>
                    <button type="button" class="form-button">Cadastrar</button>
                    <p class="mobile-text">
                        Já tem conta?
                        <a href="#" id="open-login-mobile">Login</a>
                    </p>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <h2 class="form-title form-title-light">Já tem conta?</h2>
                    <p class="form-text">Para entrar na nossa plataforma faça login com suas informações</p>
                    <button class="form-button form-button-light" id="open-login">Entrar</button>
                </div>
                <div class="overlay">
                    <h2 class="form-title form-title-light">Novo por aqui?</h2>
                    <p class="form-text">Cadastre-se e comece a usar a nossa plataforma on-line</p>
                    <button class="form-button form-button-light" id="open-register">Cadastrar</button>
                </div>
            </div>
        </div>
</main>
@endsection