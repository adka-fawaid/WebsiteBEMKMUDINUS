<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Tailwind + Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Blink animation -->
    <style>
        @keyframes blinkSlow {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0.3;
            }
        }

        .animate-blink-slow {
            animation: blinkSlow 2.5s ease-in-out infinite;
        }
    </style>
</head>

<body class="antialiased font-inter bg-[#ebe7ff] text-gray-900">

    @yield('content')

    <script>
        // Toast auto-hide for login error (top-right)
        document.addEventListener('DOMContentLoaded', function() {
            const toast = document.getElementById('toast-error');
            const closeBtn = document.getElementById('toastClose');
            if (!toast) return;

            function hideToast() {
                toast.classList.add('opacity-0', 'translate-x-2');
                setTimeout(() => toast.remove(), 300);
            }

            const timer = setTimeout(hideToast, 5000);
            if (closeBtn) {
                closeBtn.addEventListener('click', function() {
                    clearTimeout(timer);
                    hideToast();
                });
            }
        });

        // Toggle Password Visibility
        document.addEventListener('DOMContentLoaded', function() {
            const passwordInput = document.getElementById('password');
            const togglePassword = document.getElementById('togglePassword');
            const eyeIcon = document.getElementById('eyeIcon');
            const eyeClosedIcon = document.getElementById('eyeClosedIcon');

            togglePassword.addEventListener('click', function() {
                const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordInput.setAttribute('type', type);

                // Toggle icons
                eyeIcon.classList.toggle('hidden');
                eyeClosedIcon.classList.toggle('hidden');
            });
        });

        // Dynamic Email Icon Color Change
        document.addEventListener('DOMContentLoaded', function() {
            const emailInput = document.getElementById('email');
            const iconWrap = document.getElementById('emailIconWrap');

            if (!emailInput || !iconWrap) return;

            function updateIcon() {
                if (document.activeElement === emailInput || emailInput.value.trim() !== '') {
                    iconWrap.classList.remove('text-gray-400');
                    iconWrap.classList.add('text-blue-500');
                } else {
                    iconWrap.classList.remove('text-blue-500');
                    iconWrap.classList.add('text-gray-400');
                }
            }

            ['focus', 'blur', 'input', 'change'].forEach(evt => {
                emailInput.addEventListener(evt, updateIcon);
            });

            // initialize state
            updateIcon();
        });

        // Dynamic Password Icon Color Change
        document.addEventListener('DOMContentLoaded', function() {
            const passwordInput = document.getElementById('password');
            const passwordIconWrap = document.getElementById('passwordIconWrap');
            const eyeIcon = document.getElementById('eyeIcon');
            const eyeClosedIcon = document.getElementById('eyeClosedIcon');

            if (!passwordInput || !passwordIconWrap) return;

            function updatePasswordIcon() {
                const active = (document.activeElement === passwordInput || passwordInput.value.trim() !== '');

                if (active) {
                    passwordIconWrap.classList.remove('text-gray-400');
                    passwordIconWrap.classList.add('text-blue-500');

                    if (eyeIcon) {
                        eyeIcon.classList.remove('text-gray-400');
                        eyeIcon.classList.add('text-blue-500');
                    }
                    if (eyeClosedIcon) {
                        eyeClosedIcon.classList.remove('text-gray-400');
                        eyeClosedIcon.classList.add('text-blue-500');
                    }
                } else {
                    passwordIconWrap.classList.remove('text-blue-500');
                    passwordIconWrap.classList.add('text-gray-400');

                    if (eyeIcon) {
                        eyeIcon.classList.remove('text-blue-500');
                        eyeIcon.classList.add('text-gray-400');
                    }
                    if (eyeClosedIcon) {
                        eyeClosedIcon.classList.remove('text-blue-500');
                        eyeClosedIcon.classList.add('text-gray-400');
                    }
                }
            }

            ['focus', 'blur', 'input', 'change'].forEach(evt => {
                passwordInput.addEventListener(evt, updatePasswordIcon);
            });

            // initialize state
            updatePasswordIcon();
        });
    </script>
</body>

</html>
