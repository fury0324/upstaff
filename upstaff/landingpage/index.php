<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Join Upstaff Academy to learn in-demand tech skills with hands-on courses, expert mentors, and industry-recognized certifications.">
    <title>Upstaff Academy - Learn Skills. Build Careers.</title>
    
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
    <section id="home" class="px-6 py-20 bg-blue-50">
        <div class="container mx-auto grid md:grid-cols-2 gap-10 items-center">

            <div>
                <h1 class="text-4xl md:text-5xl font-bold leading-tight fade-up">
                    Learn Skills. Build Careers. Join Upstaff Academy.
                </h1>
                <p class="mt-4 text-lg text-gray-600 fade-up delay-1">
                    Professional training and hands-on courses designed to help you succeed in tech.
                </p>

                <div class="mt-8 flex gap-2 fade-up delay-2">
                    <a href="../login/login.php" aria-label="Get started with Upstaff Academy by signing up or logging in"
                        class="px-4 py-2.5 rounded-lg font-medium text-white bg-blue-600 hover:bg-blue-700 transition">
                        Get Started
                    </a>
                </div>
            </div>

            <div>
                <img src="https://readymadeui.com/images/meeting-img.webp" alt="Professional learning environment with people discussing" loading="lazy"
                    class="w-full rounded-xl shadow-lg fade-up delay-1">
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="courses" class="px-6 py-20">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold fade-up">Why Choose Us?</h2>
            <p class="text-gray-600 mt-2 fade-up delay-1">
                Industry-focused learning with practical skills.
            </p>

            <div class="grid md:grid-cols-3 gap-8 mt-12">

                <div class="p-8 border border-gray-200 rounded-2xl value-card fade-up bg-gray-50 hover:border-blue-500/30">
                    <div class="text-4xl mb-4">💻</div>
                    <h3 class="text-lg font-semibold text-blue-600 mb-2">Hands-on Learning</h3>
                    <p class="text-gray-600">
                        Real-world projects and practical exercises that prepare you for actual job scenarios.
                    </p>
                </div>

                <div class="p-8 border border-gray-200 rounded-2xl value-card fade-up delay-1 bg-gray-50 hover:border-blue-500/30">
                    <div class="text-4xl mb-4">🏆</div>
                    <h3 class="text-lg font-semibold text-blue-600 mb-2">Certified Courses</h3>
                    <p class="text-gray-600">
                        Gain industry-recognized credentials that boost your resume and career prospects.
                    </p>
                </div>

                <div class="p-8 border border-gray-200 rounded-2xl value-card fade-up delay-2 bg-gray-50 hover:border-blue-500/30">
                    <div class="text-4xl mb-4">👨‍🏫</div>
                    <h3 class="text-lg font-semibold text-blue-600 mb-2">Expert Mentors</h3>
                    <p class="text-gray-600">
                        Learn from experienced professionals who guide you through every step of your journey.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="px-6 py-20 bg-gray-50 border-b border-gray-200">
        <div class="container mx-auto">
            <div class="text-center mb-14">
                <div class="flex justify-center"><span class="section-accent"></span></div>
                <h2 class="text-3xl md:text-4xl font-bold fade-up">What You'll Get</h2>
            </div>

            <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <div class="flex gap-4 fade-up">
                    <div class="text-2xl flex-shrink-0">✅</div>
                    <div>
                        <h3 class="font-semibold text-lg mb-1">Flexible Learning</h3>
                        <p class="text-gray-600">Learn at your own pace with on-demand video courses and materials.</p>
                    </div>
                </div>

                <div class="flex gap-4 fade-up delay-1">
                    <div class="text-2xl flex-shrink-0">✅</div>
                    <div>
                        <h3 class="font-semibold text-lg mb-1">Career Support</h3>
                        <p class="text-gray-600">Get guidance on job search, resume review, and interview prep.</p>
                    </div>
                </div>

                <div class="flex gap-4 fade-up delay-2">
                    <div class="text-2xl flex-shrink-0">✅</div>
                    <div>
                        <h3 class="font-semibold text-lg mb-1">Community Access</h3>
                        <p class="text-gray-600">Join a network of learners and professionals in your field.</p>
                    </div>
                </div>

                <div class="flex gap-4 fade-up delay-2">
                    <div class="text-2xl flex-shrink-0">✅</div>
                    <div>
                        <h3 class="font-semibold text-lg mb-1">Lifetime Access</h3>
                        <p class="text-gray-600">Keep course materials forever and access updates at no extra cost.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="px-6 py-20 bg-blue-600">
        <div class="container mx-auto text-center max-w-2xl">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4 fade-up">Ready to Transform Your Career?</h2>
            <p class="text-blue-100 text-lg mb-8 fade-up delay-1">
                Join upstaff academy who are already learning and advancing their careers with upstaff Academy.
            </p>
            <div class="flex gap-4 justify-center fade-up delay-2">
                <a href="/upstaff/login/login.php" aria-label="Get started free with Upstaff Academy"
                    class="px-6 py-3 rounded-lg font-semibold text-blue-600 bg-white hover:bg-gray-100 transition">
                    Get Started Free
                </a>
                <a href="about.php" aria-label="Learn more about Upstaff Academy's mission and values"
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
