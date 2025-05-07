@extends('layouts.login')

@section('login', 'Login Page')

@section('content')
  <div class="container h-100 d-flex justify-content-center align-items-center">
    <div class="row login-box w-75" style="min-height: 400px;">
      <div class="col-md-6 p-5 d-flex flex-column justify-content-center bg-dark text-white">
        <h2 class="mb-3">SEWAFLIX</h2>
        <p>Tempatnya penyewaan segala macam jenis film. Dari A sampai Z, kami selalu ada untukmu.</p>
      </div>

      <div class="col-md-6 p-5 bg-white">
        <h3 class="mb-4">Selamat Datang!</h3>

        @if(session('success'))
          <x-alert type="success" :message="session('success')" />
        @endif

        @if(session('error'))
          <x-alert type="danger" :message="session('error')" />
        @endif

        <form method="POST" action="{{ url('/login') }}">
          @csrf
          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text"
                   class="form-control @error('username') is-invalid @enderror"
                   id="username"
                   name="username"
                   value="{{ old('username') }}"
                   placeholder="Kamu siapa?">
            @error('username')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password"
                   class="form-control @error('password') is-invalid @enderror"
                   id="password"
                   name="password"
                   placeholder="Masukkan password">
            @error('password')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <button type="submit" class="btn btn-primary w-100">Saatnya masuk!</button>
        </form>
      </div>
    </div>
  </div>
@endsection
