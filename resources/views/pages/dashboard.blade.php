<?php
// Simulasi data untuk diagram
$salesData = [
    'Jan' => 5000,
    'Feb' => 6200,
    'Mar' => 7800,
    'Apr' => 8500,
    'May' => 9200,
    'Jun' => 7600,
    'Jul' => 8900,
    'Aug' => 9100,
    'Sep' => 9500,
    'Oct' => 8800,
    'Nov' => 9800,
    'Dec' => 10500,
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-TechnoCart - Dashboard</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Chart.js untuk diagram batang -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
    <!-- Font Awesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="w-1/6 bg-[#b0cee3] shadow p-4 space-y-2">
            <div class="flex items-center mb-8">
                <h1 class="logo font-bold text-lg ml-6">E-TechnoCart</h1>
            </div>
            
            <nav>
                <ul class="space-y-2">
                    <li>
                        <a href="#" class="flex items-center p-3 text-white bg-[#4880FF] rounded-lg">
                            <i class="fas fa-tachometer-alt mr-3"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-3 text-gray-700 hover:bg-[#4880FF] rounded-lg">
                            <i class="fas fa-box mr-3"></i>
                            <span>Products</span>
                        </a>
                    </li>
                    <li>
                        <a href="inbox" class="flex items-center p-3 text-gray-700 hover:bg-[#4880FF] rounded-lg">
                            <i class="fas fa-inbox mr-3"></i>
                            <span>Inbox</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-3 text-gray-700 hover:bg-[#4880FF] rounded-lg">
                            <i class="fas fa-list mr-3"></i>
                            <span>Order Lists</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-3 text-gray-700 hover:bg-[#4880FF] rounded-lg">
                            <i class="fas fa-cubes mr-3"></i>
                            <span>Product Stock</span>
                        </a>
                    </li>
                </ul>

                <div class="mt-10">
                    <h3 class="text-xs text-gray-500 font-semibold uppercase tracking-wider mb-4">MANAGEMENT</h3>
                    <ul class="space-y-2">
                        <li>
                            <a href="#" class="flex items-center p-3 text-gray-700 hover:bg-[#4880FF] rounded-lg">
                                <i class="fas fa-chart-line mr-3"></i>
                                <span>Sales Report</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center p-3 text-gray-700 hover:bg-[#4880FF] rounded-lg">
                                <i class="fas fa-users mr-3"></i>
                                <span>Team</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center p-3 text-gray-700 hover:bg-[#4880FF] rounded-lg">
                                <i class="fas fa-cog mr-3"></i>
                                <span>Settings</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center p-3 text-gray-700 hover:bg-[#4880FF] rounded-lg">
                                <i class="fas fa-sign-out-alt mr-3"></i>
                                <span>Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Navbar -->
            <header class="bg-[#b0cee3] shadow p-4 space-y-2">
                <div class="flex items-center justify-between px-6 py-3">
                    <div class="flex items-center">
                        <button class="text-gray-500 focus:outline-none">
                            <i class="fas fa-bars"></i>
                        </button>
                        <div class="relative mx-4 lg:mx-0">
                            <span class="absolute inset-y-0 left-0 pl-3 flex items-center">
                                <i class="fas fa-search text-gray-500"></i>
                            </span>
                            <input class="w-64 rounded-full pl-10 pr-4 py-2 focus:outline-none focus:shadow-outline bg-white" type="text" placeholder="Search">
                        </div>
                    </div>
                    
                    <div class="flex items-center">
                        <div class="relative">
                            <button class="flex mx-4 text-gray-700 focus:outline-none">
                                <i class="fas fa-bell text-xl"></i>
                                <span class="absolute top-0 right-0 h-5 w-5 bg-red-500 text-white rounded-full flex items-center justify-center text-xs">2</span>
                            </button>
                        </div>
                        
                        <div class="relative">
                            <button class="flex items-center focus:outline-none">
                                <div class="h-8 w-8 overflow-hidden rounded-full bg-gray-300">
                                    <img class="h-full w-full object-cover" src="https://ui-avatars.com/api/?name=Admin" alt="Avatar">
                                </div>
                                <span class="ml-2 text-sm font-medium text-gray-700">Admin</span>
                                <svg class="h-5 w-5 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            
                            <div class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-10 hidden" id="dropdown-menu">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Manage Account</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Log out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Content -->
            <main class="flex-1 overflow-y-auto p-6">
                <h2 class="text-2xl font-semibold text-gray-800 mb-6">Dashboard</h2>
                
                <!-- Stat Cards -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                    <!-- User Card -->
                    <div class="bg-blue-200 rounded-lg shadow-sm p-6">
                        <div class="flex justify-between">
                            <div>
                                <p class="text-sm text-gray-600">Total User</p>
                                <h3 class="text-2xl font-bold text-gray-800">40,689</h3>
                            </div>
                            <div class="p-3 bg-blue-300 rounded-lg">
                                <i class="fas fa-users text-blue-600"></i>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Order Card -->
                    <div class="bg-blue-200 rounded-lg shadow-sm p-6">
                        <div class="flex justify-between">
                            <div>
                                <p class="text-sm text-gray-600">Total Order</p>
                                <h3 class="text-2xl font-bold text-gray-800">10293</h3>
                            </div>
                            <div class="p-3 bg-yellow-200 rounded-lg">
                                <i class="fas fa-shopping-bag text-yellow-600"></i>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Sales Card -->
                    <div class="bg-blue-200 rounded-lg shadow-sm p-6">
                        <div class="flex justify-between">
                            <div>
                                <p class="text-sm text-gray-600">Total Sales</p>
                                <h3 class="text-2xl font-bold text-gray-800">$89,000</h3>
                            </div>
                            <div class="p-3 bg-green-200 rounded-lg">
                                <i class="fas fa-dollar-sign text-green-600"></i>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Sales Chart -->
                <div class="bg-white p-6 rounded-lg shadow-sm mb-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Sales Statistics</h3>
                    <div class="h-80">
                        <canvas id="salesChart"></canvas>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script>
        // Toggle dropdown menu
        document.addEventListener('DOMContentLoaded', function() {
            const dropdownButton = document.querySelector('button.flex.items-center');
            const dropdownMenu = document.getElementById('dropdown-menu');
            
            dropdownButton.addEventListener('click', function() {
                dropdownMenu.classList.toggle('hidden');
            });
            
            // Close dropdown when clicking outside
            window.addEventListener('click', function(event) {
                if (!dropdownButton.contains(event.target)) {
                    if (!dropdownMenu.classList.contains('hidden')) {
                        dropdownMenu.classList.add('hidden');
                    }
                }
            });
            
            // Sales Chart
            const salesChartCanvas = document.getElementById('salesChart').getContext('2d');
            
            const salesChart = new Chart(salesChartCanvas, {
                type: 'bar',
                data: {
                    labels: <?php echo json_encode(array_keys($salesData)); ?>,
                    datasets: [{
                        label: 'Sales Revenue ($)',
                        data: <?php echo json_encode(array_values($salesData)); ?>,
                        backgroundColor: 'rgba(59, 130, 246, 0.6)',
                        borderColor: 'rgba(59, 130, 246, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                display: true,
                                color: 'rgba(200, 200, 200, 0.2)'
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            display: false
                        }
                    }
                }
            });
        });
    </script>
</body>
</html>