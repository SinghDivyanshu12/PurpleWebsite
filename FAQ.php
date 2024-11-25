<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ - Purple Website</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            color: #333;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #6c63ff;
            margin-bottom: 20px;
        }

        .faq-item {
            margin-bottom: 15px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
        }

        .faq-item:last-child {
            border-bottom: none;
        }

        .question {
            font-weight: bold;
            cursor: pointer;
            position: relative;
            margin: 0;
        }

        .answer {
            display: none;
            margin-top: 10px;
            color: #555;
        }

        .question:hover {
            color: #6c63ff;
        }

        .toggle-icon {
            font-size: 18px;
            font-weight: bold;
            position: absolute;
            right: 0;
            top: 0;
            transform: rotate(90deg);
            transition: transform 0.3s;
        }

        .expanded .toggle-icon {
            transform: rotate(-90deg);
        }

        .expanded .answer {
            display: block;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const questions = document.querySelectorAll('.faq-item');
            questions.forEach(item => {
                item.addEventListener('click', () => {
                    item.classList.toggle('expanded');
                });
            });
        });
    </script>
</head>
<body>
    <div class="container">
        <h1>Frequently Asked Questions</h1>
        <div class="faq-item">
            <p class="question">What is Purple Website? <span class="toggle-icon">+</span></p>
            <p class="answer">Purple Website is a platform offering a variety of services and products designed to simplify your life.</p>
        </div>
        <div class="faq-item">
            <p class="question">How can I contact support? <span class="toggle-icon">+</span></p>
            <p class="answer">You can reach our support team via the contact page or email us at support@purplewebsite.com.</p>
        </div>
        <div class="faq-item">
            <p class="question">What payment methods do you accept? <span class="toggle-icon">+</span></p>
            <p class="answer">We accept major credit cards, PayPal, and other payment options depending on your location.</p>
        </div>
        <div class="faq-item">
            <p class="question">Can I cancel my order? <span class="toggle-icon">+</span></p>
            <p class="answer">Yes, orders can be canceled within 24 hours of placement. Visit the order page for cancellation details.</p>
        </div>
        <div class="faq-item">
            <p class="question">Do you offer international shipping? <span class="toggle-icon">+</span></p>
            <p class="answer">Yes, we ship internationally. Shipping costs and delivery times may vary by location.</p>
        </div>
    </div>
</body>
</html>
