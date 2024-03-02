<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Travel Blog</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold mb-4">Contact Us</h1>
        <p class="text-lg mb-4">
            Have a question, feedback, or just want to say hello? We'd love to hear from you! Please use the contact form below to get in touch with us.
        </p>
        <form class="max-w-lg">
            <div class="mb-4">
                <label for="name" class="block text-lg font-semibold mb-2">Name</label>
                <input type="text" id="name" name="name" class="w-full px-4 py-2 rounded-lg border-gray-300 focus:border-blue-500 focus:outline-none" placeholder="Enter your name">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-lg font-semibold mb-2">Email</label>
                <input type="email" id="email" name="email" class="w-full px-4 py-2 rounded-lg border-gray-300 focus:border-blue-500 focus:outline-none" placeholder="Enter your email">
            </div>
            <div class="mb-4">
                <label for="message" class="block text-lg font-semibold mb-2">Message</label>
                <textarea id="message" name="message" rows="5" class="w-full px-4 py-2 rounded-lg border-gray-300 focus:border-blue-500 focus:outline-none" placeholder="Enter your message"></textarea>
            </div>
            <button type="submit" class="bg-blue-500 text-white py-2 px-6 rounded-lg hover:bg-blue-600 transition duration-300">Send Message</button>
        </form>
    </div>
</body>
</html>
