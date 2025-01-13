<x-login_layout title="Gerenciador de Eventos - Registrar">

    <h2>Crie a sua conta!</h2>
    <form action="{{ route('auth.signup') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome do usuário</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Digite o seu nome de usuário" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Digite seu e-mail" required>
        </div>
        <div class="mb-3">
            <label for="role" class="form-label">Tipo de conta que deseja</label>
            <select name="role" id="role" class="form-select" required>
                <option value="standard">Padrão</option>
                <option value="organizer">Organizador</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Senha</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Digite sua senha" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Confirme sua senha</label>
            <input type="password" class="form-control" name="password_confirmation" id="password" placeholder="Digite sua senha" required>
        </div>
    <button type="submit" class="btn btn-primary w-100">Cadastrar</button>
    </form>
    <div class="text-center mt-2">
        <a href="{{ route('auth.index') }}" class="text-decoration-none">Já tem uma conta? Entre agora!</a>
    </div>

</x-login_layout>