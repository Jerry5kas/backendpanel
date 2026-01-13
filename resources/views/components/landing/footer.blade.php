<footer class="bg-gray-900 text-gray-300">

    <div class="max-w-7xl mx-auto px-6 py-12 grid grid-cols-1 md:grid-cols-3 gap-8">

        <!-- Logo & About -->
        <div>
            <div class="text-2xl font-bold text-white flex items-center gap-2">
                <i class="fas fa-leaf text-green-500"></i>
                {{ config('app.name') }}
            </div>

            <p class="mt-4 text-sm text-gray-400">
                Building reliable digital solutions for modern businesses.
            </p>
        </div>

        <!-- Contact -->
        <div>
            <h4 class="text-white font-semibold mb-4">Contact</h4>
            <ul class="space-y-2 text-sm">
                <li>Email: support@example.com</li>
                <li>Phone: +91 98765 43210</li>
                <li>Place: Bangalore, India</li>
            </ul>
        </div>

        <!-- Social -->
        <div>
            <h4 class="text-white font-semibold mb-4">Follow Us</h4>
            <div class="flex gap-4 text-lg">
                <a href="#" class="hover:text-white"><i class="fab fa-facebook"></i></a>
                <a href="#" class="hover:text-white"><i class="fab fa-twitter"></i></a>
                <a href="#" class="hover:text-white"><i class="fab fa-instagram"></i></a>
                <a href="#" class="hover:text-white"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>

    </div>

    <!-- Copyright -->
    <div class="border-t border-gray-800 py-4 text-center text-sm text-gray-500">
        © {{ date('Y') }} {{ config('app.name') }}.
        All rights reserved.
    </div>

</footer>
