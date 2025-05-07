@extends('layouts.app')

@section('komponen', 'Profile')

@section('content')
@php
    if (!session()->has('user_data.'.$username)) {
        $joinDate = date('d M Y', strtotime('-'.rand(1,12).' months'));
        $memberId = 'SFLX-'.rand(1000,9999);
        $membershipTier = ['Silver', 'Gold', 'Diamond'][rand(0,2)];

        session()->put('user_data.'.$username, [
            'join_date' => $joinDate,
            'member_id' => $memberId,
            'membership_tier' => $membershipTier
        ]);
    }

    $userData = session()->get('user_data.'.$username);
@endphp

<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <div class="text-center py-3">
                        <img src="https://ui-avatars.com/api/?name={{ $username }}&background=random&size=120&color=fff&bold=true"
                             class="rounded-circle border border-4 border-white shadow mb-3"
                             alt="Avatar {{ $username }}">
                        <h3 class="fw-bold mb-1">{{ $username }}</h3>
                        @php
                            $badgeColor = [
                                'Silver' => 'secondary',
                                'Gold' => 'warning',
                                'Diamond' => 'light'
                            ][$userData['membership_tier']];
                        @endphp
                        <span class="badge bg-{{ $badgeColor }} text-dark">{{ $userData['membership_tier'] }} Member</span>
                    </div>
                </div>

                <div class="card-body p-4">
                    <div class="row g-3 text-center">

                        <div class="col-md-6">
                            <div class="p-3 rounded border">
                                <i class="fas fa-user text-primary mb-2"></i>
                                <p class="mb-1 text-muted">Username</p>
                                <p class="mb-0 fw-bold">{{ $username }}</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="p-3 rounded border">
                                <i class="fas fa-envelope text-primary mb-2"></i>
                                <p class="mb-1 text-muted">Email</p>
                                <p class="mb-0 fw-bold">{{ strtolower($username) }}@praktikumpweb.com</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="p-3 rounded border">
                                <i class="fas fa-calendar-alt text-primary mb-2"></i>
                                <p class="mb-1 text-muted">Bergabung</p>
                                <p class="mb-0 fw-bold">{{ $userData['join_date'] }}</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="p-3 rounded border">
                                <i class="fas fa-id-card text-primary mb-2"></i>
                                <p class="mb-1 text-muted">Member ID</p>
                                <p class="mb-0 fw-bold">{{ $userData['member_id'] }}</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="card-footer bg-white border-top-0 pt-0 pb-4 px-4 text-center">
                    <div class="d-flex justify-content-center gap-3">
                        <a href="{{ url('/dashboard') }}?username={{ $username }}"
                           class="btn btn-outline-primary px-4">
                            <i class="fas fa-arrow-left me-2"></i>
                            Kembali ke Dashboard
                        </a>
                        <a href="{{ url('/logout') }}"
                           class="btn btn-danger px-4">
                            <i class="fas fa-sign-out-alt me-2"></i>
                            Keluar
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
