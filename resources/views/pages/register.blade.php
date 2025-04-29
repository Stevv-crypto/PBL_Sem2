<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-TechnoCart Sign Up</title>
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
            <h2 class="text-xl text-center font-semibold mb-4">Create an account</h2>
            <p class="text-sm text-center mb-4">Enter your details below</p>
            <form class="space-y-4">
                <input type="text" placeholder="Username" class="w-full py-2 text-gray-500 bg-transparent border-0 border-b border-gray-500">
                <input type="email" placeholder="Email" class="w-full py-2 text-gray-500 bg-transparent border-0 border-b border-gray-500">
                <input type="password" placeholder="Password" class="w-full py-2 text-gray-500 bg-transparent border-0 border-b border-gray-500">
                <button type="submit" class="w-full bg-[#70B9EA] text-white py-2 rounded-md hover:bg-blue-600">Create Account</button>
            </form>
            <p class="mt-4 text-sm text-center">Already have account? <a href="login" class="text-blue-600 underline">Login</a></p>
        </div>
    </main>

    @include('components.footer')
</body>
</html>