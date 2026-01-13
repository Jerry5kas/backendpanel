<x-layouts.app>
    @section('page_title', 'Dashboard')

    <!-- Page Wrapper -->
    <div class="space-y-6">

        <!-- ===== STATS CARDS ===== -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

            <!-- Card -->
            <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-500">Total Users</p>
                        <h2 class="text-3xl font-bold">1,245</h2>
                    </div>
                    <i class="fas fa-users text-3xl text-blue-500"></i>
                </div>
            </div>

            <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-500">Revenue</p>
                        <h2 class="text-3xl font-bold">₹2.8L</h2>
                    </div>
                    <i class="fas fa-wallet text-3xl text-green-500"></i>
                </div>
            </div>

            <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-500">Orders</p>
                        <h2 class="text-3xl font-bold">320</h2>
                    </div>
                    <i class="fas fa-shopping-cart text-3xl text-purple-500"></i>
                </div>
            </div>

            <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-500">Pending</p>
                        <h2 class="text-3xl font-bold">18</h2>
                    </div>
                    <i class="fas fa-clock text-3xl text-red-500"></i>
                </div>
            </div>
        </div>

        <!-- ===== CHARTS SECTION ===== -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

            <!-- Sales Chart -->
            <div class="lg:col-span-2 bg-white dark:bg-gray-800 p-6 rounded-xl shadow">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="font-semibold text-lg">Sales Overview</h3>
                    <select class="text-sm rounded border dark:bg-gray-700">
                        <option>This Month</option>
                        <option>Last Month</option>
                    </select>
                </div>

                <!-- Chart Placeholder -->
                <div class="h-64 flex items-center justify-center text-gray-400">
                    Chart.js / ApexCharts Here
                </div>
            </div>

            <!-- Activity -->
            <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow">
                <h3 class="font-semibold text-lg mb-4">Recent Activity</h3>

                <ul class="space-y-4 text-sm">
                    <li class="flex gap-3">
                        <span class="w-2 h-2 mt-2 rounded-full bg-green-500"></span>
                        New user registered
                    </li>
                    <li class="flex gap-3">
                        <span class="w-2 h-2 mt-2 rounded-full bg-blue-500"></span>
                        Order #1021 completed
                    </li>
                    <li class="flex gap-3">
                        <span class="w-2 h-2 mt-2 rounded-full bg-red-500"></span>
                        Payment failed
                    </li>
                </ul>
            </div>
        </div>

        <!-- ===== TABLE ===== -->
        <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow">

            <div class="flex items-center justify-between mb-4">
                <h3 class="font-semibold text-lg">Recent Orders</h3>
                <button class="text-sm text-blue-600 hover:underline">
                    View All
                </button>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead>
                    <tr class="border-b text-gray-500">
                        <th class="text-left py-2">Order ID</th>
                        <th class="text-left py-2">Customer</th>
                        <th class="text-left py-2">Status</th>
                        <th class="text-left py-2">Amount</th>
                    </tr>
                    </thead>
                    <tbody class="divide-y">
                    <tr>
                        <td>#1024</td>
                        <td>Rahul</td>
                        <td>
                                <span class="px-2 py-1 text-xs rounded bg-green-100 text-green-700">
                                    Completed
                                </span>
                        </td>
                        <td>₹1,250</td>
                    </tr>
                    <tr>
                        <td>#1023</td>
                        <td>Anita</td>
                        <td>
                                <span class="px-2 py-1 text-xs rounded bg-yellow-100 text-yellow-700">
                                    Pending
                                </span>
                        </td>
                        <td>₹980</td>
                    </tr>
                    <tr>
                        <td>#1022</td>
                        <td>Kumar</td>
                        <td>
                                <span class="px-2 py-1 text-xs rounded bg-red-100 text-red-700">
                                    Failed
                                </span>
                        </td>
                        <td>₹640</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</x-layouts.app>
