<!-- Navigation Bar -->
<header class="sticky top-0 bg-white shadow-md z-50">
    <div class="container mx-auto flex items-center justify-between px-6 py-4">

        <!-- Logo -->
        <a href="index.php" class="flex items-center gap-2 flex-shrink-0">
            <img src="assets/logo.jpg" alt="upstaff Academy Logo" class="h-12 w-auto">
            <span class="text-lg font-semibold text-slate-900 hidden sm:inline">upstaff Academy</span>
        </a>

        <!-- Desktop Menu (Centered) -->
        <nav class="hidden md:flex gap-8 absolute left-1/2 transform -translate-x-1/2">
            <a href="index.php" class="text-slate-600 hover:text-blue-600 transition-colors">Home</a>
            <a href="about.php" class="text-slate-600 hover:text-blue-600 transition-colors">About</a>
            <a href="courses.php" class="text-slate-600 hover:text-blue-600 transition-colors">Courses</a>
        </nav>

        <!-- Right Side Items -->
        <div class="hidden md:flex items-center gap-4">
            <!-- Sign-in Button -->
            <a href="../login/login.php" class="px-6 py-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition-colors">
                Sign In
            </a>
        </div>

        <!-- Mobile Menu Button -->
        <button id="menuBtn" class="md:hidden text-2xl text-slate-900" aria-label="Toggle mobile navigation menu" aria-expanded="false">&#9776;</button>
    </div>

    <!-- Mobile Menu -->
    <nav id="mobileMenu" class="hidden md:hidden bg-white border-t border-gray-200">
        <a href="index.php" class="block px-6 py-3 text-slate-600 hover:text-blue-600 hover:bg-gray-50 transition-colors">Home</a>
        <a href="about.php" class="block px-6 py-3 text-slate-600 hover:text-blue-600 hover:bg-gray-50 transition-colors">About</a>
        <a href="courses.php" class="block px-6 py-3 text-slate-600 hover:text-blue-600 hover:bg-gray-50 transition-colors">Courses</a>
        <a href="../login/login.php" class="block px-6 py-3 text-blue-600 hover:bg-gray-50 transition-colors font-semibold">Login</a>

    </nav>
</header>
