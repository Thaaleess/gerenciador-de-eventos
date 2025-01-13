<x-login_layout title="Gerenciador de Eventos - Login">

    <h2>Login</h2>

    <form action="{{ route('auth.login') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Digite seu e-mail" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Senha</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Digite sua senha" required>
        </div>
    <button type="submit" class="btn btn-primary w-100">Entrar</button>
    </form>
    <div class="text-center mt-2">
        <a href="{{ route('auth.register') }}" class="text-decoration-none">Ainda não tem uma conta? Cadastre-se agora!</a>
    </div>

</x-login_layout>