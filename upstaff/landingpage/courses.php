<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Explore Upstaff Academy's comprehensive course offerings in tech, business, and creative skills. Find the course that fits your career goals.">
    <title>Courses - Upstaff Academy</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Syne:wght@400;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="css/styles.css">
</head>

<body class="bg-white text-slate-900 font-[Poppins]">

    <!-- Navigation -->
    <?php include 'includes/navbar.php'; ?>

    <!-- Hero Section -->
    <section class="hero-section relative py-20 md:py-28 text-center overflow-hidden">
        <div class="relative max-w-4xl mx-auto px-6">
            <div class="inline-flex items-center gap-2 text-xs font-semibold uppercase tracking-widest text-blue-600 bg-blue-500/10 border border-blue-500/20 px-4 py-1.5 rounded-full mb-6 fade-up">
                Our Offerings
            </div>
            <h1 class="font-[Syne] font-extrabold text-4xl md:text-6xl leading-tight mb-4 fade-up delay-1">
                Find Your Next Course
            </h1>
            <p class="text-gray-600 text-lg md:text-xl max-w-3xl mx-auto leading-relaxed fade-up delay-2">
                Explore our wide range of professional courses designed to advance your career in tech, business, creative, and specialized fields.
            </p>
        </div>
    </section>

    <!-- Courses Grid Section -->
    <section class="px-6 py-20">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold fade-up">Explore Our Courses</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                
                <!-- Admin Assistance -->
                <div class="bg-gray-50 border border-gray-200 rounded-2xl overflow-hidden hover:shadow-lg transition-shadow fade-up">
                    <div class="p-8 text-center">
                        <div class="text-5xl mb-4">👨‍💼</div>
                        <h3 class="text-xl font-bold text-slate-900 mb-2">Admin Assistance</h3>
                        <p class="text-gray-600 text-sm mb-6">Master administrative tasks, scheduling, and office management skills.</p>
                    </div>
                    <button class="w-full py-3 px-4 bg-blue-600 text-white font-semibold hover:bg-blue-700 transition flex items-center justify-center gap-2 group" aria-label="Read more about Admin Assistance course">
                        Read more
                        <span class="group-hover:translate-x-1 transition">+</span>
                    </button>
                </div>

                <!-- Data Management -->
                <div class="bg-gray-50 border border-gray-200 rounded-2xl overflow-hidden hover:shadow-lg transition-shadow fade-up delay-1">
                    <div class="p-8 text-center">
                        <div class="text-5xl mb-4">📊</div>
                        <h3 class="text-xl font-bold text-slate-900 mb-2">Data Management</h3>
                        <p class="text-gray-600 text-sm mb-6">Learn to organize, analyze, and manage data effectively and securely.</p>
                    </div>
                    <button class="w-full py-3 px-4 bg-blue-600 text-white font-semibold hover:bg-blue-700 transition flex items-center justify-center gap-2 group" aria-label="Read more about Data Management course">
                        Read more
                        <span class="group-hover:translate-x-1 transition">+</span>
                    </button>
                </div>

                <!-- eCommerce Management -->
                <div class="bg-gray-50 border border-gray-200 rounded-2xl overflow-hidden hover:shadow-lg transition-shadow fade-up delay-2">
                    <div class="p-8 text-center">
                        <div class="text-5xl mb-4">🛒</div>
                        <h3 class="text-xl font-bold text-slate-900 mb-2">eCommerce Management</h3>
                        <p class="text-gray-600 text-sm mb-6">Build and manage online stores, optimize sales, and grow your business.</p>
                    </div>
                    <button class="w-full py-3 px-4 bg-blue-600 text-white font-semibold hover:bg-blue-700 transition flex items-center justify-center gap-2 group" aria-label="Read more about eCommerce Management course">
                        Read more
                        <span class="group-hover:translate-x-1 transition">+</span>
                    </button>
                </div>

                <!-- Customer Service -->
                <div class="bg-gray-50 border border-gray-200 rounded-2xl overflow-hidden hover:shadow-lg transition-shadow fade-up">
                    <div class="p-8 text-center">
                        <div class="text-5xl mb-4">💬</div>
                        <h3 class="text-xl font-bold text-slate-900 mb-2">Customer Service</h3>
                        <p class="text-gray-600 text-sm mb-6">Provide exceptional customer support and build lasting client relationships.</p>
                    </div>
                    <button class="w-full py-3 px-4 bg-blue-600 text-white font-semibold hover:bg-blue-700 transition flex items-center justify-center gap-2 group" aria-label="Read more about Customer Service course">
                        Read more
                        <span class="group-hover:translate-x-1 transition">+</span>
                    </button>
                </div>

                <!-- Bookkeeping -->
                <div class="bg-gray-50 border border-gray-200 rounded-2xl overflow-hidden hover:shadow-lg transition-shadow fade-up delay-1">
                    <div class="p-8 text-center">
                        <div class="text-5xl mb-4">📋</div>
                        <h3 class="text-xl font-bold text-slate-900 mb-2">Bookkeeping</h3>
                        <p class="text-gray-600 text-sm mb-6">Master financial record-keeping and accounting fundamentals for any business.</p>
                    </div>
                    <button class="w-full py-3 px-4 bg-blue-600 text-white font-semibold hover:bg-blue-700 transition flex items-center justify-center gap-2 group" aria-label="Read more about Bookkeeping course">
                        Read more
                        <span class="group-hover:translate-x-1 transition">+</span>
                    </button>
                </div>

                <!-- Sales & Lead Generation -->
                <div class="bg-gray-50 border border-gray-200 rounded-2xl overflow-hidden hover:shadow-lg transition-shadow fade-up delay-2">
                    <div class="p-8 text-center">
                        <div class="text-5xl mb-4">📈</div>
                        <h3 class="text-xl font-bold text-slate-900 mb-2">Sales & Lead Generation</h3>
                        <p class="text-gray-600 text-sm mb-6">Drive revenue and build a strong sales pipeline with proven techniques.</p>
                    </div>
                    <button class="w-full py-3 px-4 bg-blue-600 text-white font-semibold hover:bg-blue-700 transition flex items-center justify-center gap-2 group" aria-label="Read more about Sales & Lead Generation course">
                        Read more
                        <span class="group-hover:translate-x-1 transition">+</span>
                    </button>
                </div>

                <!-- Graphic Design -->
                <div class="bg-gray-50 border border-gray-200 rounded-2xl overflow-hidden hover:shadow-lg transition-shadow fade-up">
                    <div class="p-8 text-center">
                        <div class="text-5xl mb-4">🎨</div>
                        <h3 class="text-xl font-bold text-slate-900 mb-2">Graphic Design</h3>
                        <p class="text-gray-600 text-sm mb-6">Create stunning visual content and develop professional design skills.</p>
                    </div>
                    <button class="w-full py-3 px-4 bg-blue-600 text-white font-semibold hover:bg-blue-700 transition flex items-center justify-center gap-2 group" aria-label="Read more about Graphic Design course">
                        Read more
                        <span class="group-hover:translate-x-1 transition">+</span>
                    </button>
                </div>

                <!-- Logistics -->
                <div class="bg-gray-50 border border-gray-200 rounded-2xl overflow-hidden hover:shadow-lg transition-shadow fade-up delay-1">
                    <div class="p-8 text-center">
                        <div class="text-5xl mb-4">📦</div>
                        <h3 class="text-xl font-bold text-slate-900 mb-2">Logistics</h3>
                        <p class="text-gray-600 text-sm mb-6">Optimize supply chains and master inventory and shipping management.</p>
                    </div>
                    <button class="w-full py-3 px-4 bg-blue-600 text-white font-semibold hover:bg-blue-700 transition flex items-center justify-center gap-2 group" aria-label="Read more about Logistics course">
                        Read more
                        <span class="group-hover:translate-x-1 transition">+</span>
                    </button>
                </div>

                <!-- Email Management -->
                <div class="bg-gray-50 border border-gray-200 rounded-2xl overflow-hidden hover:shadow-lg transition-shadow fade-up delay-2">
                    <div class="p-8 text-center">
                        <div class="text-5xl mb-4">✉️</div>
                        <h3 class="text-xl font-bold text-slate-900 mb-2">Email Management</h3>
                        <p class="text-gray-600 text-sm mb-6">Manage communications effectively and organize professional email workflows.</p>
                    </div>
                    <button class="w-full py-3 px-4 bg-blue-600 text-white font-semibold hover:bg-blue-700 transition flex items-center justify-center gap-2 group" aria-label="Read more about Email Management course">
                        Read more
                        <span class="group-hover:translate-x-1 transition">+</span>
                    </button>
                </div>

                <!-- Digital Marketing -->
                <div class="bg-gray-50 border border-gray-200 rounded-2xl overflow-hidden hover:shadow-lg transition-shadow fade-up">
                    <div class="p-8 text-center">
                        <div class="text-5xl mb-4">📱</div>
                        <h3 class="text-xl font-bold text-slate-900 mb-2">Digital Marketing</h3>
                        <p class="text-gray-600 text-sm mb-6">Master online marketing strategies, social media, and content creation.</p>
                    </div>
                    <button class="w-full py-3 px-4 bg-blue-600 text-white font-semibold hover:bg-blue-700 transition flex items-center justify-center gap-2 group" aria-label="Read more about Digital Marketing course">
                        Read more
                        <span class="group-hover:translate-x-1 transition">+</span>
                    </button>
                </div>

                <!-- IT & Web Development -->
                <div class="bg-gray-50 border border-gray-200 rounded-2xl overflow-hidden hover:shadow-lg transition-shadow fade-up delay-1">
                    <div class="p-8 text-center">
                        <div class="text-5xl mb-4">💻</div>
                        <h3 class="text-xl font-bold text-slate-900 mb-2">IT & Web Development</h3>
                        <p class="text-gray-600 text-sm mb-6">Build web applications and develop in-demand programming and IT skills.</p>
                    </div>
                    <button class="w-full py-3 px-4 bg-blue-600 text-white font-semibold hover:bg-blue-700 transition flex items-center justify-center gap-2 group" aria-label="Read more about IT & Web Development course">
                        Read more
                        <span class="group-hover:translate-x-1 transition">+</span>
                    </button>
                </div>

                <!-- Custom Course -->
                <div class="bg-gray-50 border border-gray-200 rounded-2xl overflow-hidden hover:shadow-lg transition-shadow fade-up delay-2">
                    <div class="p-8 text-center">
                        <div class="text-5xl mb-4">💡</div>
                        <h3 class="text-xl font-bold text-slate-900 mb-2">Looking for Something Else?</h3>
                        <p class="text-gray-600 text-sm mb-6">Can't find what you're looking for? Contact us about custom courses tailored to your needs.</p>
                    </div>
                    <button class="w-full py-3 px-4 bg-gray-400 text-white font-semibold hover:bg-gray-500 transition flex items-center justify-center gap-2 group" aria-label="Read more about custom courses">
                        Read more
                        <span class="group-hover:translate-x-1 transition">+</span>
                    </button>
                </div>

            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="px-6 py-20 bg-blue-600">
        <div class="container mx-auto text-center max-w-2xl">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4 fade-up">Ready to Start Learning?</h2>
            <p class="text-blue-100 text-lg mb-8 fade-up delay-1">
                Choose a course and begin your journey to career growth and professional success.
            </p>
            <div class="flex gap-4 justify-center fade-up delay-2">
                <a href="../login/login.php" aria-label="Get started with a course at Upstaff Academy"
                    class="px-6 py-3 rounded-lg font-semibold text-blue-600 bg-white hover:bg-gray-100 transition">
                    Enroll Now
                </a>
                <a href="about.php" aria-label="Learn more about Upstaff Academy"
                    class="px-6 py-3 rounded-lg font-semibold text-white border-2 border-white hover:bg-blue-700 transition">
                    Learn More
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

    <!-- Scripts -->
    <script src="js/main.js"></script>

</body>

</html>
