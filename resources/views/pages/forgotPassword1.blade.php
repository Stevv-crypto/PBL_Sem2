<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-TechnoCart Forgot Password</title>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">
    @include('components.header')

    <main class="container mx-auto px-6 py-10 grid md:grid-cols-2 items-center">
        <div class="flex justify-center">
            <img src="/image/produk.jpg" alt="Electronics" class="w-full max-w-xl">
        </div>
        <div class="bg-[#ACC8DD] p-8 rounded-xl shadow-md ml-60">
            <h2 class="text-xl text-center font-semibold mb-4">Forgot Password</h2>
            <p class="text-sm text-center mb-4">Enter a new password</p>
            <form class="space-y-4">
                <input type="email" placeholder="Email" class="w-full py-2 text-gray-500 bg-transparent border-0 border-b border-gray-500">
                <button class="bg-[#70B9EA] text-white px-6 py-2 rounded-md hover:bg-blue-600">Continue</button>
            </form>
        </div>
    </main>

    @include('components.footer')
</body>
</html>