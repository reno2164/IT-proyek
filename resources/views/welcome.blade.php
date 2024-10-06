<html>

<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body class="bg-white">
    <div class="flex">
        <!-- Sidebar -->
        <div class="w-1/4 bg-gray-300 h-screen">
            <div class="p-4">
                <h1 class="text-2xl font-bold">Jamur Tiram</h1>
                <p class="text-lg">Putra Pandawa</p>
            </div>
            <div class="mt-8">
                <a href="#" class="flex items-center p-4 bg-blue-400 text-white">
                    <i class="fas fa-home mr-2"></i> Dashboard
                </a>
                <a href="{{route('produks.read')}}" class="flex items-center p-4 text-black">
                    <i class="fas fa-shopping-cart mr-2"></i> Produk
                </a>
                <a href="#" class="flex items-center p-4 text-black">
                    <i class="fas fa-users mr-2"></i> Pegawai

                </a>
                <a href="#" class="flex items-center p-4 text-black">
                    <i class="fas fa-chart-bar mr-2"></i> Data Penjualan
                </a>
            </div>
        </div>
        <!-- Main Content -->
        <div class="w-3/4">
            <div class="flex justify-between items-center p-4 border-b border-black">
                <div></div>
                <div class="flex space-x-4">
                    <i class="fas fa-envelope text-2xl"></i>
                    <i class="fas fa-bell text-2xl"></i>
                    <i class="fas fa-user-circle text-2xl"></i>
                </div>
            </div>
            <div class="p-4">
                <p class="text-gray-300">Frame</p>
            </div>
        </div>
    </div>
</body>

</html>