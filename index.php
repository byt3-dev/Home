<?php
// Simple contact form logic
$message_sent = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    // Add your mail() logic here or save to a database
    $message_sent = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Byte Developing | Modern Digital Solutions</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    
    <!-- Inter Font -->
    <link href="https://googleapis.com" rel="stylesheet">
    <style>
        :root {
            --bg: #0a0a0c;
            --accent: #3b82f6;
            --glass: rgba(255, 255, 255, 0.03);
            --border: rgba(255, 255, 255, 0.1);
            --text: #f3f4f6;
        }
        body {
            background-color: var(--bg);
            color: var(--text);
            font-family: 'Inter', sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
        }
        .container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 2rem;
        }
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.5rem 0;
        }
        .logo { font-weight: 700; font-size: 1.5rem; letter-spacing: -1px; }
        .logo span { color: var(--accent); }
        
        nav a {
            color: var(--text);
            text-decoration: none;
            margin-left: 20px;
            opacity: 0.8;
            transition: opacity 0.3s;
        }
        nav a:hover { opacity: 1; color: var(--accent); }

        .hero {
            padding: 4rem 0;
            text-align: center;
        }
        .hero h1 { font-size: 3.5rem; margin-bottom: 1rem; }
        .hero p { font-size: 1.25rem; color: #9ca3af; max-width: 600px; margin: 0 auto; }

        .bento-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-auto-rows: 200px;
            gap: 1.5rem;
            margin-top: 3rem;
        }
        .bento-item {
            background: var(--glass);
            border: 1px solid var(--border);
            border-radius: 24px;
            padding: 1.5rem;
            transition: transform 0.3s ease;
        }
        .bento-item:hover { transform: translateY(-5px); border-color: var(--accent); }
        .wide { grid-column: span 2; }
        .tall { grid-row: span 2; }

        .contact-box {
            margin-top: 4rem;
            background: var(--accent);
            color: white;
            padding: 3rem;
            border-radius: 32px;
            text-align: center;
        }
        input {
            padding: 1rem;
            border-radius: 12px;
            border: none;
            width: 70%;
            max-width: 300px;
        }
        button {
            padding: 1rem 2rem;
            border-radius: 12px;
            border: none;
            background: #fff;
            color: var(--accent);
            font-weight: 700;
            cursor: pointer;
        }
        .github-link {
            display: inline-block;
            margin-top: 10px;
            color: #fff;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <div class="logo">Byte<span>Developing</span></div>
            <nav>
                <li><img src="favicon.ico"></li>
            </nav>
        </header>




        <footer style="text-align: center; padding: 4rem 0; opacity: 0.5;">
            &copy; <?php echo date("Y"); ?> Byte Developing.<br>
            Follow our progress on <a href="https://github.com/byt3-dev" target="_blank" style="color: var(--accent);">GitHub</a>.
        </footer>
    </div>
</body>
</html>
