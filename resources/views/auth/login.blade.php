{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PARID KUPI - Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        cyber: {
                            neon: '#00f0ff',
                            purple: '#b967ff',
                            pink: '#ff00c8',
                            dark: '#0a0a14',
                            darker: '#05050a',
                            text: '#e0e0ff'
                        }
                    },
                    boxShadow: {
                        'cyber-glow': '0 0 15px rgba(0, 240, 255, 0.5)',
                        'cyber-glow-purple': '0 0 15px rgba(185, 103, 255, 0.4)',
                        'cyber-inner': 'inset 0 0 10px rgba(0, 240, 255, 0.3)'
                    }
                }
            }
        }
    </script>
    <style>
        .cyber-card {
            background: linear-gradient(145deg, #0f0f23, #1a1a2e);
            border: 1px solid transparent;
            border-radius: 1.5rem;
            position: relative;
            overflow: hidden;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.5);
        }
        
        .cyber-card::before {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: linear-gradient(45deg, #00f0ff, #b967ff, #ff00c8, #00f0ff);
            background-size: 400% 400%;
            border-radius: 1.625rem;
            z-index: -1;
            animation: cyberBorder 3s ease infinite;
        }
        
        .cyber-card::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(145deg, #0f0f23, #1a1a2e);
            border-radius: 1.5rem;
            z-index: -1;
        }
        
        @keyframes cyberBorder {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        
        .cyber-input {
            background: rgba(10, 10, 20, 0.7);
            border: 1px solid rgba(0, 240, 255, 0.3);
            color: #e0e0ff;
            transition: all 0.3s ease;
        }
        
        .cyber-input:focus {
            border-color: #00f0ff;
            box-shadow: 0 0 15px rgba(0, 240, 255, 0.4);
        }
        
        .cyber-button {
            background: linear-gradient(45deg, #00f0ff, #b967ff);
            color: #0a0a14;
            font-weight: bold;
            transition: all 0.3s ease;
        }
        
        .cyber-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 20px rgba(0, 240, 255, 0.6);
        }
        
        .cyber-glow-text {
            text-shadow: 0 0 10px rgba(0, 240, 255, 0.7);
        }
        
        body {
            background: linear-gradient(135deg, #0a0a14 0%, #111122 50%, #0a0a14 100%);
            min-height: 100vh;
            position: relative;
            overflow: hidden;
        }
        
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                radial-gradient(circle at 10% 20%, rgba(185, 103, 255, 0.1) 0%, transparent 20%),
                radial-gradient(circle at 90% 80%, rgba(0, 240, 255, 0.1) 0%, transparent 20%),
                radial-gradient(circle at 50% 50%, rgba(255, 0, 200, 0.05) 0%, transparent 30%);
            pointer-events: none;
            z-index: -1;
        }
    </style>
</head>
<body class="flex items-center justify-center p-4">
    <div class="w-full max-w-md">
        <div class="text-center mb-8">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-cyber-neon to-cyber-purple rounded-full mb-4 shadow-cyber-glow relative overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-cyber-pink to-cyber-neon opacity-30"></div>
                <i class="fas fa-coffee text-cyber-darker text-3xl relative z-10"></i>
            </div>
            <h1 class="text-3xl font-bold text-cyber-text mb-2 cyber-glow-text">PARID KUPI</h1>
            <p class="text-cyber-neon/70">Hanya mereka yang bersungguh hati yang layak melangkah. Di sini, api menguji sang Chef, dan ketelitian menakar langkah sang Kasir</p>
        </div>
        <div class="cyber-card p-8">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <!-- Email Field -->
                <div class="mb-6">
                    <label for="email" class="block text-sm font-medium text-cyber-text mb-2">
                        EMAIL ADDRESS
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-envelope text-cyber-neon/70"></i>
                        </div>
                        <input 
                            id="email" 
                            type="email" 
                            name="email"
                            placeholder="ENTER EMAIL"
                            class="cyber-input w-full pl-10 pr-4 py-3 rounded-xl focus:ring-0 focus:outline-none"
                            required
                        >
                    </div>
                </div>
                <div class="mb-6">
                    <div class="flex items-center justify-between mb-2">
                        <label for="password" class="block text-sm font-medium text-cyber-text">
                            PASSWORD
                        </label>
                    </div>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-lock text-cyber-neon/70"></i>
                        </div>
                        <input 
                            id="password" 
                            type="password" 
                            name="password"
                            placeholder="ENTER PASSWORD"
                            class="cyber-input w-full pl-10 pr-4 py-3 rounded-xl focus:ring-0 focus:outline-none"
                            required autocomplete="current-password"
                        >
                    </div>
                </div>
                <button 
                    type="submit"
                    class="cyber-button w-full py-3 px-4 rounded-xl font-semibold transition-all duration-200 transform hover:scale-105"
                >
                    INITIATE LOGIN
                </button>
            </form>
            <div class="flex items-center my-6">
                <div class="flex-grow border-t border-cyber-neon/30"></div>
                <span class="mx-4 text-cyber-neon/70 text-sm">// SYSTEM ACCESS //</span>
                <div class="flex-grow border-t border-cyber-neon/30"></div>
            </div>
        </div>
        <div class="text-center mt-8">
            <p class="text-cyber-neon/50 text-sm">
                © 2024 Farid Kurniawan • Parid Kupi
            </p>
        </div>
    </div>
</body>
</html>

