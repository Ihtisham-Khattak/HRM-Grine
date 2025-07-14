<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin & Dashboard Template based on Bootstrap 5" />
    <meta name="author" content="Mohona Akter Nabila & Shorifa Akter" />
    <meta name="keywords"
        content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web" />

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net ">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Tailwind CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased bg-gray-50 font-sans text-gray-900">

    <!-- Navigation Bar -->
    <nav class="bg-white shadow-md fixed top-0 left-0 right-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex items-center">
                    <h1 class="text-xl font-bold text-blue-600">{{ config('app.name') }}</h1>
                </div>
                <div class="hidden md:flex space-x-6">
                    <a href="#features" class="text-gray-700 hover:text-blue-600 font-medium">Features</a>
                    <a href="#about" class="text-gray-700 hover:text-blue-600 font-medium">About</a>
                    <a href="#contact" class="text-gray-700 hover:text-blue-600 font-medium">Contact</a>
                </div>
                <div class="flex items-center space-x-4">
                    @if (Route::has('login'))
                    @auth
                    <a href="{{ url('/dashboard') }}"
                        class="text-blue-600 hover:text-blue-800 font-semibold">Dashboard</a>
                    @else
                    <a href="{{ route('login') }}" class="text-blue-600 hover:text-blue-800 font-semibold">Log in</a>
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                        class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm font-medium transition duration-300">Register</a>
                    @endif
                    @endauth
                    @endif
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="pt-24 pb-16 bg-gradient-to-r from-blue-500 to-indigo-600 text-white text-center">
        <div class="max-w-4xl mx-auto px-5 py-5">
            <h1 class="text-4xl md:text-5xl font-extrabold mb-6 leading-tight">Streamline Your HR Operations</h1>
            <p class="text-lg md:text-xl mb-8 opacity-90">A powerful HR Management System to manage employees, tasks,
                payroll, performance, and more.</p>
            <a href="#features"
                class="inline-block bg-white text-blue-600 hover:bg-gray-100 font-semibold px-6 py-3 rounded-lg shadow-md transition transform hover:scale-105">
                Explore Features
            </a>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-20 bg-gray-100">
        <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center mb-16">Key Features</h2>
            <div class="w-full bg-gray-50 py-16">
                <div class="max-w-7xl mx-auto px-6 lg:px-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
                        <!-- Image Section -->
                        <div
                            class="bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-300 hover:scale-105">

                            <div class="aspect-w-16 aspect-h-9 bg-gray-200 flex items-center justify-center">
                                <img src="https://placehold.co/600x400/3b82f6/ffffff?text=Secure+Login"
                                    alt="User Authentication" class="object-cover w-full h-full" />
                            </div>
                        </div>

                        <!-- Text Section -->
                        <div class="p-8">

                            <h3 class="text-2xl font-bold text-gray-800">User Authentication</h3>

                            <p class="text-gray-700 text-lg leading-relaxed mb-6">
                                Our secure login system ensures robust access control by assigning roles like Admin, HR,
                                Managers, and Employees.
                                Each user has specific permissions tailored to their role, enhancing security and
                                streamlining operations.
                            </p>
                            <ul class="space-y-2 text-gray-600 list-disc pl-5">
                                <li>Role-based access control</li>
                                <li>Multi-factor authentication</li>
                                <li>Session management and token encryption</li>
                                <li>Custom permissions per department</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Admin Dashboard -->
    <section id="features" class=" bg-gray-100">
        <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="w-full bg-gray-50 py-16">
                <div class="max-w-7xl mx-auto px-6 lg:px-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">

                        <!-- Text Section -->
                        <div class="p-8">

                            <h3 class="text-2xl font-bold text-gray-800">Admin Dashboard</h3>

                            <p class="text-gray-700 text-lg leading-relaxed mb-6">
                                Our secure login system ensures robust access control by assigning roles like Admin, HR,
                                Managers, and Employees.
                                Each user has specific permissions tailored to their role, enhancing security and
                                streamlining operations.
                            </p>
                            <ul class="space-y-2 text-gray-600 list-disc pl-5">
                                <li>Role-based access control</li>
                                <li>Multi-factor authentication</li>
                                <li>Session management and token encryption</li>
                                <li>Custom permissions per department</li>
                            </ul>
                        </div>

                        <!-- Image Section -->
                        <div
                            class="bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-300 hover:scale-105">

                            <div class="aspect-w-16 aspect-h-9 bg-gray-200 flex items-center justify-center">
                                <img src="https://placehold.co/600x400/3b82f6/ffffff?text=Secure+Login"
                                    alt="User Authentication" class="object-cover w-full h-full" />
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

       <!-- Employee Profiles -->
    <section id="features" class="py-20 bg-gray-100">
        <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="w-full bg-gray-50 py-16">
                <div class="max-w-7xl mx-auto px-6 lg:px-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
                        <!-- Image Section -->
                        <div
                            class="bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-300 hover:scale-105">

                            <div class="aspect-w-16 aspect-h-9 bg-gray-200 flex items-center justify-center">
                                <img src="https://placehold.co/600x400/3b82f6/ffffff?text=Secure+Login"
                                    alt="User Authentication" class="object-cover w-full h-full" />
                            </div>
                        </div>

                        <!-- Text Section -->
                        <div class="p-8">

                            <h3 class="text-2xl font-bold text-gray-800">Employee Profiles</h3>

                            <p class="text-gray-700 text-lg leading-relaxed mb-6">
                                Our secure login system ensures robust access control by assigning roles like Admin, HR,
                                Managers, and Employees.
                                Each user has specific permissions tailored to their role, enhancing security and
                                streamlining operations.
                            </p>
                            <ul class="space-y-2 text-gray-600 list-disc pl-5">
                                <li>Role-based access control</li>
                                <li>Multi-factor authentication</li>
                                <li>Session management and token encryption</li>
                                <li>Custom permissions per department</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Leave & Attendance -->
    <section id="features" class=" bg-gray-100">
        <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="w-full bg-gray-50 py-16">
                <div class="max-w-7xl mx-auto px-6 lg:px-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">

                        <!-- Text Section -->
                        <div class="p-8">

                            <h3 class="text-2xl font-bold text-gray-800">Leave & Attendance</h3>

                            <p class="text-gray-700 text-lg leading-relaxed mb-6">
                                Our secure login system ensures robust access control by assigning roles like Admin, HR,
                                Managers, and Employees.
                                Each user has specific permissions tailored to their role, enhancing security and
                                streamlining operations.
                            </p>
                            <ul class="space-y-2 text-gray-600 list-disc pl-5">
                                <li>Role-based access control</li>
                                <li>Multi-factor authentication</li>
                                <li>Session management and token encryption</li>
                                <li>Custom permissions per department</li>
                            </ul>
                        </div>

                        <!-- Image Section -->
                        <div
                            class="bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-300 hover:scale-105">

                            <div class="aspect-w-16 aspect-h-9 bg-gray-200 flex items-center justify-center">
                                <img src="https://placehold.co/600x400/3b82f6/ffffff?text=Secure+Login"
                                    alt="User Authentication" class="object-cover w-full h-full" />
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

      <!-- Performance Evaluation -->
    <section id="features" class="py-20 bg-gray-100">
        <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="w-full bg-gray-50 py-16">
                <div class="max-w-7xl mx-auto px-6 lg:px-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
                        <!-- Image Section -->
                        <div
                            class="bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-300 hover:scale-105">

                            <div class="aspect-w-16 aspect-h-9 bg-gray-200 flex items-center justify-center">
                                <img src="https://placehold.co/600x400/3b82f6/ffffff?text=Secure+Login"
                                    alt="User Authentication" class="object-cover w-full h-full" />
                            </div>
                        </div>

                        <!-- Text Section -->
                        <div class="p-8">

                            <h3 class="text-2xl font-bold text-gray-800">Performance Evaluation</h3>

                            <p class="text-gray-700 text-lg leading-relaxed mb-6">
                                Our secure login system ensures robust access control by assigning roles like Admin, HR,
                                Managers, and Employees.
                                Each user has specific permissions tailored to their role, enhancing security and
                                streamlining operations.
                            </p>
                            <ul class="space-y-2 text-gray-600 list-disc pl-5">
                                <li>Role-based access control</li>
                                <li>Multi-factor authentication</li>
                                <li>Session management and token encryption</li>
                                <li>Custom permissions per department</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Task Assignment -->
    <section id="features" class=" bg-gray-100">
        <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="w-full bg-gray-50 py-16">
                <div class="max-w-7xl mx-auto px-6 lg:px-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">

                        <!-- Text Section -->
                        <div class="p-8">

                            <h3 class="text-2xl font-bold text-gray-800">Task Assignment</h3>

                            <p class="text-gray-700 text-lg leading-relaxed mb-6">
                                Our secure login system ensures robust access control by assigning roles like Admin, HR,
                                Managers, and Employees.
                                Each user has specific permissions tailored to their role, enhancing security and
                                streamlining operations.
                            </p>
                            <ul class="space-y-2 text-gray-600 list-disc pl-5">
                                <li>Role-based access control</li>
                                <li>Multi-factor authentication</li>
                                <li>Session management and token encryption</li>
                                <li>Custom permissions per department</li>
                            </ul>
                        </div>

                        <!-- Image Section -->
                        <div
                            class="bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-300 hover:scale-105">

                            <div class="aspect-w-16 aspect-h-9 bg-gray-200 flex items-center justify-center">
                                <img src="https://placehold.co/600x400/3b82f6/ffffff?text=Secure+Login"
                                    alt="User Authentication" class="object-cover w-full h-full" />
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

  <!-- Payroll Management -->
    <section id="features" class="py-20 bg-gray-100">
        <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="w-full bg-gray-50 py-16">
                <div class="max-w-7xl mx-auto px-6 lg:px-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
                        <!-- Image Section -->
                        <div
                            class="bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-300 hover:scale-105">

                            <div class="aspect-w-16 aspect-h-9 bg-gray-200 flex items-center justify-center">
                                <img src="https://placehold.co/600x400/3b82f6/ffffff?text=Secure+Login"
                                    alt="User Authentication" class="object-cover w-full h-full" />
                            </div>
                        </div>

                        <!-- Text Section -->
                        <div class="p-8">

                            <h3 class="text-2xl font-bold text-gray-800">Payroll Management</h3>

                            <p class="text-gray-700 text-lg leading-relaxed mb-6">
                                Our secure login system ensures robust access control by assigning roles like Admin, HR,
                                Managers, and Employees.
                                Each user has specific permissions tailored to their role, enhancing security and
                                streamlining operations.
                            </p>
                            <ul class="space-y-2 text-gray-600 list-disc pl-5">
                                <li>Role-based access control</li>
                                <li>Multi-factor authentication</li>
                                <li>Session management and token encryption</li>
                                <li>Custom permissions per department</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Reports & Analytics -->
    <section id="features" class=" bg-gray-100">
        <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="w-full bg-gray-50 py-16">
                <div class="max-w-7xl mx-auto px-6 lg:px-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">

                        <!-- Text Section -->
                        <div class="p-8">

                            <h3 class="text-2xl font-bold text-gray-800">Reports & Analytics</h3>

                            <p class="text-gray-700 text-lg leading-relaxed mb-6">
                                Our secure login system ensures robust access control by assigning roles like Admin, HR,
                                Managers, and Employees.
                                Each user has specific permissions tailored to their role, enhancing security and
                                streamlining operations.
                            </p>
                            <ul class="space-y-2 text-gray-600 list-disc pl-5">
                                <li>Role-based access control</li>
                                <li>Multi-factor authentication</li>
                                <li>Session management and token encryption</li>
                                <li>Custom permissions per department</li>
                            </ul>
                        </div>

                        <!-- Image Section -->
                        <div
                            class="bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-300 hover:scale-105">

                            <div class="aspect-w-16 aspect-h-9 bg-gray-200 flex items-center justify-center">
                                <img src="https://placehold.co/600x400/3b82f6/ffffff?text=Secure+Login"
                                    alt="User Authentication" class="object-cover w-full h-full" />
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-white">
        <div class="max-w-5xl mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-6">About Our HRM System</h2>
            <p class="text-lg text-gray-700 mb-6">
                Built with Laravel, our HRM system offers a comprehensive solution for managing human resources
                efficiently. From recruitment to retirement, streamline all processes in one place.
            </p>
            <p class="text-gray-600">
                Whether you're a small business or enterprise, our platform adapts to your needs with scalability,
                security, and ease of use.
            </p>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gray-100">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-6">Get in Touch</h2>
            <p class="text-lg text-gray-700 mb-6">Have questions or need support? Reach out to us via email or phone.
            </p>
            <p class="text-gray-600">
                Email: <a href="mailto:support@hrmsystem.com"
                    class="text-blue-600 hover:underline">support@hrmsystem.com</a><br>
                Phone: +1 (123) 456-7890
            </p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white border-t">
        <div class="max-w-7xl mx-auto px-4 py-6 text-center text-sm text-gray-600">
            © {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
        </div>
    </footer>

</body>
</html>