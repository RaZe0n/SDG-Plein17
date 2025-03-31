<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Success</title>
    <style>
        @import url('https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css');
    </style>
</head>

<body class="bg-gray-100">
    <div class="max-w-lg mx-auto bg-white shadow-md rounded-lg overflow-hidden mt-10">
        <div class="bg-green-500 text-white text-center py-4">
            <h1 class="text-xl font-bold">Success!</h1>
        </div>
        <div class="p-6">
            <p class="text-gray-700 text-lg">
                Your request has been successfully processed. 
            We have received your request, {{ $user->firstname }}.
            </p>
            <p class="text-gray-600 mt-4">
                Thank you for reaching out to us. If you have any further questions or need assistance, feel free to contact our support team.
            </p>
            <div class="mt-6 text-center">
                <a href="#" class="inline-block px-6 py-2 bg-green-500 text-white font-medium text-sm leading-tight uppercase rounded shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out">
                    View Details
                </a>
            </div>
        </div>
        <div class="bg-gray-100 text-center py-4">
            <p class="text-sm text-gray-600">
                &copy; 2024 Your Company. All rights reserved.
            </p>
        </div>
    </div>
</body>

</html>