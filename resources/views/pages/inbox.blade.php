<?php
// This is a combined PHP template for both the inbox list and chat detail views
// You can connect this to your database to fetch real emails and messages

// Determine which view to show based on URL parameters
$view = isset($_GET['view']) && $_GET['view'] === 'chat' ? 'chat' : 'inbox';
$contactId = isset($_GET['contact_id']) ? intval($_GET['contact_id']) : null;

// Sample email data (replace with your database query)
$emails = [
    [
        'id' => 1,
        'sender' => 'Ais',
        'subject' => 'Hallo, namaste',
        'time' => '8:38 AM'
    ],
    [
        'id' => 2,
        'sender' => 'Naylah',
        'subject' => 'Hallo, hidup itu beban',
        'time' => '8:38 AM'
    ],
];

// If in chat view, get the contact details
$contact = null;
$messages = [];

if ($view === 'chat' && $contactId) {
    // In a real app, you would fetch this from the database based on $contactId
    foreach ($emails as $email) {
        if ($email['id'] === $contactId) {
            $contact = [
                'id' => $email['id'],
                'name' => $email['sender'],
                'label' => isset($email['label']) ? $email['label'] : '',
                'avatar' => 'image/ais.png'
            ];
            break;
        }
    }
    
    // Sample messages for this contact (replace with your database query)
    if ($contact && $contact['name'] === 'Minerva Barrett') {
        $messages = [
            [
                'sender' => 'contact',
                'content' => 'namaste',
                'time' => '5:30 pm'
            ],
            [
                'sender' => 'me',
                'content' => 'hallo',
                'time' => '5:34 pm'
            ],
        ];
    } else {
        // Default messages for other contacts
        $messages = [
            [
                'sender' => 'contact',
                'content' => 'Hello!',
                'time' => '10:30 am'
            ],
            [
                'sender' => 'me',
                'content' => 'pie kabare',
                'time' => '10:35 am'
            ],
            [
                'sender' => 'contact',
                'content' => 'sehat',
                'time' => '10:38 am'
            ],
        ];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-TechnoCart - <?= $view === 'chat' ? 'Chat' : 'Inbox' ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
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
                                <a href="dashboard" class="lex items-center p-3 text-gray-700 hover:bg-[#4880FF] rounded-lg">
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
                                <a href="#" class="flex items-center p-3 text-white bg-[#4880FF] rounded-lg">
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
            <?php if ($view === 'inbox'): ?>
            <!-- Inbox Content -->
            <div class="flex-1 p-6 bg-white">
                <h1 class="text-xl font-bold mb-6">Inbox</h1>
                
                <!-- Search Bar -->
                <div class="mb-4 relative flex justify-between">
                    <div class="relative flex-1">
                        <input type="text" placeholder="Search mail" class="w-full pl-10 pr-4 py-2 bg-gray-100 rounded-lg">
                        <div class="absolute left-3 top-2.5 text-gray-400">
                            <i class="fas fa-search"></i>
                        </div>
                    </div>
                    <div class="flex space-x-2 ml-2">
                        <button class="p-2 rounded-lg bg-gray-100 text-gray-600 hover:bg-gray-200">
                            <i class="fas fa-print"></i>
                        </button>
                        <button class="p-2 rounded-lg bg-gray-100 text-gray-600 hover:bg-gray-200">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>
                
                <!-- Email List -->
                <div class="border border-gray-200 rounded-lg overflow-hidden">
                    <?php foreach($emails as $email): ?>
                    <a href="?view=chat&contact_id=<?= $email['id'] ?>" class="flex items-center px-4 py-3 border-b border-gray-200 hover:bg-gray-50 cursor-pointer block">
                        <div class="w-48">
                            <p class="font-medium text-gray-800"><?= htmlspecialchars($email['sender']) ?></p>
                        </div>
                        <div class="flex-1">
                            <p class="text-gray-800"><?= htmlspecialchars($email['subject']) ?></p>
                        </div>
                        <div class="w-24 text-right">
                            <p class="text-gray-600 text-sm"><?= htmlspecialchars($email['time']) ?></p>
                        </div>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>
            
            <?php elseif ($view === 'chat' && $contact): ?>
            <!-- Chat Content -->
            <div class="flex-1 bg-white p-6">
                <h1 class="text-xl font-bold mb-6">Inbox</h1>

                <!-- Chat Container -->
                <div class="border border-gray-200 rounded-lg bg-white overflow-hidden flex flex-col h-5/6">
                    <!-- Chat Header -->
                    <div class="border-b border-gray-200 p-4 flex items-center justify-between bg-white">
                        <div class="flex items-center">
                            <a href="?view=inbox" class="text-gray-600 mr-4">
                                <i class="fas fa-arrow-left"></i>
                            </a>
                            <div class="flex items-center">
                                <h2 class="font-medium text-gray-800"><?= htmlspecialchars($contact['name']) ?></h2>
                                <?php if(!empty($contact['label'])): ?>
                                <span class="ml-2 px-2 py-1 bg-pink-100 text-pink-500 text-xs rounded-md"><?= htmlspecialchars($contact['label']) ?></span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="flex space-x-2">
                            <button class="p-2 text-gray-600 hover:text-gray-800">
                                <i class="fas fa-print"></i>
                            </button>
                            <button class="p-2 text-gray-600 hover:text-gray-800">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Messages Area -->
                    <div class="flex-1 p-4 overflow-y-auto bg-gray-50" id="messagesContainer">
                        <?php foreach($messages as $message): ?>
                            <?php if($message['sender'] == 'contact'): ?>
                                <!-- Contact Message -->
                                <div class="flex mb-4">
                                    <div class="w-8 h-8 rounded-full bg-gray-300 flex-shrink-0 overflow-hidden">
                                        <img src="<?= htmlspecialchars($contact['avatar']) ?>" alt="<?= htmlspecialchars($contact['name']) ?>" class="w-full h-full object-cover">
                                    </div>
                                    <div class="ml-3 max-w-3xl">
                                        <div class="bg-white p-3 rounded-lg shadow-sm">
                                            <p class="text-gray-800"><?= htmlspecialchars($message['content']) ?></p>
                                        </div>
                                        <div class="text-xs text-gray-500 mt-1 flex items-center justify-between">
                                            <span><?= htmlspecialchars($message['time']) ?></span>
                                            <button class="text-gray-400 hover:text-gray-600">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            <?php else: ?>
                                <!-- My Message -->
                                <div class="flex mb-4 justify-end">
                                    <div class="mr-3 max-w-3xl">
                                        <div class="bg-blue-500 p-3 rounded-lg shadow-sm">
                                            <p class="text-white"><?= htmlspecialchars($message['content']) ?></p>
                                        </div>
                                        <div class="text-xs text-gray-500 mt-1 flex items-center justify-between">
                                            <span><?= htmlspecialchars($message['time']) ?></span>
                                            <button class="text-gray-400 hover:text-gray-600">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>

                    <!-- Message Input -->
                    <div class="p-4 border-t border-gray-200 bg-white">
                        <div class="flex items-center">
                            <button class="text-gray-500 mr-2">
                                <i class="fas fa-microphone"></i>
                            </button>
                            <input type="text" placeholder="Write message..." class="flex-1 py-2 px-3 rounded-lg bg-gray-100 border-none focus:ring-2 focus:ring-blue-500 focus:outline-none" id="messageInput">
                            <div class="flex ml-2">
                                <button class="text-gray-500 mx-1">
                                    <i class="fas fa-paperclip"></i>
                                </button>
                                <button class="text-gray-500 mx-1">
                                    <i class="far fa-image"></i>
                                </button>
                                <button class="bg-blue-500 text-white px-4 py-2 rounded-lg ml-2 flex items-center" id="sendButton">
                                    Send
                                    <i class="fas fa-paper-plane ml-2"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php else: ?>
            <!-- Fallback if contact not found -->
            <div class="flex-1 p-6 bg-white">
                <h1 class="text-xl font-bold mb-6">Contact not found</h1>
                <p>The contact you are looking for does not exist. <a href="?view=inbox" class="text-blue-500 hover:underline">Return to inbox</a>.</p>
            </div>
            <?php endif; ?>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Mobile menu toggle
            const menuToggle = document.querySelector('.lg\\:hidden');
            const sidebar = document.querySelector('aside');
            
            if(menuToggle) {
                menuToggle.addEventListener('click', function() {
                    sidebar.classList.toggle('-translate-x-full');
                });
            }
            
            // Scroll to bottom of messages on load
            const messagesContainer = document.getElementById('messagesContainer');
            if(messagesContainer) {
                messagesContainer.scrollTop = messagesContainer.scrollHeight;
            }
            
            // Handle sending new messages (for demo purposes)
            const messageInput = document.getElementById('messageInput');
            const sendButton = document.getElementById('sendButton');
            
            if(messageInput && sendButton && messagesContainer) {
                sendButton.addEventListener('click', function() {
                    const messageText = messageInput.value.trim();
                    if(messageText) {
                        // Create new message element
                        const now = new Date();
                        const timeString = now.getHours() + ':' + (now.getMinutes() < 10 ? '0' : '') + now.getMinutes();
                        
                        // Create message HTML
                        const messageHTML = `
                            <div class="flex mb-4 justify-end">
                                <div class="mr-3 max-w-3xl">
                                    <div class="bg-blue-500 p-3 rounded-lg shadow-sm">
                                        <p class="text-white">${messageText}</p>
                                    </div>
                                    <div class="text-xs text-gray-500 mt-1 flex items-center justify-between">
                                        <span>${timeString}</span>
                                        <button class="text-gray-400 hover:text-gray-600">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        `;
                        
                        // Append to messages container
                        messagesContainer.insertAdjacentHTML('beforeend', messageHTML);
                        
                        // Clear input and scroll to bottom
                        messageInput.value = '';
                        messagesContainer.scrollTop = messagesContainer.scrollHeight;
                    }
                });
                
                // Also send on Enter key press
                messageInput.addEventListener('keypress', function(e) {
                    if(e.key === 'Enter') {
                        sendButton.click();
                    }
                });
            }
        });
    </script>
    
</body>
</html>