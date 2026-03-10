<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Contact Upstaff Academy - Get in touch with our support team for inquiries, feedback, or enrollment assistance.">
    <title>Contact Us - Upstaff Academy</title>
    
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
            <h1 class="font-[Syne] font-extrabold text-4xl md:text-6xl leading-tight mb-4 fade-up">
                Get in Touch
            </h1>
            <p class="text-gray-600 text-lg md:text-xl max-w-3xl mx-auto leading-relaxed fade-up delay-1">
                Have questions about our courses or services? We'd love to hear from you. Reach out to our team today.
            </p>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="px-6 py-20">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                
                <!-- Contact Info -->
                <div class="space-y-8 fade-up">
                    <div>
                        <h2 class="text-2xl font-bold mb-4">Contact Information</h2>
                        <p class="text-gray-600 leading-relaxed">
                            Reach out to us through any of the channels below. We'll get back to you as soon as possible.
                        </p>
                    </div>

                    <!-- Email -->
                    <div class="flex gap-4">
                        <div class="text-3xl">✉️</div>
                        <div>
                            <h3 class="text-lg font-semibold mb-1">Email</h3>
                            <p class="text-gray-600"><a href="mailto:support@upstaffacademy.com" class="text-blue-600 hover:text-blue-700">support@upstaffacademy.com</a></p>
                            <p class="text-sm text-gray-500 mt-1">We respond within 24 hours</p>
                        </div>
                    </div>

                    <!-- Phone -->
                    <div class="flex gap-4">
                        <div class="text-3xl">📞</div>
                        <div>
                            <h3 class="text-lg font-semibold mb-1">Phone</h3>
                            <p class="text-gray-600"><a href="tel:+1234567890" class="text-blue-600 hover:text-blue-700">+1 (234) 567-890</a></p>
                            <p class="text-sm text-gray-500 mt-1">Monday - Friday, 9 AM - 6 PM</p>
                        </div>
                    </div>

                    <!-- Address -->
                    <div class="flex gap-4">
                        <div class="text-3xl">📍</div>
                        <div>
                            <h3 class="text-lg font-semibold mb-1">Address</h3>
                            <p class="text-gray-600">123 Education Street<br>Tech City, TC 12345<br>Your Country</p>
                        </div>
                    </div>

                    <!-- Hours -->
                    <div class="flex gap-4">
                        <div class="text-3xl">🕐</div>
                        <div>
                            <h3 class="text-lg font-semibold mb-1">Business Hours</h3>
                            <p class="text-gray-600">Monday - Friday: 9:00 AM - 6:00 PM<br>Saturday: 10:00 AM - 4:00 PM<br>Sunday: Closed</p>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="bg-gray-50 p-8 rounded-2xl fade-up delay-1">
                    <h2 class="text-2xl font-bold mb-6">Send us a Message</h2>
                    <form class="space-y-4" action="#" method="POST">
                        
                        <!-- Name -->
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Full Name</label>
                            <input type="text" id="name" name="name" required 
                                class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-600 transition"
                                placeholder="Your name">
                        </div>

                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                            <input type="email" id="email" name="email" required 
                                class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-600 transition"
                                placeholder="your@email.com">
                        </div>

                        <!-- Subject -->
                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">Subject</label>
                            <select id="subject" name="subject" required 
                                class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-600 transition">
                                <option value="">Select a subject</option>
                                <option value="general">General Inquiry</option>
                                <option value="enrollment">Course Enrollment</option>
                                <option value="technical">Technical Support</option>
                                <option value="partnership">Partnership Opportunity</option>
                                <option value="feedback">Feedback</option>
                            </select>
                        </div>

                        <!-- Message -->
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                            <textarea id="message" name="message" rows="5" required 
                                class="w-full px-4 py-2.5 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-600 transition resize-none"
                                placeholder="Tell us more about your inquiry..."></textarea>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" 
                            class="w-full px-6 py-3 rounded-lg font-semibold text-white bg-blue-600 hover:bg-blue-700 transition"
                            aria-label="Send contact form message">
                            Send Message
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="px-6 py-20 bg-gray-50">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold fade-up">Frequently Asked Questions</h2>
            </div>

            <div class="space-y-4 fade-up">
                
                <!-- FAQ Item 1 -->
                <details class="bg-white rounded-lg p-6 cursor-pointer hover:shadow-md transition">
                    <summary class="font-semibold text-slate-900 flex justify-between items-center">
                        <span>What are the system requirements for the online courses?</span>
                        <span>➕</span>
                    </summary>
                    <p class="text-gray-600 mt-4">You need a modern web browser, stable internet connection, and a computer or mobile device. Most courses are compatible with both Mac and Windows systems.</p>
                </details>

                <!-- FAQ Item 2 -->
                <details class="bg-white rounded-lg p-6 cursor-pointer hover:shadow-md transition">
                    <summary class="font-semibold text-slate-900 flex justify-between items-center">
                        <span>How long do I have access to the course materials?</span>
                        <span>➕</span>
                    </summary>
                    <p class="text-gray-600 mt-4">Once you enroll in a course, you have lifetime access to all course materials, including any future updates and improvements.</p>
                </details>

                <!-- FAQ Item 3 -->
                <details class="bg-white rounded-lg p-6 cursor-pointer hover:shadow-md transition">
                    <summary class="font-semibold text-slate-900 flex justify-between items-center">
                        <span>Do you offer certificates upon completion?</span>
                        <span>➕</span>
                    </summary>
                    <p class="text-gray-600 mt-4">Yes, upon successful completion of any course, you'll receive a digital certificate that you can download and share on professional networks.</p>
                </details>

                <!-- FAQ Item 4 -->
                <details class="bg-white rounded-lg p-6 cursor-pointer hover:shadow-md transition">
                    <summary class="font-semibold text-slate-900 flex justify-between items-center">
                        <span>What is your refund policy?</span>
                        <span>➕</span>
                    </summary>
                    <p class="text-gray-600 mt-4">We offer a 14-day money-back guarantee if you haven't completed more than 25% of the course material. Simply contact our support team to request a refund.</p>
                </details>

            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

    <!-- Scripts -->
    <script src="js/main.js"></script>

</body>

</html>
