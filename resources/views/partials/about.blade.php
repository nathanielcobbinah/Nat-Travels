<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Travel Blog</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold mb-4">About Us</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="md:col-span-1">
                <img src="https://via.placeholder.com/400" alt="Travel Blog" class="rounded-lg">
            </div>
            <div class="md:col-span-1">
                <p class="text-lg mb-4">
                    Welcome to our travel blog! We are passionate travelers who love exploring new destinations, experiencing different cultures, and sharing our adventures with the world.
                </p>
                <p class="text-lg mb-4">
                    Our goal is to inspire and empower fellow travelers to embark on their own journeys and create unforgettable memories. Whether you're a seasoned globetrotter or a first-time explorer, our blog is here to provide you with valuable insights, tips, and recommendations for your next adventure.
                </p>
                <p class="text-lg mb-4">
                    At Travel Blog, we believe that travel has the power to broaden horizons, foster connections, and promote understanding across borders. Join us as we uncover hidden gems, embark on epic road trips, and dive into the vibrant tapestry of cultures that make our world so diverse and fascinating.
                </p>
            </div>
        </div>
        <div class="mt-8">
            <h2 class="text-2xl font-bold mb-4">Contact Us</h2>
            <p class="text-lg mb-4">
                Have a question, feedback, or just want to say hello? We'd love to hear from you! Feel free to reach out to us using the contact form below.
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
        <div class="mt-8">
            <h2 class="text-2xl font-bold mb-4">Follow Us</h2>
            <div class="flex space-x-4">
                <!-- Add your social media icons here -->
                <a href="#" class="text-blue-500 hover:text-blue-600"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-blue-500 hover:text-blue-600"><i class="fab fa-facebook"></i></a>
                <a href="#" class="text-blue-500 hover:text-blue-600"><i class="fab fa-instagram"></i></a>
                <a href="#" class="text-blue-500 hover:text-blue-600"><i class="fab fa-pinterest"></i></a>
            </div>
        </div>
    </div>
</body>
</html>
